<?php

namespace App\Models\Main;

use App\Traits\Glossary;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modul extends Model
{
    use Glossary, SoftDeletes;

    ### Настройки
    ##################################################
    protected
        $table = 'main__moduls';
}
