<?php

namespace App\Models\Main;

use App\Models\Glossary\Glossary_Main_AccessLevel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Main_Access extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public static function division_access($modul_id)
    {
        $user_ids = Main_Access::where('modul_id', $modul_id)->where('level_id', 2)->get()->pluck('user_id');
        $division_ids = Main_User::whereIn('id', $user_ids)->get()->pluck('division_id');
        $divisions = Main_Division::select('main__divisions.*')
            ->join('main__cities', 'main__divisions.city_id', '=', 'main__cities.id')
            ->whereIn('main__divisions.id', $division_ids)
            ->orderBy('main__cities.name')
            ->orderBy('main__divisions.name')
            ->get();
        return $divisions;
    }

    public function user()
    {
        return $this->hasOne(Main_User::class, 'id', 'user_id');
    }

    public function division(){
        return $this->through('user')->has('division');
    }

    public function level()
    {
        return $this->belongsTo(Glossary_Main_AccessLevel::class, 'level_id');
    }
}
