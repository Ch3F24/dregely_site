<?php

use App\Http\Controllers\Api\PublicationController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ExhibitionController;
use App\Http\Controllers\InstallationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\VideoController;
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
    Route::get('/',[PageController::class,'home'])->name('home');

    Route::get('/articles',[ArticleController::class,'index'])->name('article.index');
    Route::get('/publications',[PageController::class,'publications'])->name('publication.index');

    Route::prefix('/work')->name('work.')->group(function () {
        Route::get('/',[WorkController::class,'index'])->name('index');
        Route::get('/{work}',[WorkController::class,'view'])->name('view');
        Route::get('/parent/{work}',[WorkController::class,'parent'])->name('parent');
    });

    Route::get('/exhibition/{exhibition}',[ExhibitionController::class,'view'])->name('exhibition.view');
    Route::get('/installation/{installation}',[InstallationController::class,'view'])->name('installation.view');
    Route::get('/video/{video}',[VideoController::class,'view'])->name('video.view');

    Route::get('/lexicon',[PageController::class,'lexicon'])->name('page.lexicon');
    Route::get('/contact',[PageController::class,'contact'])->name('page.contact');
    Route::post('/contact',[PageController::class,'sendContact'])->name('page.contact.send');
    Route::get('/{page}',[PageController::class,'view'])->name('page.view');
});
