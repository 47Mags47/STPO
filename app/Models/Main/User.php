<?php

namespace App\Models\Main;

use App\Traits\HasRolesAndPermissions;
use App\Traits\Named;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable implements MustVerifyEmail
{
    use Named, Notifiable, HasFactory, HasRolesAndPermissions;

    ### Настройки
    ##################################################
    protected
        $table = 'main__users',
        $guarded = [],
        $hidden = [
            'password',
            'remember_token',
        ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function scopeLogo(){
        return asset('/storage/' . ($this->logo ?? '/core/image/user_logo.png'));
    }

    public function scopeGetFilter($builder, $table){
        return $this->filters()->where('table', $table);
    }

    public function scopeReadAlerts(){
        $this->alerts()->update([
            'visible' => true,
        ]);
    }

    ### Связи
    ##################################################
    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class, 'division_id');
    }

    public function alerts(): HasMany
    {
        return $this->hasMany(Alert::class, 'to')->orderBy('created_at', 'desc');
    }

    public function filters(): HasMany
    {
        return $this->hasMany(TableFilter::class, 'user_id');
    }
}
