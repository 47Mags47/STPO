<?php

namespace App\Http\Controllers\CSVI\Technical;

use App\Core\XLSXWriter;
use App\Http\Controllers\Controller;
use App\Jobs\CSVI\Technical\Export;
use App\Models\CSVI\Technical\Technical;
use Illuminate\Http\Request;

class RaportController extends Controller
{
    public function generate()
    {
        Export::dispatch(user());
        return back()->with('message', 'Отчет отправлен на загрузку, дождитесь оповещения');
    }
}
