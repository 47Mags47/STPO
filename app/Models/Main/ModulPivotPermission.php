<?php

namespace App\Models\Main;

use App\Traits\Named;
use Illuminate\Database\Eloquent\Model;

class ModulPivotPermission extends Model
{
    use Named;

    ### Настройки
    ##################################################
    protected
        $table = 'main__modul_pivot_permission',
        $guarded = [];
    public
        $timestamps = false;
}
