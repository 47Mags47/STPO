@extends('page.oor.inv.inspector.index')
@section('content')
    <x-table.box :form=true action="" :paginate=true>
        <x-slot:paginate-link>
            {{ $dates->links()  }}
        </x-slot:paginate-link>
        <thead>
            <tr>
                <x-table.th value="Дата" />
                <x-table.th value="Активность" />
                <x-table.th value="Отчетов" />
                <x-table.th value="" />
            </tr>
        </thead>
        <tbody>
            <tr>
                <x-table.td type='input' inp-type='date' name='date' colspan='3'/>
                <x-table.td
                    type="sbm"
                    title="Добавить" />
            </tr>
            @foreach ($dates as $date)
                <tr>
                    <x-table.td value="{!! date('d.m.Y', strtotime($date->date)) !!}" />
                    <x-table.td value="{!! $date->is_active ? 'Да' : 'Нет' !!}" h='center' />
                    <x-table.td value="{!! $date->raport_count() !!}" h='center' />
                    @if ($date->is_active)
                        <x-table.td />
                    @else
                        <x-table.td
                            type="link"
                            blue-button
                            link="{{ route('inv.inspector.date.activate', ['date_id' => $date->id]) }}"
                            title="Активировать" />
                    @endif
                </tr>
            @endforeach
        </tbody>
    </x-table.box>
@endsection
