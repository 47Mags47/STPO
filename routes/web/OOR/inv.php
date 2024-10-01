<?php
use App\Http\Controllers\web\oor\inv\FillingController;
use App\Http\Controllers\web\oor\inv\HubController;
use App\Http\Controllers\web\oor\inv\InspectorController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'modul-access:inv'])->group(function () {
    Route::get('/inv', HubController::class)->name('inv');
    Route::middleware('modul-user:inv')->group(function () {

        Route::get('/inv/filling/hub', [FillingController::class, 'hub'])->name('inv.filling.hub');
        Route::get('/inv/filling/{raport}/{sheet}/edit', [FillingController::class, 'edit'])->name('inv.filling.edit');

        // Route::get('/inv/filling/{sheet}', [FillingController::class, 'index'])->name('inv.filling.sheet');
        // Route::post('/inv/filling/{sheet}/save', [FillingController::class, 'fillingSave'])->name('inv.filling.sheet.save');
    });
    // Route::middleware('modul-admin:inv')->group(function () {
    //     Route::get('/inv/inspector', [InspectorController::class, 'index'])->name('inv.inspector');

    //     Route::get('/inv/inspector/raports', [InspectorController::class, 'raports'])->name('inv.inspector.raports');

    //     Route::get('/inv/inspector/dates', [InspectorController::class, 'dates'])->name('inv.inspector.dates');
    //     Route::post('/inv/inspector/dates', [InspectorController::class, 'dateAdd']);
    //     Route::get('/inv/inspector/date/{date_id}/activate', [InspectorController::class, 'dateActivete'])->name('inv.inspector.date.activate');

    //     Route::get('/inv/inspector/accesses', [InspectorController::class, 'accesses'])->name('inv.inspector.accesses');
    //     Route::post('/inv/inspector/accesses', [InspectorController::class, 'accessesAdd']);
    //     Route::get('/inv/inspector/accesses/{access}/delete', [InspectorController::class, 'accessesDelete'])->name('inv.inspector.accesses.delete');

    //     Route::get('/inv/inspector/{raport}/{sheet}/show', [InspectorController::class, 'raportShow'])->name('inv.inspector.raport.show');
    //     Route::get('/inv/inspector/{raport}/download', [InspectorController::class, 'RaportDownload'])->name('inv.inspector.raport.download');

    //     Route::get('/inv/inspector/download', [InspectorController::class, 'SvodDownload'])->name('inv.inspector.svod.download');
    // });
});
