<?php

namespace App\Jobs\CSVI\Technical;

use App\Core\XLSXWriter;
use App\Events\SendAlert;
use App\Models\CSVI\Technical\Technical;
use App\Models\Main\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class Export implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public User $created) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $file_name = 'Сведения по технике ' . $this->created->division->name . '  на ' . now()->format('d.m.Y') . '.xlsx';
        $file_path = storage_path('app/private/tmp/raports');

        $headers = [
            'Тип',
            'Марка',
            'Модель',
            'Серийный номер',
            'Инвентарный номер',
            'Введен в эксплуатацию',
            'Комментарий',
        ];

        $technicals = Technical::where('division_id', $this->created->division_id)->get()->map(function ($technical) {
            return [
                $technical->type->name,
                $technical->mark->name,
                $technical->model,
                $technical->serial_number,
                $technical->inventory_number,
                $technical->exp_date->format('d.m.Y'),
                $technical->comment
            ];
        })->toArray();

        $writer = new XLSXWriter();
        $writer
            ->setFileName($file_name)
            ->setFilePath($file_path)
            ->setHeaders($headers)
            ->writeRows($technicals)
            ->save();

        event(new SendAlert(
            $this->created,
            $file_name,
            route('files', ['file' => 'app/private/tmp/raports/' . $file_name]),
            'Отчет сформирован'
        ));
    }
}
