@extends('layouts.main.scroller')

@section('styles')
    @vite('resources/sass/export/pages/main/dashboard.sass')
@endsection

@section('page-navigation')
    <x-layouts.scroller-navigate-item anhor="info"  text="Данные"               ico="fa-user" active />
    <x-layouts.scroller-navigate-item anhor=""      text="подразделение"        ico="fa-house" />
    <x-layouts.scroller-navigate-item anhor=""      text="Администрирование"    ico="fa-user-tie" />
    <x-layouts.scroller-navigate-item href="{{ route('logout') }}"       text="Выход"                ico="fa-right-from-bracket" />
@endsection

@section('page-content')
    <x-layouts.scroller-item id="info" header="Данные">
        <x-form.types.horizontall-split>
            <x-slot:left>
                <div class="image-box">
                    <img src="{{ asset('/storage/core/image/user_logo.png') }}" alt="">
                </div>
            </x-slot:left>
            <x-slot:right>
                <x-form.inputs.text name="last_name"    label="Фамилия"     :value="$user->last_name ?? ''"     disabled />
                <x-form.inputs.text name="first_name"   label="Имя"         :value="$user->first_name"          disabled />
                <x-form.inputs.text name="middle_name"  label="Отчество"    :value="$user->middle_name ?? ''"   disabled />
                <x-form.inputs.text name="full_name"    label="Полное имя"  :value="$user->full_name"           disabled />
                <x-form.inputs.text name="phone"        label="Телефон"     :value="$user->phone"               disabled />
                <x-form.inputs.text name="email"        label="email"       :value="$user->email"               disabled />
            </x-slot:right>
        </x-form.types.horizontall-split>
    </x-layouts.scroller-item>
@endsection
