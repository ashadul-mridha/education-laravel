<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionDetails extends Model
{
    public function previous_question_type()
    {
        return $this->belongsTo(PreviousQuestionType::class, 'question_type_id', 'id');
    }
}
