<?php

namespace App\Core;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Filter
{
    protected Builder $builder;

    public function __construct(protected readonly Request $request) {}

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

        return $this->builder;
    }

}
