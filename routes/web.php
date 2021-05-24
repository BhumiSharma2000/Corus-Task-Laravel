<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\addaccount;
use App\Http\Controllers\accountdetail;
use App\Http\Controllers\photo;

Route::get('/', function () {
    return view('login');
});

    Route::view('add','add');
    Route::view('view','view');
    Route::view('upload','photo');
    Route::post('/uploadapi',[photo::class,'storeapi']);
    Route::post('add',[addaccount::class,'addData']);
    Route::post('addapi',[addaccount::class,'addDataapi']);
    Route::post('login',[addaccount::class,'checkData']);
    Route::get('list',[accountdetail::class,'show']);
    Route::get('/upload',[photo::class,'create']);
    Route::get('/uploadapi',[photo::class,'createapi']);
    Route::get('listapi',[accountdetail::class,'showapi']);
    Route::post('/upload',[photo::class,'store']);
    Route::get('image/{filename}', [photo::class,'displayImage'])->name('image.displayImage');
?>