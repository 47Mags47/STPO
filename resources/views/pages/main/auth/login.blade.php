@extends('layouts.main.auth')

@section('page-content')
    <x-form.types.vertical
        action="{{ route('authenticate') }}"
        header="Вход"
        sbm="Войти"
    >
        <x-slot:content>
            <x-form.inputs.text name="login"    label="Логин"   req/>
            <x-form.inputs.text name="password" label="Пароль"  req type="password" />
        </x-slot:content>
        <x-slot:info>
            <p>Если у вас нет аккаунта <x-links.blue-link href="{{ route('registration') }}" text="Зарегистрируйтесь"/> </p>
        </x-slot:info>
    </x-form.types.vertical>
@endsection
