<li @class([
    'file' => $message->is_file,
    'system' => $message->is_system,
    'default' => !$message->is_file and !$message->is_system,
    'own' => $message->sender_id == auth()->user()->id,
])>
    @if (!$message->is_system)
        <div class="logo">
            <img src="{{ isset($user->logo) ? $user->logo : asset('media/default_logo.png')  }}" alt="{!! $message->sender->nickname !!}">
        </div>
        <div class="text">
            <span>
                {!! $message->message !!}
            </span>
        </div>
        <div class="datetime">
            <span>{!! $message->created_at->format('d.m H:i') !!}</span>
        </div>
    @endif
</li>
