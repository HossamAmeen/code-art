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
Route::get('/service',function () {
    return view('service');
});
Route::get('/index',function () {
    return view('index');
});

Route::get('/order',function () {
    return view('order');
});
   
Route::get('/complaint',function () {
    return view('complaint');
});
Route::get('/help',function () {
    return view('help');
});
Route::get('/fav',function () {
    return view('fav');
});
Route::get('/cart',function () {
    return view('cart');
});
Route::get('/details',function () {
    return view('servicedetails');
});

Route::get('/term',function () {
    return view('term');
});

   
Route::get('/privacystatement',function () {
    return view('privacystatement');
});
Route::get('/question',function () {
    return view('question');
});
Route::get('/howwork',function () {
    return view('howwork');
});

Route::get('/aboutus',function () {
    return view('aboutus');
});

Route::get('/login',function () {
    return view('login');
});

Route::get('/register',function () {
    return view('register');
});



Route::get('/categoryofservice',function () {
    return view('categoryOfService');
});

// Route::get('/',function () {
//     return view('index');
// });




    Route::view('complaint', 'complaint');
   
   


   