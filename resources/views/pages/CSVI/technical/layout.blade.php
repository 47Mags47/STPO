@extends('layouts.main.modul')

@section('header')
    <li><a href="{{ route('technical.index') }}">Главная</a></li>
    <li><a href="{{ route('technical.folder.index') }}">Директории</a></li>
    <li><a href="{{ route('technical.deleted.index') }}">Удаленные</a></li>
    {{-- <li><a href="">Подразделения</a></li>
    <li><a href="">Импорт</a></li>--}}
    <li><a href="{{ route('technical.raport.generate') }}">Экспорт</a></li>
@endsection

@section('page-content')
    @yield('page-content')
@endsection
