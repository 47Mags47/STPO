<?php

namespace App\Models\Main;

use App\Models\Glossary\Glossary_User_Them;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Main_User_Them extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'user_id', 'them_id'
    ];

    /**
     * Get the them that owns the User_Them
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function them(): BelongsTo
    {
        return $this->belongsTo(Glossary_User_Them::class, 'them_id');
    }
}
