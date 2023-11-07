<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionCategory extends BaseModel
{
    use HasFactory;
    public function permissions(){
        return $this->hasMany(Permission::class,'permission_category_id');
    }
}
