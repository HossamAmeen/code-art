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
        "country_id" =>  $faker->randomElement(getCountries()),
    ];
});

$factory->define(App\Models\Slider::class, function (Faker $faker) {
    return [
      
        "image" => "uploads/sliders/sliders.png",
       
    ];
});

$factory->define(App\Models\Adds::class, function (Faker $faker) {
    return [
       
        "image" => "uploads/adds/adds.png",
    ];
});

$factory->define(App\Models\Client::class, function (Faker $faker) {
    return [ 
        "email" => $faker->email,
        "user_name" => $faker->name,
        "phone" =>$faker->e164PhoneNumber,
        'password' => bcrypt('Admin123$'), // password
        "country_id" =>  $faker->randomElement(getCountries()),
        "city_id"=>  $faker->randomElement(getCities()),
    ];
});

$factory->define(App\Models\WishList::class, function (Faker $faker) {
  
    return [ 
        'client_id' => $faker->randomElement(getCities()),
        'service_id' => $faker->randomElement(getServiceProviderService()),
        
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
 
$factory->define(App\Models\Order::class, function (Faker $faker) {
    return [
        "price" => $faker->randomDigit,
        "amount"   => $faker->randomDigit,
        "status" =>  $faker->randomElement(array(1,2,3,4)),
        "client_id" => $faker->randomElement(getClients()),
        "service_id" => $faker->randomElement(getServiceProviderService()),
        'service_provider_id' => $faker->randomElement(getServiceProvider()),
        "service_type_id" =>  $faker->randomElement(array(1,2,3,4)),
    ];
});

$factory->define(App\Models\Cart::class, function (Faker $faker) {
    return [
        "client_id" => $faker->randomElement(getClients()),
        "service_id" => $faker->randomElement(getServiceProviderService()),
        "service_type_id" =>  $faker->randomElement(array(1,2,3,4)),
    ];
});

$factory->define(App\Models\SuggestAddition::class, function (Faker $faker) {
    return [
        "suggestion" => $faker->name,
        "price"   => $faker->randomDigit,
        // "amount"   => $faker->randomDigit,
        "service_category_id" => $faker->randomElement(getServices()),
    ];
});