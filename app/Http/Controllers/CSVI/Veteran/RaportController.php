<?php

namespace App\Http\Controllers\CSVI\Veteran;

use App\Filters\CSVI\Veteran\RaportFilter;
use App\Http\Controllers\Controller;
use App\Models\CSVI\Veteran\Date;
use App\Models\CSVI\Veteran\Raport;
use Illuminate\Http\Request;

class RaportController extends Controller
{
    public function index()
    {
        return user()->hasPermission('veteran-admin')
            ? view('pages.CSVI.veteran.raport.index')
            : redirect()->route('veteran.raport.create');
    }

    public function table(Request $request)
    {
        if (!$request->ajax())
            return abort(403);

        return [
            'tbody' => $this->resources($request)['tbody'],
            'paginate' => $this->resources($request)['paginate'],
        ];
    }

    public function resources(Request $request)
    {
        $raports = Raport::where('in_date', Date::actual()->id)
            ->filter(new RaportFilter($request))
            ->paginate(50);

        return [
            'tbody' => view('pages.CSVI.veteran.raport.table', compact('raports'))->render(),
            'paginate' => $raports->links()->render()
        ];
    }

    public function show(Request $request, Raport $raport)
    {
        return view('pages.CSVI.veteran.raport.show', compact('raport'));
    }

    public function create()
    {
        return ($raport = Raport::whereDivision(user()->division)) !== null
            ? redirect()->route('veteran.raport.show', compact('raport'))
            : view('pages.CSVI.veteran.raport.create', ['date' => Date::actual()]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'all' => ['required', 'integer'],
            'el' => ['required', 'integer'],
            'mfc' => ['required', 'integer'],
        ]);

        if ($validate['all'] < $validate['el'] + $validate['mfc'])
            return back()->withErrors('Всего заявлений не может быть меньше чем сумма заявлений в электронном виде и через мфц');

        $raport = Raport::create(array_merge($validate, [
            'division_id' => user()->division_id,
            'created_by' => user()->id,
            'in_date' => Date::actual()->id,
        ]));

        return redirect()->route('veteran.raport.show', compact('raport'))->with('message', 'Данные успешно сохранены');
    }
}
