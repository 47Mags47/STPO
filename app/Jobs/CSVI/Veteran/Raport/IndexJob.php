<?php

namespace App\Jobs\CSVI\Veteran\Raport;

use App\Events\SendAlert;
use App\Models\CSVI\Veteran\Date;
use App\Models\CSVI\Veteran\Raport;
use App\Models\Main\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use PhpOffice\PhpSpreadsheet\IOFactory;

class IndexJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public User $sender)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $spreadsheet = IOFactory::load(storage_path('app/private/templates/CSVI_VETERAN_RAPORT_INDEX.xlsx'));
        $activeSheet = $spreadsheet->getActiveSheet();

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');

        $actual_date = Date::actual();

        foreach (Raport::where('in_date', $actual_date->id)->get() as $i => $raport) {
            $row = $i + 4;

            $activeSheet->setCellValue("A$row", $i + 1);
            $activeSheet->setCellValue("B$row", $raport->division->name);
            $activeSheet->setCellValue("C$row", $raport->sender->full_name);
            $activeSheet->setCellValue("D$row", $raport->all);
            $activeSheet->setCellValue("E$row", $raport->el);
            $activeSheet->setCellValue("F$row", $raport->mfc);
        }

        $file_name = "Отчет по присвоению звания Ветеран Труда на " . $actual_date->date->format('d_m_Y') . '.xlsx';
        $local_path = "app/private/tmp/raports/$file_name";
        $full_path = storage_path($local_path);
        $writer->save($full_path);

        event(
            new SendAlert(
                $this->sender,
                'Отчет по присвоению звания "Ветеран труда" сформирован',
                route('files', ['file' => $local_path])
            )
        );
    }
}
