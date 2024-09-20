@extends('page.orvdkn.veteran.admin.index')

@section('content')
    <x-table.box w100 :paginate="$raports">
        <x-slot:head>
            <x-table.row>
                <x-table.hcell val="На дату" />
                <x-table.hcell val="Подразделение" />
                <x-table.hcell val="Всего" />
                <x-table.hcell val="В эл" />
                <x-table.hcell val="Через МФЦ" />
                <x-table.hcell val="Создано" />
                <x-table.hcell val="Обновлено" />
                <x-table.hcell val="Изменение" />
                <x-table.hcell empty colspan=2 />
            </x-table.row>
        </x-slot:head>
        <x-slot:body>
            @foreach ($raports as $raport)
                <x-table.row>
                    <x-table.cell val="{{ $raport->date->date->format('d.m.Y') }}" />
                    <x-table.cell val="{{ $raport->division->city->name . ': ' . $raport->division->name }}" />
                    <x-table.cell val="{{ $raport->all }}" center />
                    <x-table.cell val="{{ $raport->el }}" center />
                    <x-table.cell val="{{ $raport->mfc }}" center />
                    <x-table.cell val="{{ $raport->created_at->format('d.m.Y') }}" />
                    <x-table.cell val="{{ $raport->updated_at->format('d.m.Y') }}" />
                    <x-table.cell val="{{ $raport->edited ? 'Да' : 'Нет' }}" />
                    @if ($raport->edited)
                        <x-table.cell empty />
                    @else
                        <x-table.cell>
                            <x-custom.link link="{{ route('veteran-truda.admin.raports.edit', compact('raport')) }}" title="Разблокировать" blue-button />
                        </x-table.cell>
                    @endif
                    <x-table.cell>
                        <x-custom.link link="{{ route('veteran-truda.admin.raports.delete', compact('raport')) }}" title="Удалить" red-button />
                    </x-table.cell>
                </x-table.row>
            @endforeach
        </x-slot:body>
    </x-table.box>
@endsection
