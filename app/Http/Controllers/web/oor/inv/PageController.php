<?php

namespace App\Http\Controllers\web\oor\inv;

use App\Models\Glossary\Glossary_Main_AccessLevel;
use App\Models\Glossary\Glossary_Oor_inv_sheet;
use App\Models\Main\Main_Access;
use App\Models\Main\Main_City;
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
        $sheet = Glossary_Oor_inv_sheet::find($sheet_id);
        $raport = Oor_Inv_Raport::firstOrCreate([
            'division_id' => auth()->user()->division_id,
            'in_date_id' => Oor_Inv_InDate::actual()->id,
        ], [
            'worker_id' => auth()->user()->id
        ]);
        $data = $raport->data->where('sheet_id', $sheet_id)->pluck('value', 'coord');
        return compact('sheet_id', 'sheets', 'sheet', 'data');
    }

    public static function inspectorPageData()
    {
        $all_divisions = Main_Access::division_access(7);
        $raports = Oor_Inv_Raport::select('oor__inv__raports.*')
            ->join('main__divisions', 'main__divisions.id', '=', 'oor__inv__raports.division_id')
            ->join('main__cities', 'main__cities.id', '=', 'main__divisions.city_id')
            ->where('in_date_id', Oor_Inv_InDate::actual()->id)
            ->orderBy('main__cities.name')
            ->orderBy('main__divisions.name')
            ->get();
        return compact('all_divisions', 'raports');
    }

    public static function inspectorRaportData($raport_id, $sheet_id = 2)
    {
        $sheets = Glossary_Oor_inv_sheet::orderBy('index')->get();
        $sheet = Glossary_Oor_inv_sheet::find($sheet_id);
        $current_raport = Oor_Inv_Raport::find($raport_id);
        $data = $current_raport::sheetData($current_raport->id, $sheet_id);

        return compact('sheets', 'sheet', 'current_raport', 'data');
    }

    public static function inspectorAccessData(){
        $select_cityes = Main_City::orderBy('name')->get();
        $select_divisions = Main_Division::orderBy('name')->get();
        $select_users = Main_User::orderBy('nickname')->get();
        $select_access_levels = Glossary_Main_AccessLevel::get();
        return compact('select_cityes', 'select_divisions', 'select_users', 'select_access_levels');
    }
}
