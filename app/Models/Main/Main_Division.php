<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main_Division extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [];

    public function city(){
        return $this->belongsTo(Main_City::class, 'city_id');
    }

    public function adminers(){
        return $this->hasManyThrough(
            Main_User::class,
            Main_Division_Adminer::class,
            'division_id',
            'id',
            'id',
            'admin_id'
        );
    }

    public function programmers(){
        return $this->hasManyThrough(
            Main_User::class,
            Main_Division_Programmer::class,
            'division_id',
            'id',
            'id',
            'programmer_id'
        );
    }

    public function Completed($class) :bool{
        $raports = new $class;
        return $raports->where('division_id', $this->id)->count() > 0;
    }

    public function raport($class){
        $raport = new $class;
        return $raport->where('division_id', $this->id)->orderBy('updated_at', 'desc')->get()->first();
    }
}
