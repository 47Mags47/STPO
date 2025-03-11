<?php

namespace App\Models\CSVI\Appeal;

use App\Models\Main\City;
use App\Models\Main\Division;
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

    ### Контракты
    ##################################################
    // public static function getFilters()
    // {
    //     dd(self::sender());
    //     return [
    //         'city'      => City::orderBy('name')->get(),
    //         // 'division'  => Division::whereIn('id', self::getForeignGroupBy('from_division'))->get(),
    //         'sender'    => User::whereIn('id', self::getForeignGroupBy('sender_id'))->get(),
    //         // 'accepted'  => User::whereIn('id', self::getForeignGroupBy('accepted_at'))->get(),
    //         // 'status'    => Status::orderBy('name')->get(),
    //         // 'category'  => Category::orderBy('name')->get(),
    //     ];
    // }

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
}
