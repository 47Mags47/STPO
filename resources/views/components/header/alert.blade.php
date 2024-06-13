<li>
    <div class="top">
        @if ($alert->sender_id)
            <span class="sender">{{ $alert->sender->nickname }}</span>
        @endif
    </div>
    <div class="middle">
        @if ($alert->sender_id)
            <x-user.logo />
        @endif
        <span class="message">
            {!! $alert->message !!}
        </span>
    </div>
    <div class="bottom">
        <span class="datetime">
            {{ $alert->created_at->format('d.m H:i') }}
        </span>
        <a href="" class="default">Перейти</a>
    </div>
</li>
