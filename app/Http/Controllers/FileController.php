<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index(string $path)
    {
        return response()->download(storage_path($path));
    }
}
