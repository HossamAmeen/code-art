<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adds extends Model
{
    protected $table = 'adds';

    protected $fillable = [
        'title', 'description', 'percent', 'image'
    ];
}
