<?php

namespace App\Models\Oor;

use App\Models\Glossary\Glossary_Oor_inv_sheet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oor_Inv_Data extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public function raport(){
        return $this->belongsTo(Oor_Inv_Raport::class, 'raport_id');
    }

    public function sheet(){
        return $this->belongsTo(Glossary_Oor_inv_sheet::class, 'sheet_id');
    }
}
