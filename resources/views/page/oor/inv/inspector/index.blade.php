@extends('layouts.page')
@section('page-name', 'формирования и развития системы комплексной реабилитации и абилитации инвалидов')

@section('body')
    <x-admin.box burger>
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
            <x-admin.division-list>
                @foreach ($all_divisions as $division)

                    @if (in_array($division->id, $raports->pluck('division_id')->toArray()))
                        <x-admin.division
                            title="{{ $division->city->name . ': ' . $division->name }}"
                            link="{{ route('inv.inspector.raport.show', ['raport' => $raports->firstWhere('division_id', $division->id)->id, 'sheet' => 2]) }}"
                            active="{{ isset($current_raport) and $current_raport->division->id == $division->id }}"
                        />
                    @else
                        <x-admin.division title="{{ $division->city->name . ': ' . $division->name }}" disable/>
                    @endif
                @endforeach
        </x-admin.division-list>
    </x-slot:division-list>
    <x-slot:content>
        @yield('content')
    </x-slot:content>
</x-page.admin-box>
@endsection
