@extends('layouts.page')
@section('page-name', 'Email')

@section('body')
    <x-form.box action="{{ route('verification.send') }}" method="POST" sbm="Отправить сообщение" center shadow header="Привязать Email">
        <x-form.input name="email" label="Почта" type="email" value="{{ auth()->user()->email }}" ph="example@mail.ru" req />
    </x-form.box>
@endsection