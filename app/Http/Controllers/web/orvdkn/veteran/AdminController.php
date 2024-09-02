<?php

namespace App\Http\Controllers\web\orvdkn\veteran;

use App\Events\Raport\orvdkn\RaportEvent;
use App\Models\Main\Main_Access;
use App\Models\Orvdkn\Orvdkn_Veteran_InDate;
use App\Models\Orvdkn\Orvdkn_Veteran_Raport;
use Illuminate\Http\Request;

class AdminController
{
    private $all_divisions, $raports, $actual_date;

    function __construct()
    {
        $this->actual_date = Orvdkn_Veteran_InDate::actual();
        $this->all_divisions = Main_Access::division_access(4);
        $this->raports = Orvdkn_Veteran_Raport::get();
    }

    private function normalis(array $dop=[])
    {
        return array_merge([
            'actual_date' => $this->actual_date,
            'all_divisions' => $this->all_divisions,
            'raports' => $this->raports,
        ], $dop);
    }

    public function index()
    {
        return view('page.orvdkn.index', $this->normalis());
    }

    public function show(Request $request)
    {
        $raport = Orvdkn_Veteran_Raport::where('division_id', $request->division)->where('in_date_id', $request->date)->first();
        return view('page.orvdkn.show', $this->normalis(compact('raport')));
    }

    public function raport(){
        RaportEvent::dispatch();
        return back()->with(['message' => 'Отчет формируется. По завершению Вам придет оповещение']);
    }

}
