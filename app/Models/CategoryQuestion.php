<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryQuestion extends Model
{
    protected $fillable = ['name'];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
