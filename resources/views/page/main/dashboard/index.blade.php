@extends('layouts.page')
@section('page-name', 'Личный кабинет')

@section('body')
    <x-page.info-box>
        <x-slot:nav-list>
            <li><a href="#user">Пользователь</a></li>
        </x-slot:nav-list>
        <x-slot:content>
            <x-dashboard.box header="Пользователь" type="form" action="" id="logo">
                <x-dashboard.logo src="{{ isset($user->logo) ? $user->logo : asset('media/default_logo.png') }}" />
            </x-dashboard.box>
            <x-dashboard.box type='form' :message=false id="user">
                <x-form.input type='text' name="last_name" label="Фамилия" class="classic dashboard"
                    ph="{{ $user->last_name }}" value="{{ $user->last_name }}" />
                <x-form.input type='text' name="first_name" label="Имя" class="classic dashboard"
                    ph="{{ $user->first_name }}" value="{{ $user->first_name }}" />
                <x-form.input type='text' name="middle_name" label="Отчество" class="classic dashboard"
                    ph="{{ $user->middle_name }}" value="{{ $user->middle_name }}" />
                <x-form.input type='text' name="nickname" label="Псевдоним" class="classic dashboard"
                    ph="{{ $user->nickname }}" value="{{ $user->nickname }}" disabled />

                <x-dashboard.email email="{{ $user->email }}" status="dont-active" />

                <x-form.input type='phone' name="phone" label="Телефон" class="classic dashboard"
                    ph="{{ $user->phone }}" value="{{ $user->phone }}" />
                <x-form.input type='phone' name="dop_phone" label="Телефон добавочный" class="classic dashboard"
                    ph="{{ $user->dop_phone }}" value="{{ $user->dop_phone }}" />
                <x-form.input type="sbm" label="Сохранить" class="classic dashboard" />
            </x-dashboard.box>
        </x-slot:content>
    </x-page.info-box>
@endsection
