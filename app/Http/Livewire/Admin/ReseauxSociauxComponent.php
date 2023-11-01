<?php

namespace App\Http\Livewire\Admin;

use App\Models\Reseausocial;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;


class ReseauxSociauxComponent extends Component
{
    public $showform = false;
    public $edit_mode = false;
    public $reseau_social;
    public $search;
    use WithPagination;

    protected function rules()
    {
        return [
            'reseau_social.name' => 'string|required|unique:reseausocials,name,'.$this->reseau_social->id,
            'reseau_social.icone' => 'string|required|unique:reseausocials,icone,'.$this->reseau_social->id,
            'reseau_social.url' => 'string|required|unique:reseausocials,url,'.$this->reseau_social->id,
        ];
    }
    public function mount(){
        
        $this->reseau_social = new Reseausocial();
    }
    public function render()
    {
       
        return view('livewire.admin.reseaux-sociaux-component',
        ['items' => Reseausocial::where(function($q){
            $q->where('name','LIKE', '%'.$this->search.'%');
       })
       ->orderByDesc('id')
        ->paginate(10)]
    );
    }
    public function edit($id)
    {
        $this->reseau_social = Reseausocial::find($id);
        if(!empty($this->reseau_social)){
            $this->showform = true;
            $this->edit_mode = true;
        }
    }
    public function cancel()
    {
        $this->showform     = false;
        $this->edit_mode    = false;
        $this->reseau_social       = null;
    }
    public function save(){
       $this->validate();

        $this->reseau_social->save();
        
        if ($this->edit_mode == false) {
            
            notify()->success('Ajouté avec succès ⚡️', 'Le profil a été ajouté avec succès');

            //$this->sendEmail();

        }else{
            notify()->success('Modifié avec succès ⚡️', 'Les modifications ont étés enregistrès avec succès');

        }
        $this->cancel();
        
        return redirect()->route('reseaux-sociaux');

    }
}
