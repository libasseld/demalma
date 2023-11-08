<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeActions extends BaseModel
{
    use HasFactory;

    protected $appends = ["date_action_fr","heure_action"];
    public function getDateActionFrAttribute(  ) {
        return $this->created_at ? (new Carbon($this->created_at))->format('d/m/y') : null  ;
    }
    public function getHeureActionAttribute(  ) {
        return $this->created_at ? (new Carbon($this->created_at))->format('h:i') : null  ;
    }
}
