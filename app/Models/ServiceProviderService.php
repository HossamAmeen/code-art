<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceProviderService extends Model
{
    protected $fillable = [
        'service_provider_id', 'service_category_id', 'description', 'rate',
        'discount', 'image', 'overview',
    ];
}
