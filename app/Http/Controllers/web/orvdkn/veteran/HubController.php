<?php

namespace App\Http\Controllers\web\orvdkn\veteran;

use App\Models\Main\Main_Modul;
use Illuminate\Support\Facades\Gate;

class HubController
{
    public function hub()
    {
        $modul = Main_Modul::where('link', 'veteran-truda')->get()->first();
        if (Gate::allows('modul-admin', $modul)) {
            return redirect()->route('veteran-truda.admin.raports.index');
        } else {
            return redirect()->route('veteran-truda.create');
        }
    }
}
