<?php
use Modules\Permission\Http\Controllers\Api\PermissionApiController;
use Illuminate\Support\Facades\Route;
Route::controller(PermissionApiController::class)->group(function(){
    Route::get('/index','index');
    Route::get('/show','show');
    Route::get('/create','create');
    Route::post('/store','store');
    Route::get('/edit','edit');
    Route::post('/update','update');
    Route::get('/destroy','destroy');
});