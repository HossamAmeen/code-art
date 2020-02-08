<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configration extends Model
{
    protected $fillable = [
        "website_name",
        "email","address","description",
    "about_us", "registration_conditions" , "how_work" , "privacy",
    "home_description","descriptionPoint","phone","whatsapp",
    "youtube","facebook","twitter","instagram"];
}
