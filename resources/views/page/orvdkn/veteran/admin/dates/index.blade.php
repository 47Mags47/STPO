@extends('page.orvdkn.veteran.admin.index')

@section('content')
    <x-table.box :paginate="$dates">
        <x-slot:colgroup>
            <col width="100px">
            <col>
            <col>
            <col width="100px">
            <col width="115px">
            <col width="100px">
        </x-slot:colgroup>
        <x-slot:head>
            <x-table.row>
                <x-table.hcell val="Дата" />
                <x-table.hcell val="Отчетов" />
                <x-table.hcell val="Актуальная" />
                <x-table.hcell empty colspan="3" />
            </x-table.row>
        </x-slot:head>
        <x-slot:form>
            <x-form.box action="{{ route('veteran-truda.admin.dates.store') }}" method="POST" id="add-form" />
        </x-slot:form>
        <x-slot:body>
            <x-table.row input>
                <x-table.cell><x-form.input form="add-form" type="date" name="date" /></x-table.cell>
                <x-table.cell><x-form.input form="add-form" type="disabled" name="raport_count" disabled /></x-table.cell>
                <x-table.cell><x-form.input form="add-form" type="disabled" name="raport_count" disabled /></x-table.cell>
                <x-table.cell colspan="3"><x-form.sbm form="add-form" table /></x-table.cell>
            </x-table.row>
            @foreach ($dates as $date)
                <x-table.row>
                    <x-table.cell val="{{ $date->date->format('d.m.Y') }}" />
                    <x-table.cell val="" />
                    <x-table.cell val="{{ $date->is_active ? 'Да' : 'Нет' }}" />
                    <x-table.cell>
                        <x-custom.link link="{{ route('veteran-truda.admin.raport.download', compact('date')) }}"
                            title="Загрузить" blue-button />
                    </x-table.cell>
                    @if ($date->is_active)
                        <x-table.cell empty />
                    @else
                        <x-table.cell>
                            <x-custom.link link="{{ route('veteran-truda.admin.date.activate', compact('date')) }}"
                                title="Активировать" blue-button />
                        </x-table.cell>
                    @endif
                    <x-table.cell>
                        <x-custom.link link="{{ route('veteran-truda.admin.date.delete', compact('date')) }}"
                            title="Удалить" red-button />
                    </x-table.cell>
                </x-table.row>
            @endforeach
        </x-slot:body>
    </x-table.box>
    {{-- <x-table.box paginate :form="true" action="{{ route('veteran-truda.admin.dates.store') }}" method="POST">

            @foreach ($dates as $date)
                <tr>
                    <x-table.td value="{{ $date->date->format('d.m.Y') }}" center />
                    <x-table.td value="" />
                    <x-table.td value="{{ $date->is_active ? 'Да' : 'Нет' }}" center />
                    <x-table.td type="link" link="{{ route('veteran-truda.admin.raport.download', compact('date')) }}" title="Загрузить отчет" blue-button />
                    @if ($date->is_active)
                        <td></td>
                    @else
                        <x-table.td type="link" link="{{ route('veteran-truda.admin.date.activate', compact('date')) }}" title="Активировать" blue-button />
                    @endif
                    <x-table.td type="link" link="{{ route('veteran-truda.admin.date.delete', compact('date')) }}" title="Удалить" red-button />
                </tr>
            @endforeach
        </tbody>
    </x-table.box> --}}
@endsection
