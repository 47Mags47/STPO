<?php

namespace App\Models\Oor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oor_Inv_InDate extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public static function actual()
    {
        return $in_date = Oor_Inv_InDate::where('is_active', true)->get()->first();
    }

    public static function data()
    {
        $data = collect([]);
        $raports = Oor_Inv_Raport::where('in_date_id', Oor_Inv_InDate::actual()->id)->get();
        $raports->map(function ($raport) use ($data) {
            $raport->data->map(function ($model) use ($data) {
                $index = $model->sheet->sheet_index;
                if (!$data->get($index)) {
                    $data->put($index, collect([]));
                }

                $coord = $model->coord;
                if ($data->get($index)->get($coord)) {
                    $val = $data->get($index)->get($coord);
                    $data->get($index)->put($coord, $val + $model->value);
                } else {
                    $data->get($index)->put($coord, $model->value);
                }
            });
        });
        return $data;
    }
}
