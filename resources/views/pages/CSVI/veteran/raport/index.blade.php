@extends('pages.CSVI.veteran.layout')

@section('page-content')
    <x-table.types.main :col-width="['50px', null, '250px', '75px', '75px', '75px', '150px', '150px']" data-route="veteran.raport.table">
        <x-slot:filters>

        </x-slot:filters>
        <x-slot:thead>
            <tr>
                <x-table.components.th text="№" />
                <x-table.components.th text="Подразделение" />
                <x-table.components.th text="Отправитель" />
                <x-table.components.th text="Всего" />
                <x-table.components.th text="ЭВ" />
                <x-table.components.th text="МФЦ" />
                <x-table.components.th />
                <x-table.components.th />
            </tr>
        </x-slot:thead>
    </x-table.types.main>
@endsection
