<?php

namespace App\Http\Livewire\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class UsersManagementComponent extends Component
{
    public $showform = false;
    public $roles = false;
    public $edit_mode = false;
    public $to_show = null;
    public $user;
    public $user_uuid;
    public $password;
    public $search;
    public $password_confirmation;
    public $userToChange;
    public $text_confirmation;
    use WithPagination;

    protected function rules()
    {
        return [
            'user.prenom' => 'required|min:2',
            'user.nom' => 'required',
            'user.email' => 'email|required',
            'user.role_id' => 'required|integer|nullable',
            'user.phone' => 'required|min:9|max:9',

            'password' => 'required|confirmed|min:6',
            'userToChange' => '',
        ];
    }
    public function mount(){
        
        $this->user = new User();
        $this->user->created_by = Auth::user()->id;
        $this->roles = Role::all();
    }
    public function changer_etat_user( $id){
        $this->userToChange = User::find($id);
        $action = 'activer';
        if($this->userToChange->active == 1){
            $action = 'désactiver';
        }
        $this->text_confirmation = "Voulez vous réellement ".$action." le compte  de ".$this->userToChange->name;
        
    }
    public function confirmer(){
        $this->validate(['user.prenom' => 'required|min:2',
            'user.nom' => 'required',
            'user.email' => 'email|required|unique:users,email,'.$this->user->id,
            'user.role_id' => 'required|integer|nullable',
            'user.phone' => 'required|min:9|max:9',

            'password' => 'nullable|confirmed|min:6',
        ]);
        $this->userToChange->active = !$this->userToChange->active;
        $this->userToChange->save();
        $this->userToChange = null;

    }

    public function render()
    {
       $query = User::query();
       if($this->to_show != null){
           $query->where('active', $this->to_show);

       }
        return view('livewire.admin.users-management-component',
        ['items' => $query->where(function($q){
            $q->where('name','LIKE', '%'.$this->search.'%')
            ->orWhere('email','LIKE', '%'.$this->search.'%')
            ->orWhere('prenom','LIKE', '%'.$this->search.'%');
       })
       ->orderByDesc('id')
        ->paginate(3)]);
    }
    public function edit($id)
    {
        $this->user = User::find($id);
        if(!empty($this->user)){
            $this->showform = true;
            $this->edit_mode = true;
        }
    }
    public function cancel()
    {
        $this->showform = false;
        $this->edit_mode = false;
        $this->user = null;
    }
    public function save(){
        $this->user->phone = str_replace(' ', '', $this->user->phone);
       $this->validate([
        'user.prenom' => 'required|min:2',
        'user.nom' => 'required',
        'user.email' => 'email|required|unique:users,email,'.$this->user->id,
        'user.role_id' => 'required|integer|nullable',
        'user.phone' => 'required|min:9|max:9',

        'password' => 'required|confirmed|min:6',
       ]);
        $this->user->name = $this->user->prenom." ".$this->user->nom;
        $this->user->password = bcrypt($this->password);
        if(empty($this->user_uuid)){
            $this->user->uuid = (string) Str::uuid();
        }
        if($this->edit_mode == false){
            $this->user->created_by = Auth::user()->id;
            $this->user->active     = 1;
        }
        //dd($this->user);
        $this->user->save();
        
        if ($this->edit_mode == false) {
            
            notify()->success('Ajouté avec succès ⚡️', 'Le profil a été ajouté avec succès');

            //$this->sendEmail();

        }else{
            notify()->success('Modifié avec succès ⚡️', 'Les modifications ont étés enregistrès avec succès');

        }
        $this->cancel();
        
        
    }


    
}
