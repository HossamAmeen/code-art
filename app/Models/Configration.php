<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configration extends Model
{
    protected $fillable = ["email","address","description",
    "home_description","descriptionPoint","phone","whatsapp",
    "youtube","facebook","twitter","instagram"];
}
