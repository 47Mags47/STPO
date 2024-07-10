<?php

namespace App\Http\Controllers\web\oor\inv;

use App\Models\Main\Main_Access;
use App\Models\Main\Main_Division;
use App\Models\Oor\Oor_Inv_Data;
use App\Models\Oor\Oor_Inv_InDate;
use App\Models\Oor\Oor_Inv_Raport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class InspectorController
{
    public function index()
    {
        $page_data = PageController::inspectorPageData();
        return view('page.oor.inv.inspector.index', $page_data);
    }

    public function raportShow(Request $request)
    {
        $inspectorPageData = PageController::inspectorPageData();
        $inspectorRaportData = PageController::inspectorRaportData($request->raport, $request->sheet);
        // $division_id = Main_Division::where('id', Oor_Inv_Raport::where(''))
        return view('page.oor.inv.inspector.raport', array_merge($inspectorRaportData, $inspectorPageData));
    }

    public function raports()
    {
        $page_data = PageController::inspectorPageData();
        $raports = Oor_Inv_Raport::where('in_date_id', Oor_Inv_InDate::actual()->id)->get();
        return view('page.oor.inv.inspector.raports', array_merge($page_data, compact('raports')));
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

        return response()
            ->download(Storage::disk('tmp')->path($file_name), $raport->division->name . '.xlsx', ['Cache-Control' => 'no-cache, must-revalidate']);
    }

    public function dates()
    {
        $page_data = PageController::inspectorPageData();
        $dates = Oor_Inv_InDate::orderBy('date', 'desc')->get();
        return view('page.oor.inv.inspector.dates', array_merge($page_data, compact('dates')));
    }

    public function dateAdd(Request $request)
    {
        $validated = $request->validate([
            'data.date' => ['required', 'date', 'after_or_equal:today', 'unique:oor__inv__in_dates,date']
        ]);
        Oor_Inv_InDate::create($validated['data']);
        return back()->with(['message' => date('d.m.Y', strtotime($validated['data']['date'])) . ' Успешно добавлено']);
    }

    public function dateActivete(Request $request)
    {
        Oor_Inv_InDate::activate($request->date_id);
        return back();
    }

    public function accesses(){
        $page_data = PageController::inspectorPageData();
        $accesses = Main_Access::where('modul_id', 7)->get();
        return view('page.oor.inv.inspector.accesses', array_merge($page_data, compact('accesses')));
    }

    public function SvodDownload()
    {
        $data = Oor_Inv_InDate::data();
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load(Storage::disk('patterns')->path('OOR_INV_RAPORT.xlsx'));
        $data->map(function ($sheet_data, $sheet_index) use ($spreadsheet) {
            $activeSheet = $spreadsheet->setActiveSheetIndex($sheet_index);
            $sheet_data->map(function ($value, $coord) use ($activeSheet) {
                $activeSheet->setCellValue($coord, $value);
            });
        });

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $file_name = Str::random(40) . '.xlsx';
        $writer->save(Storage::disk('tmp')->path('') . '/' . $file_name);
        return Storage::disk('tmp')->download($file_name, Oor_Inv_InDate::actual()->date . ' формирования и развития системы комплексной реабилитации и абилитации инвалидов.xlsx');
    }
}
