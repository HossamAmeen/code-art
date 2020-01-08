<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ["email","user_name","phone","password","country_id","city_id"];
}
