<?php

namespace App\Models\CSVI\Technical;

use App\Models\Main\Division;
use App\Traits\Named;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Folder extends Model
{
    use Named, HasFactory;

    ### Настройки
    ##################################################
    protected
        $table = 'csvi__technical__folders',
        $guarded = [];
    public
        $timestamps = false;

    ### Связи
    ##################################################
    public function childs(): HasMany
    {
        return $this->hasMany(__CLASS__, 'parent_id');
    }

    public function scopeAllChilds()
    {
        return $this->childs->map(function ($item) {
            if ($item->childs()->count() > 0)
                return $item->childs;
            else
                return $item;
        });
    }

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class, 'division_id');
    }
}
