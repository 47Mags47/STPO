<?php

namespace App\Models\Main;

use App\Traits\Named;
use Illuminate\Database\Eloquent\Model;

class TableFilter extends Model
{
    use Named;

    ### Настройки
    ##################################################
    protected
        $table = 'main__table_filters',
        $guarded = [];
    public
        $timestamps = false;

    protected function casts(): array
    {
        return [
            'filters' => 'array',
        ];
    }
}
