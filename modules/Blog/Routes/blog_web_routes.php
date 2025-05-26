<?php
use Modules\Blog\Controllers\BlogController;
use Route;
Route::prefix('blogs')->group(function(){
    Route::get('/index',[BlogController::class,'index'])->name('blog.index');
    Route::get('/show',[BlogController::class,'show'])->name('blog.show');
    Route::get('/create',[BlogController::class,'create'])->name('blog.create');
    Route::post('/store',[BlogController::class,'store'])->name('blog.store');
    Route::get('/edit',[BlogController::class,'edit'])->name('blog.edit');
    Route::post('/update',[BlogController::class,'update'])->name('blog.update');
    Route::get('/destroy',[BlogController::class,'destroy'])->name('blog.destroy');
});