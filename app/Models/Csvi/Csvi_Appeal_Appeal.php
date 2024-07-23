<?php

namespace App\Models\Csvi;

use App\Models\Glossary\Glossary_Csvi_Appeal_Category;
use App\Models\Glossary\Glossary_Csvi_Appeal_Status;
use App\Models\Glossary\Glossary_Csvi_Appeal_Them;
use App\Models\Main\Main_User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Csvi_Appeal_Appeal extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function sender(){
        return $this->belongsTo(Main_User::class, 'sender_id');
    }

    public function worker(){
        return $this->belongsTo(Main_User::class, 'worker_id');
    }

    public function them(){
        return $this->belongsTo(Glossary_Csvi_Appeal_Them::class, 'them_id');
    }

    public function status(){
        return $this->belongsTo(Glossary_Csvi_Appeal_Status::class, 'status_id');
    }
}
