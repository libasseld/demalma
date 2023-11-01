<?php

namespace App\Http\Livewire\Admin;

use App\Models\PermissionCategory;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class RolesComponent extends Component
{
    public $showform = false;
    public $edit_mode = false;
    public $permissions_categories ;
    public $to_show = null;
    public $role;
    public $role_uuid;
    public $password;
    public $search;
    public $roleToChange;
    public $text_confirmation;
    public $selectedPermissions = [];

    use WithPagination;

    protected function rules()
    {
        return [
            'role.name' => 'string|required',
            
        ];
    }
    public function mount(){
        
        $this->role = new Role();
        $this->permissions_categories = PermissionCategory::with(['permissions'])->get();
        
    }
    public function changer_etat_role( $id){
        $this->roleToChange = Role::find($id);
        $action = 'activer';
        if($this->roleToChange->active == 1){
            $action = 'désactiver';
        }
        $this->text_confirmation = "Voulez vous réellement ".$action." le compte  de ".$this->roleToChange->name;
        
    }
    public function confirmer(){
        $this->roleToChange->active = !$this->roleToChange->active;
        $this->roleToChange->save();
        $this->roleToChange = null;

    }

    public function render()
    {
       $query = Role::query();
       if($this->to_show != null){
           $query->where('active', $this->to_show);

       }
        return view('livewire.admin.roles-component',
        ['items' => $query->where(function($q){
            $q->where('name','LIKE', '%'.$this->search.'%');
       })
       ->orderByDesc('id')
        ->paginate(10)]);
    }
    public function edit($id)
    {
        $this->role = Role::find($id);
        $this->selectedPermissions =  $this->role->permissions->pluck('id')->toArray();
        if(!empty($this->role)){
            $this->showform = true;
            $this->edit_mode = true;
        }
    }
    public function cancel()
    {
        $this->showform = false;
        $this->edit_mode = false;
        $this->role = null;
    }
    public function save(){
        $this->validate([ 'role.name' => 'string|required|unique:roles,name,'.$this->role->id]);
        $this->role->permissions()->sync($this->selectedPermissions);
        $this->categorie_offre->code = Str::slug($this->role->name);

        //dd($this->role);
        $this->role->save();
        
        if ($this->edit_mode == false) {
            
            notify()->success('Ajouté avec succès ⚡️', 'Le role a été ajouté avec succès');

            //$this->sendEmail();

        }else{
            notify()->success('Modifié avec succès ⚡️', 'Les modifications ont étés enregistrès avec succès');

        }
        $this->cancel();
        
        
    }


    
}
