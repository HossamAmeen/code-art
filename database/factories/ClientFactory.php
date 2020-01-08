<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
function getCities()
{
    return App\Models\City::pluck('id')->toArray();
}
function getCountries()
{
    return App\Models\Country::pluck('id')->toArray();
}
function getClients()
{
    return App\Models\Client::pluck('id')->toArray();
}
function getServices()
{
    return App\Models\ServiceCategory::pluck('id')->toArray();
}
function getCategoryQuestion()
{
    return App\Models\CategoryQuestion::pluck('id')->toArray();
}
$factory->define(App\Models\Country::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Models\City::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        "country_id" =>  $faker->randomElement(getCities()),
    ];
});

$factory->define(App\Models\Slider::class, function (Faker $faker) {
    return [
        "description" => $faker->sentence($nbWords = 6, $variableNbWords = true), 
        "image" => "upload/sliders/slider.png",
        "percent" => $faker->randomDigit,
    ];
});

$factory->define(App\Models\Client::class, function (Faker $faker) {
    return [ 
        "email" => $faker->email,
        "user_name" => $faker->name,
        "phone" =>$faker->e164PhoneNumber,
        'password' => bcrypt('Admin123$'), // password
        "country_id" =>  $faker->randomElement(getCities()),
        "city_id"=>  $faker->randomElement(getCountries()),
    ];
});

$factory->define(App\Models\WishList::class, function (Faker $faker) {
  
    return [ 
        'client_id' => $faker->randomElement(getCities()),
        'service_categorie_id' => $faker->randomElement(getCities()),
         'price' => $faker->randomDigit,
    ];
});

$factory->define(App\Models\CategoryQuestion::class, function (Faker $faker) {
    return [
        "name" => $faker->name,
    ];
});

$factory->define(App\Models\Question::class, function (Faker $faker) {
    return [
        "question" => $faker->name,
        "answer"   => $faker->name,
        "category_question_id" => $faker->randomElement(getCategoryQuestion()),
    ];
});
