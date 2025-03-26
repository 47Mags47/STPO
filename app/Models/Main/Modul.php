<?php

namespace App\Models\Main;

use App\Traits\Glossary;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modul extends Model
{
    use Glossary, SoftDeletes;

    ### Настройки
    ##################################################
    protected
        $table = 'main__moduls';

    ### Функции
    ##################################################
    public function department():BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_code', 'code');
    }

    public function userAccess(){
        return $this->permissions()->whereIn('code', user()->rolePermissions()->pluck('code'))->count() > 0;
    }

    public function permissions():BelongsToMany
    {
        return $this->belongsToMany(Permission::class, ModulPivotPermission::getTableName(), 'modul_code', 'permission_code');
    }
}
