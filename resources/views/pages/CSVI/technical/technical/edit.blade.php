@extends('pages.CSVI.technical.layout')

@section('page-content')
    <x-form.types.vertical
        action="{{ route('technical.update', compact('technical')) }}"
        header="Редактирование"
        sbm="Сохранить"
        method="PUT"
    >
        <x-slot:content>
            <x-form.inputs.radio
                label="Марка"
                :items="$parameters['type']"
                name="mark_id"
                value="id"
                text="name"
                child-parameter="marks"
                child-text="name"
                :checked="$technical->mark_id"
            />
            <x-form.inputs.text
                name="model"
                label="Модель"
                :value="$technical->model"
                req
            />
            <x-form.inputs.text
                name="serial_number"
                label="Серийный номер"
                title="Серийный номер уникальный во всем мире, этот номер указывается на упаковке"
                :value="$technical->serial_number"
            />
            <x-form.inputs.text
                name="inventory_number"
                label="Инвентарный номер"
                title="Ваш внутренний инвентарный номер, что бы вы сами не путались в технике с одинаковыми маркой|моделью"
                :value="$technical->inventory_number"
            />
            <x-form.inputs.select
                name="folder_id"
                label="Директория"
                :items="$parameters['folder']"
                opt-text="name"
                opt-value="id"
                nullable
                req
                :select="$technical->folder_id"
            />
            <x-form.inputs.text
                name="exp_date"
                type="date"
                label="Дата ввода в эксплуатацию"
                req
                :value="$technical->exp_date->format('Y-m-d')"
            />
        </x-slot:content>
    </x-form.types.vertical>
@endsection