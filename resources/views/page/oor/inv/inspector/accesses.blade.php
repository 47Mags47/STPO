@extends('page.oor.inv.inspector.index')
@section('content')
    <x-table.box pd=5 action="">
        <x-slot:header>
            <tr>
                <x-table.th value="Город" />
                <x-table.th value="Подразделение" />
                <x-table.th value="ФИО" />
                <x-table.th value="Уровень доступа" />
                <x-table.th value="" />
            </tr>
        </x-slot:header>
        <x-slot:body>
        <x-table.btr>
            <x-table.td type="input" name="city_id" inp-type="select" :list=$select_cityes pval="id" ptitle="name" req dtpd/>
            <x-table.td type="input" name="division_id" inp-type="select" :list=$select_divisions pval="id" ptitle="name" depend="city_id" depend-val="city_id" req dtpd/>
            <x-table.td type="input" name="user_id" inp-type="select" :list=$select_users pval="id" ptitle="nickname" depend="division_id" depend-val="division_id" req dtpd/>
            <x-table.td type="input" name="level_id" inp-type="select" :list=$select_access_levels pval="id" ptitle="name" req dtpd/>
            <x-table.td type="smb" class="test" title="Добавить"/>
        </x-table.btr>
            @foreach ($accesses as $access)
                <x-table.btr>
                    <x-table.td value="{{ $access->user->division->city->name }}" />
                    <x-table.td value="{{ $access->user->division->name }}" />
                    <x-table.td value="{{ $access->user->nickname }}" />
                    <x-table.td value="{{ $access->level->name }}" />
                    <x-table.td type="link-button"
                        value="{{ route('inv.inspector.accesses.delete', ['access' => $access->id]) }}" title="удалить"
                        red />
                </x-table.btr>
            @endforeach
        </x-slot:body>
    </x-table.box>
@endsection
