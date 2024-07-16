<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/{language}', 'changeLanguage')->name('change-language');
    Route::post('/register', 'register')->name('register');
});