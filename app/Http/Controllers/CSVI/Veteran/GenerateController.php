<?php

namespace App\Http\Controllers\CSVI\Veteran;

use App\Http\Controllers\Controller;
use App\Jobs\CSVI\Veteran\Raport\IndexJob;
use Illuminate\Http\Request;

class GenerateController extends Controller
{
    public function index(){
        IndexJob::dispatch(user());

        return back()->with('message', 'Отчет отправлен на формирование');
    }
}
