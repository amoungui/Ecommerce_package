<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Scaffolder\Ecommerce\Http\Controllers'], function () {
    Route::get('home/', 'LandingPageController@index')->name('home'); 
});
