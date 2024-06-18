<?php

namespace App\Http\Controllers\web\main;

use App\Models\Csvi\Csvi_Appeal_Appeal;
use App\Models\Main\Main_User;
use Illuminate\Http\Request;

class AppealController
{
    public function index(){
        $sender_ids = Csvi_Appeal_Appeal::groupBy('sender_id')->pluck('sender_id')->toArray();
        $senders = Main_User::whereIn('id', $sender_ids)->get();
        return view('page.main.appeal.index', compact('senders'));
    }
}
