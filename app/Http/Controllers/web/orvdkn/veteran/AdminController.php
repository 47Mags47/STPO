<?php

namespace App\Http\Controllers\web\orvdkn\veteran;

use App\Jobs\Raport\orvdkn\veteranRaportJob;
use App\Models\Glossary\Glossary_Main_AccessLevel;
use App\Models\Main\Main_Access;
use App\Models\Main\Main_City;
use App\Models\Main\Main_Division;
use App\Models\Main\Main_User;
use App\Models\Orvdkn\Orvdkn_Veteran_InDate;
use App\Models\Orvdkn\Orvdkn_Veteran_Raport;
use Illuminate\Http\Request;

class AdminController
{
    public static function initPage()
    {
        $raports = Orvdkn_Veteran_Raport::where('in_date_id', Orvdkn_Veteran_InDate::actual()->id)->get();


        $acesses = Main_Access::select('main__accesses.*')
            ->join('main__users', 'main__users.id', '=', 'main__accesses.user_id')
            ->where('main__accesses.modul_id', '4')
            ->where('level_id', 2)
            ->groupBy('main__users.division_id')
            ->get();

        return collect(compact('raports', 'acesses'));
    }

    public function raports_index()
    {
        $raports = Orvdkn_Veteran_Raport::orderBy('in_date_id', 'desc')->paginate(50);
        return view('page.orvdkn.veteran.admin.raports.index', compact('raports'));
    }

    public function raports_show(Request $request, Main_Division $division)
    {
        $raport = Orvdkn_Veteran_Raport::where('in_date_id', Orvdkn_Veteran_InDate::actual()->id)->where('division_id', $division->id)->get()->first();
        $active = $division->id;
        return view('page.orvdkn.veteran.admin.raports.show', compact('raport', 'active'));
    }

    public function raports_delete(Request $request, Orvdkn_Veteran_Raport $raport)
    {
        $raport->delete();
        return back()->with(['message' => 'Запись удалена']);
    }

    public function raports_edit(Request $request, Orvdkn_Veteran_Raport $raport)
    {
        $raport->timestamps = false;
        $raport->edited = true;
        $raport->save();

        return back()->with(['message' => 'Запись Разблокирована']);
    }


    public function dates_index()
    {
        $dates = Orvdkn_Veteran_InDate::orderBy('id', 'desc')->paginate(50);
        return view('page.orvdkn.veteran.admin.dates.index', compact('dates'));
    }

    public function dates_store(Request $request)
    {
        $validated = $request->validate([
            'date' => ['required'],
        ]);

        Orvdkn_Veteran_InDate::create($validated);

        return back()->with(['message' => 'Запись успешно добавлена']);
    }

    public function date_activate(Request $request, Orvdkn_Veteran_InDate $date)
    {
        Orvdkn_Veteran_InDate::where('is_active', true)->update(['is_active' => false]);
        $date->update(['is_active' => true]);

        return back()->with(['message' => 'Дата актиаирована']);
    }

    public function date_delete(Request $request, Orvdkn_Veteran_InDate $date)
    {
        $date->delete();
        Orvdkn_Veteran_InDate::orderBy('id')->first()->update(['is_active' => true]);
        return back()->with(['message' => 'Запись успешно удалена']);
    }

    public function access_index()
    {
        $accesses = Main_Access::where('modul_id', 4)
            ->join('main__users', 'main__users.id', '=', 'main__accesses.user_id')
            ->join('main__divisions', 'main__divisions.id', '=', 'main__users.division_id')
            ->join('main__cities', 'main__cities.id', '=', 'main__divisions.city_id')
            ->orderBy('main__cities.name')
            ->orderBy('main__divisions.name')
            ->orderBy('main__users.nickname')
            ->select('main__accesses.*')
            ->paginate(50);
        $cityes = Main_City::get();
        $divisions = Main_Division::get();
        $users = Main_User::get();
        $access_levels = Glossary_Main_AccessLevel::get();

        $data = compact(
            'accesses',
            'cityes',
            'divisions',
            'users',
            'access_levels'
        );

        return view('page.orvdkn.veteran.admin.accesses.index', $data);
    }

    public function access_store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => ['required', 'notIn:0'],
            'level_id' => ['required', 'notIn:0']
        ]);

        if (Main_Access::where('modul_id', 4)->where('user_id', $validated['user_id'])->count() > 0) {
            return back()->withErrors('У данного пользователя уже есть доступ');
        }

        $data = [
            'modul_id' => 4,
            'user_id' => $validated['user_id'],
            'level_id' => $validated['level_id'],
        ];

        Main_Access::create($data);
        return back()->with(['message' => 'Запись успешно добавлена']);
    }

    public function access_delete(Request $request, Main_Access $access)
    {
        $access->delete();
        return back()->with(['message' => 'Запись успешно удалена']);
    }


    public function download_raport(Request $request, Orvdkn_Veteran_InDate $date = null)
    {
        if ($date === null) {
            $date = Orvdkn_Veteran_InDate::actual();
        }

        veteranRaportJob::dispatch(date: $date, user: auth()->user());
        return back()->with(['message' => 'Отчет формируется. По завершению вам придет уведомление']);
    }
}
