<?php
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
   protected $appends = ['created_at_fr'];

    public function getCreatedAtFrAttribute(  ) {
        return $this->created_at ? (new Carbon($this->created_at))->format('d/m/y à h:i') : null  ;
    }
}