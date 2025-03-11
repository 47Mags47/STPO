<?php

use App\Http\Controllers\CSVI\AppealController;
use Illuminate\Support\Facades\Route;

Route::prefix('appeal/')->controller(AppealController::class)->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('appeal.index');
    Route::get('/table', 'table')->name('appeal.table');
});
