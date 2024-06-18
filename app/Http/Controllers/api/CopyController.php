<?php

namespace App\Http\Controllers\api;

use App\Models\Main\Main_User;
use Illuminate\Http\Request;

class CopyController
{
    public function user(Request $request)
    {
        if (Main_User::whereKey($request->id)->count() == 0) {
            Main_User::unguard();
            Main_User::create($request->all());
            Main_User::reguard();
        }
    }

    public function appeal(Request $request){
        $svas = [
            1 => 1,
            2 => 1,
            3 => 1,
            4 => 1,
            5 => 1,
            6 => 1,
            7 => 1,
            8 => 1,
            9 => 1,
            10 => 1,
            11 => 1,
            12 => 1,
            13 => 1,
            14 => 1,
            15 => 1,
        ];
    }
}
