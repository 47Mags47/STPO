<?php

namespace App\Models\CSVI\Veteran;

use App\Traits\Named;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Date extends Model
{
    use Named, SoftDeletes;

    protected
        $table = 'csvi__veteran__dates',
        $guarded = [];
    public
        $timestamps = false;

    public function casts(): array
    {
        return [
            'date' => 'date',
        ];
    }

    ### Функции
    ##################################################
    public static function actual()
    {
        $date = self::where('is_actual', true)->get()->first();

        return $date !== null
            ? $date
            : self::create([
                'date' => now(),
                'is_actual' => true,
            ]);
    }

    ### Связи
    ##################################################
    public function raports(): HasMany
    {
        return $this->hasMany(Raport::class, 'in_date');
    }
}
