<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    protected $fillable = ['client_id','service_id' , 'price' , 'date'];

    public function service()
    {
        return $this->belongsTo(ServiceProviderService::class , "service_id");
    }
}
