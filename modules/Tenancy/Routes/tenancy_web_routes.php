<?php
use Modules\Blog\Controllers\TenancyController;
use Route;

Route::prefix('tenatns')->group(function(){
    Route::get('/index',[TenancyController::class,'index'])->name('identity.index');
    Route::get('/show',[TenancyController::class,'show'])->name('identity.show');
    Route::get('/create',[TenancyController::class,'create'])->name('identity.create');
    Route::post('/store',[TenancyController::class,'store'])->name('identity.store');
    Route::get('/edit',[TenancyController::class,'edit'])->name('identity.edit');
    Route::post('/update',[TenancyController::class,'update'])->name('identity.update');
    Route::get('/destroy',[TenancyController::class,'destroy'])->name('identity.destroy');
});