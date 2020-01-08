<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceProviderWallet extends Model
{
    protected $fillable = [
        'service_provider_id', 'balance', 'date', 'receive'
    ];

}
