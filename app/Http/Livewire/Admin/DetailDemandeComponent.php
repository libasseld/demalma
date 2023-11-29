<?php

namespace App\Http\Livewire\Admin;

use App\Models\Demande;
use App\Models\DemandeActions;
use App\Models\DemandeDocument;
use App\Models\DemandeNotes;
use App\Models\User;
use App\Models\UserDemande;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DetailDemandeComponent extends Component
{
    public $roles = ['traitement','depot','livraison'];
    public $colors = [
        'traitement' => 'danger',
        'depot' => 'warning',
        'livraison' => 'success'
    ];
    public $pourcentages = [
        'traitement' => 40,
        'depot' => 60,
        'livraison' => 100
    ];
    public $demande_id;
    public $new_note;
    public $demande, $current_agent_demande;
    public $agent_traitement_id, $agent_depot_id, $agent_livraison_id;
    public $agents_traitements, $agents_depots, $agents_livraisons;
    public $show_modal_agents = false, $modal_acceptation = false,$show_modal_terminee, $value_accept, $doc_to_approve;

    public function mount(){
        /* $demandes = Demande::with(['user_demande'])->get();
        foreach ($demandes as $key => $demande) {
            foreach ($demande->user_demande as $key => $row) {
                $demande_action = new DemandeActions();
                $demande_action->user_id = $row->user_id;
                $demande_action->demande_id = $demande->id;
                $demande_action->label = 'Le '.$row->role_code.' de la demande a été assigné à '.$row->user->name;
                $demande_action->color = 'primary';
                $demande_action->save();
            }
        } */
        $current_user_role = auth()->user()->role->code;
        $this->demande = Demande::with(['agent_traitement','agent_depot','agent_livraison','documents','actions','notes','offre'])
            ->where('id', $this->demande_id)->first();
        if(empty($this->demande)){
            abort(404);
        }
        //dd($this->demande->agent_traitement->user);
        $this->agent_traitement_id      = !empty($this->demande->agent_traitement) ? $this->demande->agent_traitement->user->id  : null;
        $this->agent_depot_id           = !empty($this->demande->agent_depot) ? $this->demande->agent_depot->user->id  : null;
        $this->agent_livraison_id       = !empty($this->demande->agent_livraison) ? $this->demande->agent_livraison->user->id  : null;

        $this->agents_traitements       = User::whereRelation('role', function($query){$query->where('code', 'agent-de-traitement');})->get();
        $this->agents_depots            = User::whereRelation('role', function($query){$query->where('code', 'agent-de-depot');})->get();
        $this->agents_livraisons        = User::whereRelation('role', function($query){$query->where('code', 'agent-de-livraison');})->get();

        if(in_array($current_user_role, ['agent-de-traitement','agent-de-depot','agent-de-livraison'])){
            if($current_user_role == "agent-de-traitement"){
                $this->current_agent_demande = $this->demande->agent_traitement;
            }elseif($current_user_role == "agent-de-depot"){
                $this->current_agent_demande = $this->demande->agent_depot;
            }elseif($current_user_role == "agent-de-livraison"){
                $this->current_agent_demande = $this->demande->agent_livraison;
            }
            //dd($this->current_agent_demande);
        }
    }

    public function save_agents() {
        foreach($this->roles as $role){
            $variable = 'agent_'.$role.'_id';
            if(!empty($this->$variable)){
                $not_new = false;
                $user_demande = UserDemande::where('demande_id', $this->demande_id)->where('role_code', $role)->first();
                if(empty($user_demande)){
                    $user_demande = new UserDemande();
                }
                if($user_demande->user_id == $this->$variable 
                && $user_demande->demande_id = $this->demande->id
                && $user_demande->role_code = $role){
                    $not_new = true;
                }
                $user_demande->user_id = $this->$variable;
                $user_demande->demande_id = $this->demande->id;
                $user_demande->role_code = $role;
                $user_demande->save();

                if($not_new == false){
                    $label      = 'Le '.$role.' de la demande a été assigné à '.$user_demande->user->name;
                    $user_id    = $user_demande->user->id;
                    $demande_id      = $this->demande->id;
                    $color          = $this->colors[$role];
                    save_demande_action($user_id, $demande_id, $label, $color);
                }
                $this->demande->etat = 1;
                $this->demande->save();
            }   
        }
        setupFlash( "Dispatching enregistré avec succès", 'success');

        return redirect(request()->header('Referer'));

    }
    public function addNote()  {
        $this->validate([
            'new_note' => 'required'
        ]);
        $item = new DemandeNotes();
        $item->notes     = $this->new_note;
        $item->user_id      = auth()->user()->id;
        $item->demande_id   = $this->demande->id;
        $item->save();
        setupFlash( "Note ajoutée avec succès", 'success');

        return redirect(request()->header('Referer'));

    }

    public function save_approbation(){
        $doc = DemandeDocument::where('id',$this->doc_to_approve)->first();
        $doc->etat = 1;
        $doc->save();
        setupFlash( "Document approuvé avec succès", 'success');

        return redirect(request()->header('Referer'));

    }

    public function show_modal_acceptation($value){
        $this->value_accept = $value;
        $this->modal_acceptation = true;
    }
    public function save_acceptation()  {
        $this->current_agent_demande->acceptee = $this->value_accept;
        $this->current_agent_demande->save();
        setupFlash( "Décision enregistré avec succès", 'success');

        return redirect(request()->header('Referer'));

    }
    public function marquer_terminer()  {
        $pourcentage = $this->pourcentages[$this->current_agent_demande->role_code];
        
        $this->current_agent_demande->terminee = 1;
        $this->current_agent_demande->save();
        if($this->demande->pourcentage < $pourcentage){
            $this->demande->pourcentage = $pourcentage;
            $this->demande->save();
        }
        if($this->current_agent_demande->role_code == 'traitement'){
            $this->demande->etat = 2;
            $this->demande->save();
        }
        $demande_action = new DemandeActions();
        $demande_action->user_id        = Auth::user()->id;
        $demande_action->demande_id     = $this->demande->id;
        $demande_action->label          = 'Le '.$this->current_agent_demande->role_code.' de la demande a été marqué comme terminé par '.Auth::user()->name;
        $demande_action->color          = 'primary';
        $demande_action->save();
        setupFlash( "Action enregistrée avec succès", 'success');

        return redirect(request()->header('Referer'));

    }
    public function render()
    {
        return view('livewire.admin.detail-demande-component');
    }
}
