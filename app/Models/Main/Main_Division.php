<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main_Division extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [];

    public function Completed($class) :bool{
        $raports = new $class;
        return $raports->where('division_id', $this->id)->count() > 0;
    }

    public function raport($class){
        $raport = new $class;
        return $raport->where('division_id', $this->id)->orderBy('updated_at', 'desc')->get()->first();
    }
}
