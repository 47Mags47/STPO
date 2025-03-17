<?php

use App\Models\CSVI\Appeal\Appeal;
use App\Models\Main\Alert;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('appeal.{appeal}.chanel', function ($user, Appeal $appeal) {
    return $appeal->hasWorker($user) or $appeal->sender_id == $user->id;
});

Broadcast::channel('user.{user}.alerts', function ($user) {
    return true;
});
