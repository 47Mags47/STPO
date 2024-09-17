@extends('layouts.page')
@section('page-name', 'Ветеран труда')

@section('body')
    <x-form.form action="{{ route('veteran-truda.update', compact('raport')) }}" center method="PUT">
        <x-form.input name="all" value="{{ $raport->all }}" label="Всего заявлений" />
        <x-form.input name="el" value="{{ $raport->el }}" label="Заявлений в электронном виде, шт" />
        <x-form.input name="mfc" value="{{ $raport->mfc }}" label="Заявлений через МФЦ виде, шт" />
        <x-form.sbm title="Сохранить" />
    </x-form.form>
@endsection
