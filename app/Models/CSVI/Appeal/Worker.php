<?php

namespace App\Models\CSVI\Appeal;

use App\Traits\Named;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use Named;

    ### Настройки
    ##################################################
    protected
        $table = 'csvi__appeal__workers',
        $guarded = [];
    public
        $timestamps = false;
}
