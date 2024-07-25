<?php

namespace App\Models\Glossary;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Glossary_Csvi_Appeal_Them extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [];

    public function category(){
        return $this->belongsTo(Glossary_Csvi_Appeal_Category::class, 'category_id');
    }

    public static function categoryThem(){
        return Glossary_Csvi_Appeal_Them::joinRelationshipUsingAlias('category', 'category')
            ->orderByPowerJoins('category.name')
            ->get();
    }

    protected function nameType() : Attribute {
        return Attribute::make(
            get: fn () => '(' . $this->category->name . ' ) ' .  $this->name
        );
    }
}
