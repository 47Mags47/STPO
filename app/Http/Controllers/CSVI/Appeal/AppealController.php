<?php

namespace App\Http\Controllers\CSVI\Appeal;

use App\Events\CSVI\Appeal\AcceptAppealEvent;
use App\Events\CSVI\Appeal\CloseAppealEvent;
use App\Events\CSVI\Appeal\CreateAppealEvent;
use App\Events\CSVI\Appeal\RestoreAppealEvent;
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
    public function index(Request $request)
    {
        $filters = $this->resources($request)['filters'];
        $current_filters = $this->resources($request)['current_filters'];

        return view('pages.CSVI.appeal.index', compact('filters', 'current_filters'));
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
        $appeal_builder = Appeal::query();
        if (!user()->hasPermission('appeal-work'))
            $appeal_builder->where('sender_id', user()->id);

        $appeals = $appeal_builder
            ->filter(new CSVI_AppealFilter($request))
            ->orderBy('id', 'desc')
            ->paginate(50);

        $filters = [
            'city'      => City::orderBy('name')->get(),
            'sender'    => User::whereIn('id', Appeal::groupBy('sender_id')->get('sender_id')->pluck('sender_id')->toArray())->orderBy('full_name')->get(),
            'accepted'  => User::whereIn('id', Appeal::groupBy('accepted_by')->get('accepted_by')->pluck('accepted_by')->toArray())->orderBy('full_name')->get(),
            'status'    => Status::orderBy('name')->get(),
            'category'  => Category::orderBy('name')->get(),
        ];

        $tbody = view('pages.CSVI.appeal.table', compact('appeals'))->render();

        return [
            'filters' => $filters,
            'paginate' => $appeals->links()->render(),
            'tbody' => $tbody,
            'current_filters' => Appeal::currentFilters(new CSVI_AppealFilter($request)),
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

        CreateAppealEvent::dispatch($appeal);

        return redirect()->route('appeal.chat.index', compact('appeal'));
    }

    public function accept(Appeal $appeal){
        AcceptAppealEvent::dispatch($appeal);
        return redirect()->route('appeal.chat.index', compact('appeal'));
    }

    public function close(Appeal $appeal){
        CloseAppealEvent::dispatch($appeal);
        return back();
    }

    public function restore(Appeal $appeal){
        RestoreAppealEvent::dispatch($appeal);
        return back();
    }
}
