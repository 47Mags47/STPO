<?php

namespace App\Events\CSVI\Appeal;

use App\Events\SendAlert;
use App\Models\CSVI\Appeal\Appeal;
use App\Models\CSVI\Appeal\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class RestoreAppealEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(
        public Appeal $appeal
    ) {
        $appeal->update([
            'status_code' => 'restored',
            'restored_by' => user()->id,
        ]);

        $message = $appeal->messages()->save(
            new Message([
                'sender_id' => systemUser()->id,
                'message' => 'Обращение возобновлено ' . user()->full_name,
                'is_system' => true
            ]),
        );

        SendMessageEvent::dispatch($message);
        if (user()->id !== $appeal->sender_id)
            SendAlert::dispatch(
                $message->message,
                $message->sender,
                route('appeal.chat.index', [
                    'appeal' => $message->appeal
                ])
            );
    }
}
