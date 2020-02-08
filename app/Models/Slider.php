<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [ 'service_id', 'image'];

    public function service()
    {
        return $this->belongsTo(ServiceCategory::class , "service_category_id");
    }
}
