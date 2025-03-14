<?php

use App\Models\CSVI\Appeal\Appeal;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('appeal.{appeal}.chat.chanel', function ($user, Appeal $appeal) {
    return $appeal->hasWorker($user) or $appeal->sender_id == $user->id;
});
