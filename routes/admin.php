<?php

use Illuminate\Support\Facades\Route;

Route::module('works');
Route::module('photos');
Route::module('articles');
Route::module('publications');
Route::module('exhibitions');

Route::group(['prefix' => 'pages'], function () {
//    Route::group(['prefix' => 'projects'], function () {
//        Route::module('projectCustomers');
//    });
    Route::module('pages');
    Route::singleton('contact');
});
//Route::module('settings');
