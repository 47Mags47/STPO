<?php

namespace App\Models\CSVI\Appeal;

use App\Traits\Named;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Named;

    ### Настройки
    ##################################################
    protected
        $table = 'csvi__appeal__category',
        $guarded = [];
    public
        $timestamps = false;

    public function thems()
    {
        return $this->hasMany(Them::class, 'category_id');
    }
}
