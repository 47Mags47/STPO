<?php

namespace App\Events\CSVI\Appeal;

use App\Events\SendAlert;
use App\Models\CSVI\Appeal\Message;
use App\View\Components\Chat\Message as ChatMessage;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;

class SendMessageEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets;

    public function __construct(public Message $message) {}

    public function broadcastOn(): array
    {
        return [
            new PrivateChannel("appeal." . $this->message->appeal_id . ".chat.chanel"),
        ];
    }

    public function broadcastAs()
    {
        return 'new.message';
    }

    public function broadcastWith(): array
    {
        $view = new ChatMessage($this->message, 'appeal.chat.file', ['appeal' => $this->message->appeal], false);

        return [
            'message' => $view->render()->with($view->data())->render()
        ];
    }
}
