<?php

namespace App\Http\Controllers\web\main\appeals;

use App\Models\Csvi\Csvi_Appeal_Appeal;
use App\Models\Glossary\Glossary_Csvi_Appeal_Category;
use App\Models\Glossary\Glossary_Csvi_Appeal_Status;
use App\Models\Glossary\Glossary_Csvi_Appeal_Them;
use App\Models\Main\Main_TableFilter;
use App\Models\Main\Main_User;
use Illuminate\Http\Request;

class AppealController
{
    public function index(Request $request)
    {
        if ($request->filter) {
            $this->setFilters($request->filter);
        }
        $page_data = $this->pageData();
        $page_filters = $this->pageFilters(); // Фильтры для страницы
        $user_filters = $this->getFilters(); // Пользовательские филтры
        $appeals = auth()->user()->can('is_administration') // Данные для таблицы
            ? $this->filterTable($user_filters)->orderBy('created_at', 'desc')
                ->paginate(100)
            : $this->filterTable($user_filters)->where('sender_id', auth()->user()->id)
                ->orderBy('created_at', 'desc')
                ->paginate(100);
        return view('page.main.appeal.index', array_merge($page_filters, $page_data, compact('appeals', 'user_filters')));
    }

    public function pageData(){
        $categories = Glossary_Csvi_Appeal_Category::orderBy('name')->get();
        $thems = Glossary_Csvi_Appeal_Them::orderBy('name')->get();

        return compact('categories', 'thems');
    }

    public function pageFilters()
    {
        $sender_ids = Csvi_Appeal_Appeal::groupBy('sender_id')->pluck('sender_id')->toArray();
        $senders = Main_User::whereIn('id', $sender_ids)->get();
        $workers = Main_User::whereIn('role_id', [1, 2])->get();
        $statuses = Glossary_Csvi_Appeal_Status::get();
        $thems = Glossary_Csvi_Appeal_Them::orderBy('category_id')->get();

        return compact('senders', 'workers', 'statuses', 'thems');
    }

    public function getFilters(){
        $table_filter = Main_TableFilter::where('user_id', auth()->user()->id)->where('table_id', 1)->get();
        return $table_filter->count() > 0
            ? $table_filter->first()->filters
            : [];
    }

    public function setFilters(array $filters){
        $user_filters = collect($filters)->map(function ($item, $key) {
            $list = [];
            foreach ($item as $id => $bool) {
                $list[] = $id;
            }
            return $list;
        });

        Main_TableFilter::updateOrCreate([
            'user_id' => auth()->user()->id,
            'table_id' => 1,
        ], [
            'filters' => $user_filters
        ]);
    }

    public function filterTable($filters = null)
    {
        $builder = Csvi_Appeal_Appeal::whereNotNull('id');
        if ($filters) {
            foreach ($filters as $key => $filter) {
                $builder->whereIn($key, $filter);
            }
        }
        return $builder;
    }

    public function reset() {
        Main_TableFilter::where('user_id', auth()->user()->id)->where('table_id', 1)->delete();
        return redirect()->route('appeal');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'data.them_id' => 'required',
            'data.comment' => 'required'
        ]);


        Csvi_Appeal_Appeal::create(array_merge($validate['data'], [
            'status_id' => 1,
            'sender_id' => auth()->user()->id,
        ]));

        return back()->with(['message' => 'Обращение успешно создано']);

    }
}
