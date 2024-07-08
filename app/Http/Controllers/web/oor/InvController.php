<?php

namespace App\Http\Controllers\web\oor;

use App\Models\Glossary\Glossary_Oor_inv_sheet;
use App\Models\Main\Main_Access;
use App\Models\Main\Main_Modul;
use App\Models\Oor\Oor_Inv_Data;
use App\Models\Oor\Oor_Inv_InDate;
use App\Models\Oor\Oor_Inv_Raport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Str;

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

    public function raports(){
        $page_data = $this->inspectorPageData();
        // $dates = Oor_Inv_InDate::orderBy('id', 'desc')->get();
        $raports = Oor_Inv_Raport::where('in_date_id', Oor_Inv_InDate::actual()->id)->get();
        return view('page.oor.inv.inspector.raports', array_merge($page_data, compact('raports')));
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

    public function RaportDownload(Request $request)
    {
        $raport = Oor_Inv_Raport::whereKey($request->raport)->get()->first();
        $data = $raport->data;

        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load(Storage::disk('patterns')->path('OOR_INV_RAPORT.xlsx'));
        $data->map(function ($model) use ($spreadsheet) {
            $sheet_index = $model->sheet->sheet_index;
            $activeSheet = $spreadsheet->setActiveSheetIndex($sheet_index);
            $activeSheet->setCellValue($model->coord, $model->value);
        });

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $file_name = Str::random(40) . '.xlsx';
        $writer->save(Storage::disk('tmp')->path('') . '/' . $file_name);

        return Storage::disk('tmp')->download($file_name, $raport->division->name . '.xlsx');
    }

    public function Download(){
        $data = Oor_Inv_InDate::data();
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load(Storage::disk('patterns')->path('OOR_INV_RAPORT.xlsx'));
        $data->map(function($sheet_data, $sheet_index) use ($spreadsheet){
            $activeSheet = $spreadsheet->setActiveSheetIndex($sheet_index);
            $sheet_data->map(function($value, $coord) use ($activeSheet){
                $activeSheet->setCellValue($coord, $value);
            });
        });

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $file_name = Str::random(40) . '.xlsx';
        $writer->save(Storage::disk('tmp')->path('') . '/' . $file_name);
        return Storage::disk('tmp')->download($file_name, Oor_Inv_InDate::actual()->date . ' формирования и развития системы комплексной реабилитации и абилитации инвалидов.xlsx');
    }


}
