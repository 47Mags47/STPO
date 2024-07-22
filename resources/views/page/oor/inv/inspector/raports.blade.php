@extends('page.oor.inv.inspector.index')
@section('content')
    <x-table.box :form=false :paginate=true>
            <x-slot:paginate-link>
                {{ $raport_table->links()  }}
            </x-slot:paginate-link>
        <thead>
            <tr>
                <x-table.th value="Подразделение" />
                <x-table.th value="Отправитель" />
                <x-table.th value="На дату" />
                <x-table.th value="Изменен" />
                <x-table.th value="" />
            </tr>
        </thead>
        <tbody>
            @foreach ($raport_table as $raport)
                <tr>
                    <x-table.td value="{!! $raport->worker->division->name !!}" />
                    <x-table.td value="{!! $raport->worker->nickname !!}" />
                    <x-table.td value="{!! date('d.m.Y', strtotime($raport->in_date->date)) !!}" />
                    <x-table.td value="{!! $raport->updated_at->format('d.m.Y') !!}" />
                    <x-table.td
                        type="link"
                        blue-button
                        link="{{ route('inv.inspector.raport.download', ['raport' => $raport->id, 'stmp' => time()]) }}"
                        title="Загрузить"
                        new-page
                    />
                </tr>
            @endforeach
        </tbody>
    </x-table.box>
@endsection
