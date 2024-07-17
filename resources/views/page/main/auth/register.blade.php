@extends('layouts.auth-page')
@section('page-name', 'Регистрация')

@section('body')
    <x-form.form action="" method="POST" header="Регистрация" shadow center>
        <x-form.input label='Фамилия' name="last_name" req/>
        <x-form.input label='Имя' name="first_name" req/>
        <x-form.input label='Отчество (при наличии)' name="middle_name" req/>
        <x-form.select label="Город" name="city_id">
            @foreach ($cityes as $city)
                <x-form.select-option value="{{ $city->id }}" title="{{ $city->name }}" />
            @endforeach
        </x-form.select>
        <x-form.select label="Подразделение" name="division_id" depend="city_id">
            @foreach ($divisions as $division)
                <x-form.select-option value="{{ $division->id }}" title="{{ $division->name }}" depend-val="{{ $division->city_id }}"/>
            @endforeach
        </x-form.select>
        <x-form.input label='Адрес эл. почты' type='email' name="email" req/>
        <x-form.input label='Логин' name="login" req/>
        <x-form.input label='Пароль' type='password' name="password" req />
        <x-form.input label='Повторите пароль' type='password' name="password_confirmation" req />
        <x-form.sbm title="Зарегистрироваться" />
        <x-slot:other>
            <P>Уже есть аккаунт, <a href="{{ route('login') }}">Войти</a></P>
        </x-slot:other>
    </x-form.form>
@endsection
