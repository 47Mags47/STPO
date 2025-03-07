<?php

namespace App\Models\Main;

use App\Traits\Named;
use Illuminate\Database\Eloquent\Model;

class UserPivotPermission extends Model
{
    use Named;

    ### Настройки
    ##################################################
    protected
        $table = 'main__user_pivot_permission',
        $guarded = [];
    public
        $timestamps = false;
}
