@extends('layouts.page')
@section('page-name', 'Ветеран труда')

@section('body')
    <x-form.box action="{{ route('veteran-truda.store') }}" method="POST" header='Учет заявлений по присвоению звания<br>"Ветеран труда"' sbm="Сохранить" center shadow>
        <x-form.input name="all" label="Всего заявлений" />
        <x-form.input name="el" label="Заявлений в электронном виде, шт" />
        <x-form.input name="mfc" label="Заявлений через МФЦ виде, шт" />
    </x-form.box>
@endsection
