<?php
use App\Http\Controllers\web\oor\inv\HubController;
use App\Http\Controllers\web\oor\InvController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'has-access:inv'])->group(function () {
    Route::get('/inv', [InvController::class, 'hub'])->name('inv');
    //Route::get('/inv', [HubController::class])->name('inv');

    Route::middleware('modul-user:inv')->group(function () {
        Route::get('/inv/filling', [InvController::class, 'filling'])->name('inv.filling');
        Route::get('/inv/filling/{sheet}', [InvController::class, 'filling'])->name('inv.filling.sheet');

        Route::post('/inv/filling/{sheet}/save', [InvController::class, 'fillingSave'])->name('inv.filling.sheet.save');
    });

    Route::middleware('modul-admin:inv')->group(function () {
        Route::get('/inv/inspector', [InvController::class, 'inspector'])->name('inv.inspector');
        Route::get('/inv/inspector/{division}/{sheet}/show', [InvController::class, 'raportShow'])->name('inv.inspector.raport.show');
        Route::get('/inv/inspector/raports', [InvController::class, 'raports'])->name('inv.inspector.raports');
        Route::get('/inv/inspector/dates', [InvController::class, 'dates'])->name('inv.inspector.dates');
        Route::get('/inv/inspector/{raport}/download', [InvController::class, 'RaportDownload'])->name('inv.inspector.raport.download');
        Route::get('/inv/inspector/download', [InvController::class, 'Download'])->name('inv.inspector.download');
    });
});
