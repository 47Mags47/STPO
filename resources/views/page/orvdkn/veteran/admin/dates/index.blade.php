@extends('page.orvdkn.veteran.admin.index')

@section('content')
    <x-table.box paginate :form="true" action="{{ route('veteran-truda.admin.dates.store') }}" method="POST">
        <x-slot:paginate-link>
            {{ $dates->links() }}
        </x-slot:paginate-link>
        <thead>
            <tr>
                <th>Дата</th>
                <th>Отчетов</th>
                <th>Актуальная</th>
                <th colspan="3"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <x-table.td type="input" inp-type="date" name="date" />
                <x-table.td type="input-d"  />
                <x-table.td type="input-d"  />
                <x-table.td colspan="3" type="sbm" />
            </tr>
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
    </x-table.box>
@endsection
