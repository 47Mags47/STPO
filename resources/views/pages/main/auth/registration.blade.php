@extends('layouts.main.auth')

@section('page-content')
    <x-form.types.vertical
        action="{{ route('register') }}"
        header="Регистрация"
        sbm="Зарегистрироваться"
    >
        <x-slot:content>
            <x-form.inputs.select
                name="division_id"
                label="Подразделение"
                :items="$divisions"
                nullable
                req
            />

            <x-form.inputs.text name="last_name"      label="Фамилия"         req />
            <x-form.inputs.text name="first_name"     label="Имя"             req />
            <x-form.inputs.text name="middle_name"    label="Отчество"        req />
            <x-form.inputs.text name="full_name"      label="Полное имя"      req />

            <x-form.inputs.text name="phone"                    label="Телефон"             req />
            <x-form.inputs.text name="email"                    label="Email"               req type="email" />
            <x-form.inputs.text name="login"                    label="Логин"               req />
            <x-form.inputs.text name="password"                 label="Пароль"              req type="password" />
            <x-form.inputs.text name="password_confirmation"    label="Повторите пароль"    req type="password" />
        </x-slot:content>

        <x-slot:info>
            <p>Если у вас уже есть аккаунт <x-links.blue-link href="{{ route('login') }}" text="Войдите"/> </p>
        </x-slot:info>
    </x-form.types.vertical>
@endsection
