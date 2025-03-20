@extends('layouts.main.modul')

@section('header')
    <li><a href="{{ route('technical.index') }}">Главная</a></li>
    <li><a href="{{ route('technical.folder.index') }}">Дирректории</a></li>
    {{-- <li><a href="">Подразделения</a></li>
    <li><a href="">Импорт</a></li>
    <li><a href="">Экспорт</a></li> --}}
@endsection

@section('page-content')
    @yield('page-content')
@endsection
