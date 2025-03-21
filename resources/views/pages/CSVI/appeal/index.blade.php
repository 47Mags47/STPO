@extends('layouts.main.default')

@section('scripts')
    @vite('resources/js/ui/pages/CSVI/appeals.js')
@endsection

@section('page-content')
    <x-table.types.main
        :col-width="['50px', '100px', '350px', '200px', null, '200px', '125px', '125px']"
        data-route="appeal.table"
    >
        <x-slot:filters>
            @if (user()->hasPermission('appeal-work'))
                <x-form.inputs.select
                    name="filter[division]"
                    label="Подразделение"
                    :items="$filters['city']"
                    opt-text="name"
                    child-param="divisions"
                    child-text="name"
                    child-value="id"
                    nullable
                    req
                />
                <x-form.inputs.multi-select
                    label="Отправитель"
                    :items="$filters['sender']"
                    name="filter[sender]"
                    value="id"
                    text="full_name"
                    :checked="$current_filters['sender'] ?? []"
                />
            @endif
            <x-form.inputs.multi-select
                label="Принято"
                :items="$filters['accepted']"
                name="filter[accepted]"
                value="id"
                text="full_name"
                :checked="$current_filters['accepted'] ?? []"
            />
            <x-form.inputs.multi-select
                label="Статус"
                :items="$filters['status']"
                name="filter[status]"
                value="code"
                text="name"
                :checked="$current_filters['status'] ?? []"
            />
            <x-form.inputs.multi-select
                label="Тема"
                :items="$filters['category']"
                name="filter[them]"
                value="id"
                text="name"
                child-parameter="thems"
                child-text="name"
                :checked="$current_filters['them'] ?? []"
            />

        </x-slot:filters>

        <x-slot:actions>
            <a href="{{ route('appeal.create') }}" class="button blue-button">Добавить</a>
        </x-slot:actions>

        <x-slot:thead>
            <tr>
                <x-table.components.th text="№"             sort="id"           asc="asc" />
                <x-table.components.th text="Дата"          sort="created_at"   asc="asc" />
                <x-table.components.th text="Отправитель" />
                <x-table.components.th text="Тема"          sort="them_id"      asc="asc" />
                <x-table.components.th text="Комментарий" />
                <x-table.components.th text="Статус"        sort="status_code"  asc="asc" />
                <x-table.components.th />
                <x-table.components.th />
            </tr>
        </x-slot:thead>

        <x-slot:tbody>

        </x-slot:tbody>
    </x-table.types.main>
@endsection
