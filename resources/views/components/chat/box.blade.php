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
        <x-custom.link link="{{ route('appeal') }}" blue-button title="Выйти" />
    </div>
    <x-messages.all />
    <div class="chat">
        {{ $slot }}
    </div>
    <div class="options">
        <x-form.form action="" :error-display=false>
            <x-form.input name="file" type='file' upload-ico/>
            <x-form.input type=text name="data[message]" ph="Написать сообщение..." autocomplete/>
            <x-form.sbm name="send-message" send-button />
        </x-form.form>
    </div>
</div>
