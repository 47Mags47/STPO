<?php

namespace App\Models\Main;

use App\Traits\Named;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alert extends Model
{
    use Named;

    ### Настройки
    ##################################################
    protected
        $table = 'main__alerts',
        $guarded = [];

    ### Связи
    ##################################################
    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function to(): BelongsTo
    {
        return $this->belongsTo(User::class, 'to');
    }
}
