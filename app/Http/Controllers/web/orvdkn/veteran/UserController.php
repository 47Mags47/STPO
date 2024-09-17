<?php

namespace App\Http\Controllers\web\orvdkn\veteran;

use App\Models\Orvdkn\Orvdkn_Veteran_InDate;
use App\Models\Orvdkn\Orvdkn_Veteran_Raport;
use Illuminate\Http\Request;

class UserController
{
    private static function getStatus($raport){
        if($raport == null){
            return 'dont-create';
        }
    }

    public function create()
    {
        $raport = Orvdkn_Veteran_Raport::where('in_date_id', Orvdkn_Veteran_InDate::actual()->id)
            ->where('division_id', auth()->user()->division_id)
            ->get()
            ->first();

        if ($raport) {
            return $raport->edited
                ? redirect()->route('veteran-truda.edit', compact('raport'))
                : redirect()->route('veteran-truda.show', compact('raport'));
        }

        return view('page.orvdkn.veteran.user.create');
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

        $raport = Orvdkn_Veteran_Raport::create(array_merge($validate, [
            'creator_id' => auth()->user()->id,
            'division_id' => auth()->user()->division_id,
            'in_date_id' => Orvdkn_Veteran_InDate::actual()->id
        ]));

        return redirect()->route('veteran-truda.show', compact('raport'));
    }

    public function show(Request $request, Orvdkn_Veteran_Raport $raport)
    {
        return view('page.orvdkn.veteran.user.show', compact('raport'));
    }

    public function edit(Request $request, Orvdkn_Veteran_Raport $raport)
    {


        return view('page.orvdkn.veteran.user.edit', compact('raport'));
    }

    public function update(Request $request, Orvdkn_Veteran_Raport $raport)
    {
        $validate = $request->validate([
            'all' => ['required', 'integer'],
            'el' => ['required', 'integer'],
            'mfc' => ['required', 'integer'],
        ]);
        $raport->update(array_merge($validate, ['edited' => False]));
        return redirect()->route('veteran-truda.show', compact('raport'));
    }
}
