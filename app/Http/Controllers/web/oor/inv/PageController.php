<?php

namespace App\Http\Controllers\web\oor\inv;

use App\Models\Glossary\Glossary_Oor_inv_sheet;
use App\Models\Main\Main_Access;
use App\Models\Main\Main_Division;
use App\Models\Main\Main_Modul;
use App\Models\Main\Main_User;
use App\Models\Oor\Oor_Inv_InDate;
use App\Models\Oor\Oor_Inv_Raport;
use Illuminate\Http\Request;

class PageController
{
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

    public static function inspectorPageData()
    {
        $divisions = Main_Access::division_access(7);
        $raportClass = Oor_Inv_Raport::class;
        return compact('divisions', 'raportClass');
    }

    public static function inspectorRaportData($raport_id, $sheet_id = null)
    {
        $sheets = Glossary_Oor_inv_sheet::get();
        $sheet_header = Glossary_Oor_inv_sheet::whereKey($sheet_id)->get()->first()->header;
        $data = Oor_Inv_Raport::sheetData($raport_id, $sheet_id ? $sheet_id : 2);
        $division_id = Oor_Inv_Raport::whereKey($raport_id)->get()->first()->division_id;

        return compact('sheets', 'sheet_header', 'data', 'sheet_id', 'raport_id', 'division_id');
    }
}
