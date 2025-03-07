<?php

namespace App\Models\CSVI\Appeal;

use App\Models\Main\User;
use App\Traits\Named;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Queue\Worker;

class Appeal extends Model
{
    use Named, HasFactory;

    ### Настройки
    ##################################################
    protected
        $table = 'csvi__appeal__appeals',
        $guarded = [];

    ### Связи
    ##################################################
    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function workers(): HasMany
    {
        return $this->hasMany(Worker::class, 'appeal_id');
    }

    public function accepted(): BelongsTo
    {
        return $this->belongsTo(User::class, 'accepted_at');
    }

    public function them(): BelongsTo
    {
        return $this->belongsTo(Them::class, 'them_id');
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'status_code', 'code');
    }
}
