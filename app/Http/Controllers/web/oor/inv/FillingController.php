<?php

namespace App\Http\Controllers\web\oor\inv;

use App\Models\Glossary\Glossary_Oor_inv_sheet;
use App\Models\Oor\Oor_Inv_Data;
use App\Models\Oor\Oor_Inv_InDate;
use App\Models\Oor\Oor_Inv_Raport;
use Illuminate\Http\Request;

class FillingController
{
    public function hub(Request $request){
        $in_date = Oor_Inv_InDate::actual();
        $division = auth()->user()->division;
        $raport = Oor_Inv_Raport::firstOrCreate([
            'in_date_id' => $in_date->id,
            'division_id' => $division->id,
        ],[
            'worker_id' => auth()->user()->id
        ]);

        return redirect()->route('inv.filling.edit', ['raport' => $raport, 'sheet' => 2]);
    }

    public function edit(Request $request, Oor_Inv_Raport $raport, Glossary_Oor_inv_sheet $sheet){
        return view("page.oor.inv.filling.sheets.$sheet->id", compact('raport', 'sheet'));
    }


    // public function index(Request $request)
    // {
    //     if (!$request->sheet) {
    //         return redirect()->route('inv.filling.sheet', ['sheet' => 2]);
    //     }

    //     $sheet_id = $request->sheet ? $request->sheet : 2;
    //     $page_data = PageController::fillingPageData($sheet_id);
    //     return view('page.oor.inv.filling.index', $page_data);
    // }

    // public function fillingSave(Request $request)
    // {
    //     $raport = Oor_Inv_Raport::firstOrCreate([
    //         'division_id' => auth()->user()->division_id,
    //         'in_date_id' => Oor_Inv_InDate::actual()->id,
    //     ], [
    //         'worker_id' => auth()->user()->id,
    //     ]);
    //     foreach ($request->data as $coord => $value) {
    //         Oor_Inv_Data::updateOrCreate([
    //             'raport_id' => $raport->id,
    //             'sheet_id' => $request->sheet,
    //             'coord' => $coord
    //         ], [
    //             'value' => $value
    //         ]);
    //     }
    //     return back()->with(['message' => 'Данные успешно сохранены']);
    // }
}
