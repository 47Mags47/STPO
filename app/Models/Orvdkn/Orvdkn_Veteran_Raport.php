<?php

namespace App\Models\Orvdkn;

use App\Models\Main\Main_Division;
use App\Models\Main\Main_User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Orvdkn_Veteran_Raport extends Model
{
    use HasFactory;

    public $guarded = [];

    /**
     * Get the creator associated with the Orvdkn_Veteran_Raport
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function creator(): HasOne
    {
        return $this->hasOne(Main_User::class, 'id', 'creator_id');
    }

    /**
     * Get the date that owns the Veteran_Raport
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function date(): BelongsTo
    {
        return $this->belongsTo(Orvdkn_Veteran_InDate::class, 'in_date_id');
    }

    /**
     * Get the division that owns the Orvdkn_Veteran_Raport
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function division(): BelongsTo
    {
        return $this->belongsTo(Main_Division::class, 'division_id');
    }
}
