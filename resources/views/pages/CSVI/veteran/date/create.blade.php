@extends('pages.CSVI.veteran.layout')

@section('page-content')
    <x-form.types.vertical
        header="Новая дата"
        sbm="Сохранить"
        action="{{ route('veteran.date.store') }}"
    >

        <x-slot:content>
            <x-form.inputs.text name="date" type="date" label="Дата" />
        </x-slot:content>

    </x-form.types.vertical>
@endsection
