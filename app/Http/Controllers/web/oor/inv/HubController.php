<?php

namespace App\Http\Controllers\web\oor\inv;

use App\Models\Main\Main_Modul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HubController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $modul = Main_Modul::where('link', 'inv')->get()->first();
        if (Gate::allows('modul-admin', $modul)) {
            return redirect()->route('inv.inspector');
        } else {
            return redirect()->route('inv.filling.hub');
        }
    }
}
