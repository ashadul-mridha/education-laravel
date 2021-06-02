<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamQuestion extends Model
{
    public function exam(){
       return $this->belongsTo(Exam::class,'exam_id','id');

    }

}
