@extends('layouts.page')
@section('page-name', 'Личный кабинет')

@section('body')
    <x-tab.box>
        <x-slot:meny>
            <x-tab.link page="user" title="Личные данные" open />
            <x-tab.link page="division" title="Подразделение" />
            <x-tab.link page="administrated" title="Администрирование" />
            <x-tab.link page="settings" title="Настройки" />
        </x-slot:meny>
        <x-slot:body>
            <x-tab.page>
                @include('page.main.dashboard.user')
            </x-tab.page>
            <x-tab.page>
                @include('page.main.dashboard.division')
            </x-tab.page>
            <x-tab.page><x-text.box-header value="Не реализовано"/></x-tab.page>
            <x-tab.page>
                @include('page.main.dashboard.settings')
            </x-tab.page>
        </x-slot:body>
    </x-tab.box>
@endsection
