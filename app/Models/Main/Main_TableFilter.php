<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main_TableFilter extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    protected $casts = [
        'filters' => 'array'
    ];

    // protected function filters(){
    //     return Attribute::make(
    //         get: fn (string $value) => 
    //     )
    // }
}
