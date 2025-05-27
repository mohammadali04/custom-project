<?php
use Modules\Identity\Http\Controllers\Api\IdentityApiController;
use Illuminate\Support\Facades\Route;
Route::controller(IdentityApiController::class)->group(function(){
    Route::get('/index','index');
    Route::get('/show','show');
    Route::get('/create','create');
    Route::post('/store','store');
    Route::get('/edit','edit');
    Route::post('/update','update');
    Route::get('/destroy','destroy');

});