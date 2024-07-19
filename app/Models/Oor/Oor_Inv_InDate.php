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
        return Oor_Inv_InDate::firstOrCreate(['is_active' => true], ['date' => '1977-01-01']);
    }

    public static function data()
    {
        $data = collect([]);
        $raports = Oor_Inv_Raport::where('in_date_id', Oor_Inv_InDate::actual()->id)->get();
        $raports->map(function ($raport) use ($data) { //Перебираем отчеты
            $raport->data->map(function ($model) use ($data) { //Перебераем данные отчета
                $index = $model->sheet->index;
                if (!$data->get($index)) { // Проверяем наличие индекса листа
                    $data->put($index, collect([]));
                }

                $coord = $model->coord;
                if ($data->get($index) and $data->get($index)->get($coord)) { // Если в res есть поле с таким индексом страницы и координатой
                    $val = $data->get($index)->get($coord);
                    $data->get($index)->put($coord, $val + (float) $model->value);
                } else {
                    $data->get($index)->put($coord, (float) $model->value);
                }
            });
        });
        return $data;
    }

    public function raport_count()
    {
        return Oor_Inv_Raport::where('in_date_id', $this->id)->count();
    }

    public static function activate($date_id)
    {
        Oor_Inv_InDate::unguard();
        Oor_Inv_InDate::whereNotNull('id')->update(['is_active' => false]);
        Oor_Inv_InDate::whereKey($date_id)->update(['is_active' => true]);
        Oor_Inv_InDate::reguard();
    }
}
