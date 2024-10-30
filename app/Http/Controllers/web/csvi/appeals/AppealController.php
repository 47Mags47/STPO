<?php

namespace App\Http\Controllers\web\csvi\appeals;

use App\Events\EditAppealStatus;
use App\Events\User\SendAlert;
use App\Events\User\SendSystemAppealMessage;
use App\Models\Csvi\Csvi_Appeal_Appeal;
use App\Models\Csvi\Csvi_Appeal_AppealMessage;
use App\Models\Glossary\Glossary_Csvi_Appeal_Category;
use App\Models\Glossary\Glossary_Csvi_Appeal_Status;
use App\Models\Glossary\Glossary_Csvi_Appeal_Them;
use App\Models\Main\Main_City;
use App\Models\Main\Main_Division;
use App\Models\Main\Main_TableFilter;
use App\Models\Main\Main_TableSort;
use App\Models\Main\Main_User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use stdClass;

class AppealController
{
    private $sort, $filters, $search, $appeals, $page_data;
    private $sort_arr = [
        'id' => 'id',
        'created_at' => 'created_at',
        'sender' => 'sender.nickname',
        'them' => 'them.category.name',
        'status' => 'status.name',
        'worker' => 'worker.nickname',
    ];

    private function getFilterList()
    {
        return [
            'worker.division_id' => [
                'preview' => 'Подразделение',
                'list' => Main_Division::orderBy('name')->get(),
                'name' => 'id',
                'value' => 'name',
                'is_administration' => true,
            ],

            'sender_id' => [
                'preview' => 'Отправитель',
                'list' => Main_User::orderBy('nickname')->get(),
                'name' => 'id',
                'value' => 'nickname',
                'is_administration' => true,
            ],

            'worker_id' => [
                'preview' => 'Исполнитель',
                'list' => Main_User::whereIn('role_id', [1, 2])->orderBy('nickname')->get(),
                'name' => 'id',
                'value' => 'nickname'
            ],

            'status_id' => [
                'preview' => 'Статус',
                'list' => Glossary_Csvi_Appeal_Status::get(),
                'name' => 'id',
                'value' => 'name'
            ],

            'them_id' => [
                'preview' => 'Тема',
                'list' => Glossary_Csvi_Appeal_Them::orderBy('category_id')->orderBy('name')->get()->map(function ($them) {
                    $them->name = "(" . $them->category->name . ") " . $them->name;
                    return $them;
                }),
                'name' => 'id',
                'value' => 'name'
            ],
        ];
    }

    private function filterTable($builder, Main_TableFilter $model)
    {
        foreach ($model->filters as $key => $ids) {
            if($key == 'worker.division_id'){
                $builder->join('main__users', 'sender_id', '=', 'main__users.id');
                $builder->join('main__divisions', 'main__users.division_id', '=', 'main__divisions.id');
                $builder->whereIn('main__divisions.id', $ids);
                continue;
            }
            $builder->whereIn($key, $ids);
        }
        return $builder;
    }

    private function getFiltersModel($filters): Main_TableFilter
    {
        if ($filters) {
            $result = [];
            foreach ($filters as $key => $value) {
                $result[$key] = [];
                foreach ($value as $id => $status) {
                    $result[$key][] = $id;
                }
            }
        }

        return $filters
            ? Main_TableFilter::updateOrCreate([
                'user_id' => auth()->user()->id,
                'table_id' => 1
            ], [
                'filters' => $result
            ])

            : Main_TableFilter::firstOrCreate([
                'user_id' => auth()->user()->id,
                'table_id' => 1
            ], [
                'filters' => []
            ]);

    }

    private function getSortModel($sort)
    {
        return $sort
            ? Main_TableSort::updateOrCreate([
                'user_id' => auth()->user()->id,
                'table_id' => 1
            ], [
                'sort' => [
                    'pole' => $sort['pole'],
                    'type' => $sort['type']
                ]
            ])
            : Main_TableSort::firstOrCreate([
                'user_id' => auth()->user()->id,
                'table_id' => 1
            ], [
                'sort' => [
                    'pole' => 'csvi__appeal__appeals.id',
                    'type' => 'desc'
                ]
            ]);
    }

    /* Основные функции */

