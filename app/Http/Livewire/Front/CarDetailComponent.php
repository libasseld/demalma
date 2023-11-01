<?php

namespace App\Http\Livewire\Front;

use App\Models\Civilite;
use App\Models\Reservation;
use App\Models\Vehicule;
use Livewire\Component;

class CarDetailComponent extends Component
{
    public $slug;
    public $vehicule;
    public $civilites;
    public $civilite ,$email ,$name ,$telephone ,$adresse ,$vehicule_id ,$debut ,$fin;
    public $photos = ["photo_face","photo_profil","photo_interieur","photo_arriere"];
    public $options = ['audio_input', 'bluetooth', 'usb', 'radio','gps','toit_ouvrant'];
    protected $rules = [
        'name'      => 'required|min:5',
        'email'     => 'required|email',
        'civilite'  => 'required|integer',
        'telephone' => 'nullable|string',
        'adresse'   => 'nullable|string',
        'debut'     => 'required|date',
        'fin'       => 'required|after:debut',
    ];
    public function mount()
    {
        $this->vehicule     = Vehicule::with('user')->where('slug', $this->slug)->first();
        $this->civilites    = Civilite::all();

       if(empty($this->vehicule)){
        return abort(404);
       }
    }
    public  function reserver(){
       
        $this->validate();
        $reservation                = new Reservation();
        $reservation->name          = $this->name;
        $reservation->email         = $this->email;
        $reservation->civilite      = $this->civilite;
        $reservation->telephone     = $this->telephone;
        $reservation->adresse       = $this->adresse;
        $reservation->debut         = $this->debut;
        $reservation->fin           = $this->fin;
        $reservation->vehicule_id   = $this->vehicule->id;
        $reservation->save();
        $email  = $this->email;
        $donnees = array(
            "name" => $this->name
        );
        sendEmailReservation($email, $donnees);
        setupFlash("Merci d'avoir réservé !", "Notre équipe va prendre en charge votre réservation et vous contactera dans les plus brefs délais", 'succes');

        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.front.car-detail-component');
    }
}
