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

    public function data(){
        return $this->hasMany(Oor_Inv_Data::class, 'raport_id');
    }
}
