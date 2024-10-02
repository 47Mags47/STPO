<?php

namespace App\Models\Main;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Main_User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'phone',
        'dop_phone',
        'division_id',
        'login',
    ];

    protected $guarded = [
        'nickname',
        'logo',
        'email',
        'password',
        'role_id',
        'deleted',
    ];

    protected $hidden = [
        'logo',
        'login',
        'role_id',
        'deleted',
        'email_verified_at',
        'password',
        'remember_token',
        'created_at',
        'updated_at'
    ];

    public function acesses(): HasMany
    {
        return $this->hasMany(Main_Access::class, 'user_id', 'id');
    }

    public function division()
    {
        return $this->hasOne(Main_Division::class, 'id', 'division_id');
    }

    public function alerts(): HasMany
    {
        return $this
            ->hasMany(Main_Alert::class, 'from_id')
            ->orderBy('visible')
            ->orderBy('id', 'desc')
            ->take(25);
    }

    public static function alertRead(){
        Main_Alert::where('from_id', auth()->user()->id)
        ->where('visible', false)
        ->update([
            'visible' => true,
        ]);
    }
}
