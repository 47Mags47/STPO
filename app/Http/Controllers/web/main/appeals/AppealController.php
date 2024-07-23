<?php

namespace App\Http\Controllers\web\main\appeals;

use App\Models\Csvi\Csvi_Appeal_Appeal;
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
            $user_filters = collect($request->filter)->map(function ($item, $key) {
                $list = [];
                foreach ($item as $id => $bool) {
                    $list[] = $id;
                }
                return $list;
            });


            $table_filter = Main_TableFilter::updateOrCreate([
                'user_id' => auth()->user()->id,
                'table_id' => 1,
            ], [
                'filters' => $user_filters
            ]);
        } else {
            $table_filter = Main_TableFilter::where('user_id', auth()->user()->id)->where('table_id', 1)->get();
            $user_filters = $table_filter->count() > 0
                ? $table_filter->first()->filters
                : [];
        }

        $page_filters = $this->pageFilters();
        $appeals = $this->filter($user_filters);
        //$appeals = Csvi_Appeal_Appeal::whereNotNull('id');

        $appeals = auth()->user()->can('is_administration')
            ? $appeals->orderBy('created_at', 'desc')
                ->paginate(100)
            : $appeals->where('sender_id', auth()->user()->id)
                ->orderBy('created_at', 'desc')
                ->paginate(100);

        // return view('page.main.appeal.index', compact('page_filters', 'user_filters', 'appeals'));
        return view('page.main.appeal.index', array_merge($page_filters, compact('appeals')));
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

    public function filter($filters = null)
    {
        $builder = Csvi_Appeal_Appeal::whereNotNull('id');
        if ($filters) {
            foreach ($filters as $key => $filter) {
                $builder->whereIn($key, $filter);
            }
        }
        return $builder;
    }
}
