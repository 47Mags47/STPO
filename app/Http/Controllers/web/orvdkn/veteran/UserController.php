<?php

namespace App\Http\Controllers\web\orvdkn\veteran;

use App\Models\Orvdkn\Orvdkn_Veteran_InDate;
use App\Models\Orvdkn\Orvdkn_Veteran_Raport;
use Illuminate\Http\Request;

class UserController
{
    public function create()
    {
        $raport = Orvdkn_Veteran_Raport::firstOrCreate([
            'division_id' => auth()->user()->division_id,
            'in_date_id' => Orvdkn_Veteran_InDate::actual()->id,
        ]);
        return view('page.orvdkn.create', compact('raport'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'all' => ['required', 'integer'],
            'el' => ['required', 'integer'],
            'mfc' => ['required', 'integer'],
        ]);

        if ($validate['el'] + $validate['mfc'] > $validate['all']) {
            return back()->withErrors('Нодопустимые значения');
        }

        Orvdkn_Veteran_Raport::where('in_date_id', Orvdkn_Veteran_InDate::actual()->id)
            ->where('division_id', auth()->user()->division_id)
            ->update($validate);

        return back()->with(['message' => 'Данные успешно сохранены']);
    }
}
