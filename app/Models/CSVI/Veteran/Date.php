<?php

namespace App\Models\CSVI\Veteran;

use App\Traits\Named;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use Named;

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
}
