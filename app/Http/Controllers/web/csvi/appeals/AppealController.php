<?php

namespace App\Http\Controllers\web\csvi\appeals;

use App\Models\Csvi\Csvi_Appeal_Appeal;
use App\Models\Glossary\Glossary_Csvi_Appeal_Category;
use App\Models\Glossary\Glossary_Csvi_Appeal_Status;
use App\Models\Glossary\Glossary_Csvi_Appeal_Them;
use App\Models\Main\Main_TableFilter;
use App\Models\Main\Main_TableSort;
use App\Models\Main\Main_User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppealController
{
    private $sort, $filters, $appeals, $page_data;
    private $sort_arr = [
        'id' => 'id',
        'created_at' => 'created_at',
        'sender' => 'sender.nickname',
        'them' => 'them.category.name',
        'status' => 'status.name',
        'worker' => 'worker.nickname',
    ];

    private function getSort(string|null $pole, string|null $type)
    {
        $sort = $pole === null
            ? Main_TableSort::firstOrCreate(
                [
                    'user_id' => auth()->user()->id,
                    'table_id' => 1,
                ],
                [
                    'sort' => [
                        'pole' => $this->sort_arr['created_at'],
                        'type' => 'desc'
                    ]
                ]
            )
            : Main_TableSort::updateOrCreate(
                [
                    'user_id' => auth()->user()->id,
                    'table_id' => 1,
                ],
                [
                    'sort' => [
                        'pole' => $this->sort_arr[$pole],
                        'type' => $type
                    ]
                ]
            );
        return $sort;
    }

    private function getFilters(array|null $filters)
    {
        return $filters === null
            ? Main_TableFilter::where('user_id', auth()->user()->id)->where('table_id', 1)->first()
            : Main_TableFilter::updateOrCreate([
                'user_id' => auth()->user()->id,
                'table_id' => 1,
            ], [
                'filters' => collect($filters)->map(function ($item, $key) {
                    $list = [];
                    foreach ($item as $id => $bool) {
                        $list[] = $id;
                    }
                    return $list;
                })
            ]);
    }

    private function getTableData()
    {
        $builder = auth()->user()->can('is_administration')
            ? Csvi_Appeal_Appeal::select('csvi__appeal__appeals.*')
            : Csvi_Appeal_Appeal::where('sender_id', auth()->user()->id)->select('csvi__appeal__appeals.*');
        $this->filterTable($builder);
        $this->sortTable($builder);

        return $builder->paginate(100);
    }

    private function filterTable($builder)
    {
        if ($this->filters) {
            foreach ($this->filters->filters as $key => $filter) {
                $builder->whereIn($key, $filter);
            }
        }

        return $builder;
    }

    private function sortTable($builder)
    {
        $builder->leftJoinRelationshipUsingAlias('sender', 'sender')
            ->leftJoinRelationshipUsingAlias('worker', 'worker')
            ->leftJoinRelationshipUsingAlias('status', 'status')
            ->leftJoinRelationshipUsingAlias('them.category', 'category');
        $builder = mb_strpos($this->sort->sort['pole'], '.')
            ? $builder->orderByPowerJoins($this->sort->sort['pole'], $this->sort->sort['type'])
            : $builder->orderBy($this->sort->sort['pole'], $this->sort->sort['type']);

        return $builder;
    }

    private function pageData()
    {
        $new_row_data = [
            'thems' => Glossary_Csvi_Appeal_Them::leftJoinRelationshipUsingAlias('category', 'category')
                ->orderByPowerJoins('category.name')
                ->get()
        ];
        $table_filters = [
            'senders' => Csvi_Appeal_Appeal::senders(),
            'workers' => Csvi_Appeal_Appeal::workers(),
            'statuses' => Glossary_Csvi_Appeal_Status::orderBy('name')->get(),
            'thems' => Glossary_Csvi_Appeal_Them::categoryThem()
        ];

        return compact('new_row_data', 'table_filters');
    }

    public function index(Request $request)
    {
        $this->sort = $this->getSort($request->sort_pole, $request->sort_type);
        $this->filters = $this->getFilters($request->filter);
        $this->page_data = $this->pageData();
        $this->appeals = $this->getTableData();

        $view_data = [
            'page_data' => $this->page_data,
            'appeals' => $this->appeals,
            'user_filters' => $this->filters ? $this->filters->filters : [],
            'user_sort' => [
                'pole' => array_search($this->sort->sort['pole'], $this->sort_arr),
                'type' => $this->sort->sort['type'] == 'asc' ? 'desc' : 'asc'
            ],
        ];

        return view('page.csvi.appeal.index', $view_data);
    }

    public function reset()
    {
        Main_TableFilter::where('user_id', auth()->user()->id)->where('table_id', 1)->delete();
        Main_TableSort::where('user_id', auth()->user()->id)->where('table_id', 1)->delete();
        return redirect()->route('appeal');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'data.office' => [],
            'data.them_id' => ['required', 'not_in:0'],
            'data.comment' => ['required']
        ]);

        Csvi_Appeal_Appeal::create(array_merge($validate['data'], [
            'status_id' => 1,
            'sender_id' => auth()->user()->id,
        ]));

        return back()->with(['message' => 'Обращение успешно создано']);
    }

    public function accept(Request $request)
    {
        Csvi_Appeal_Appeal::whereKey($request->appeal)
            ->update([
                'worker_id' => auth()->user()->id
            ]);
        return redirect()->route('appeal.chat', ['appeal' => $request->appeal]);
    }
}
