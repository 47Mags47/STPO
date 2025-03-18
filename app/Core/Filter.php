<?php

namespace App\Core;

use App\Models\Main\TableFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Filter
{
    protected Builder $builder;
    protected string $table;

    public function __construct(protected readonly Request $request) {}

    public function setBuilder(Builder $builder){
        $this->builder = $builder;
        return $this;
    }

    public function apply(): Builder
    {
        foreach ($this->filters() as $method => $value) {
            if ($value === null)
                continue;

            $methodName = Str::camel($method);
            if (method_exists($this, $methodName)) {
                $this->builder = $this->{$methodName}($value);
            }
        }

        return $this->builder;
    }

    public function filters(): array
    {
        $table = $this->builder->getModel()->getTable();

        $search = [
            'user_id' => user()->id,
            'table' => $table,
        ];
        $insert = [
            'filters' => $this->request->has('filter')
                ? $this->request->input('filter')
                : [],
        ];
        return $this->request->has('filter')
            ? TableFilter::updateOrCreate($search, $insert)->filters
            : TableFilter::firstOrCreate($search, $insert)->filters;
    }
}
