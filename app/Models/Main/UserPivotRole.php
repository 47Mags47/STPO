<?php

namespace App\Models\Main;

use App\Traits\Named;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    ### Связи
    ##################################################
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
