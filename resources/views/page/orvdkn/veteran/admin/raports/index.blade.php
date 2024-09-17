@extends('page.orvdkn.veteran.admin.index')

@section('content')
    <x-table.box w100 paginate>
        <x-slot:paginate-link>
            {{ $raports->links() }}
        </x-slot:paginate-link>
        <thead>
            <tr>
                <th>На дату</th>
                <th>Подразделение</th>
                <th>Всего</th>
                <th>В эл</th>
                <th>Через МФЦ</th>
                <th>Создано</th>
                <th>Обновлено</th>
                <th>Изменение</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($raports as $raport)
                <tr>
                    <x-table.td value="{{ $raport->date->date->format('d.m.Y') }}" />
                    <x-table.td value="{{ $raport->division->city->name . ': ' . $raport->division->name }}" />
                    <x-table.td value="{{ $raport->all }}" center />
                    <x-table.td value="{{ $raport->el }}" center />
                    <x-table.td value="{{ $raport->mfc }}" center />
                    <x-table.td value="{{ $raport->created_at->format('d.m.Y') }}" />
                    <x-table.td value="{{ $raport->updated_at->format('d.m.Y') }}" />
                    <x-table.td value="{{ $raport->edited ? 'Да' : 'Нет' }}" />
                    @if ($raport->edited)
                        <td></td>
                    @else
                        <x-table.td type="link" link="{{ route('veteran-truda.admin.raports.edit', compact('raport')) }}" title="Разблокировать" blue-button />
                    @endif
                    <x-table.td type="link" link="{{ route('veteran-truda.admin.raports.delete', compact('raport')) }}" title="Удалить" red-button />
                </tr>
            @endforeach
        </tbody>
    </x-table.box>
@endsection
