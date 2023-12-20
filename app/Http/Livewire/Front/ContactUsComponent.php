<?php

namespace App\Http\Livewire\Front;

use App\Models\Contact;
use Livewire\Component;

class ContactUsComponent extends Component
{
    public $name ,$email ,$phone ,$message;
    protected $rules = [
        'name'      => 'required|min:5',
        'email'     => 'required|email',
       
        'phone'     => 'nullable|string',
        'message'   => 'nullable|string'
    ];
    public function envoyer()
    {
        $this->validate();
        
        $donnees = array(
            "name"      => $this->name,
            "email"     => $this->email,
            "phone"     => $this->phone,
            "message"   => $this->message
        );
        sendEmailContact($donnees);
        setupFlash("Merci de nous avoir contacté  !", "Notre équipe va prendre en charge votre message et vous repondra dans les plus brefs délais", 'succes');

        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.front.contact-us-component');
    }
}
