<?php

namespace App\Http\Livewire\Front;

use App\Models\CategorieOffre;
use App\Models\Demande;
use App\Models\Offre;
use App\Models\Pays;
use Livewire\Component;

class OffreDetailsComponent extends Component
{
    public $categorie_slug, $categorie;
    public $offre_slug, $offre;
    public $pays;
    public $prenom,$nom,$email,$telephone,$pays_id,$adresse_residence,$commune,$demarrage,$note ="";
    public $demarrage_demandes = ["Maintenant","Dans 1 ou 2 semaines","Dans 2 ou 3 semaines","Dans 2 ou 3 semaines","Dans 4 ou 5 Mois","Plustard"];
    protected function rules()
    {
        return [
            'prenom'                => 'string|required',
            'nom'                   => 'string|required',
            'email'                 => 'string|required',
            'telephone'             => 'string|required',
            'pays_id'               => 'integer|required',
            'adresse_residence'     => 'string|nullable',
            'commune'               => 'string|nullable',
            'demarrage'             => 'string|nullable',
            'note'                  => 'string',
        ];
    }
    public function mount()
    {
        $this->categorie    = CategorieOffre::where('slug', $this->categorie_slug)->first();
        $this->offre        = Offre::with('documents')->where('slug', $this->offre_slug)->first();
        if (empty($this->categorie) || empty($this->offre)) {
            abort(404);
        }
        $this->pays = Pays::all();

    }

    public function addDemande(){
        $this->validate();
        $demande = new Demande();
        $demande->offre_id              = $this->offre->id;
        $demande->prenom                = $this->prenom;
        $demande->nom                   = $this->nom;
        $demande->email                 = $this->email;
        $demande->telephone                 = $this->telephone;
        $demande->pays_id               = $this->pays_id;
        $demande->adresse_residence     = $this->adresse_residence;
        $demande->commune       = $this->commune;
        $demande->demarrage     = $this->demarrage;
        $demande->note                 = $this->note;
        $demande->save();
        //sendEmailContact($donnees);
        setupFlash("Merci de nous avoir contacté  !", "Notre équipe va prendre en charge votre message et vous repondra dans les plus brefs délais", 'succes');

        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.front.offre-details-component');
    }
}
