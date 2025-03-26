@extends('pages.CSVI.veteran.layout')

@section('page-content')
<x-table.types.main
        :col-width="['50px', null, '110px', '175px', '175px']"
        data-route="veteran.date.table"
    >
    <x-slot:filters>

    </x-slot:filters>

    <x-slot:actions>
        <a href="{{ route('veteran.date.create') }}" class="button blue-button">Добавить</a>
    </x-slot:actions>

    <x-slot:thead>
        <tr>
            <x-table.components.th text="№" />
            <x-table.components.th text="Дата" />
            <x-table.components.th text="Актуальная" />
            <x-table.components.th />
            <x-table.components.th />
        </tr>
    </x-slot:thead>
</x-table.types.main>
@endsection
