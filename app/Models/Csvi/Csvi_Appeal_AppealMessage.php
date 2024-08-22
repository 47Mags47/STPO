<?php

namespace App\Models\Csvi;

use App\Models\Main\Main_User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Csvi_Appeal_AppealMessage extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function appeal(){
        return $this->belongsTo(Csvi_Appeal_Appeal::class, 'appeal_id')->withTrashed();
    }

    public function sender(){
        return $this->belongsTo(Main_User::class, 'sender_id');
    }
}
