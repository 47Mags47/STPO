@extends('layouts.page')
@section('page-name', 'формирования и развития системы комплексной реабилитации и абилитации инвалидов')

@section('body')
    <x-page.admin-box burger>
        <x-slot:meny>
            <x-page.nav title="Отчеты" link="{{ route('inv.inspector.raports') }}" />
            <x-page.nav title="Даты" link="{{ route('inv.inspector.dates') }}" />
            <x-page.nav title="Доступ" link="{{ route('inv.inspector.accesses') }}" />
            @isset($raport_id)
                <x-page.nav title="Текущий"
                    link="{{ isset($raport_id) ? route('inv.inspector.raport.download', ['raport' => $raport_id, 'stmp' => time()]) : '' }}" />
            @endisset
            <x-page.nav title="Общий" link="{{ route('inv.inspector.svod.download', ['stmp' => time()]) }}" blank />
        </x-slot:meny>
        <x-slot:division-list>
            <x-page.division-list>
                @foreach ($divisions as $division)
                    @if ($division->raport($raportClass))
                        <x-page.division
                            link="{{ route('inv.inspector.raport.show', ['raport' => $division->raport($raportClass)->id, 'sheet' => 2]) }}"
                            title="{{ $division->name }}" complited="{{ $division->Completed($raportClass) }}"
                            opened='{{ isset($division_id) ? $division_id == $division->id : false }}' />
                    @else
                        <x-page.division link="" title="{{ $division->name }}" :complited=false :opened=false />
                    @endisset
                @endforeach
        </x-page.division-list>
    </x-slot:division-list>
    <x-slot:content>
        @yield('content')
    </x-slot:content>
</x-page.admin-box>
@endsection
