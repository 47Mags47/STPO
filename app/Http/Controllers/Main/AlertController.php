<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlertController extends Controller
{
    public function getId(Request $request){
        return response()->json(['user_id' => user()->id]);
    }

    public function read(Request $request)
    {
        if ($request->user() === null)
            return abort(402, 'User not define');

        user()->readAlerts();
    }
}
