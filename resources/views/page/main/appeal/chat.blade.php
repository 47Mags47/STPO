@extends('layouts.page')
@section('page-name', 'Обращения')

@section('body')
    <x-chat.box :$appeal>
        <x-chat.message />
    </x-chat.box>
@endsection
