<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['service_id' , 'client_id' ];

    public function service()
    {
        return $this->belongsTo(ServiceProviderService::class , "service_id");
    }
}
