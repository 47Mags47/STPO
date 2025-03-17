<?php

namespace App\Models\CSVI\Appeal;

use App\Traits\Named;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use Named;

    ### Настройки
    ##################################################
    protected
        $table = 'csvi__appeal__statuses',
        $primaryKey = 'code',
        $guarded = [];
    public
        $timestamps = false,
        $incrementing = false;
}
