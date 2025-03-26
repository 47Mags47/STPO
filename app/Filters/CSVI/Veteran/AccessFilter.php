<?php

namespace App\Filters\CSVI\Veteran;

use App\Core\Filter;
use  Illuminate\Database\Eloquent\Builder;

class AccessFilter extends Filter
{
    protected function search(string $value): Builder
    {
        return $value === null
            ? $this->builder
            : $this->builder->where(function ($query) use ($value) {
                $query
                    ->whereHas('user', function ($query) use ($value) {
                        return $query->whereLike('full_name', '%' . $value . '%');
                    })
                    ->orWhereHas('permission', function ($query) use ($value) {
                        return $query->whereLike('name', '%' . $value . '%');
                    });
            });
    }

    protected function permission(array $value): Builder
    {
        return $this->builder->whereIn('permission_code', $value);
    }
}
