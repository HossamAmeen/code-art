<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adds extends Model
{
    protected $table = 'adds';

    protected $fillable = [
        'service_category_id', 'image'
    ];

    public function service()
    {
        return $this->belongsTo(ServiceProviderService::class , "service_category_id");
    }
}
