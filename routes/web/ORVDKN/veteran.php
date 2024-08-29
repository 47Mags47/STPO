<?php
use App\Http\Controllers\web\orvdkn\veteran\AdminController;
use App\Http\Controllers\web\orvdkn\veteran\HubController;
use App\Http\Controllers\web\orvdkn\veteran\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'has-access:veteran-truda'])->group(function () {
    Route::get('/veteran', [HubController::class, 'hub'])->name('veteran-truda');

    Route::middleware('modul-user:veteran-truda')->group(function () {
        Route::get('/veteran/create', [UserController::class, 'create'])->name('veteran-truda.create');
        Route::post('/veteran/store', [UserController::class, 'store'])->name('veteran-truda.store');
    });
    Route::middleware('modul-admin:veteran-truda')->group(function () {
        Route::get('/veteran/index', [AdminController::class, 'index'])->name('veteran-truda.index');
        Route::get('/veteran/{division}/{date}/show', [AdminController::class, 'show'])->name('veteran-truda.show');
        Route::get('/veteran/index/raport', [AdminController::class, 'raport'])->name('veteran-truda.raport');
    });
});