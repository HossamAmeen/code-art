<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuggestAddition extends Model
{
   protected $fillable = ['suggestion' , 'price'  , 'service_category_id',
];

   public function service_category()
   {
       return $this->belongsTo(ServiceCategory::class , "service_category_id");
   }
}
