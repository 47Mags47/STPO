<?php

namespace App\Http\Controllers\CSVI\Veteran;

use App\Http\Controllers\Controller;
use App\Models\CSVI\Veteran\Date;
use Illuminate\Http\Request;

class DateController extends Controller
{
    public function index(){
        $dates = Date::orderBy('date', 'desc')->paginate(50);

        return view('pages.CSVI.veteran.date.index', compact('dates'));
    }

    public function resources(Request $request)
    {
        $dates = Date::orderBy('date', 'desc')->paginate(50);

        return [
            'tbody' => view('pages.CSVI.veteran.date.table', compact('dates'))->render(),
            'paginate' => $dates->links()->render()
        ];
    }

    public function table(Request $request){
        if (!$request->ajax())
            return abort(403);

        return [
            'tbody' => $this->resources($request)['tbody'],
            'paginate' => $this->resources($request)['paginate'],
        ];
    }

    public function create(){
        return view('pages.CSVI.veteran.date.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'date' => ['required', 'date', 'after:yesterday', 'unique:'. Date::getTableName() .',date']
        ]);

        Date::create($validated);

        return redirect()->route('veteran.date.index')->with('message', 'Запись успешно создана');
    }

    public function setActual(Date $date){
        Date::where('is_actual', true)->update(['is_actual' => false]);
        $date->update(['is_actual' => true]);

        return redirect()->route('veteran.date.index')->with('message', 'Дата помечена актуальной');
    }

    public function delete(Date $date){
        $date->raports()->delete();
        $date->delete();

        return response('Запись удалена');
    }
}