    public function index(Request $request)
    {
        $filterModel = $this->getFiltersModel($request->filters);
        $sortModel = $this->getSortModel($request->sort);

        $builder = Csvi_Appeal_Appeal::whereNotNull('csvi__appeal__appeals.id');
        $builder = auth()->user()->can('is_administration')
            ? $builder
            : $builder->where(function ($query) {
                $query
                    ->where('sender_id', auth()->user()->id)
                    ->OrWhere('worker_id', auth()->user()->id);
            });
        $builder = $request->search
            ? $builder->whereAny(['id', 'comment'], 'like', "%$request->search%")
            : $builder;
        $builder = $this->filterTable($builder, $filterModel);
        $builder = $sortModel->sort['pole'] == 'id'
            ? $builder->orderBy('csvi__appeal__appeals.id', $sortModel->sort['type'])
            : $builder->orderBy($sortModel->sort['pole'], $sortModel->sort['type']);

        $view_data = [
            'filters' => $this->getFilterList(),
            'appeals' => $builder->paginate(100),
            'sort' => $sortModel->sort,
        ];

        foreach ($filterModel->filters as $key => $ids) {
            $view_data['filters'][$key]['checked'] = $ids;
        }

        return view('page.csvi.appeal.index', $view_data);
    }

    public function reset()
    {
        Main_TableFilter::where('user_id', auth()->user()->id)->where('table_id', 1)->delete();
        Main_TableSort::where('user_id', auth()->user()->id)->where('table_id', 1)->delete();
        return redirect()->route('appeal');
    }

    public function create()
    {
        $categoryes = Glossary_Csvi_Appeal_Category::get();
        $thems = Glossary_Csvi_Appeal_Them::get();
        return view('page.csvi.appeal.create', compact('categoryes', 'thems'));
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'them_id' => ['required', 'notIn:0'],
            'comment' => ['required', 'min:4', 'max:3000'],
            'files.*' => ['max:102400']
        ]);
        unset($validation['files']);

        $appeal = Csvi_Appeal_Appeal::create(array_merge($validation, [
            'status_id' => 1,
            'sender_id' => auth()->user()->id,
        ]));

        Csvi_Appeal_AppealMessage::create([
            'appeal_id' => $appeal->id,
            'sender_id' => auth()->user()->id,
            'message' => $validation['comment'],
        ]);

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $message = date('Y-m-d-H-i-s') . '_' . $file->getClientOriginalName();
                Storage::disk('appeal-chat')->putFileAs($appeal->id, $file, $message);

                Csvi_Appeal_AppealMessage::create([
                    'appeal_id' => $appeal->id,
                    'sender_id' => auth()->user()->id,
                    'is_file' => true,
                    'is_image' => !Validator::make(['file' => $file], ['file' => 'image'])->fails(),
                    'message' => $message,
                ]);
            }
        }

        return redirect()->route('appeal')->with(['message' => 'Обращение успешно создано']);
    }

    public function accept(Request $request, Csvi_Appeal_Appeal $appeal)
    {
        $appeal->update([
            'status_id' => 2,
            'worker_id' => auth()->user()->id,
        ]);

        event(new SendSystemAppealMessage(appeal: $appeal->id, message: "Обращение принято " . $appeal->worker->nickname));

        event(new SendAlert(
            message: "Ваше обращение №" . $appeal->id . " принято " . auth()->user()->nickname,
            type: 1,
            from_id: $appeal->sender_id,
            link: route('appeal.chat', ['appeal' => $appeal->id])
        ));

        return redirect()->route('appeal.chat', compact('appeal'));
    }

    public function close(Request $request, Csvi_Appeal_Appeal $appeal)
    {
        $appeal->update([
            'status_id' => 3,
            'closet_at' => auth()->user()->id,
        ]);

        event(new SendSystemAppealMessage(appeal: $appeal->id, message: "Обращение Закрыто"));

        event(new SendAlert(
            message: $appeal->sender_id == auth()->user()->id
            ? "Обращение №" . $appeal->fresh()->id . " закрыто"
            : "Ваше обращение №" . $appeal->fresh()->id . " закрыто " . auth()->user()->nickname,
            from_id: $appeal->sender_id == auth()->user()->id
            ? $appeal->worker_id
            : $appeal->sender_id,
            type: 1,
            link: route('appeal.chat', ['appeal' => $appeal->id])
        ));

        return redirect()->route('appeal');
    }

    public function restore(Request $request, Csvi_Appeal_Appeal $appeal)
    {
        $appeal->update([
            'status_id' => 4,
            'worker_id' => null
        ]);

        event(new SendSystemAppealMessage(appeal: $appeal->id, message: "Обращение возобновлено"));

        return redirect()->route('appeal.chat', compact('appeal'));
    }

}
