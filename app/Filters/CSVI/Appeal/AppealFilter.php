<?php

namespace App\Filters\CSVI\Appeal;

use App\Core\Filter;

class AppealFilter extends Filter
{
    protected function search(string $value)
    {
        return $value === null
            ? $this->builder
            : $this->builder->where(function ($query) use ($value) {
                return $query
                    ->where('id', $value)
                    ->orWhere('comment', 'like', '%' . $value . '%');
            });
    }

    protected function division(int $value)
    {
        return $this->builder->whereHas('sender', function($query) use ($value){
            $query->where('division_id', $value);
        });
    }

    protected function sender(array $value)
    {
        return $this->builder->whereIn('sender_id', $value);
    }

    protected function accepted(array $value)
    {
        return $this->builder->whereIn('accepted_by', $value);
    }

    protected function status(array $value)
    {
        return $this->builder->whereIn('status_code', $value);
    }

    protected function them(array $value)
    {
        return $this->builder->whereIn('them_id', $value);
    }
}
