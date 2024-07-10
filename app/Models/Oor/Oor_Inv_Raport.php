<?php

namespace App\Models\Oor;

use App\Models\Main\Main_Access;
use App\Models\Main\Main_Division;
use App\Models\Main\Main_User;
use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oor_Inv_Raport extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function data()
    {
        return $this->hasMany(Oor_Inv_Data::class, 'raport_id');
    }

    public static function sheetData($raport_id, $sheet_id){
        return Oor_Inv_Data::where('raport_id', $raport_id)->where('sheet_id', $sheet_id)->pluck('value', 'coord');
    }

    public function in_date()
    {
        return $this->belongsTo(Oor_Inv_InDate::class, 'in_date_id');
    }

    public function worker()
    {
        return $this->belongsTo(Main_User::class, 'worker_id');
    }

    public function division()
    {
        return $this->belongsTo(Main_Division::class, 'division_id');
    }
}
