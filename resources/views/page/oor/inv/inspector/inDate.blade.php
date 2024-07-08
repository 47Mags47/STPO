@extends('page.oor.inv.inspector.index')
@section('content')
    <x-table.box pd=5>
        <x-slot:header>
        </x-slot:header>
        <x-slot:body>
            @foreach ($raports as $raport)
                <x-table.btr id="" type="default">
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
