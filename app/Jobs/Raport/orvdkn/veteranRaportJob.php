<?php

namespace App\Jobs\Raport\orvdkn;

use App\Events\User\SendAlert;
use App\Models\Main\Main_User;
use App\Models\Orvdkn\Orvdkn_Veteran_InDate;
use App\Models\Orvdkn\Orvdkn_Veteran_Raport;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

class veteranRaportJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $date, $user, $raports;

    /**
     * Create a new job instance.
     */
    public function __construct(Orvdkn_Veteran_InDate $date, Main_User $user)
    {
        $this->date = $date;
        $this->user = $user;
        $this->raports = Orvdkn_Veteran_Raport::where('in_date_id', $this->date->id)->get();
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load(public_path('storage/patterns/ORVDKN_VETERAN_RAPORT.xlsx'));
        $activeSheet = $spreadsheet->getActiveSheet();
        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $file_name = "Отчет по присвоению звания Ветеран Труда на " . $this->date->date->format('d_m_Y') . '.xlsx';
        $path = "tmp/raports/orvdkn/veteran/$file_name";

        $this->raports->map(function ($raport, $index) use ($activeSheet) {
            $row = $index + 4;
            $activeSheet->setCellValue("A$row", $index + 1);
            $activeSheet->setCellValue("B$row", $raport->division->name);
            $activeSheet->setCellValue("C$row", $raport->creator ? $raport->creator->nickname : 'NONE');
            $activeSheet->setCellValue("D$row", $raport->all);
            $activeSheet->setCellValue("E$row", $raport->el);
            $activeSheet->setCellValue("F$row", $raport->mfc);
        });
        $writer->save(public_path("storage/$path"));

        $message = "Отчет по присвоению звания Ветеран Труда на " . $this->date->date->format('d.m.Y');
        event(new SendAlert(message: $message, type: 3, link: $path, from_id: $this->user->id));
    }
}
