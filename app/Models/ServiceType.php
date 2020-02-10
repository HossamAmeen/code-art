<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    protected $fillable = [
        'price', 'days', 'service_provider_service_id'
    ];

    public function service_provider()
    {
        return $this->belongsTo(ServiceProvider::class , "service_provider_id");
    }

    public function service_provider_service()
    {
        return $this->belongsTo(ServiceProviderService::class , "service_provider_service_id");
    }
}
