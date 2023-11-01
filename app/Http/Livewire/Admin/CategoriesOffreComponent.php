<?php

namespace App\Http\Livewire\Admin;

use App\Models\CategorieOffre;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;


class CategoriesOffreComponent extends Component
{
    public $showform = false;
    public $edit_mode = false;
    public $categorie_offre;
    public $search;
    use WithPagination;

    protected function rules()
    {
        return [
            'categorie_offre.name' => 'string|required|unique:categorie_offres,name,'.$this->categorie_offre->id,
        ];
    }
    public function mount(){
        
        $this->categorie_offre = new CategorieOffre();
    }
    public function render()
    {
       
        return view('livewire.admin.categories-offre-component',
        ['items' => CategorieOffre::where(function($q){
            $q->where('name','LIKE', '%'.$this->search.'%');
       })
       ->orderByDesc('id')
        ->paginate(10)]
    );
    }
    public function edit($id)
    {
        $this->categorie_offre = CategorieOffre::find($id);
        if(!empty($this->categorie_offre)){
            $this->showform = true;
            $this->edit_mode = true;
        }
    }
    public function cancel()
    {
        $this->showform     = false;
        $this->edit_mode    = false;
        $this->categorie_offre       = null;
    }
    public function save(){
       $this->validate();
       $this->categorie_offre->slug = Str::slug($this->categorie_offre->name);

        $this->categorie_offre->save();
        
        if ($this->edit_mode == false) {
            
            notify()->success('Ajouté avec succès ⚡️', 'Le profil a été ajouté avec succès');

            //$this->sendEmail();

        }else{
            notify()->success('Modifié avec succès ⚡️', 'Les modifications ont étés enregistrès avec succès');

        }
        $this->cancel();
        
        return redirect()->route('categories-offre');

    }
}
