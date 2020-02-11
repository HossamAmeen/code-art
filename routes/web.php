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

    Route::get('category/{category_id}', 'ClientController@category');
    Route::get('services/{id}', 'ClientController@services');
    Route::get('service-detials/{id}', 'ClientController@serviceDetials');
    /////////////////////// client
    Route::prefix('client')->group(function () {
        // Route::view('register', 'web.client.register', ['pageTitle' => 'إنشاء حساب جديد']);
        Route::view('login', 'web.client.login', ['pageTitle' => 'تسجيل دخول ']);
        Route::any('register', 'ClientController@register');
        Route::post('login', 'ClientController@login')->name('client/login');
        Route::get('logout', 'ClientController@logout')->name('client/logout');
        // Route::middleware('auth:client')->group(function () { 
            Route::any('account', 'ClientController@account');
            Route::get('wishlist', 'ClientController@wishlist');
            Route::get('add/wishlist/{id}', 'ClientController@addWishlist');
            Route::get('delete/wishlist/{id}', 'ClientController@deleteWishlist');
            Route::get('orders', 'ClientController@orders');
            Route::get('show-order/{id}', 'ClientController@showOrder');
            Route::any('addToCart/{id}', 'ClientController@addToCart');
            Route::any('rate-service/{id}', 'ClientController@rateService');
            Route::get('cart', 'ClientController@cart');
            Route::get('delete/cart/{id}', 'ClientController@deleteCart');

        // });
      
    });
    
    /////////////////// service provider service
    Route::prefix('service-provider')->group(function () {
        Route::post('login', 'ServiceProviderController@login')->name('serviceProvider/login');
      
        Route::get('logout', 'ServiceProviderController@logout')->name('serviceProvider/logout');
        Route::get('/', 'ServiceProviderController@servicesForProvider')->name('serviceProvider/home');
        Route::any('account', 'ServiceProviderController@account');
        Route::get('orders', 'ServiceProviderController@orders');
        Route::get('show-categories', 'ServiceProviderController@showCategories');
        Route::get('show-services/{id}', 'ServiceProviderController@showServices');
        Route::any('add-service/{id}', 'ServiceProviderController@addService');
        Route::any('delete-service/{id}', 'ServiceProviderController@deleteService');
        Route::any('change-service/{id}', 'ServiceProviderController@changeVisionService');
        Route::any('change-status-order/{id}/{status}', 'ServiceProviderController@changeStatusOrder');
        Route::any('edit-service/{id}', 'ServiceProviderController@updateService');
        Route::get('services-details/{id}', 'ServiceProviderController@servicesDetails');

    });
   
});
