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


    Route::namespace("Website")->group(function () {
        Route::post("register" , "ClientController@register");
        Route::put("client/update/profile" , "ClientController@updateProfile");
        Route::post("client/login" , "ClientController@login");
        Route::get("account" , "ClientController@getAcount");
        Route::get("cart" , "ClientController@cart");
        Route::get("orders" , "ClientController@showOrders");
        Route::get("wishlists" , "ClientController@wishlist");
        Route::post("complaint" , "HomeController@complaint");
        Route::get("categories" , "HomeController@showCategories");
        Route::get("sliders" , "HomeController@showSliders");
        Route::get("adds" , "HomeController@showAdds");
        Route::get("services" , "HomeController@showServices");
        Route::get("special/services" , "HomeController@showSpecialServices");
        Route::get("bestseller/services" , "HomeController@showBestSellerServices");
        Route::get("configration" , "HomeController@getConfigration");
        Route::get("countries" , "HomeController@showCountries");
        Route::get("cities" , "HomeController@showCities");


        Route::post('service-provider/login', 'ServiceProviderController@login');
        Route::middleware('auth:service-provider-api')->group(function () {
            Route::get('service-provider/service-type/', 'ServiceProviderController@get_service_type');
            Route::post('service-provider-service/add', 'ServiceProviderController@add_service_provider_service');
        });
        Route::get('category/service/', 'ServiceProviderController@get_category_service');
        Route::get('category/category-service/', 'ServiceProviderController@get_service_provider');
        Route::get('service-provider/service-provider-service/', 'ServiceProviderController@get_service_provider_service');
        Route::get('service-category/suggest-addition/', 'ServiceProviderController@get_suggest_addition');
        Route::get('service-category/comments', 'ServiceProviderController@get_service_category_comments');


    });

});
Route::namespace('Dashboard')->group(function () {
    Route::resource('configration', 'ConfigrationController')->only(['index', 'update']);
});
