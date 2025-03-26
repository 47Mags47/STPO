<?php

namespace App\Models\Main;

use App\Traits\Glossary;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use Glossary;

    ### Настройки
    ##################################################
    protected
        $table = 'main__roles';

    ### Связи
    ##################################################
    /**
     * Return all permissions with has this role
     *
     * @return BelongsToMany
     */
    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, RolePivotPermission::getTableName());
    }

    public function users()
    {
        return $this->belongsToMany(User::class, UserPivotRole::getTableName(), 'role_code');
    }
}
