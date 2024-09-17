<?php

namespace App\Models\Orvdkn;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orvdkn_Veteran_InDate extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $guarded = [];

    protected $casts = [
        'date' => 'datetime'
    ];

    public static function actual()
    {
        return Orvdkn_Veteran_InDate::firstOrCreate(['is_active' => true], ['date' => '1977-01-01']);
    }
}
