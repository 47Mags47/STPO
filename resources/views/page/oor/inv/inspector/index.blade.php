@extends('layouts.page')
@section('page-name', 'формирования и развития системы комплексной реабилитации и абилитации инвалидов')

@section('body')
    <x-page.admin-box>
        <x-slot:meny>
            <x-page.nav title="Отчеты" link="" />
            <x-page.nav title="Даты" link="" />
            <x-page.nav title="Доступ" link="" />
            <x-page.nav type="form-submit" title="Текущий" form="data-form" />
            <x-page.nav type="form-submit" title="Отчет" form="data-form" />
        </x-slot:meny>
        <x-slot:division-list>
            <x-page.division-list>
                @foreach ($divisions as $division)
                    <x-page.division link="test2" title="{{$division->name}}"
                        complited="{{ $division->Completed($raportClass) }}" />
                @endforeach



            </x-page.division-list>
        </x-slot:division-list>
        <x-slot:content>
            content2
        </x-slot:content>
    </x-page.admin-box>
@endsection
