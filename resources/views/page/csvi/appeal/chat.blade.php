@extends('layouts.page')
@section('page-name', 'Обращения')

@section('body')
    <x-chat.box :$appeal>
        @foreach ($messages as $message)
            <x-chat.message :$message />
        @endforeach
    </x-chat.box>
@endsection
