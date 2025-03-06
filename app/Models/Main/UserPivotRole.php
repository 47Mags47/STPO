<?php

namespace App\Models\Main;

use App\Traits\Named;
use Illuminate\Database\Eloquent\Model;

class UserPivotRole extends Model
{
    use Named;

    ### Настройки
    ##################################################
    protected
        $table = 'main__user_pivot_role',
        $guarded = [];
    public
        $timestamps = false;
}
