<?php
use Modules\Blog\Controllers\PermissionController;
use Route;

Route::prefix('permissions')->group(function(){
    Route::get('/index',[PermissionController::class,'index'])->name('identity.index');
    Route::get('/show',[PermissionController::class,'show'])->name('identity.show');
    Route::get('/create',[PermissionController::class,'create'])->name('identity.create');
    Route::post('/store',[PermissionController::class,'store'])->name('identity.store');
    Route::get('/edit',[PermissionController::class,'edit'])->name('identity.edit');
    Route::post('/update',[PermissionController::class,'update'])->name('identity.update');
    Route::get('/destroy',[PermissionController::class,'destroy'])->name('identity.destroy');
});