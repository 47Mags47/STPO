@extends('page.oor.inv.inspector.index')
@section('content')
    <x-table.box pd=5>
        <x-slot:header>
            <tr>
                <x-table.th value="Подразделение" />
                <x-table.th value="Отправитель" />
                <x-table.th value="На дату" />
                <x-table.th value="Изменен" />
                <x-table.th value="" />
            </tr>
        </x-slot:header>
        <x-slot:body>
            @foreach ($raports as $raport)
                <x-table.btr id="" type="default">
                    <x-table.td value="{{ $raport->worker->division->name }}" />
                    <x-table.td value="{{ $raport->worker->nickname }}" />
                    <x-table.td value="{{ date('d.m.Y', strtotime($raport->in_date->date)) }}" />
                    <x-table.td value="{{ $raport->updated_at->format('d.m.Y') }}" />
                    <x-table.td type="link-button"
                        value="{{ route('inv.inspector.raport.download', ['raport' => $raport->id]) }}" title="Загрузить" />

                    {{-- <x-table.td value="{{ date('d.m.Y', strtotime($date->date)) }}" />
                    <x-table.td value="{{ $date->is_active ? 'Да' : 'Нет' }}" h='center' />
                    @if (!$date->is_active)
                        <x-table.td type='link-button' title='Активировать' value='' />
                    @else
                    <x-table.td value='' />
                    @endif --}}
                </x-table.btr>
            @endforeach
        </x-slot:body>
    </x-table.box>
@endsection
