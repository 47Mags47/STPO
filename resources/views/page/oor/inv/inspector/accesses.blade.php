@extends('page.oor.inv.inspector.index')
@section('content')
    <x-table.box :form=true>
        <thead>
            <tr>
                <x-table.th value="Город" />
                <x-table.th value="Подразделение" />
                <x-table.th value="ФИО" />
                <x-table.th value="Уровень доступа" />
                <x-table.th value="" />
            </tr>
        </thead>
        <tbody>
            <tr>
                <x-table.td type="select" name="city_id">
                    @foreach ($select_cityes as $city)
                        <x-form.select-option title="{{ $city->name }}" value="{{ $city->id }}" />
                    @endforeach
                </x-table.td>
                <x-table.td type="select" name="division_id" depend='city_id'>
                    @foreach ($select_divisions as $division)
                        <x-form.select-option title="{{ $division->name }}" value="{{ $division->id }}" dependVal="{{ $division->city->id }}"/>
                    @endforeach
                </x-table.td>
                <x-table.td type="select" name="user_id" depend='division_id'>
                    @foreach ($select_users as $user)
                        <x-form.select-option title="{{ $user->nickname }}" value="{{ $user->id }}" dependVal="{{ $user->division->id }}"/>
                    @endforeach
                </x-table.td>
                <x-table.td type="select" name="access_level_id">
                    @foreach ($select_access_levels as $access_level)
                        <x-form.select-option title="{{ $access_level->name }}" value="{{ $access_level->id }}"/>
                    @endforeach
                </x-table.td>

                <x-table.td type="sbm" title="Добавить" />
            </tr>
            @foreach ($accesses as $access)
                <tr>
                    <x-table.td value="{!! $access->user->division->city->name !!}" />
                    <x-table.td value="{!! $access->user->division->name !!}" />
                    <x-table.td value="{!! $access->user->nickname !!}" />
                    <x-table.td value="{!! $access->level->name !!}" />
                    <x-table.td type="link"
                        link="{{ route('inv.inspector.accesses.delete', ['access' => $access->id]) }}" title="удалить"
                        red-button />
                </tr>
            @endforeach
        </tbody>
    </x-table.box>
@endsection
