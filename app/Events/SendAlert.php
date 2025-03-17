<?php

namespace App\Events;

use App\Models\Main\Alert;
use App\Models\Main\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Queue\SerializesModels;

class SendAlert implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $alert;

    public function __construct(
        User|int $to,
        string $message,
        string|null $link = null,
        string|null $header = null,
    ) {

        $this->alert = Alert::create([
            'to' => $to instanceof User ? $to->id : $to,
            'message' => $message,
            'link' => $link,
            'header' => $header,
        ]);
    }

    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('user.' . $this->alert->to . '.alerts'),
        ];
    }

    public function broadcastAs()
    {
        return 'new.alert';
    }

    public function broadcastWith(): array
    {
        $view = view('components.alert', ['alert' => $this->alert])->render();

        return compact('view');
    }
}
