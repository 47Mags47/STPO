<?php

namespace App\Http\Controllers\web\csvi\cert;

use App\Models\Csvi\Csvi_Cert_Certificate;
use App\Models\Main\Main_City;
use App\Models\Main\Main_Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertController
{
    public function index()
    {
        $cities = Main_City::orderBy('name')->get();
        $divisions = Main_Division::orderBy('name')->get();
        $certificates = Csvi_Cert_Certificate::paginate(25);
        return view('page.csvi.cert.index', compact('certificates', 'cities', 'divisions'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'data.division_id' => 'required',
            'data.password' => 'required',
            'data.user' => 'required',
        ]);
        $validate['data']['cert'] = Storage::disk('cert')->putFileAs(
            '',
            $request->file('file.cert'),
            $request->file('file.cert')->getClientOriginalName()
        );
        Csvi_Cert_Certificate::create($validate['data']);
        return auth()->user()->id == 71
            ? back()->with(['message' => 'GOOOOOOOOOOOOOOOOOD MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW'])
            : back()->with(['message' => 'Запись успешно сохранена']);
    }

    public function delete(Request $request)
    {
        Csvi_Cert_Certificate::find($request->cert)->delete();
        return auth()->user()->id == 71
            ? back()->with(['message' => 'Тело уничтожено, милорд'])
            : back()->with(['message' => 'Запись удалена']);
    }
}
