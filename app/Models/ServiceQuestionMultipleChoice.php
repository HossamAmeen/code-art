<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceQuestionMultipleChoice extends Model
{
    protected $fillable = [
        'question', 'choice_one', 'choice_two', 'choice_three', 'choice_four', 'service_question_id'
    ];
}
