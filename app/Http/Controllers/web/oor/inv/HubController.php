<?php

namespace App\Http\Controllers\web\oor\inv;

use App\Models\Main\Main_Modul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HubController extends Controller
{
    public function __invoke()
    {
        $modul = Main_Modul::where('link', 'inv')->get()->first();
        if (Gate::allows('user-modul-adminer', $modul)) {
            return redirect()->route('inv.inspector');
        } else {
            return redirect()->route('inv.filling');
        }
    }
}
