@extends('layouts.page')
@section('page-name', 'Ветеран труда')

@section('body')
    <x-form.box action="{{ route('veteran-truda.update', compact('raport')) }}" method="PUT"
        header='Учет заявлений по присвоению звания<br>"Ветеран труда"' sbm="Сохранить" center shadow>
        <x-form.input name="all" value="{{ $raport->all }}" label="Всего заявлений" />
        <x-form.input name="el" value="{{ $raport->el }}" label="Заявлений в электронном виде, шт" />
        <x-form.input name="mfc" value="{{ $raport->mfc }}" label="Заявлений через МФЦ виде, шт" />
    </x-form.box>
@endsection
