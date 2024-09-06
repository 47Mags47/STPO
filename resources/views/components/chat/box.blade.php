<div class="chat-box">
    <div class="header">
        <ul>
            <li>
                <span class="name">№:</span>
                <span class="value">{!! $appeal->id !!}</span>
            </li>
            <li>
                <span class="name">От:</span>
                <span class="value">{!! $appeal->sender->nickname !!}</span>
            </li>
            <li>
                <span class="name">Взята:</span>
                <span class="value">{!! $appeal->worker !== null ? $appeal->worker->nickname : ' - ' !!}</span>
            </li>
            <li>
                <span class="name">Тема:</span>
                <span class="value">{!! $appeal->them->nameType !!}</span>
            </li>
            <li>
                <span class="name">Статус:</span>
                <span class="value">{!! $appeal->status->name !!}</span>
            </li>
        </ul>
        <div>
            @if ($appeal->status_id != 3)
                <x-custom.link link="{{ route('appeal.close', ['appeal' => $appeal->id]) }}" blue-button
                    title="Закрыть обращение" red-button />
            @endif
            <x-custom.link link="{{ route('appeal') }}" blue-button title="Выйти" />
        </div>
    </div>
    <x-messages.all />

    <ul class="chat mini-scroll">
        <x-chat.drag-and-drop />
        {{ $slot }}
    </ul>
    <div class="options">
        @if ($appeal->status_id != 3)
            <x-form.form action="" :error-display=false>
                <x-form.input name="file[]" type='file' upload-ico multiple />
                <x-form.area type=text name="data[message]" ph="Написать сообщение..." />
                <x-form.sbm name="send-message" send-button />
            </x-form.form>
        @endif
    </div>
</div>
