<?php

namespace App\Http\Controllers\web\oor;

use App\Models\Glossary\Glossary_Oor_inv_sheet;
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
    private function modul()
    {
        return Main_Modul::whereKey(7)->get()->first();
    }

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
        $page_data = $this->fillingPageData($sheet_id);
        return view('page.oor.inv.filling.index', $page_data);
    }

    public static function fillingPageData($sheet_id)
    {
        $sheets = Glossary_Oor_inv_sheet::get();
        $sheet_header = Glossary_Oor_inv_sheet::whereKey($sheet_id)->get()->first()->header;
        $raport = Oor_Inv_Raport::firstOrCreate([
            'division_id' => auth()->user()->division_id,
            'in_date_id' => Oor_Inv_InDate::actual()->id,
        ], [
            'worker_id' => auth()->user()->id
        ]);
        $data = $raport->data->where('sheet_id', $sheet_id)->pluck('value', 'coord');
        return compact('sheet_id', 'sheets', 'sheet_header', 'data');
    }

    public function fillingSave(Request $request)
    {
        $raport = Oor_Inv_Raport::firstOrCreate([
            'worker_id' => auth()->user()->id,
            'in_date_id' => Oor_Inv_InDate::actual()->id,
        ], [
            'division_id' => auth()->user()->division_id
        ]);
        foreach ($request->data as $coord => $value) {
            Oor_Inv_Data::updateOrCreate([
                'raport_id' => $raport->id,
                'sheet_id' => $request->sheet,
                'coord' => $coord
            ], [
                'value' => $value
            ]);
        }
        return back()->with(['message' => 'Данные успешно сохранены']);
    }

    public function inspector()
    {
        $page_data = $this->inspectorPageData();
        return view('page.oor.inv.inspector.index', $page_data);
    }

    public function inspectorPageData()
    {
        $all_divisions = Main_Access::divisions($this->modul());
        $raportClass = Oor_Inv_Raport::class;
        return compact('all_divisions', 'raportClass');
    }

    public static function inspectorRaportData($division_id, $sheet_id)
    {
        $sheets = Glossary_Oor_inv_sheet::get();
        $sheet_header = Glossary_Oor_inv_sheet::whereKey($sheet_id)->get()->first()->header;
        $raport = Oor_Inv_Raport::where('division_id', $division_id)
            ->where('in_date_id', Oor_Inv_InDate::actual()->id)
            ->get()
            ->first();
        $data = $raport->data->where('sheet_id', $sheet_id)->pluck('value', 'coord');

        return compact('sheets', 'sheet_header', 'data', 'division_id', 'raport');
    }

    public function raportShow(Request $request)
    {
        $inspector_page_data = $this->inspectorPageData();
        $sheet_id = $request->sheet ? $request->sheet : 2;
        $division_id = $request->division;
        $inspector_raport_data = $this->inspectorRaportData($division_id, $sheet_id);

        return view('page.oor.inv.inspector.raport', array_merge(compact('sheet_id'), $inspector_page_data, $inspector_raport_data));
    }

    public function RaportDownload(Request $request){
        $raport = Oor_Inv_Raport::whereKey($request->raport)->get()->first();
        $division = Main_Division::whereKey($raport->division_id)->get()->first();
        $data = $raport->data;


        dd($data);
    }
}
