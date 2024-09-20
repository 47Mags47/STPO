@extends('layouts.page')
@section('page-name', 'Ветеран труда')

@section('body')
    <x-form.box action="" method="POST" header='Учет заявлений по присвоению звания<br>"Ветеран труда"' center shadow>
        <x-form.input name="all" value="{{ $raport->all }}" label="Всего заявлений" disabled />
        <x-form.input name="el" value="{{ $raport->el }}" label="Заявлений в электронном виде, шт" disabled />
        <x-form.input name="mfc" value="{{ $raport->mfc }}" label="Заявлений через МФЦ виде, шт" disabled />
    </x-form.box>
@endsection
