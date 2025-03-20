@extends('pages.CSVI.technical.layout')

@section('page-content')
    <x-form.types.vertical action="{{ route('technical.store') }}" header="Добавить запись" sbm="Добавить">
        <x-slot:content>
            <x-form.inputs.radio
                label="Марка"
                :items="$parameters['type']"
                name="mark_id"
                value="id"
                text="name"
                child-parameter="marks"
                child-text="name"
            />
            <x-form.inputs.text name="model" label="Модель" req />
            <x-form.inputs.text name="serial_number" label="Серийный номер" title="Серийный номер уникальный во всем мире, этот номер указывается на упаковке" />
            <x-form.inputs.text name="inventory_number" label="Инвентарный номер" title="Ваш внутренний инвентарный номер, что бы вы сами не путались в технике с одинаковыми маркой|моделью" />
            <x-form.inputs.select
                name="folder_id"
                label="Директория"
                :items="$parameters['folder']"
                opt-text="name"
                opt-value="id"
                nullable
                req
            />
            <x-form.inputs.text name="exp_date" type="date" label="Дата ввода в эксплуатацию" req />
        </x-slot:content>
    </x-form.types.vertical>
@endsection