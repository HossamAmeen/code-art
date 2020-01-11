<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    protected $fillable = [
        'price', 'days', 'service_provider_id', 'service_provider_service_id'
    ];
}
