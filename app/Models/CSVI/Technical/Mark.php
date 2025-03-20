<?php

namespace App\Models\CSVI\Technical;

use App\Traits\Named;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mark extends Model
{
    use Named;

    ### Настройки
    ##################################################
    protected
        $table = 'csvi__technical__marks',
        $guarded = [];
    public
        $timestamps = false;

    ### Связи
    ##################################################
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}
