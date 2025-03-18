<?php

namespace App\Traits;

use App\Core\Filter;
use Illuminate\Database\Eloquent\Builder;

trait HasFilter
{
    // abstract public static function getFilters();

    public function scopeFilter(Builder $builder, Filter $filter): Builder
    {

        return $filter->setBuilder($builder)->apply();
    }

    public function scopeCurrentFilters(Builder $builder, Filter $filter){
        return $filter->setBuilder($builder)->filters();
    }

    public function scopeSort(Builder $builder, string|null $column, string|null $asc){
        return $builder->orderBy($column ?? $this->getKeyName(), $asc ?? 'asc');
    }
}
