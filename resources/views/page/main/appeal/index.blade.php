@extends('layouts.page')
@section('page-name', 'Обращения')

@section('body')
    <x-table.box>
        <x-slot:filters>
            <x-table.filter pole="sender_id" title="Отправитель" :items="$senders" name="nickname" value="id" />
        </x-slot:filters>
        <x-slot:cols>

        </x-slot:cols>
        <x-slot:header>

        </x-slot:header>
        <x-slot:body>

        </x-slot:body>
    </x-table.box>
@endsection
