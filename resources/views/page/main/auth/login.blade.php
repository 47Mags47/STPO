@extends('layouts.auth-page')
@section('page-name', 'Вход')

@section('body')
    <x-form.form action="" method="POST" header="Вход">
        <x-form.input label='Логин или email' type='text' name="login" class="classic"/>
        <x-form.input label='Пароль' type='password' name="password" class="classic"/>
        <x-form.input label='Вход' type='sbm'/>
        <x-form.other>
            <p>Если у вас нет аккаунта <x-link class="default" href="{{route('register')}}">Зарегистрируйтесь</x-link></p>
            <p>Если вы забыли пароль, просто <x-link class="default" href="">Восстановите его</x-link></p>
        </x-form.other>
    </x-form.form>
@endsection
