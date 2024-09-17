<?php
use App\Http\Controllers\web\csvi\cert\CertController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'modul-access:cert'])->group(function () {
    Route::middleware('modul-admin:cert')->group(function () {
        Route::get('/cert', [CertController::class, 'index'])->name('cert');
        Route::post('/cert', [CertController::class, 'store'])->name('cert.store');
        Route::get('/cert/{cert}/delete', [CertController::class, 'delete'])->name('cert.delete');
    });
});
