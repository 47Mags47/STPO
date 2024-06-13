<?php

namespace App\Http\Controllers\web\main;

use Illuminate\Http\Request;

class DashboardController
{
    public function index(){
        return view('page.main.dashboard.index');
    }
}
