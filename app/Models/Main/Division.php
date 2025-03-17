<?php

namespace App\Models\Main;

use App\Traits\Named;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Division extends Model
{
    use Named;

    ### Настройки
    ##################################################
    protected
        $table = 'main__divisions',
        $fillable = [];
    public
        $timestamps = false;

    ### Связи
    ##################################################
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::getTableName(), 'city_id');
    }

    public function users():HasMany
    {
        return $this->hasMany(User::class, 'division_id');
    }
}
