<?php

namespace App\Http\Controllers\web\oor;

use App\Models\Main\Main_Access;
use App\Models\Main\Main_Division;
use App\Models\Main\Main_Modul;
use App\Models\Main\Main_ModulSheet;
use App\Models\Main\Main_User;
use App\Models\Oor\Oor_Inv_Data;
use App\Models\Oor\Oor_Inv_InDate;
use App\Models\Oor\Oor_Inv_Raport;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class InvController
{
    public function hub()
    {
        $modul = Main_Modul::where('link', 'inv')->get()->first();
        if (Gate::allows('user-modul-adminer', $modul)) {
            return redirect()->route('inv.inspector');
        } else {
            return redirect()->route('inv.filling');
        }
    }

    public function filling(Request $request)
    {
        if (!$request->sheet) {
            return redirect()->route('inv.filling.sheet', ['sheet' => 2]);
        }

        $sheet_id = $request->sheet ? $request->sheet : 2;
        $sheets = Main_ModulSheet::where('modul_id', 7)->get();
        $raport = Oor_Inv_Raport::where('worker_id', auth()->user()->id)
            ->where('in_date_id', Oor_Inv_InDate::actual()->id)
            ->get()
            ->first();
        $data = $raport ? Oor_Inv_Data::where('raport_id', $raport->id)->get()->pluck('value', 'coord') : collect([]);
        return view('page.oor.inv.filling.index', compact('sheet_id', 'sheets', 'data'));
    }

    public function fillingSave(Request $request)
    {
        $raport = Oor_Inv_Raport::firstOrCreate([
            'worker_id' => auth()->user()->id,
            'in_date_id' => Oor_Inv_InDate::actual()->id,
        ],[
            'division_id' => auth()->user()->division_id
        ]);
        foreach ($request->data as $coord => $value) {
            Oor_Inv_Data::updateOrCreate([
                'raport_id' => $raport->id,
                'coord' => $coord
            ], [
                'value' => $value
            ]);
        }
        return back()->with(['message' => 'Данные успешно сохранены']);
    }

    public function inspector()
    {
        // $raports = Oor_Inv_Raport::class;
        $user_ids = Main_Access::where('modul_id', 7)->where('level_id', 2)->get()->pluck('user_id');
        $division_ids = Main_User::whereIn('id', $user_ids)->get()->pluck('division_id');
        $divisions = Main_Division::whereIn('id', $division_ids)->get();

        return view('page.oor.inv.inspector.index', compact('divisions'));
    }
}
