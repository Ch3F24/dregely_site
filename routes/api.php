<?php

use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\PhotoController;
use App\Http\Controllers\Api\PublicationController;
use App\Http\Controllers\Api\WorkController;
use App\Http\Controllers\ExhibitionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/photos/{id}',[PhotoController::class,'index'])->name('api.photo.index');
Route::get('/articles',[ArticleController::class,'index'])->name('api.article.index');
Route::get('/publications',[PublicationController::class,'index'])->name('api.publication.index');
Route::get('/works',[WorkController::class,'index'])->name('work.index');
Route::get('/exhibitions/{id}',[ExhibitionController::class,'photos'])->name('api.exhibition.view');
