<?php

namespace App\Http\Controllers\CSVI\Veteran;

use App\Filters\CSVI\Veteran\AccessFilter;
use App\Http\Controllers\Controller;
use App\Models\Main\Division;
use App\Models\Main\Permission;
use App\Models\Main\User;
use App\Models\Main\UserPivotPermission;
use Illuminate\Http\Request;

class AccessController extends Controller
{
    public function index(Request $request)
    {
        $filters = $this->resources($request)['filters'];

        return view('pages.CSVI.veteran.access.index', compact('filters'));
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
        $needle_permissions = ['veteran-work', 'veteran-admin'];

        $accesses = UserPivotPermission::whereIn('permission_code', $needle_permissions)
            ->filter(new AccessFilter($request))
            ->paginate(50);

        return [
            'tbody' => view('pages.CSVI.veteran.access.table', compact('accesses'))->render(),
            'paginate' => $accesses->links()->render(),
            'filters' => [
                'permission' => Permission::whereIn('code', $needle_permissions)->get(),
            ]
        ];
    }

    public function create(Request $request)
    {
        $divisions = Division::orderBy('name')->get();
        $permissions = $this->resources($request)['filters']['permission'];

        return view('pages.CSVI.veteran.access.create', compact('divisions', 'permissions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => ['required', 'exists:' . User::getTableName() . ',id'],
            'permission_code' => ['required', 'exists:' . Permission::getTableName() . ',code']
        ]);

        $access = UserPivotPermission::where('user_id', $validated['user_id'])
            ->whereIn(
                'permission_code',
                $this->resources($request)['filters']['permission']->groupBy('code')->keys()
            )
            ->first();

        if ($access !== null)
            return back()->withErrors('У данного пользователя уже есть права');


        UserPivotPermission::create($validated);

        return redirect()->route('veteran.access.index')->with('message', 'Запись успешно создана');
    }

    public function delete(UserPivotPermission $access)
    {
        $access->delete();
        return response('Ok');
    }
}
