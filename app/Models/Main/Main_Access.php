<?php

namespace App\Models\Main;

use App\Models\Glossary\Glossary_Main_AccessLevel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Main_Access extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public static function division_access($modul_id){
        $user_ids = Main_Access::where('modul_id', 7)->get()->pluck('user_id');
        $division_ids = Main_User::whereIn('id', $user_ids)->get()->pluck('division_id');
        return Main_Division::whereIn('id', $division_ids)->get();
    }

    public function user(){
        return $this->belongsTo(Main_User::class, 'user_id');
    }

    public function level(){
        return $this->belongsTo(Glossary_Main_AccessLevel::class, 'level_id');
    }
}
