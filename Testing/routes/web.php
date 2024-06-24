<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\UserController;

Route::GET('/home', [MahasiswaController::class, 'index'])->name('home');
Route::POST('/modify.mahasiswa', [MahasiswaController::class, 'store'])->name('modify.mahasiswa');
Route::GET('/users', [UserController::class, 'index'])->name('users');

?>