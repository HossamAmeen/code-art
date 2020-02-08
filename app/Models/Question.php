<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=["question","answer" , "category_question_id"];

    public function category()
    {
        return $this->belongsTo(CategoryQuestion::class , "category_question_id")->select(array('id' , 'name'));
       
    }
}
