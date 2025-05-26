<?php
use App\Http\Controllers\Controller;
use Modules\Blog\Http\Controllers\Api\BlogApiController;
use Route;
Route::controller(BlogApiController::class)->group(function(){
    Route::get('/index','index');
    Route::get('/show','show');
    Route::get('/create','create');
    Route::post('/store','store');
    Route::get('/edit','edit');
    Route::get('/update','update');
});