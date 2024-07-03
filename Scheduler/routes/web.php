<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;

Route::controller(ScheduleController::class)->group(function () {
    Route::GET('/', 'index')->name('schedules.index');
    Route::prefix('schedule')->group(function () {
        Route::POST('create', 'create')->name('schedules.create');
        Route::POST('update/task_id={id}', 'update')->name('schedules.update');
        Route::POST('delete/task_id={id}', 'delete')->name('schedules.delete');
    });
});
