<?php

namespace App\Http\Controllers\web\main\appeals;

use Illuminate\Http\Request;

class ChatController
{
    public function index(){
        return view('page.main.appeal.chat');
    }
}
