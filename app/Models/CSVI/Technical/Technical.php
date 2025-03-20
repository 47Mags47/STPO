<?php

namespace App\Models\CSVI\Technical;

use App\Traits\HasFilter;
use App\Traits\Named;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Technical extends Model
{
    use Named, HasFactory, SoftDeletes, HasFilter;

    ### Настройки
    ##################################################
    protected
        $table = 'csvi__technical__technicals',
        $guarded = [];

    public function casts(): array
    {
        return [
            'exp_date' => 'date',
        ];
    }

    ### Связи
    ##################################################
    public function folder(): BelongsTo
    {
        return $this->belongsTo(Folder::class, 'folder_id');
    }

    public function mark(): BelongsTo
    {
        return $this->belongsTo(Mark::class, 'mark_id');
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}
