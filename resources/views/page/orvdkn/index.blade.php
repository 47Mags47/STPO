@extends('layouts.page')
@section('page-name', 'Ветеран труда')

@section('body')
    <x-admin.box burger>
        <x-slot:meny>
            <x-page.nav title="Отчеты" link="{{ route('veteran-truda.index') }}" />
            <x-page.nav title="Даты" link="" />
            <x-page.nav title="Доступ" link="" />
            <x-page.nav title="Общий" link="{{ route('veteran-truda.raport') }}" />
        </x-slot:meny>
        <x-slot:division-list>
            <x-admin.division-list>
                @php
                    $actuale_raport_ids = $raports->pluck('division_id')->toArray();
                @endphp
                @foreach ($all_divisions as $division)
                    @if (in_array($division->id, $actuale_raport_ids))
                        <x-admin.division title="{{ $division->city->name . ': ' . $division->name }}" link="{{ route('veteran-truda.show', ['division' => $division->id, 'date' => $actual_date->id]) }}" />
                    @else
                        <x-admin.division title="{{ $division->city->name . ': ' . $division->name }}" disable />
                    @endif
                @endforeach
            </x-admin.division-list>
        </x-slot:division-list>
        <x-slot:content>
            @yield('content')
        </x-slot:content>
    </x-admin.box>
@endsection
