<?php

namespace App\Models\Glossary;

use App\Models\Main\Main_Modul;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Glossary_ModulDepartment extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [];

    public function moduls()
    {
        return $this->hasMany(Main_Modul::class, 'department_id');
    }
}
