<?php

namespace App\Events\User;

use App\Models\Main\Main_Alert;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendAlert
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(
        string $message, 
        int $type, 
        string $link = null, 
        string $date = null, 
        int $from_id = null, 
        int $sender_id = null
    )
    {
        switch ($type) {
            case 1:
                # code...
                break;
            case 2:
                # code...
                break;
            case 3:
                # code...
                break;

            default:
                # code...
                break;
        }

        Main_Alert::create([
            'type_id' => $type,
            'from_id' => $from_id ? $from_id : auth()->user()->id,
            'sender_id' => $sender_id,
            'link' => $link,
            'message' => $message,
        ]);
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
