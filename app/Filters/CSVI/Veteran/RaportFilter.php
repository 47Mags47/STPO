<?php

namespace App\Filters\CSVI\Veteran;

use App\Core\Filter;

class RaportFilter extends Filter
{
    protected function search(string $value)
    {
        return $value === null
            ? $this->builder
            : $this->builder->where(function ($query) use ($value) {
                return $query
                ->whereHas('division', function ($query) use ($value) {
                    return $query->whereLike('name', '%' . $value . '%');
                })
                ->orWhereHas('sender', function($query) use ($value){
                    return $query->whereLike('full_name', '%' . $value . '%');
                });
            });
    }
}
