<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    public function offre(){
        return $this->belongsTo(Offre::class);
    }

    public function pays(){
        return $this->belongsTo(Pays::class);
    }

    
}
