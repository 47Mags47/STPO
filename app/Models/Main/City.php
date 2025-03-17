<?php

namespace App\Models\Main;

use App\Traits\Glossary;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use Glossary;

    ### Настройки
    ##################################################
    protected
        $table = 'main__cityes';

    ### Связи
    ##################################################
    public function divisions(): HasMany
    {
        return $this->hasMany(Division::class, 'city_code');
    }
}
