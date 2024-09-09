@extends('layouts.page')
@section('page-name', 'Обращения')

@section('body')
    {{-- <x-chat.box :$appeal>
        @foreach ($messages as $message)
            <x-chat.message :$message />
        @endforeach
    </x-chat.box> --}}
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

        <ul class="chat mini-scroll">
            @if ($appeal->status_id != 3)
                <x-chat.drag-and-drop />
            @endif

            @foreach ($messages as $message)
                @include('components.chat.message', ['massage' => $message])
            @endforeach
        </ul>
        <div class="options">
            @if ($appeal->status_id != 3)
                <x-form.form action="" method="POST" files>
                    <x-form.input name="file[]" type='file' upload-ico multiple />
                    <x-form.area type=text name="data[message]" ph="Написать сообщение..." />
                    <x-form.sbm name="send-message" send-button />
                </x-form.form>
            @endif
        </div>
    </div>

@endsection
