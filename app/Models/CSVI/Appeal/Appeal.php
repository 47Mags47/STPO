<?php

namespace App\Models\CSVI\Appeal;

use App\Models\Main\User;
use App\Traits\HasFilter;
use App\Traits\Named;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Appeal extends Model
{
    use Named, HasFactory, HasFilter;

    ### Настройки
    ##################################################
    protected
        $table = 'csvi__appeal__appeals',
        $guarded = [];

    ### Функции
    ##################################################
    public function scopeHasWorker($builder, User $user):bool
    {
        return in_array($user->id, $this->workers->pluck('worker_id')->toArray());
    }

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
        return $this->belongsTo(User::class, 'accepted_by');
    }

    public function closed(): BelongsTo
    {
        return $this->belongsTo(User::class, 'closed_by');
    }

    public function restored(): BelongsTo
    {
        return $this->belongsTo(User::class, 'restored_by');
    }

    public function them(): BelongsTo
    {
        return $this->belongsTo(Them::class, 'them_id');
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'status_code', 'code');
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class, 'appeal_id')->orderBy('created_at', 'desc');
    }
}
