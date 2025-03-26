<?php

use App\Http\Controllers\CSVI\Veteran\AccessController;
use App\Http\Controllers\CSVI\Veteran\DateController;
use App\Http\Controllers\CSVI\Veteran\GenerateController;
use App\Http\Controllers\CSVI\Veteran\RaportController;
use Illuminate\Support\Facades\Route;

Route::prefix('/veteran')->middleware(['auth', 'modul-access:csvi-veteran'])->group(function () {

    Route::prefix('/raports')->controller(RaportController::class)->group(function () {
        Route::get('/', 'index')->name('veteran.raport.index');
        Route::get('/table', 'table')->name('veteran.raport.table');
        Route::get('/create', 'create')->name('veteran.raport.create');
        Route::post('/store', 'store')->name('veteran.raport.store');
        Route::prefix('/{raport}')->group(function () {
            Route::get('/show', 'show')->name('veteran.raport.show');
        });
    });

    Route::prefix('/dates')->controller(DateController::class)->group(function () {
        Route::get('/', 'index')->name('veteran.date.index');
        Route::get('/table', 'table')->name('veteran.date.table');
        Route::get('/create', 'create')->name('veteran.date.create');
        Route::post('/store', 'store')->name('veteran.date.store');
        Route::prefix('/{date}')->group(function () {
            Route::get('/set-actual', 'setActual')->name('veteran.date.set-actual');
            Route::delete('/delete', 'delete')->name('veteran.date.delete');
        });
    });

    Route::prefix('/accesses')->controller(AccessController::class)->group(function () {
        Route::get('/', 'index')->name('veteran.access.index');
        Route::get('/table', 'table')->name('veteran.access.table');
        Route::get('/create', 'create')->name('veteran.access.create');
        Route::post('/store', 'store')->name('veteran.access.store');
        Route::prefix('/{access}')->group(function () {
            Route::delete('/delete', 'delete')->name('veteran.access.delete');
        });
    });

    Route::prefix('/generate-raport')->controller(GenerateController::class)->group(function () {
        Route::get('/', 'index')->name('veteran.generate-raport.index');
    });
});
