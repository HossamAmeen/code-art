<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['service_id' , 'service_provider_id', 'client_id' , 'service_type_id' , 'price' , 'amount'];

    public function serviceOrder()
    {
        return $this->belongsTo(ServiceProviderService::class , "service_id");
    }

    public function client()
    {
        return $this->belongsTo(Client::class , "client_id");
    }

    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class , "service_type_id");
    }
}
