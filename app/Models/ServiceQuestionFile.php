<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceQuestionFile extends Model
{
    protected $fillable = [
        'question', 'file', 'service_question_id'
    ];
}
