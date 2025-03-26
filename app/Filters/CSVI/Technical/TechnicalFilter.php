<?php

namespace App\Filters\CSVI\Technical;

use App\Core\Filter;

class TechnicalFilter extends Filter
{
    protected function search(string $value)
    {
        return $value === null
            ? $this->builder
            : $this->builder->where(function ($query) use ($value) {
                return $query
                    ->where('id', $value)
                    ->orWhereHas('folder', function ($query) use ($value) {
                        $query->where('name', 'like', '%' . $value . '%');
                    })
                    ->orWhereHas('mark', function ($query) use ($value) {
                        $query->where('name', 'like', '%' . $value . '%');
                    })
                    ->orWhere('model', 'like', '%' . $value . '%')
                    ->orWhere('serial_number', 'like', '%' . $value . '%')
                    ->orWhere('inventory_number', 'like', '%' . $value . '%');
            });
    }

    protected function folder(array $value)
    {
        return $this->builder->whereIn('folder_id', $value);
    }

    protected function type(array $value)
    {
        return $this->builder->whereIn('type_id', $value);
    }

    protected function mark(array $value)
    {
        return $this->builder->whereIn('mark_id', $value);
    }
}
