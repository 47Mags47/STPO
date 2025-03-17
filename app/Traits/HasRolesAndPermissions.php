<?php

namespace App\Traits;

use App\Models\Main\Permission;
use App\Models\Main\UserPivotPermission;
use App\Models\Main\UserPivotRole;
use App\Models\Main\Role;

trait HasRolesAndPermissions
{
    ### Связи
    ##################################################
    /**
     * return all user roles
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, UserPivotRole::getTableName(), 'user_id', 'role_code');
    }

    /**
     * return all user permissions
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, UserPivotPermission::getTableName(), 'user_id', 'permission_code');
    }

    /**
     * Возвращает права пользователя через его роли
     * @return collect Коллекция прав через роли
     */
    public function scopeRolePermissions(){
        $assigned_permissions = $this->permissions;
        $roles = $this->roles->map(function($role){
            return $role->permissions;
        })->collapse();

        return $assigned_permissions->merge($roles);
    }

    ### Сеттеры
    ##################################################
    /**
     * Adds a role to the user
     * @param Role $role Role
     * @param string $role Role code
     * @return bool
     */
    public function addRole(string|Role $role)
    {
        $role_model = $role instanceof Role
            ? $role
            : Role::whereCode($role)->first();

        if ($role_model === null) return false;

        return (bool) UserPivotRole::firstOrCreate([
            'user_id' => $this->id,
            'role_code' => $role_model->code,
        ]);
    }

    /**
     * Adds a parmission to the user
     * @param Permission $permission Permission
     * @param string $permission Permission code
     * @return bool
     */
    public function addPermission(string|Permission $permission)
    {
        $permission_model = $permission instanceof Permission
            ? $permission
            : Permission::whereCode($permission)->first();

        if ($permission_model === null) return false;

        return (bool) UserPivotPermission::firstOrCreate([
            'user_id' => $this->id,
            'permission_code' => $permission_model->code,
        ]);
    }

    ### Проверки
    ##################################################
    /**
     * Check if the user has role
     * @param Role $role Permission
     * @param string $role Permission code
     * @return bool
     */
    public function hasRole(string|Role $role)
    {
        $role = $role instanceof Role
            ? $role->code
            : $role;

        return (bool) $this->roles->where('code', $role)->count();
    }

    /**
     * Check if the user has permission
     * @param Permission $permission Permission
     * @param string $permission Permission code
     * @return bool
     */
    public function hasPermission(string|Permission $permission)
    {
        $permission_model = $permission instanceof Permission
            ? $permission
            : Permission::whereCode($permission)->first();

        if ($permission_model === null) return false;
        foreach ($permission_model->roles as $role) {
            if ($this->roles->contains($role)) {
                return true;
            }
        }

        return (bool) $this->permissions->where('code', $permission_model->code)->count();
    }

    ### Удаление
    ##################################################
    /**
     * Deletes a role from a user
     * @param Role $role Permission
     * @param string $role Permission code
     * @return bool
     */
    public function deleteRole(string|Role $role)
    {
        $role_model = $role instanceof Role
            ? $role
            : Role::whereCOde($role)->first();

        if ($role_model === null) return false;

        $this->roles()->detach($role_model->code);
        return true;
    }

    /**
     * Deletes a permission from a user
     * @param Permission $permission Permission
     * @param string $permission Permission code
     * @return bool
     */
    public function deletePermission(string $permission)
    {
        $permission_model = $permission instanceof Permission
            ? $permission
            : Permission::whereCode($permission)->first();

        if ($permission_model === null) return false;

        $this->permissions()->detach($permission_model->code);
        return true;
    }

    /**
     * Deletes all permission from a user
     * @param Permission $permission Permission
     * @param string $permission Permission code
     * @return bool
     */
    public function refreshPermissions()
    {
        return $this->permissions()->detach();
    }
}
