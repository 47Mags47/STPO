<?php

namespace App\Models\CSVI\Appeal;

use App\Models\Main\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    ### Настройки
    ##################################################
    protected
        $table = 'csvi__appeal__messages',
        $guarded = [];

    public function casts(): array
    {
        return [
            'is_system' => 'bool',
            'is_file' => 'bool',
            'is_image' => 'bool',
        ];
    }

    ### Связи
    ##################################################
    public function sender():BelongsTo
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function appeal():BelongsTo
    {
        return $this->belongsTo(Appeal::class, 'appeal_id');
    }
}
