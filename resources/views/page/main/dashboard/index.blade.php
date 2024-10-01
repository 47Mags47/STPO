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
                <x-split.box>
                    <x-slot:item-1></x-slot:item-1>
                    <x-slot:item-2>
                        {{-- <x-dashboard.logo /> --}}
                        <x-form.image-input name="logo"
                            value="{{ auth()->user()->logo ? auth()->user()->logo : asset('/storage/media/default_logo.png') }}"
                            form="user-form" />
                    </x-slot:item-2>
                    <x-slot:item-3>
                        <x-split.box>
                            <x-slot:item-1>
                                <x-form.box action="" id="user-form" file>
                                    <x-form.input label="Фамилия" name="last_name"
                                        value="{{ auth()->user()->last_name }}" />
                                    <x-form.input label="Имя" name="first_name"
                                        value="{{ auth()->user()->first_name }}" />
                                    <x-form.input label="Отчество" name="middle_name"
                                        value="{{ auth()->user()->middle_name }}" />
                                    <x-form.input label="Почта" name="email"
                                        value="{{ auth()->user()->email ? auth()->user()->email : 'Не указана' }}"
                                        disabled />
                                    <x-form.input label="Телефон" name="phone" value="{{ auth()->user()->phone }}" />
                                    <x-form.input label="Добавочный" name="dop_phone"
                                        value="{{ auth()->user()->dop_phone }}" />
                                    <x-form.sbm title="Применить" />
                                </x-form.box>
                            </x-slot:item-1>
                        </x-split.box>
                    </x-slot:item-3>
                    <x-slot:item-4>
                        <x-split.box vertical no-flex>
                            <x-slot:item-1><x-custom.link link="" title="Сменить почту" blue-button /></x-slot:item-1>
                            <x-slot:item-2><x-custom.link link="{{ route('logout') }}" title="Выход" red-button /></x-slot:item-2>
                        </x-split.box>
                    </x-slot:item-4>
                </x-split.box>
            </x-tab.page>
            <x-tab.page>division</x-tab.page>
            <x-tab.page>administrated</x-tab.page>
            <x-tab.page>settings</x-tab.page>
        </x-slot:body>
    </x-tab.box>



    {{-- <div class="content-box dashboard"> --}}
    {{-- <div class="content-box-header-box">
            <p>Личный кабинет</p>
        </div>
        
        <ul class="content-box-nav">
            <li class="active"><a href="">Данные пользователя</a></li>
            <li><a href="">Подразделение</a></li>
            <li><a href="">Администрирование</a></li>
            <li><a href="">Настройки</a></li>
        </ul> 

        <x-split.box>
            <x-slot:item-1></x-slot:item-1>
            <x-slot:item-1></x-slot:item-1>
            <x-slot:item-2></x-slot:item-2>
            <x-slot:item-3></x-slot:item-3>
            <x-slot:item-4><x-custom.link red-button link="{{ route('logout') }}" title="Выход" /></x-slot:item-4>

        </x-split.box>
        --}}
    {{-- </div> --}}

    {{-- <x-page.info-box>
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
    </x-page.info-box> --}}
@endsection
