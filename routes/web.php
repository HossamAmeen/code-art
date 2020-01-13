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
   
// Route::get('/',function () {
//     return view('index');
// });




    Route::view('complaint', 'complaint');
   
   


   