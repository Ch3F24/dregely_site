<?php

use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;

Route::module('articles');
Route::module('publications');
Route::module('exhibitions');
Route::module('lexicons');
Route::module('installations');
Route::module('videos');

Route::group(['prefix' => 'works'], function () {
    Route::module('works');
    Route::module('photos');
    Route::name('upload')->get('/upload', [WorkController::class,'bulkUpload']);
});

Route::group(['prefix' => 'pages'], function () {
    Route::module('pages');
    Route::singleton('contact');
});
//Route::module('settings');
