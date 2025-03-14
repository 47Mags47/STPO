<?php

/* HACK дописать */

namespace App\Events;

use App\Models\Main\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendAlert
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $response;

    public function __construct(string $message, User|null $sender = null, string|null $link = null)
    {
        $this->response = view('components.alert', compact('message', 'sender', 'link'));
    }

    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
