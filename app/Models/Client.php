<?php

namespace App\Models;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Database\Eloquent\Model;

class Client extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens, Notifiable;

    protected $fillable = ["email","user_name","phone","password","country_id","city_id"];

}
