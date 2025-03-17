<li @class(['alert-box', 'new' => !$alert->visible])>
    <div class="header">
        <span>{{ $alert->header }}</span>
    </div>

    <div class="content">
        <span>{{ $alert->message }}</span>
    </div>

    <div class="info-box">
        <div class="timestamp">
            <span>{{ $alert->created_at->format('d.m H:i') }}</span>
        </div>
        @if ($alert->link !== null)
            <div class="link">
                <a href="{{ $alert->link }}">Перейти</a>
            </div>
        @endif
    </div>
</li>
