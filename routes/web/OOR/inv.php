<?php
use App\Http\Controllers\web\oor\InvController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'has-access:inv'])->group(function () {
    Route::get('/inv', [InvController::class, 'hub'])->name('inv');

    Route::middleware('modul-user:inv')->group(function () {
        Route::get('/inv/filling', [InvController::class, 'filling'])->name('inv.filling');
        Route::get('/inv/filling/{sheet}', [InvController::class, 'filling'])->name('inv.filling.sheet');

        Route::post('/inv/filling/{sheet}/save', [InvController::class, 'fillingSave'])->name('inv.filling.sheet.save');
    });

    Route::middleware('modul-admin:inv')->group(function () {
        Route::get('/inv/inspector', [InvController::class, 'inspector'])->name('inv.inspector');
    });
});
