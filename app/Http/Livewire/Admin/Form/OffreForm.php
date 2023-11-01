<?php

namespace App\Http\Livewire\Admin\Form;

use App\Models\Boite;
use App\Models\CategorieOffre;
use App\Models\Marque;
use App\Models\TypeLocation;
use App\Models\TypeOffre;
use App\Models\TypeCarburant;
use App\Models\Offre;
use App\Models\OffreDocument;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class OffreForm extends Component
{
    use WithFileUploads;

    public $slug;
    public $edit_mode = false;
    public $offre;
    public $categorie_offres;
    public $nom_document;
    public $document_obligatoire = 1;
   
    public $message; 
    public $documents = []; 
    public $face = null;
    public $image ;

    protected function rules()
    {
        return [
            'offre.designation'             => 'required|min:2',
            'offre.categorie_offre_id'      => 'required|integer',
            'offre.montant'                 => 'required|integer',
            'offre.description'             => 'required|string',
        ];
    }
    
    public function save(){
        if(!empty($this->image)){
            $this->validate([
                'image' => 'image|max:5024', // 1MB Max
            ]);
            $image_path = $this->image->store('public/offres-images');

            $this->offre->image_url =str_replace('public/', '', $image_path);

        }
        //dd($this->offre);
        $this->validate();
        if($this->edit_mode == false) { 
            $this->offre->created_by = Auth::user()->id;
        }
        $this->offre->slug = Str::slug($this->offre->designation);

        $this->offre->save();
        $this->offre->documents()->delete();
        foreach ($this->documents as $key => $item) {
            $offre_doc = new OffreDocument();
            $offre_doc->offre_id = $this->offre->id;
            $offre_doc->libelle = $item['libelle'];
            $offre_doc->obligatoire = $item['obligatoire'];
            $offre_doc->save();
        }
        if ($this->edit_mode == 0) {
            
            smilify('Ajouté avec succès', "Le véhicule a été ajouté avec succès");

            //$this->sendEmail();

        }else{
            smilify('Modifié avec succès', "Les modifications ont étés enregistrès avec succès");
        }
        return redirect()->route('offres');
        
    }
    public function addDocument()
    {
        $this->validate([
            'nom_document'              => 'required|min:2',
            'document_obligatoire'      => 'required|integer',
        ]);
        array_push($this->documents, [
            'libelle' => $this->nom_document,
            'obligatoire' => $this->document_obligatoire,
        ]);

    }
    public function removeDocument($key){
        unset($this->documents[$key]);
    }
    public function mount(){
        $this->offre = new Offre();
       
        if(!empty($this->slug)){
            $this->offre = Offre::where('slug',$this->slug)->first();
            if(empty($this->offre)){
                abort(404);
            }
            $this->documents = $this->offre->documents->toArray();
            $this->edit_mode = true;
        }
        $this->categorie_offres = CategorieOffre::orderBy('name')->get();
        
        
    }
    public function render()
    {
        return view('livewire.admin.form.offre-form');
    }
}
