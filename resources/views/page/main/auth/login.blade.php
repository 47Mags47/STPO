@extends('layouts.auth-page')
@section('page-name', 'Вход')

@section('body')
    <x-form.box method="POST" header="Вход" sbm='Войти' shadow center error-display>
        <x-form.input   label="Логин"   name="login"        req                         />
        <x-form.input   label="Пароль"  name="password"     req     type="password"     />
        <x-slot:other>
            <P>Если у Вас нет аккаунта <a href="{{ route('register') }}">Зарегистрируйтесь</a></P>
            <p>Если вы забыли пароль, просто <a href="" class="strike">Восстановите его</a></p>
        </x-slot:other>
    </x-form.box>
@endsection
