<?php

namespace App\Models\Csvi;

use App\Models\Glossary\Glossary_Csvi_Appeal_Status;
use App\Models\Glossary\Glossary_Csvi_Appeal_Them;
use App\Models\Main\Main_User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Csvi_Appeal_Appeal extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function sender(){
        return $this->belongsTo(Main_User::class, 'sender_id');
    }

    public static function senders(){
        $sender_ids = Csvi_Appeal_Appeal::groupBy('sender_id')->get('sender_id')->pluck('sender_id');
        return Main_User::whereIn('id', $sender_ids)->orderBy('nickname')->get();
    }

    public function worker(){
        return $this->belongsTo(Main_User::class, 'worker_id');
    }

    public static function workers(){
        $worker_ids = Csvi_Appeal_Appeal::groupBy('worker_id')->get('worker_id')->pluck('worker_id');
        return Main_User::whereIn('id', $worker_ids)->orderBy('nickname')->get();
    }

    public function them(){
        return $this->belongsTo(Glossary_Csvi_Appeal_Them::class, 'them_id');
    }

    public function status(){
        return $this->belongsTo(Glossary_Csvi_Appeal_Status::class, 'status_id');
    }
}
