<?php

namespace App\Models\CSVI\Appeal;

use App\Traits\Named;
use Illuminate\Database\Eloquent\Model;

class Them extends Model
{
    use Named;

    ### Настройки
    ##################################################
    protected
        $table = 'csvi__appeal__them',
        $guarded = [];
    public
        $timestamps = false;

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
