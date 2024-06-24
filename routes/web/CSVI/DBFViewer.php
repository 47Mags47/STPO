<?php

use App\Http\Controllers\web\csvi\DBFViewercontroller;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('DBFViewer', [DBFViewercontroller::class, 'index'])->name('DBFViewer');
    Route::post('DBFViewer', [DBFViewercontroller::class, 'opened']);
    Route::post('DBFViewer/open', [DBFViewercontroller::class, 'open'])->name('DBFViewer.open');

    Route::post('DBFViewer/import', [DBFViewercontroller::class, 'import'])->name('DBFViewer.import');
    Route::post('DBFViewer/export', [DBFViewercontroller::class, 'export'])->name('DBFViewer.export');
});
