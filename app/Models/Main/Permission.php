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

    ### Функции
    ##################################################
    public function scopeUsers()
    {
        $permission_users = $this->belongsToMany(User::class, UserPivotPermission::getTableName(), 'permission_code')->get();
        $role_users = $this->roles->map(function($role){
            return $role->users;
        })->collapse();

        return $permission_users->merge($role_users);
    }

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
