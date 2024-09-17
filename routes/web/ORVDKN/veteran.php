<?php
use App\Http\Controllers\web\orvdkn\veteran\AdminController;
use App\Http\Controllers\web\orvdkn\veteran\HubController;
use App\Http\Controllers\web\orvdkn\veteran\UserController;
use App\Http\Controllers\web\orvdkn\VeteranController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'modul-access:veteran-truda'])->group(function () {
    Route::get('/veteran-truda', [HubController::class, 'hub'])->name('veteran-truda');

    Route::middleware('modul-user:veteran-truda')->group(function () {
        Route::get('/veteran-truda/create', [UserController::class, 'create'])->name('veteran-truda.create');
        Route::post('/veteran-truda/store', [UserController::class, 'store'])->name('veteran-truda.store');
        Route::get('/veteran-truda/{raport}/show', [UserController::class, 'show'])->name('veteran-truda.show');
        Route::get('/veteran-truda/{raport}/edit', [UserController::class, 'edit'])->name('veteran-truda.edit');
        Route::put('/veteran-truda/{raport}/update', [UserController::class, 'update'])->name('veteran-truda.update');
    });

    Route::middleware('modul-admin:veteran-truda')->group(function () {
        Route::get('/veteran-truda/admin/raports', [AdminController::class, 'raports_index'])->name('veteran-truda.admin.raports.index');
        Route::get('/veteran-truda/admin/raports/{raport}/delete', [AdminController::class, 'raports_delete'])->name('veteran-truda.admin.raports.delete');
        Route::get('/veteran-truda/admin/raports/{raport}/edit', [AdminController::class, 'raports_edit'])->name('veteran-truda.admin.raports.edit');

        Route::get('/veteran-truda/admin/dates', [AdminController::class, 'dates_index'])->name('veteran-truda.admin.dates.index');
        Route::post('/veteran-truda/admin/dates/store', [AdminController::class, 'dates_store'])->name('veteran-truda.admin.dates.store');
        Route::get('/veteran-truda/admin/dates/{date}/activate', [AdminController::class, 'date_activate'])->name('veteran-truda.admin.date.activate');
        Route::get('/veteran-truda/admin/dates/{date}/delete', [AdminController::class, 'date_delete'])->name('veteran-truda.admin.date.delete');

        Route::get('/veteran-truda/admin/access', [AdminController::class, 'access_index'])->name('veteran-truda.admin.accesses.index');
        Route::post('/veteran-truda/admin/access/store', [AdminController::class, 'access_store'])->name('veteran-truda.admin.access.store');
        Route::get('/veteran-truda/admin/access/{access}/delete', [AdminController::class, 'access_delete'])->name('veteran-truda.admin.access.delete');

        Route::get('/veteran-truda/admin/raport/download/{date?}', [AdminController::class, 'download_raport'])->name('veteran-truda.admin.raport.download');

    });
});