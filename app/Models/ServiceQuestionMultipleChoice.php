<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceQuestionMultipleChoice extends Model
{
    protected $fillable = [
        'choice', 'service_question_id'
    ];
}
