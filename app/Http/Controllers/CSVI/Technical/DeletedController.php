<?php

namespace App\Http\Controllers\CSVI\Technical;

use App\Filters\CSVI\Technical\TechnicalFilter;
use App\Http\Controllers\Controller;
use App\Models\CSVI\Technical\Folder;
use App\Models\CSVI\Technical\Mark;
use App\Models\CSVI\Technical\Technical;
use App\Models\CSVI\Technical\Type;
use Illuminate\Http\Request;

class DeletedController extends Controller
{
    public function resources(Request $request)
    {
        $builder = Technical::onlyTrashed()
            ->where('division_id', user()->division_id)
            ->filter(new TechnicalFilter($request));

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

        $tbody = view('pages.CSVI.technical.deleted.table', compact('technicals'))->render();

        return [
            'technicals' => $technicals,
            'filters' => $filters,
            'tbody' => $tbody,
            'paginate' => $technicals->links()->render(),
        ];
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

    public function index(Request $request){
        $technicals = $this->resources($request)['technicals'];
        $filters = $this->resources($request)['filters'];

        return view('pages.CSVI.technical.deleted.index', compact('technicals', 'filters'));
    }

    public function edit(Request $request, int $technical)
    {
        $technical = Technical::withTrashed()->whereKey($technical)->first();
        $parameters = $this->resources($request)['filters'];
        return view('pages.CSVI.technical.deleted.edit', compact('parameters', 'technical'));
    }

    public function update(Request $request, int $technical)
    {
        $technical = Technical::withTrashed()->whereKey($technical)->first();

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

        $validate['deleted_at'] = null;

        $technical->update($validate);

        return redirect()->route('technical.deleted.index')->with('message', 'Запись успешно восстановлена');
    }

}
