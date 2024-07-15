@extends('layouts.page')
@section('page-name', 'Личный кабинет')

@section('body')
    <x-page.info-box>
        <x-slot:nav-list>
            <li><a href="#logo">Пользователь</a></li>
            <li><a href="#division">Подразделение</a></li>
            <li><a href="#adminers">Администраторы</a></li>
            <li><a href="#adminers">Программисты</a></li>

        </x-slot:nav-list>
        <x-slot:content>
            <x-dashboard.box type="form" header="Пользователь" action="" id="logo" :errors=$errors>
                <x-dashboard.logo src="{{ isset($user->logo) ? $user->logo : asset('media/default_logo.png') }}" />
            </x-dashboard.box>
            <x-dashboard.box type='form' :messages=false id="user">
                <x-dashboard.input name="last_name" label="Фамилия" ph="{{ $user->last_name }}"
                    value="{{ $user->last_name }}" />
                <x-dashboard.input name="first_name" label="Имя" ph="{{ $user->first_name }}"
                    value="{{ $user->first_name }}" />
                <x-dashboard.input name="middle_name" label="Отчество" ph="{{ $user->middle_name }}"
                    value="{{ $user->middle_name }}" />
                <x-dashboard.input name="last_name" label="test" ph="{{ $user->last_name }}"
                    value="{{ $user->last_name }}" />
                <x-dashboard.input name="nickname" label="Псевдоним" ph="{{ $user->nickname }}"
                    value="{{ $user->nickname }}" disabled />
                <x-dashboard.input type="email" name="email" label="Адресс эл. почты" ph="{{ $user->email }}"
                    value="{{ $user->email }}" />
                <x-dashboard.input type="phone" name="phone" label="Телефон" ph="{{ $user->phone }}"
                    value="{{ $user->phone }}" />
                <x-dashboard.input name="dop_phone" label="Добавочный" ph="{{ $user->dop_phone }}"
                    value="{{ $user->dop_phone }}" />
                <x-dashboard.input type="sbm" />

            </x-dashboard.box>
            <x-dashboard.box type='info' header="подразделение" id="division">
                <x-dashboard.input name="division" label="Наименование" ph="{{ $user->division->name }}"
                    value="{{ $user->division->name }}" disabled />
            </x-dashboard.box>
            <x-dashboard.box type='info' header="Администраторы" id="adminers">
                @foreach ($user->division->adminers as $admin)
                    <x-text.box type="info">
                        <x-text.li title="ФИО:" value="{{ $admin->last_name }} {{ $admin->first_name }} {{ $admin->middle_name }}" />
                        <x-text.li title="Телефон:" value="{{ $admin->phone }}, {{ $admin->dop_phone }}" />
                        <x-text.li title="Email:" value="{{ $admin->email }}" />
                    </x-text.box>
                @endforeach
            </x-dashboard.box>
            <x-dashboard.box type='info' header="Программисты" id="programmers">
                @foreach ($user->division->programmers as $programmer)
                    <x-text.box type="info">
                        <x-text.li title="ФИО:" value="{{ $programmer->last_name }} {{ $programmer->first_name }} {{ $programmer->middle_name }}" />
                        <x-text.li title="Телефон:" value="{{ $programmer->phone }}, {{ $programmer->dop_phone }}" />
                        <x-text.li title="Email:" value="{{ $programmer->email }}" />
                    </x-text.box>
                @endforeach
            </x-dashboard.box>
        </x-slot:content>
    </x-page.info-box>
@endsection
