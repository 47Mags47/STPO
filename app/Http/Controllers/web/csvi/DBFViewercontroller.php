<?php

namespace App\Http\Controllers\web\csvi;

use Illuminate\Http\Request;

class DBFViewercontroller
{

    public function index(Request $request)
    {
        if ($request->session()->get('data')) {
            return view(
                'page.csvi.DBFViewer.index',
                [
                    'headers' => $request->session()->get('data')['headers'],
                    'records' => $request->session()->get('data')['records']
                ]
            );
        } else {
            return view('page.csvi.DBFViewer.index');
        }
    }

    public function open(Request $request)
    {
        $path = storage_path('app/') . $request->file('open_file')->store('tmp');
        if ($data = $this->read($path)) {
            session()->put(compact('data'));
            return back();
        } else {
            return back()->withErrors(['open_file' => 'Не удалось открыть файл']);
        }
    }

    public function import(Request $request)
    {
        $path = storage_path('app/') . $request->file('import_file')->store('tmp');
        if ($data = $this->read($path)) {
            foreach ($data['records'] as $record) {
                session()->push('data.records', $record);
            }
            return back();
        } else {
            return back()->withErrors(['open_file' => 'Не удалось открыть файл']);
        }
    }

    public function export(Request $request)
    {
        dd($request->all());
    }

    public function read($path)
    {
        try {
            $dbf = dbase_open($path, 0);
            if ($dbf) {
                $headers = collect(dbase_get_header_info($dbf))->map(function ($header) {
                    return $header['name'];
                })->toArray();

                $records_count = dbase_numrecords($dbf);
                $records = [];

                $file = file_get_contents($path);
                $encoding = mb_detect_encoding($file);

                foreach (range(1, $records_count) as $index) {
                    $records[] = mb_convert_encoding(dbase_get_record_with_names($dbf, $index), $encoding, 'cp866');
                }

                return compact('headers', 'records');
            } else {
                return false;
            }
        } catch (\Throwable $th) {
            return false;
        }
    }
}
