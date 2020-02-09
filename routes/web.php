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
            Route::resource('categoryquestions', 'CategoryQuestionController');
            Route::resource('clients', 'ClientController');
            Route::resource('complaints', 'ComplaintController');
            Route::resource('questions', 'QuestionController');
            Route::resource('clients', 'ClientController');
            Route::resource('complaints', 'ComplaintController');
            Route::resource('questions', 'QuestionController');
            Route::resource('clients', 'ClientController');
            Route::get('orders/{client_id}', 'ClientController@show');
            Route::resource('complaints', 'ComplaintController');
            Route::resource('questions', 'QuestionController');
            Route::resource('users', 'UserController');
            Route::resource('wishlists', 'WishlistController');
            Route::resource('suggestadditions', 'SuggestAdditionController');
            Route::resource('sliders', 'SliderController');
            Route::resource('servicequestions', 'ServiceQuestionController');
            Route::resource('serviceproviders', 'ServiceProviderController');
            // Route::resource('adds', 'AddsController');
            Route::resource('servicecategories', 'ServiceCategoryController');

            Route::resource('news', 'ArticleController');
            Route::resource('articles', 'ArticleController');
            Route::resource('galleries', 'GalleryController');

            Route::resource('videos', 'VideoController');
        });

    });
});

Route::namespace ('WebSite')->group(function () {
    ///////////// home
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('questions', 'HomeController@questions');
    Route::post('complaint', 'HomeController@complaint');
    Route::view('/about-us', 'web.home.about-us', ['pageTitle' => 'من نحن']);
    Route::view('/how-work', 'web.home.how-it-work', ['pageTitle' => 'من نحن']);
    Route::view('/terms-of-use', 'web.home.terms-of-use', ['pageTitle' => 'من نحن']);
    Route::view('/privacy', 'web.home.privacy', ['pageTitle' => 'من نحن']);
    Route::view('/contact', 'web.home.contact', ['pageTitle' => 'تواصل معانا']);
    Route::view('/complaint', 'web.home.complaint', ['pageTitle' => 'الشكاوي']);

    /////////////////////// client
    Route::prefix('client')->group(function () {
        // Route::view('register', 'web.client.register', ['pageTitle' => 'إنشاء حساب جديد']);
        Route::view('login', 'web.client.login', ['pageTitle' => 'تسجيل دخول ']);
        Route::any('register', 'ClientController@register');
        Route::post('login', 'ClientController@login')->name('client/login');
        Route::get('logout', 'ClientController@logout')->name('client/logout');
        Route::get('wishlist', 'ClientController@wishlist');
    });
    Route::prefix('service-provider')->group(function () {
        Route::get('services', 'ServiceProviderController@services');
        Route::get('services-details/{id}', 'ServiceProviderController@servicesDetails');
    });
    Route::get('category/{category_id}', 'ClientController@category');
    Route::get('services/{id}', 'ClientController@services');
    Route::get('service-detials/{id}', 'ClientController@serviceDetials');
});
