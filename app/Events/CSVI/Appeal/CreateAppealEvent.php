<?php

namespace App\Events\CSVI\Appeal;

use App\Models\CSVI\Appeal\Appeal;
use App\Models\CSVI\Appeal\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CreateAppealEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(
        public Appeal $appeal
    )
    {
        $appeal->messages()->saveMany(
            [
                new Message([
                    'sender_id' => systemUser()->id,
                    'message' => 'Обращение создано',
                    'is_system' => true
                ]),

                new Message([
                    'sender_id' => $appeal->sender_id,
                    'message' => $appeal->comment,
                    'created_at' => now()->addSecond(1)
                ]),
            ]
        );
    }
}
