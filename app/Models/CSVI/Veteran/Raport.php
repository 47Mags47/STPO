<?php

namespace App\Models\CSVI\Veteran;

use App\Models\Main\Division;
use App\Models\Main\User;
use App\Models\Main\UserPivotPermission;
use App\Traits\HasFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Raport extends Model
{
    use HasFactory, HasFilter;

    ### Настройки
    ##################################################
    protected
        $table = 'csvi__veteran__raports',
        $guarded = [];

    ### функции
    ##################################################
    public static function whereDivision(Division $division)
    {
        $actual_date = Date::actual();

        return self::where('in_date', $actual_date->id)
            ->where('division_id', $division->id)
            ->first();
    }

    ### Связи
    ##################################################
    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class, 'division_id');
    }

    public function inDate(): BelongsTo
    {
        return $this->belongsTo(Date::class, 'in_date');
    }

    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
