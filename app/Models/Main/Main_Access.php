<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Main_Access extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public static function divisions($modul){
        $user_ids = Main_Access::where('modul_id', $modul->id)->where('level_id', 2)->get()->pluck('user_id');
        $division_ids = Main_User::whereIn('id', $user_ids)->get()->pluck('division_id');
        return Main_Division::whereIn('id', $division_ids)->get();
    }
}
