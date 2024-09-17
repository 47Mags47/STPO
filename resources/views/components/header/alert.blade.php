<li visible="{{ $alert->visible }}">
    @switch($alert->type_id)
        @case(1)
            <div class="type">
                <span class="sender"></span>
            </div>
            <div class="middle">
                <span class="message">{!! $alert->message !!}</span>
            </div>
            <div class="info">
                <span class="datetime">
                    {{ $alert->created_at->format('d.m H:i') }}
                </span>
            </div>
        @break

        @case(2)
            <div class="type">
                @if ($alert->sender)
                    <span class="sender">Новое сообщение в чате от:
                        {{ $alert->sender->nickname ? $alert->sender->nickname : $alert->sender->first_name . " " . mb_substr($alert->sender->last_name, 0, 1) }}</span>
                @else
                    <span class="sender">Новое сообщение в чате</span>
                @endif
            </div>
            <div class="middle">
                <img src="{{ asset($alert->sender->logo ? $alert->sender->logo : 'media/default_logo.png') }}">
                <span class="message">{!! $alert->message !!}</span>
            </div>
            <div class="info">
                <span class="datetime">
                    {{ $alert->created_at->format('d.m H:i') }}
                </span>
                @if ($alert->link !== null)
                    <x-custom.link link="{{ $alert->link }}" title="Перейти" default />
                @endif
            </div>
        @break

        @case(3)
            <div class="type">
                <span class="sender">Формирование документа</span>
            </div>
            <div class="middle">
                <span class="message italic">{!! $alert->message !!}</span>
            </div>
            <div class="info">
                <span class="datetime">
                    {{ $alert->created_at->format('d.m H:i') }}
                </span>
                @if ($alert->link !== null)
                    <x-custom.link
                        new-page
                        link="{{ asset('/storage/' . $alert->link) }}"
                        title="Загрузить" default />
                @endif
            </div>
        @break

        @default
    @endswitch
</li>
