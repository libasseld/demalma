<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieOffre extends BaseModel
{
    use HasFactory;

    public function offres(){
        return $this->hasMany(Offre::class);
    }
}
