<?php

namespace App\Models\Main;

use App\Traits\Glossary;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    use Glossary;

    ### Настройки
    ##################################################
    protected
        $table = 'main__departments';

    ### Связи
    ##################################################
    public function moduls(): HasMany{
        return $this->hasMany(Modul::class, 'department_code', 'code');
    }
}
