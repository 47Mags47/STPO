<?php

namespace App\Models\Main;

use App\Traits\HasRolesAndPermissions;
use App\Traits\Named;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Model
{
    use Named;

    ### Настройки
    ##################################################
    protected
        $table = 'main__users',
        $guarded = [],
        $hidden = [
            'password',
            'remember_token',
        ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    ### Связи
    ##################################################
    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class, 'division_id');
    }
}
