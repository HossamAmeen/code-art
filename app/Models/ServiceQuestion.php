<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceQuestion extends Model
{
    protected $fillable = [
        'question', 'type', 'service_id'
    ];
}
