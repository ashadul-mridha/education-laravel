<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopicesDetails extends Model
{
    public function topices(){
       return  $this->belongsTo(Topices::class,'topices_id','topices_title_slug');
    }
    public function topices_type_name(){
       return  $this->belongsTo(Topicstype::class,'topices_slug','topics_slug');
    }
}
