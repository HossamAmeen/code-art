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

Route::post('upload/image', 'BackController@uploadImage');

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
    Route::resource('category', 'ServiceCategoryController');
    Route::resource('last/work', 'LastWorkController');
    Route::resource('complaint', 'ComplaintController');

});
