<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends BaseModel
{
    use HasFactory;

    public function categorie_offre(){
        return $this->belongsTo(CategorieOffre::class);
    }

    public function documents(){
        return $this->hasMany(OffreDocument::class);
    }

    public function auteur(){
        return $this->belongsTo(User::class, 'created_by');
    }
}
