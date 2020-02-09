<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceProviderService extends Model
{
    protected $fillable = [
        'service_provider_id', 'service_category_id', 'description', 'rate',
        'discount', 'image', 'overview', 'title', 'program'
    ];

    public function service_provider()
    {
        return $this->belongsTo('App\Models\ServiceProvider', 'service_provider_id');
    }

    public function service()
    {
        return $this->belongsTo('App\Models\ServiceCategory', 'service_category_id');
    }
}
