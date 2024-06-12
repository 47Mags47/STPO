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
}
