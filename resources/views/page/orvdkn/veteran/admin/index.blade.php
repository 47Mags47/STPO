@extends('layouts.page')
@section('page-name', 'Ветеран труда')

@section('body')
    <x-admin.box burger>
        <x-slot:meny>
            <x-page.nav title="Отчеты" link="{{ route('veteran-truda.admin.raports.index') }}" />
            <x-page.nav title="Даты" link="{{ route('veteran-truda.admin.dates.index') }}" />
            <x-page.nav title="Доступ" link="{{ route('veteran-truda.admin.accesses.index') }}" />
            <x-page.nav title="Загрузить отчет" link="{{ route('veteran-truda.admin.raport.download') }}" />
        </x-slot:meny>
        <x-slot:division-list>
            <x-admin.division-list>
                @php
                    $page_data = App\Http\Controllers\web\orvdkn\veteran\AdminController::initPage();
                @endphp
                @foreach ($page_data->get('division_raport_list') as $division)
                    @if (in_array($division->id, $page_data->get('raports')->pluck('division_id')->toArray()))
                        <x-admin.division 
                            title="{{ $division->city->name . ': ' . $division->name }}"
                            link="{{ route('veteran-truda.admin.raports.show', ['division' => $division->id]) }}" 
                            :active="isset($active) and $active == $division->id"
                        />
                    @else
                        <x-admin.division title="{{ $division->city->name . ': ' . $division->name }}"
                            disable />
                    @endif
                @endforeach
            </x-admin.division-list>
        </x-slot:division-list>
        <x-slot:content>
            @yield('content')
        </x-slot:content>
    </x-admin.box>
@endsection
