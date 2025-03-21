<?php

namespace App\Http\Controllers\CSVI\Technical;

use App\Filters\CSVI_TechnicalFilter;
use App\Http\Controllers\Controller;
use App\Models\CSVI\Technical\Folder;
use App\Models\CSVI\Technical\Mark;
use App\Models\CSVI\Technical\Technical;
use App\Models\CSVI\Technical\Type;
use Illuminate\Http\Request;

class TechnicalController extends Controller
{
    public function index(Request $request)
    {
        $technicals = $this->resources($request)['technicals'];
        $filters = $this->resources($request)['filters'];

        return view('pages.CSVI.technical.technical.index', compact('technicals', 'filters'));
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
        $builder = Technical::query()
            ->where('division_id', user()->division_id)
            ->filter(new CSVI_TechnicalFilter($request));

        if ($request->has('sort'))
            $builder->sort($request->sort, $request->asc);
        else
            $builder->sort('folder_id', 'asc');

        $builder
            ->orderBy('type_id')
            ->orderBy('mark_id')
            ->orderBy('model')
            ->orderBy('exp_date');

        $technicals = $builder->paginate(100);

        $filters = [
            'folder' => Folder::where('division_id', user()->division_id)->orderBy('name')->get(),
            'type' => Type::orderBy('name')->get(),
        ];

        $tbody = view('pages.CSVI.technical.technical.table', compact('technicals'))->render();

        return [
            'technicals' => $technicals,
            'filters' => $filters,
            'tbody' => $tbody,
            'paginate' => $technicals->links()->render(),
        ];
    }

    public function create(Request $request)
    {
        $parameters = $this->resources($request)['filters'];
        return view('pages.CSVI.technical.technical.create', compact('parameters'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'mark_id'           => ['required', 'integer', 'exists:' . Mark::getTableName() . ',id'],
            'model'             => ['required', 'string', 'min:4', 'max:250'],
            'serial_number'     => ['required', 'string', 'min:4', 'max:250', 'unique:' . Technical::getTableName() . ',serial_number'],
            'inventory_number'  => ['required', 'string', 'max:250'],
            'folder_id'         => ['nullable', 'integer', 'exists:' . Folder::getTableName() . ',id'],
            'exp_date'          => ['required', 'date'],
        ]);

        $data = array_merge($validate, [
            'division_id' => user()->division_id,
            'type_id' => Mark::whereKey($validate['mark_id'])->get()->first()->type->id,
        ]);

        Technical::create($data);

        return redirect()->route('technical.index')->with('message', 'Запись успешно создана');
    }

    public function edit(Request $request, Technical $technical)
    {
        $parameters = $this->resources($request)['filters'];
        return view('pages.CSVI.technical.technical.edit', compact('parameters', 'technical'));
    }

    public function update(Request $request, Technical $technical)
    {
        $validate = $request->validate([
            'mark_id'           => ['required', 'integer', 'exists:' . Mark::getTableName() . ',id'],
            'model'             => ['required', 'string', 'min:4', 'max:250'],
            'serial_number'     => ['required', 'string', 'min:4', 'max:250'],
            'inventory_number'  => ['required', 'string', 'max:250'],
            'folder_id'         => ['nullable', 'integer', 'exists:' . Folder::getTableName() . ',id'],
            'exp_date'          => ['required', 'date'],
        ]);

        if ($technical->serial_number !== $validate['serial_number'])
            $request->validate([
                'serial_number'     => ['unique:' . Technical::getTableName() . ',serial_number'],
            ]);

        $technical->update($validate);

        return redirect()->route('technical.index')->with('message', 'Запись успешно обновлена');
    }

    public function delete(Technical $technical){
        $technical->update([
            'folder_id' => NULL,
        ]);
        $technical->delete();

        return response('Запись успешно удалена');
    }
}
