<?php

namespace App\Events;

use App\Models\Csvi\Csvi_Appeal_AppealMessage;
use App\Models\Main\Main_Alert;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendAppealMessage
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(public Csvi_Appeal_AppealMessage $message)
    {
        Main_Alert::create([
            'type_id' => 2,
            'from_id' => $message->appeal->sender_id == $message->sender_id ? $message->appeal->worker_id : $message->appeal->sender_id,
            'sender_id' => $message->sender_id,
            'link' => route('appeal.chat', ['appeal' => $message->appeal->id]),
            'message' => $message->message,
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
