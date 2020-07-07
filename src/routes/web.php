<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'Scaffolder\Ecommerce\Http\Controllers'], function () {
    Route::get('/', 'LandingPageController@index')->name('landing-page'); 
});

Route::group(['namespace' => 'Scaffolder\Ecommerce\Http\Controllers'], function () {
    Route::get('/shop', 'ShopController@index')->name('shop.index'); 
    Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
});

Route::view('/cart', 'cart');
Route::view('/checkout', 'checkout');
Route::view('/thankyou', 'thankyou');