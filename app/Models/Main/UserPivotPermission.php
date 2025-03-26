<?php

namespace App\Models\Main;

use App\Traits\HasFilter;
use App\Traits\Named;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserPivotPermission extends Model
{
    use Named, HasFilter;

    ### Настройки
    ##################################################
    protected
        $table = 'main__user_pivot_permission',
        $guarded = [];
    public
        $timestamps = false;

    ### Связи
    ##################################################
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function permission():BelongsTo
    {
        return $this->belongsTo(Permission::class, 'permission_code', 'code');
    }
}
