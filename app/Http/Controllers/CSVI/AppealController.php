<?php

namespace App\Http\Controllers\CSVI;

use App\Filters\CSVI_AppealFilter;
use App\Http\Controllers\Controller;
use App\Models\CSVI\Appeal\Appeal;
use App\Models\CSVI\Appeal\Category;
use App\Models\CSVI\Appeal\Status;
use App\Models\CSVI\Appeal\Them;
use App\Models\Main\City;
use App\Models\Main\User;
use Illuminate\Http\Request;

class AppealController extends Controller
{
    public function index(Request $request, CSVI_AppealFilter $filter)
    {
        if ($request->ajax())
            return [
                'tbody' => $this->resources($request, $filter)['tbody'],
                'paginate' => $this->resources($request, $filter)['paginate'],
            ];

        $filters = $this->resources($request, $filter)['filters'];

        return view('pages.CSVI.appeal.index', compact('filters'));
    }

    public function resources(Request $request, $filter)
    {
        $appeal_builder = Appeal::query();
        if (!user()->hasPermission('appeal-work'))
            $appeal_builder->where('sender_id', user()->id);

        $appeals = $appeal_builder
            ->filter($filter)
            ->orderBy('id', 'desc')
            ->paginate(50);

        $filters = [
            'city'      => City::orderBy('name')->get(),
            'sender'    => User::whereIn('id', $appeals->groupBy('sender_id')->keys())->orderBy('full_name')->get(),
            'accepted'  => User::whereIn('id', $appeals->groupBy('accepted_by')->keys())->orderBy('full_name')->get(),
            'status'    => Status::orderBy('name')->get(),
            'category'  => Category::orderBy('name')->get(),
        ];

        $tbody = view('pages.CSVI.appeal.table', compact('appeals'))->render();

        return [
            'filters' => $filters,
            'paginate' => $appeals->links()->render(),
            'tbody' => $tbody,
        ];
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('pages.CSVI.appeal.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'division_id'   => ['nullable'],
            'office'        => ['nullable'],
            'them_id'       => ['required', 'exists:' . Them::getTableName() . ',id'],
            'comment'       => ['required', 'min:4', 'max:1500'],
        ]);

        $appeal_data = [
            'office'        => $validate['office'] ?? null,
            'them_id'       => $validate['them_id'],
            'comment'       => $validate['comment'],
            'status_code'   => 'created',
            'sender_id'     => user()->id
        ];

        $appeal = Appeal::create($appeal_data);
    }
}
