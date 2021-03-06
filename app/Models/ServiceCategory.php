<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $fillable = [
        'name', 'category_id', 'delivery_price', 'special', 'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class , "category_id");
    }
}
