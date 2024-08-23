@extends('layouts.page')
@section('page-name', 'Личный кабинет')

@section('body')
    <x-page.info-box>
        <x-slot:nav-list>
            <li><a href="#logo">Пользователь</a></li>
            <li><a href="#division">Подразделение</a></li>
            <li><a href="#adminers">Администраторы</a></li>
            <li><a href="#adminers">Программисты</a></li>
            <li><a href="#options">Настройки</a></li>
        </x-slot:nav-list>
        <x-slot:content>
            <div style="width: 800px">
                <x-dashboard.box header="Пользователь" id="logo">
                    <x-dashboard.logo src="{{ isset($user->logo) ? $user->logo : asset('media/default_logo.png') }}" />
                </x-dashboard.box>
                <x-dashboard.box header="" id="user">
                    <x-form.form form-id="user-form">
                        <x-form.input name="last_name" label="Фамилия" value="{{ $user->last_name }}" />
                        <x-form.input name="first_name" label="Имя" value="{{ $user->first_name }}" />
                        <x-form.input name="middle_name" label="Отчетсво" value="{{ $user->middle_name }}" />
                        <x-form.input name="nickname" label="Псевдоним" value="{{ $user->nickname }}" disabled/>
                        <x-form.input type="email" name="email" label="Эл. Почта" value="{{ $user->email }}" disabled />
                        <x-form.input type="tel" name="phone" label="Телефон" value="{{ $user->phone }}" />
                        <x-form.input name="dop_phone" label="Добавочный" value="{{ $user->dop_phone }}" />
                        <x-form.sbm title="сохранить" close/>
                    </x-form.form>
                </x-dashboard.box>

                <x-dashboard.box header="Подразделение" id="division">
                    <x-text.ul>
                        <x-text.li title="Город: " value="{{ $user->division->city->name }}" />
                        <x-text.li title="Наименование: " value="{{ $user->division->name }}" />
                    </x-text.ul>
                </x-dashboard.box>
                <x-dashboard.box header="Администраторы" id="adminers">
                    @foreach ($user->division->adminers as $admin)
                        <x-text.ul>
                            <x-text.li title="ФИО: "
                                value="{{ $admin->last_name }} {{ $admin->first_name }} {{ $admin->middle_name }}" />
                            <x-text.li title="Телефон: " value="{{ $admin->phone }} {{ $admin->dop_phone }}" />
                            <x-text.li title="Почта: " value="{{ $admin->email }}" />
                        </x-text.ul>
                    @endforeach
                </x-dashboard.box>
                <x-dashboard.box header="Программисты" id="programmers">
                    @foreach ($user->division->programmers as $programmer)
                        <x-text.ul>
                            <x-text.li title="ФИО: "
                                value="{{ $programmer->last_name }} {{ $programmer->first_name }} {{ $programmer->middle_name }}" />
                            <x-text.li title="Телефон: " value="{{ $programmer->phone }} {{ $programmer->dop_phone }}" />
                            <x-text.li title="Почта: " value="{{ $programmer->email }}" />
                        </x-text.ul>
                    @endforeach
                </x-dashboard.box>
                <x-dashboard.box header="Настройки" id="options">
                    <x-dashboard.logout />
                </x-dashboard.box>
            </div>
        </x-slot:content>
    </x-page.info-box>
@endsection
