<?php

namespace App\Models\Oor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oor_Inv_InDate extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public static function actual()
    {
        return $in_date = Oor_Inv_InDate::where('is_active', true)->get()->first();
    }
}
