<?php

namespace App\Events\CSVI\Appeal;

use App\Models\CSVI\Appeal\Appeal;
use App\Models\CSVI\Appeal\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CreateAppealEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(
        public Appeal $appeal
    ) {
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

    public function broadcastOn(): array
    {
        return [
            new Channel('appeals.chanel'),
        ];
    }

    public function broadcastAs()
    {
        return 'create';
    }

    public function broadcastWith(): array
    {
        return [];
    }
}
