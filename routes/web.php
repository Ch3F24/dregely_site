<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

//Route::prefix(LaravelLocalization::setLocale())->middleware(['localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->get('/', function () {
//    return view('layouts.app');
//});

//Route::get('/{slug}',[PageController::class,'view'])->name('page.view')->where('slug','.*');

Route::prefix(LaravelLocalization::setLocale())->middleware(['localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->group(function () {
//    Route::get('/',[WorkController::class,'index'])->name('work.index');
    Route::get('/',[\App\Http\Controllers\Api\WorkController::class,'index'])->name('home');

//    Route::get('/{page}',[PageController::class,'view'])->name('page.view');
    Route::prefix('/gallery')->name('gallery.')->group(function () {
//        Route::get('/',[WorkController::class,'index'])->name('index');
//        Route::get('/{work}',[WorkController::class,'view'])->name('view');
        Route::get('/{work}',[\App\Http\Controllers\Api\WorkController::class,'show'])->name('show');
    });
//
//    Route::resource('gallery',\App\Http\Controllers\Api\WorkController::class);
});
