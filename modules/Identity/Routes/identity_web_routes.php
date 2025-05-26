<?php
use Modules\Blog\Controllers\IdentityController;
use Route;

Route::prefix('identities')->group(function(){
    Route::get('/index',[IdentityController::class,'index'])->name('identity.index');
    Route::get('/show',[IdentityController::class,'show'])->name('identity.show');
    Route::get('/create',[IdentityController::class,'create'])->name('identity.create');
    Route::post('/store',[IdentityController::class,'store'])->name('identity.store');
    Route::get('/edit',[IdentityController::class,'edit'])->name('identity.edit');
    Route::post('/update',[IdentityController::class,'update'])->name('identity.update');
    Route::get('/destroy',[IdentityController::class,'destroy'])->name('identity.destroy');
});