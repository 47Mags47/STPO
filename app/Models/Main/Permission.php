<?php

namespace App\Models\Main;

use App\Traits\Glossary;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
    use Glossary;

    ### Настройки
    ##################################################
    protected
        $table = 'main__permissions';

    ### Связи
    ##################################################
    /**
     * Return all roles with has this permission
     *
     * @return BelongsToMany
     */
    public function roles(): BelongsToMany{
        return $this->belongsToMany(Role::class, RolePivotPermission::getTableName(), 'permission_code', 'role_code');
    }
}
