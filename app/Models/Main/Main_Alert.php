<?php

namespace App\Models\Main;


use App\Models\Glossary\Glossary_Main_AlertType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main_Alert extends Model
{
    use HasFactory;

    protected $guarded = ['visible'];

    public function type(){
        return $this->belongsTo(Glossary_Main_AlertType::class);
    }

    public function sender()
    {
        return $this->belongsTo(Main_User::class, 'sender_id');
    }
}
