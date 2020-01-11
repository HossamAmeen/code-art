<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceComment extends Model
{
    protected $fillable = [
        'service_provider_id', 'service_category_id', 'comment',
    ];
}
