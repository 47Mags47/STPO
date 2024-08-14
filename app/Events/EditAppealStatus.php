<?php

namespace App\Events;

use App\Models\Csvi\Csvi_Appeal_Appeal;
use App\Models\Main\Main_Alert;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EditAppealStatus
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(public Csvi_Appeal_Appeal $appeal)
    {
        Main_Alert::create([
            'type_id' => 1,
            'from_id' => $appeal->sender_id,
            'message' => "Статус вашего обращения №$appeal->id изменен на " . '"' . $appeal->status->name . '"',
        ]);
    }

    // /**
    //  * Get the channels the event should broadcast on.
    //  *
    //  * @return array<int, \Illuminate\Broadcasting\Channel>
    //  */
    // public function broadcastOn(): array
    // {
    //     return [
    //         new PrivateChannel('channel-name'),
    //     ];
    // }
}
