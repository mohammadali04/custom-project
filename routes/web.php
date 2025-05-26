<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\CustomAuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('info',[IndexController::class,'infos'])->name('base-info.index');
Route::get('/register',[CustomAuthController::class,'register'])->name('register');
Route::post('/store',[CustomAuthController::class,'store'])->name('store');
Route::get('/login',[CustomAuthController::class,'login'])->name('login');
Route::post('/authenticate',[CustomAuthController::class,'authenticate'])->name('authenticate');
Route::get('/logout',[CustomAuthController::class,'logout'])->name('logout');
Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->name('dashboard');
Route::get('create-tenant',[CustomAuthController::class,'createTenant'])->name('create.tenant');
Route::post('store-tenant',[CustomAuthController::class,'storeTenant'])->name('store.tenant');
