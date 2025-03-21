@extends('pages.CSVI.technical.layout')

@section('page-content')
    <x-table.types.main :col-width="[
        null, // Директория
        '150px', // Тип
        '150px', // Марка
        '200px', // Модель
        '200px', // Серийный номер
        '200px', // Инвентарный номер
        '100px', // Введен
        '150px', // Период
        '120px', // Удалить
        '150px', // Редактировать
    ]" data-route="technical.table">

        <x-slot:filters>
            <x-form.inputs.multi-select label="Директория" :items="$filters['folder']" name="filter[folder]" value="id"
                text="name" />
            <x-form.inputs.multi-select label="Тип" :items="$filters['type']" name="filter[type]" value="id" text="name" />
            <x-form.inputs.multi-select label="Марка" :items="$filters['type']" name="filter[mark]" value="id" text="name"
                child-parameter="marks" child-text="name" />

        </x-slot:filters>

        <x-slot:actions>
            <a href="{{ route('technical.create') }}" class="button blue-button">Добавить</a>
        </x-slot:actions>

        <x-slot:thead>
            <tr>
                <x-table.components.th text="Директория" sort="folder_id" asc="asc" />
                <x-table.components.th text="Тип" sort="type_id" asc="asc" />
                <x-table.components.th text="Марка" sort="mark_id" asc="asc" />
                <x-table.components.th text="Модель" sort="model" asc="asc" />
                <x-table.components.th text="Серийный номер" sort="serial_number" asc="asc" />
                <x-table.components.th text="Инвентарный номер" sort="inventory_number" asc="asc" />
                <x-table.components.th text="Введен" sort="exp_date" asc="asc" />
                <x-table.components.th text="Период" sort="exp_date" asc="asc" />
                <x-table.components.th />
                <x-table.components.th />
            </tr>
        </x-slot:thead>

        <x-slot:tbody></x-slot:tbody>

    </x-table.types.main>
@endsection
