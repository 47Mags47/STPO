<?php

use App\Http\Controllers\CSVI\Appeal\AppealController;
use App\Http\Controllers\CSVI\Appeal\ChatController;
use Illuminate\Support\Facades\Route;

// Route::prefix('appeals/')
//     ->middleware('auth')
//     ->controller(AppealController::class)
//     ->group(function () {
//         Route::get('/', 'index')->name('appeal.index');
//         Route::get('/table', 'table')->name('appeal.table');
//         Route::get('/create', 'create')->name('appeal.create');
//         Route::post('/store', 'store')->name('appeal.store');

//         Route::prefix('{appeal}/')->group(function () {
//             Route::get('/accept', 'accept')->name('appeal.accept');
//             Route::get('/close', 'close')->name('appeal.close');
//             Route::get('/restore', 'restore')->name('appeal.restore');
//         });
//     });
