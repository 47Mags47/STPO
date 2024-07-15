<?php

namespace App\Http\Controllers\web\main;

use Illuminate\Http\Request;

class DashboardController
{
    public function index(){
        $user = auth()->user();
        $respone = view('page.main.dashboard.index', compact('user'));
        if(!$user->email){
            $respone->withErrors(['email' => 'Пожалуйста, привяжите эл. почту']);
        }
        return $respone;
    }
}
