<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exams';
    protected $fillable = [
        'exam_title','exam_start_date', 'exam_start_time','exam_end_time','exam_description'
    ];
}
