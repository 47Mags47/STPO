@extends('pages.CSVI.veteran.layout')

@section('page-content')
    <x-table.types.main
        :col-width="['50px', null, '450px', '75px',]"
        data-route="veteran.access.table"
    >
        <x-slot:filters>
            <x-form.inputs.multi-select
                name="filter[permission]"
                label="Уровень доступа"
                :items="$filters['permission']"
                text="name"
                value="code"
            />
        </x-slot:filters>

        <x-slot:actions>
            <a href="{{ route('veteran.access.create') }}" class="button blue-button">Добавить</a>
        </x-slot:actions>

        <x-slot:thead>
            <tr>
                <x-table.components.th text="№" />
                <x-table.components.th text="Пользователь" sort="user_id" asc="asc"/>
                <x-table.components.th text="Уровень доступа" sort="permission_code" asc="asc" />
                <x-table.components.th />
            </tr>
        </x-slot:thead>
    </x-table.types.main>
@endsection
