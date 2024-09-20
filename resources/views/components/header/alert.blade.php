<li @class(['new' => !$alert->visible])>
    <div class="header">
        <span>{{ $alert->type->name }}</span>
    </div>
    <div class="text">
        @isset($alert->sender_id)
            <div class="logo">
                <img src="{{ $alert->sender->logo ? asset($alert->sender->logo) : asset('/storage/media/default_logo.png') }}"
                    alt="logo">
            </div>
        @endisset
        <span class="message">
            {{ $alert->message }}
        </span>
    </div>
    <div class="info">
        <div class="date">
            <span>{{ $alert->created_at->format('d.m.Y') }}</span>
        </div>
        @isset($alert->link)
            <div class="link">
                <a href="{{ $alert->link }}">Перейти</a>
            </div>
        @endisset
    </div>
</li>
