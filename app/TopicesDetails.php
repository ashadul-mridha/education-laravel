<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopicesDetails extends Model
{
    public function topices(){
       return  $this->belongsTo(Topices::class,'topices_id','id');
    }
}
