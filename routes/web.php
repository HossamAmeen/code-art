<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Route::get('/', 'Dashboard\ConfigrationController@index');

Route::prefix('admin')->group(function () {
    Auth::routes();
    Route::namespace ('Dashboard')->group(function () {
        Route::any('sendToken', 'BackEnd\ConfigrationController@sendToken')->name('forget.password');
        Route::any('paswordreset/{id}/{token}', 'BackEnd\ConfigrationController@paswordreset');
        // Route::post('login', 'BackEnd\UserController@login');
        Route::middleware('auth')->group(function () {

            Route::get('/', 'ConfigrationController@index');
            Route::resource('configrations', 'ConfigrationController');
            Route::resource('users', 'UserController');
            Route::resource('adds', 'AddsController');
            Route::resource('categories', 'CategoryController');
            Route::resource('categoryQuestions', 'CategoryQuestionController');
            Route::resource('clients', 'ClientController');
            Route::resource('complaints', 'ComplaintController');
            Route::resource('questions', 'QuestionController');
            Route::resource('clients', 'ClientController');
            Route::resource('complaints', 'ComplaintController');
            Route::resource('questions', 'QuestionController');
            Route::resource('clients', 'ClientController');
            Route::resource('complaints', 'ComplaintController');
            Route::resource('questions', 'QuestionController');
            Route::resource('users', 'UserController');
            Route::resource('wishlists', 'WishlistController');
            Route::resource('suggestadditions', 'SuggestAdditionController');
            Route::resource('sliders', 'SliderController');
            Route::resource('servicetypes', 'ServiceTypeController');
            Route::resource('servicequestions', 'ServiceQuestionController');
            Route::resource('serviceproviders', 'ServiceProviderController');
            // Route::resource('adds', 'AddsController');

            Route::resource('news', 'ArticleController');
            Route::resource('articles', 'ArticleController');
            Route::resource('galleries', 'GalleryController');
       
            Route::resource('videos', 'VideoController');
        });

    });
});
Route::get('/', 'HomeController@index')->name('home');
