<?php

use App\Http\Controllers\CSVI\Technical\DeletedController;
use App\Http\Controllers\CSVI\Technical\FolderController;
use App\Http\Controllers\CSVI\Technical\TechnicalController;
use Illuminate\Support\Facades\Route;

Route::prefix('technicals/')->middleware(['auth', 'modul-access:csvi-technical'])->group(function () {
    Route::controller(TechnicalController::class)->group(function () {
        Route::get('/', 'index')->name('technical.index');
        Route::get('/table', 'table')->name('technical.table');
        Route::get('/create', 'create')->name('technical.create');
        Route::post('/store', 'store')->name('technical.store');
        Route::prefix('/{technical}')->group(function () {
            Route::get('/edit', 'edit')->name('technical.edit');
            Route::put('/update', 'update')->name('technical.update');
            Route::delete('/delete', 'delete')->name('technical.delete');
        });
    });

    Route::prefix('folders/')->controller(FolderController::class)->group(function () {
        Route::get('/', 'index')->name('technical.folder.index');
        Route::get('/create/{parent?}', 'create')->name('technical.folder.create');
        Route::post('/store', 'store')->name('technical.folder.store');
        Route::prefix('/{folder}')->group(function () {
            Route::get('/edit', 'edit')->name('technical.folder.edit');
            Route::put('/update', 'update')->name('technical.folder.update');
            /* HACK перенести на метод delete */
            Route::get('/delete', 'delete')->name('technical.folder.delete');
        });
    });

    Route::prefix('deleted/')->controller(DeletedController::class)->group(function () {
        Route::get('/', 'index')->name('technical.deleted.index');
        Route::get('/table', 'table')->name('technical.deleted.table');
        Route::prefix('/{technical}')->group(function () {
            Route::get('/edit', 'edit')->name('technical.deleted.edit');
            Route::put('/update', 'update')->name('technical.deleted.update');
            Route::delete('/delete', 'delete')->name('technical.deleted.delete');
        });
    });
});
