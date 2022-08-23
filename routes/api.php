<?php

use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\LexiconController;
use App\Http\Controllers\Api\PhotoController;
use App\Http\Controllers\Api\PublicationController;
use App\Http\Controllers\Api\WorkController;
use App\Http\Controllers\ExhibitionController;
use App\Http\Controllers\InstallationController;
use App\Http\Controllers\VideoController;
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
Route::get('/work',[WorkController::class,'index'])->name('api.work.index');
Route::get('/lexicon',[LexiconController::class,'index'])->name('api.lexicon.index');
Route::get('/exhibition/{id}',[ExhibitionController::class,'photos'])->name('api.exhibition.view');
Route::get('/installation/{id}',[InstallationController::class,'photos'])->name('api.installation.view');
Route::get('/video/{id}',[VideoController::class,'videos'])->name('api.video.view');

Route::post('/admin/bulk-update',[\App\Http\Controllers\WorkController::class,'storeBulkUpdate']);
