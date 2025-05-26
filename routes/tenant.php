<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\TenantCrudController;
use Illuminate\Support\Facades\Route;

Route::prefix('{tenant:name}')->group(function() {
    Route::get('/index',[TenantCrudController::class,'index'])->name('tenant.product.index');
    Route::get('/show/{id}',[TenantCrudController::class,'show'])->name('tenant.product.show');
    Route::get('/create',[TenantCrudController::class,'create'])->name('tenant.product.create');
    Route::post('/store',[TenantCrudController::class,'store'])->name('tenant.product.store');
    Route::get('/edit/{id}',[TenantCrudController::class,'edit'])->name('tenant.product.edit');
    Route::post('/update/{id}',[TenantCrudController::class,'update'])->name('tenant.product.update');
    Route::get('/destroy',[TenantCrudController::class,'destroy'])->name('tenant.product.destroy');
});
