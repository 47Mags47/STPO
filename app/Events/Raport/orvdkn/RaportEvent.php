<?php

namespace App\Events\Raport\orvdkn;

use App\Events\User\SendAlert;
use App\Models\Orvdkn\Orvdkn_Veteran_InDate;
use App\Models\Orvdkn\Orvdkn_Veteran_Raport;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class RaportEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct()
    {
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load(public_path('storage/patterns/ORVDKN_VETERAN_RAPORT.xlsx'));
        $activeSheet = $spreadsheet->getActiveSheet();

        $actual_date = Orvdkn_Veteran_InDate::actual();
        $raports = Orvdkn_Veteran_Raport::where('in_date_id', $actual_date->id)->whereNotNull('all')->get();
        $raports->map(function ($raport, $index) use ($activeSheet) {
            $row = $index + 4;
            $activeSheet->setCellValue("A$row", $index + 1);
            $activeSheet->setCellValue("B$row", $raport->division->name);
            $activeSheet->setCellValue("C$row", 'NONE');
            $activeSheet->setCellValue("D$row", $raport->all);
            $activeSheet->setCellValue("E$row", $raport->el);
            $activeSheet->setCellValue("F$row", $raport->mfc);
        });
        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $file_name = Str::random(40) . '.xlsx';
        $path = "tmp/raports/orvdkn/veteran/$file_name";
        $writer->save(public_path('storage/' .$path));

        $actual_date_formated = Carbon::parse($actual_date->date)->format('d_m_Y');
        $message = "Отчет по присвоению звания Ветеран Труда на $actual_date_formated";

        SendAlert::dispatch($message, 3, $path);
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
