@extends('layouts.page')
@section('page-name', 'Обращения')

@section('body')
    <div class="chat-box">
        <div class="header">
            <ul>
                <li>
                    <span class="name">№:</span>
                    <span class="value">{!! $appeal->id !!}</span>
                </li>
                <li>
                    <span class="name">От:</span>
                    <span class="value">
                        <span
                            title="
{{ $appeal->sender->division->name }}
{{ $appeal->sender->phone ? ' Тел: ' . $appeal->sender->phone : '' }}
{{ $appeal->sender->dop_phone ? ' Добавочный: ' . $appeal->sender->dop_phone : '' }}
">{!! $appeal->sender->nickname !!}</span>
                    </span>
                </li>
                <li>
                    <span class="name">Взята:</span>
                    <span class="value"
                        title="
{{ ($appeal->worker !== null and $appeal->worker->phone) ? ' Тел: ' . $appeal->worker->phone : '' }}
{{ ($appeal->worker !== null and $appeal->worker->dop_phone) ? ' Добавочный: ' . $appeal->worker->dop_phone : '' }}
                    ">{!! $appeal->worker !== null ? $appeal->worker->nickname : ' - ' !!}</span>
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
                    <x-custom.link link="{{ route('appeal.close', ['appeal' => $appeal->id]) }}" title="Закрыть обращение"
                        red-button />
                    @if (auth()->user()->can('is_administration'))
                        <x-custom.link link="{{ route('appeal.dontMath', ['appeal' => $appeal->id]) }}"
                            title="Не верная тема" red-button />
                    @endif
                @endif
                <x-custom.link link="{{ route('appeal') }}" blue-button title="Выйти" />
            </div>
        </div>

        <ul class="chat mini-scroll">
            @if ($appeal->status_id != 3)
                <x-chat.drag-and-drop />
            @endif

            @foreach ($appeal->messages as $message)
                @include('components.chat.message', ['massage' => $message])
            @endforeach
        </ul>
        <div class="options">
            @if ($appeal->status_id != 3)
                <x-form.box action="{{ route('appeal.chat.message.store', compact('appeal')) }}" method="POST" file sbm>
                    <x-form.file-button name="file[]" multiple />
                    <x-form.area name="message" />
                </x-form.box>
            @endif
        </div>
    </div>

@endsection
