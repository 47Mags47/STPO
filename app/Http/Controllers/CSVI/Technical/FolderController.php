<?php

namespace App\Http\Controllers\CSVI\Technical;

use App\Http\Controllers\Controller;
use App\Models\CSVI\Technical\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function resources(Request $request)
    {
        $builder = Folder::query()
            ->where('parent_id', null)
            ->where('division_id', user()->division_id);

        return [
            'folders' => $builder->get(),
        ];
    }

    public function index(Request $request)
    {
        $folders = $this->resources($request)['folders'];
        return view('pages.CSVI.technical.folder.index', compact('folders'));
    }

    public function create(Request $request, Folder|null $parent)
    {
        $folders = $this->resources($request)['folders'];
        return view('pages.CSVI.technical.folder.create', compact('folders', 'parent'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        if ($request->parent_id !== null)
            $request->validate([
                'parent_id' => ['integer', 'exists:' . Folder::getTableName() . ',id']
            ]);

        Folder::create([
            'name' => $validated['name'],
            'parent_id' => $request->parent_id,
            'division_id' => user()->division_id,
        ]);

        return redirect()->route('technical.folder.index')->with('message', 'Дирректория успешно создана');
    }

    public function edit(Request $request, Folder $folder){
        $folders = $this->resources($request)['folders'];
        return view('pages.CSVI.technical.folder.edit', compact('folders', 'folder'));
    }

    public function update(Request $request, Folder $folder){
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        if ($request->parent_id !== null)
            $request->validate([
                'parent_id' => ['integer', 'exists:' . Folder::getTableName() . ',id']
            ]);

        $folder->update([
            'name' => $validated['name'],
            'parent_id' => $request->parent_id,
        ]);

        return redirect()->route('technical.folder.index')->with('message', 'Дирректория успешно обновлена');
    }

    public function delete(Folder $folder){
        $folder->technicals()->update([
            'folder_id' => $folder->parent ? $folder->parent->id : null,
        ]);

        $folder->delete();
        return redirect()->route('technical.folder.index')->with('message', 'Дирректория удалена');
    }
}
