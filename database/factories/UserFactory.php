<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
function getCategory()
{
    return App\Models\Category::pluck('id')->toArray();
}

function getServiceCategory()
{
    return App\Models\ServiceCategory::pluck('id')->toArray();
}

function getServiceProvider()
{
    return App\Models\ServiceProvider::pluck('id')->toArray();
}

function getServiceProviderService()
{
    return App\Models\ServiceProviderService::pluck('id')->toArray();
}

function getServiceQuestion()
{
    return App\Models\ServiceQuestion::pluck('id')->toArray();
}


$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Models\Configration::class, function (Faker $faker) {
    return [
        'email' => $faker->safeEmail,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        "about_us" => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'registration_conditions' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'phone' => $faker->e164PhoneNumber,
        'address' =>$faker->address ,
        'facebook' => "https://www.facebook.com/UROClinicDrAhmedReda/",
        'twitter' => "https://twitter.com/",
        'instagram' => "https://www.instagram.com/", //
        'youtube' =>"https://www.youtube.com" ,
    ];
});




$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Models\ServiceCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'category_id' => $faker->randomElement(getCategory()),
        'delivery_price' => $faker->randomDigit,
        'special' => $faker->boolean,
        'image' => 'image.jpg',
    ];
});

$factory->define(App\Models\LastWork::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->sentence,
        'image' => 'image.jpg',
    ];
});

$factory->define(App\Models\Complaint::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'phone' => $faker->name,
        'message' => $faker->sentence,
    ];
});

$factory->define(App\Models\ServiceProvider::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'phone' => $faker->randomDigit,
        'image' => 'image.jpg',
        'country' => $faker->country,
        'city' => $faker->city,
    ];
});

$factory->define(App\Models\ServiceProviderService::class, function (Faker $faker) {
    return [
        'service_provider_id' => $faker->randomElement(getServiceProvider()),
        'service_category_id' => $faker->randomElement(getServiceCategory()),
        'description' => $faker->sentence,
        'rate' => $faker->randomDigit,
        'discount' => $faker->randomDigit,
        'image' => 'imahe.jpg',
        'overview' => $faker->sentence,
        'title' => $faker->title,
        'program' => $faker->sentence,
    ];
});

$factory->define(App\Models\ServiceProviderWallet::class, function (Faker $faker) {
    return [
        'service_provider_id' => $faker->randomElement(getServiceProvider()),
        'balance' => $faker->randomDigit,
        'date' => $faker->date(),
        'receive' => $faker->randomDigit,
    ];
});

$factory->define(App\Models\ServiceType::class, function (Faker $faker) {
    return [
        'price' => $faker->randomDigit,
        'days' => $faker->randomDigit,
        'service_provider_id' => $faker->randomElement(getServiceProvider()),
        'service_provider_service_id' => $faker->randomElement(getServiceProviderService()),
    ];
});

$factory->define(App\Models\ServiceQuestion::class, function (Faker $faker) {
    return [
        'question' => $faker->sentence,
        'type' => $faker->randomElement(['text', 'multi_choice', 'boolean', 'file']),
    ];
});

$factory->define(App\Models\ServiceQuestionMultipleChoice::class, function (Faker $faker) {
    return [
        'choice' => $faker->sentence,
        'service_question_id' => $faker->randomElement(getServiceQuestion()),
    ];
});

$factory->define(App\Models\ServiceComment::class, function (Faker $faker) {
    return [
        'service_provider_id' => $faker->randomElement(getServiceProvider()),
        'service_category_id' => $faker->randomElement(getServiceCategory()),
        'comment' => $faker->sentence,
    ];
});
