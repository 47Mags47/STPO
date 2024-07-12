<?php

namespace App\Http\Controllers\web\main;

use Illuminate\Http\Request;

class DashboardController
{
    public function index(){
        $user = auth()->user();
        return view('page.main.dashboard.index', compact('user'));
    }
}
