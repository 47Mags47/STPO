{{-- HACK добавить popup со списком участников --}}
{{-- HACK Добавить смену темы обращения --}}
{{-- HACK добавить кнопку "покинуть обращение" для работников --}}
{{-- HACK добавить кнопку "Пригласить участника" для работников --}}

@extends('layouts.main.default')

@section('styles')
    @vite('resources/sass/export/pages/CSVI/appeal-chat.sass')
@endsection

@section('scripts')
    @vite('resources/js/ui/pages/CSVI/appeal-chat.js')
@endsection

@section('class', 'drop-zone')

@section('page-content')
    <x-drag-and-drop />

    <div class="header">
        <ul class="info">
            <li id="NP">
                <span class="attribute">№:</span>
                <span class="value" id="appeal-id">{{ $appeal->id }}</span>
            </li>

            <li id="participants">
                <span class="attribute">Участников:</span>
                <span class="value">{{ $appeal->workers->push($appeal->sender)->count() }}</span>
            </li>
            @if ($appeal->accepted_at)
                <li id="accepted">
                    <span class="attribute">Взята:</span>
                    <span class="value">{{ $appeal->accepted->full_name }}</span>
                    <div class="popup-info">
                        <span>{{ $appeal->accepted->division->name }}</span>
                        <span>{{ $appeal->accepted->full_name }}</span>
                        <span>{{ $appeal->accepted->email }}</span>
                        <span>{{ $appeal->accepted->phone }}</span>
                    </div>
                </li>
            @endif
            <li id="them">
                <span class="attribute">Тема:</span>
                <span class="value">{{ $appeal->them->name }}</span>
            </li>
            <li id="status">
                <span class="attribute">Статус:</span>
                <span class="value">{{ $appeal->status->name }}</span>
            </li>
        </ul>
        <ul class="actions">
            @if ($appeal->status_code !== 'closed')
                <li>
                    <a href="{{ route('appeal.close', compact('appeal')) }}" class="button red-button">
                        Закрыть обращение
                    </a>
                </li>
            @endif

            @if ($appeal->status_code === 'closed')
                <li>
                    <a href="{{ route('appeal.restore', compact('appeal')) }}" class="button blue-button">
                        Возобновить обращение
                    </a>
                </li>
            @endif

            <li><a href="{{ route('appeal.index') }}" class="button blue-button">Выход</a></li>
        </ul>
    </div>

    <x-chat.box :messages="$appeal->messages" file-route="appeal.chat.file" :file-route-params="compact('appeal')" />

    {{-- @if ($appeal->status_code !== 'closed') --}}
        <x-form.types.main
            action="{{ route('appeal.chat.store', compact('appeal')) }}"
            class="new-message-form"
            upload-file
            @style(['display:none' => $appeal->status_code == 'closed'])
        >
            <x-slot:content>
                <label for="file" class="button blue-button" id="add-file-button">
                    <input type="file" name="file[]" id="file" class="drag-and-drop-input" multiple>
                    <i class="fa-solid fa-paperclip"></i>
                </label>

                <x-form.inputs.area name="message" />

                <button type="button" class="button blue-button" id="submit-button">
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
            </x-slot:content>
        </x-form.types.main>
    {{-- @endif --}}
@endsection
