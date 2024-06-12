<?php

namespace App\Models\Main;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Main_User extends Authenticatable
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

    // protected $attributes = [
    //     // 'nickname' => $this->middle_name
    //     //     ? $this->last_name . ' ' . mb_strtoupper(mb_substr($this->first_name, 0, 1)) . '. ' . mb_strtoupper(mb_substr($this->middle_name, 0, 1)) . '.'
    //     //     : $this->last_name . ' ' . mb_strtoupper(mb_substr($this->first_name, 0, 1)) . '. ',
    //     'logo' => '/storage/media/users/default_logo.png',
    //     'role_id' => 4,
    //     'deleted' => false,
    // ];

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

    public function division()
    {
        return $this->belongsTo(Main_Division::class);
    }
}
