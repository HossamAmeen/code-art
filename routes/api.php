<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('upload/image', 'UploadImageController');
Route::namespace('APIs')->group(function () {
        Route::group(['middleware' => ['guest:api']], function () {
            Route::post('login', 'AuthController@login');
            Route::post('signup', 'AuthController@signup');
        });
        Route::group(['middleware' => 'auth:api'], function() {
            Route::get('logout', 'AuthController@logout');
            Route::get('getuser', 'AuthController@getUser');
        });

    Route::resource('adds', 'AddsController');
    Route::resource('category', 'CategoryController');
    Route::resource('service/category', 'ServiceCategoryController');
    Route::resource('last-work', 'LastWorkController');
    Route::resource('complaint', 'ComplaintController');
    Route::resource('service-provider', 'ServiceProviderController');
    Route::resource('service-provider-service', 'ServiceProviderServiceController');
    Route::resource('service-provider-wallet', 'ServiceProviderServiceController');
    Route::resource('service-type', 'ServiceTypeController');
    Route::resource('service-question', 'ServiceQuestionController');

    Route::namespace("Website")->group(function () {
        Route::post("register" , "ClientController@register");
        Route::put("client/update/profile" , "ClientController@updateProfile");
        Route::post("client/login" , "ClientController@login");
        Route::get("cart" , "ClientController@cart");
        Route::get("wishlists" , "ClientController@wishlist");
        Route::get("order" , "ClientController@showOrders");
        Route::post("complaint" , "HomeController@complaint");
        Route::get("categories" , "HomeController@showCategories");
        Route::get("services" , "HomeController@showServices");
        Route::get("countries" , "HomeController@showCountries");
        Route::get("cities" , "HomeController@showCities");
        Route::get("orders" , "ClientController@showOrders");
       
    });
    
});
Route::namespace('Dashboard')->group(function () {
    Route::resource('configration', 'ConfigrationController')->only(['index', 'update']);
});


