@extends('layouts.page')
@section('page-name', 'Обращения')

@section('body')
    <x-table.box :options="[
        'search-link' => route('appeal'),
        'add-link' => route('appeal.create'),
        'filter-link' => route('appeal'),
        'filters' => $filters,
        'reset-link' => route('appeal.reset'),
    ]" w100 h-sticky :paginate="$appeals">
        <x-slot:colgroup>
            <col width="75px">          {{-- ID --}}
            <col width="80px">          {{-- Дата --}}
            @can('is_administration')
                <col width="300px">     {{-- Отправитель --}}
            @endcan
            <col width="250px">         {{-- Тема --}}
            <col width="">              {{-- Комментарий --}}
            <col width="105px" sort>    {{-- Статус --}}
            <col width="150px">         {{-- Исполнитель --}}
            <col width="120px">         {{-- Принять --}}
            <col width="120px">         {{-- Закрыть | возобновить --}}
        </x-slot:colgroup>
        <x-slot:head>
            <x-table.row>
                <x-table.hcell :sort="[
                    'title' => 'Номер',
                    'pole' => 'id',
                    'type' => $sort['type'] == 'asc' ? 'desc' : 'asc',
                    'route' => 'appeal',
                ]" />
                <x-table.hcell :sort="[
                    'title' => 'Дата',
                    'pole' => 'created_at',
                    'type' => $sort['type'] == 'asc' ? 'desc' : 'asc',
                    'route' => 'appeal',
                ]" />
                @can('is_administration')
                    <x-table.hcell val="Отправитель" />
                @endcan
                <x-table.hcell val="Тема" />
                <x-table.hcell val="Комментарий" />
                <x-table.hcell :sort="[
                    'title' => 'Статус',
                    'pole' => 'status_id',
                    'type' => $sort['type'] == 'asc' ? 'desc' : 'asc',
                    'route' => 'appeal',
                ]" />
                <x-table.hcell val="Исполнитель" />
                <x-table.hcell empty colspan="2" />
            </x-table.row>
        </x-slot:head>
        <x-slot:body>
            @include('page.csvi.appeal.table')
        </x-slot:body>
    </x-table.box>
@endsection
