<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceQuestionText extends Model
{
    protected $fillable = [
        'question', 'choice', 'service_question_id'
    ];
}
