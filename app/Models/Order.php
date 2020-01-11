<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['service_id' , 'client_id' , 'price' , 'amount'];

    public function service()
    {
        return $this->belongsTo(ServiceProviderService::class , "service_id");
    }
}
