<?php

namespace App\Models\Csvi;

use App\Models\Glossary\Glossary_Csvi_Appeal_Status;
use App\Models\Glossary\Glossary_Csvi_Appeal_Them;
use App\Models\Main\Main_User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Csvi_Appeal_Appeal extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function sender(){
        return $this->belongsTo(Main_User::class, 'sender_id');
    }

    public function worker(){
        return $this->belongsTo(Main_User::class, 'worker_id');
    }

    public function them(){
        return $this->belongsTo(Glossary_Csvi_Appeal_Them::class, 'them_id');
    }

    public function status(){
        return $this->belongsTo(Glossary_Csvi_Appeal_Status::class, 'status_id');
    }

    /**
     * Get all of the messages for the Csvi_Appeal_Appeal
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages(): HasMany
    {
        return $this->hasMany(Csvi_Appeal_AppealMessage::class, 'appeal_id')->orderBy('id', 'desc');
    }
}
