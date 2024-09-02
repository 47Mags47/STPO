<?php

namespace App\Http\Controllers\web\main;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadCoontroller
{
    public function download(Request $request)
    {
        return response()->download(Storage::path("public/$request->path"), $request->name);
    }
}
