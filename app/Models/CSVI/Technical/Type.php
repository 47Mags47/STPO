<?php

namespace App\Models\CSVI\Technical;

use App\Traits\Named;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    use Named;

    ### Настройки
    ##################################################
    protected
        $table = 'csvi__technical__types',
        $guarded = [];
    public
        $timestamps = false;

    ### Связи
    ##################################################
    public function marks(): HasMany
    {
        return $this->hasMany(Mark::class, 'type_id');
    }
}
