<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\addaccount;
use App\Http\Controllers\accountdetail;
use App\Http\Controllers\photo;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::view('add','add');
Route::view('view','view');
Route::view('upload','photo');
Route::post('addapi',[addaccount::class,'addDataapi']);
Route::post('add',[addaccount::class,'addData']);
Route::post('login',[addaccount::class,'checkData']);
Route::get('list',[accountdetail::class,'show']);
Route::get('listapi',[accountdetail::class,'showapi']);
Route::get('/uploadapi',[photo::class,'createapi']);
Route::get('/upload',[photo::class,'create']);
Route::post('/upload',[photo::class,'store']);
Route::post('/uploadapi',[photo::class,'storeapi']);
Route::get('image/{filename}', [photo::class,'displayImage'])->name('image.displayImage');