<?php

namespace App\Traits;

trait arrayCollapse
{
    public static function arrayCollapse(
        string $relation,

        string|null $parentText     = 'name',
        string|null $childText      = 'name',
        string|null $childValue     = 'id'
    ) {
        return self::all()->map(function ($parent) use ($relation, $parentText, $childText, $childValue) {
            return [$parent->$parentText => $parent->$relation->map(function ($child) use($childText, $childValue) {
                return [$child->$childText => $child->$childValue];
            })->collapse()->toArray()];
        })->collapse()->toArray();
    }
}
