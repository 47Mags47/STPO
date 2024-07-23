<?php

namespace App\Models\Csvi;

use App\Models\Main\Main_Division;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Csvi_Cert_Certificate extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function division(){
        return $this->belongsTo(Main_Division::class, 'division_id');
    }
}
