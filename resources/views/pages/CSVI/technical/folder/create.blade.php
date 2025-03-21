@extends('pages.CSVI.technical.layout')

@section('page-content')
    <x-form.types.vertical
        action="{{ route('technical.folder.store') }}"
        header="Новая директория"
        sbm="Добавить"
    >
        <x-slot:content>
            <x-form.inputs.text label="Родитель" :value="$parent->name ?? 'Корень'" disabled />
            <x-form.inputs.text name="parent_id" type="hidden" :value="$parent->id" />

            <x-form.inputs.text name="name" label="Наименование" />
        </x-slot:content>
    </x-form.types.vertical>
@endsection