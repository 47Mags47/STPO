<?php

namespace App\Events\CSVI\Appeal;

use App\Events\SendAlert;
use App\Models\CSVI\Appeal\Appeal;
use App\Models\CSVI\Appeal\Message;
use App\Models\CSVI\Appeal\Worker;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AcceptAppealEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(
        public Appeal $appeal
    ) {
        $appeal->update([
            'status_code' => 'accepted',
            'accepted_by' => user()->id,
        ]);

        Worker::updateOrCreate([
            'worker_id' => user()->id,
            'appeal_id' => $appeal->id
        ]);

        $message = $appeal->messages()->save(
            new Message([
                'sender_id' => systemUser()->id,
                'message' => 'Обращение №' . $appeal->id . ' принято ' . user()->full_name,
                'is_system' => true
            ]),
        );

        SendMessageEvent::dispatch($message);
        SendAlert::dispatch(
            $message->message,
            $message->sender,
            route('appeal.chat.index', [
                'appeal' => $message->appeal
            ])
        );
    }
}
