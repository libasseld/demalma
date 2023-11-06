<?php

namespace App\Http\Livewire\Admin;

use App\Models\Demande;
use Livewire\Component;
use Livewire\WithFileUploads;

class DetailDemandeUsagerComponent extends Component
{
    public $demande_id;
    public $new_note;
    public $demande, $current_agent_demande;
    public $files= [];
    public $doc_to_edit;
    use WithFileUploads;
    public function mount(){
        /* $demandes = Demande::all();
        foreach ($demandes as $key => $item) {
            foreach ($item->offre->documents as $key => $doc) {
                $demande_doc = new DemandeDocument();
                $demande_doc->name = $doc->libelle;
                $demande_doc->obligatoire = $doc->obligatoire;
                $demande_doc->demande_id = $item->id;
                $demande_doc->save();
            }
            
        } */
        $current_user_role = auth()->user()->role->code;
        $this->demande = Demande::with(['documents'])->where('id', $this->demande_id)->first();
        if(empty($this->demande)){
            abort(404);
        }
        //dd($this->demande->documents);
       
    }
    public function updatedFiles() {
       
       
        foreach ($this->files as $key => $file) {
            $file_path = $file->store('public/documents-clients');
            $file_name = str_replace('public/','',$file_path);
            //dd($file_name);
            //dd( $this->demande->documents[$key]->save());
            $this->demande->documents[$key]->doc_url = $file_name;
            $this->demande->documents[$key]->save();
        }
        //$this->files->store('documents');
        return redirect(request()->header('Referer'));

    }
    public function render()
    {
        return view('livewire.admin.detail-demande-usager-component');
    }
}
