@extends('page.orvdkn.veteran.admin.index')

@section('content')
    <x-table.box paginate :form="true" action="{{ route('veteran-truda.admin.access.store') }}" method="POST">
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
    </x-table.box>
@endsection
