@extends('layouts.page')
@section('page-name', 'формирования и развития системы комплексной реабилитации и абилитации инвалидов')

@section('body')
    <x-page.admin-box>
        <x-slot:meny>
            <x-page.nav title="Отчеты" link="" disabled />
            <x-page.nav title="Даты" link="" disabled />
            <x-page.nav title="Доступ" link="" disabled />
            <x-page.nav title="Текущий" link="{{ route('inv.inspector.raport.download', ['raport' => $raport->id]) }}" blank />
            <x-page.nav title="Общий" link="" blank disabled />
        </x-slot:meny>
        <x-slot:division-list>
            <x-page.division-list>
                @foreach ($all_divisions as $division)
                    <x-page.division
                        link="{{ route('inv.inspector.raport.show', ['division' => $division->id, 'sheet' => 2]) }}"
                        title="{{ $division->name }}" complited="{{ $division->Completed($raportClass) }}"
                        opened='{{ $division_id == $division->id }}' />
                @endforeach
            </x-page.division-list>
        </x-slot:division-list>
        <x-slot:content>
            @yield('content')
        </x-slot:content>
    </x-page.admin-box>
@endsection
