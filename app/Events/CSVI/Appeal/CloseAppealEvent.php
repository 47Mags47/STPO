<?php

namespace App\Events\CSVI\Appeal;

use App\Events\SendAlert;
use App\Models\CSVI\Appeal\Appeal;
use App\Models\CSVI\Appeal\Message;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CloseAppealEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(
        public Appeal $appeal
    ) {
        $appeal->update([
            'status_code' => 'closed',
            'closed_by' => user()->id,
        ]);

        $message = $appeal->messages()->save(
            new Message([
                'sender_id' => systemUser()->id,
                'message' => 'Обращение №' . $appeal->id . ' закрыто ' . user()->full_name,
                'is_system' => true
            ]),
        );

        SendMessageEvent::dispatch($message);
        SendAlert::dispatch(
            $appeal->sender_id,
            $message->message,
            route('appeal.chat.index', [
                'appeal' => $message->appeal
            ]),
            'Изменение статуса обращения'
        );
    }

    public function broadcastOn(): array
    {
        return [
            new PrivateChannel("appeal." . $this->appeal->id . ".chanel"),
            new Channel('appeals.chanel'),
        ];
    }

    public function broadcastAs()
    {
        return 'close';
    }

    public function broadcastWith(): array
    {
        return [
            'id' => $this->appeal->id,
            'closed_by' => $this->appeal->closed->full_name
        ];
    }
}
