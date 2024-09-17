@extends('layouts.page')
@section('page-name', 'Ветеран труда')

@section('body')
    <x-form.form action="{{ route('veteran-truda.store') }}" method="POST" center>
        <x-form.input name="all" label="Всего заявлений" />
        <x-form.input name="el" label="Заявлений в электронном виде, шт" />
        <x-form.input name="mfc" label="Заявлений через МФЦ виде, шт" />
        <x-form.sbm title="Сохранить" />
    </x-form.form>
@endsection
