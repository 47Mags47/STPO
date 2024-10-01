@extends('page.orvdkn.veteran.admin.index')

@section('content')
    <x-table.box w100 :paginate="$accesses">
        <x-slot:head>
            <x-table.row>
                <x-table.hcell val="Город" />
                <x-table.hcell val="Подразделение" />
                <x-table.hcell val="Пользователь" />
                <x-table.hcell val="Уровень" />
                <x-table.hcell empty />
            </x-table.row>
        </x-slot:head>
        <x-slot:form>
            <x-form.box action="{{ route('veteran-truda.admin.access.store') }}" method="POST" id="add-form" />
        </x-slot:form>
        <x-slot:body>
            <x-table.row input>
                <x-table.cell>
                    <x-form.select name="city_id" form="add-form">
                        @foreach ($cityes as $city)
                            <x-form.select-option title="{{ $city->name }}" value="{{ $city->id }}" />
                        @endforeach
                    </x-form.select>
                </x-table.cell>
                <x-table.cell>
                    <x-form.select name="division_id" depend='city_id' form="add-form">
                        @foreach ($divisions as $division)
                            <x-form.select-option title="{{ $division->name }}" value="{{ $division->id }}"
                                dependVal="{{ $division->city->id }}" />
                        @endforeach
                    </x-form.select>
                </x-table.cell>
                <x-table.cell>
                    <x-form.select name="user_id" depend='division_id' form="add-form">
                        @foreach ($users as $user)
                            <x-form.select-option title="{{ $user->nickname }}" value="{{ $user->id }}"
                                dependVal="{{ $user->division->id }}" />
                        @endforeach
                    </x-form.select>
                </x-table.cell>
                <x-table.cell>
                    <x-form.select name="level_id" form="add-form">
                        @foreach ($access_levels as $level)
                            <x-form.select-option title="{{ $level->name }}" value="{{ $level->id }}" />
                        @endforeach
                    </x-form.select>
                </x-table.cell>
                <x-table.cell><x-form.sbm form="add-form" table /></x-table.cell>
            </x-table.row>
            @foreach ($accesses as $access)
                <x-table.row>
                    <x-table.cell val="{{ $access->user->division->city->name }}" />
                    <x-table.cell val="{{ $access->user->division->name }}" />
                    <x-table.cell val="{{ $access->user->nickname }}" />
                    <x-table.cell val="{{ $access->level->name }}" />
                    <x-table.cell>
                        <x-custom.link link="{{ route('veteran-truda.admin.access.delete', compact('access')) }}"
                            title="Удалить" red-button />
                    </x-table.cell>
                </x-table.row>
            @endforeach
        </x-slot:body>
    </x-table.box>
@endsection
{{-- <x-table.box paginate :form="true" action="{{ route('veteran-truda.admin.access.store') }}" method="POST">
        <x-slot:paginate-link>
            {{ $accesses->links() }}
        </x-slot:paginate-link>
        <thead>
            <tr>
                <th>Город</th>
                <th>Подразделение</th>
                <th>Пользователь</th>
                <th>Уровень</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <x-table.td type="select" name="city_id">
                    @foreach ($cityes as $city)
                        <x-form.select-option title="{{ $city->name }}" value="{{ $city->id }}" />
                    @endforeach
                </x-table.td>
                <x-table.td type="select" name="division_id" depend='city_id'>
                    @foreach ($divisions as $division)
                        <x-form.select-option title="{{ $division->name }}" value="{{ $division->id }}" dependVal="{{ $division->city->id }}" />
                    @endforeach
                </x-table.td>
                <x-table.td type="select" name="user_id" depend='division_id'>
                    @foreach ($users as $user)
                        <x-form.select-option title="{{ $user->nickname }}" value="{{ $user->id }}" dependVal="{{ $user->division->id }}"/>
                    @endforeach
                </x-table.td>
                <x-table.td type="select" name="level_id">
                    @foreach ($access_levels as $level)
                        <x-form.select-option title="{{ $level->name }}" value="{{ $level->id }}"/>
                    @endforeach
                </x-table.td>
                <x-table.td type="sbm" title="Добавить" />
            </tr>
            @foreach ($accesses as $access)
                <tr>
                    <x-table.td value="{{ $access->user->division->city->name }}" />
                    <x-table.td value="{{ $access->user->division->name }}" />
                    <x-table.td value="{{ $access->user->nickname }}" />
                    <x-table.td value="{{ $access->level->name }}" />
                    <x-table.td type="link" link="{{ route('veteran-truda.admin.access.delete', compact('access')) }}" title="Удалить" red-button />
                </tr>
            @endforeach
        </tbody>
    </x-table.box> --}}
