<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topices extends Model
{
    public function topices_data()
    {
        return $this->belongsTo(Topicstype::class, 'topices_type', 'topics_slug');
    }
}
