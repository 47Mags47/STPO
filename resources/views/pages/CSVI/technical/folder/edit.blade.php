@extends('pages.CSVI.technical.layout')

@section('page-content')
    <x-form.types.vertical
        action="{{ route('technical.folder.update', compact('folder')) }}"
        header="Редактирование"
        sbm="Сохранить"
        method="PUT"
    >
        <x-slot:content>
            {{-- HACK сделать древовидный select --}}
            <x-form.inputs.select
                name="parent_id"
                :items="$folders"
                optValue="id"
                optText="name"
                nullable="Корень"
                :select="$folder->parent_id"
            />
            <x-form.inputs.text name="name" label="Наименование" :value="$folder->name"/>
        </x-slot:content>
    </x-form.types.vertical>
@endsection