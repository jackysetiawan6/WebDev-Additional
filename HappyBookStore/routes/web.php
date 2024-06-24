<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact');
    Route::get('/categories/{cat_id}', 'filter')->name('category');
});

Route::controller(BookController::class)->group(function () {
    Route::get('/', 'index')->name('/');
    Route::get('/books/{book_id}', 'show')->name('detail');
});
