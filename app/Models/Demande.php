<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;
use Laravel\Prompts\Note;

class Demande extends BaseModel
{
    use HasFactory;
    

    public function offre(){
        return $this->belongsTo(Offre::class);
    }

    public function pays(){
        return $this->belongsTo(Pays::class);
    }

    public function notes(){
        return $this->hasMany(DemandeNotes::class);
    }

    public function actions(){
        return $this->hasMany(DemandeActions::class)->orderByDesc('id');
    }

    public function documents(){
        return $this->hasMany(DemandeDocument::class);
    }
    public function user_demande(){
        return $this->hasMany(UserDemande::class);
    }

    public function agent_traitement() {
        return $this->hasOne(UserDemande::class)->with('user')->where('role_code', 'traitement');
    }
    public function agent_depot() {
        return $this->hasOne(UserDemande::class)->with('user')->where('role_code', 'depot');
    }
    public function agent_livraison() {
        return $this->hasOne(UserDemande::class)->with('user')->where('role_code', 'livraison');
    }

}
