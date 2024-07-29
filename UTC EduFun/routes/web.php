<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WriterController;

Route::controller(ArticleController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/article/{id}', 'detail')->name('detail');
    Route::get('/popular', 'search')->name('popular');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/category/{cat_name}', 'index')->name('category');
});

Route::controller(WriterController::class)->group(function () {
    Route::get('/writers', 'index')->name('writers');
    Route::get('/writer/{id}', 'detail')->name('writer_detail');
});

Route::get('/about', function () {
    return view('about');
})->name('about');
