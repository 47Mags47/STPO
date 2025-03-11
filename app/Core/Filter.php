<?php

namespace App\Core;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class Filter
{
    protected Builder $builder;

    public function __construct(protected readonly FormRequest $request) {}

    /**
     * Применение фильтров к запросу
     *
     * @param Builder $builder
     * @param string $table
     * @return Builder
     */
    public function apply(Builder $builder, string $table): Builder
    {
        $this->builder = $builder;

        foreach ($this->request->input('filter') ?? [] as $method => $value) {
            if ($value === null)
                continue;

            $methodName = Str::camel($method);
            if (method_exists($this, $methodName)) {
                $this->builder = $this->{$methodName}($value);
            }
        }

        // dd($this->request->all());


        // if ($this->request->has('filter'))
        //     MainFilter::updateOrCreate([
        //         'user_id' => Auth::user()->id,
        //         'table' => $table
        //     ], [
        //         'value' => $this->request->filter ?? []
        //     ]);

        // foreach ($this->request->filter ?? (MainFilter::getFilter($table) ?? []) as $method => $value) {
        //     $methodName = Str::camel($method);

        //     if (method_exists($this, $methodName)) {
        //         $this->builder = $this->{$methodName}($value);
        //     }
        // }

        // if ($this->request->filter == null)
        //     request()->merge(['filter' => MainFilter::getFilter($table)]);

        return $this->builder;
    }

    protected function search(string $value)
    {
        // return $this->builder;
    }
}
