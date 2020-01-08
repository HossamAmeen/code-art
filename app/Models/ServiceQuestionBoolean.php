<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceQuestionBoolean extends Model
{
    protected $fillable = [
        'question', 'choice', 'service_question_id'
    ];
}
