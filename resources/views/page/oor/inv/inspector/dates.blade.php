@extends('page.oor.inv.inspector.index')
@section('content')
    <x-table.box pd=5 action="">
        <x-slot:header>
            <tr>
                <x-table.th value="Дата" />
                <x-table.th value="Активность" />
                <x-table.th value="Отчетов" />
                <x-table.th value="" />
            </tr>
        </x-slot:header>
        <x-slot:body>
            <x-table.btr>
                <x-table.td type="input" colspan=3 name="date" inp-type="date" dtpd/>
                <x-table.td type="smb" class="test" title="Добавить"/>
            </x-table.btr>
            @foreach ($dates as $date)
                <x-table.btr>
                    <x-table.td value="{{ date('d.m.Y', strtotime($date->date)) }}" />
                    <x-table.td value="{{ $date->is_active ? 'Да' : 'Нет' }}" h='center' />
                    <x-table.td value="{{ $date->raport_count() }}" h='center' />
                    @if ($date->is_active)
                        <x-table.td value='' />
                    @else
                        <x-table.td type="link-button"
                            value="{{ route('inv.inspector.date.activate', ['date_id' => $date->id]) }}"
                            title="Активировать" />
                    @endif
                </x-table.btr>
            @endforeach
        </x-slot:body>
    </x-table.box>
@endsection
