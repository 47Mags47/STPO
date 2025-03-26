@extends('layouts.main.modul')

@section('header')
    <li><a href="{{ route('veteran.raport.index') }}">Главная</a></li>
    <li><a href="{{ route('veteran.date.index') }}">Даты</a></li>
    <li><a href="{{ route('veteran.access.index') }}">Доступ</a></li>
    <li><a href="{{ route('veteran.generate-raport.index') }}">Отчет</a></li>
@endsection

@section('navigate')
    @php
        $divisions = App\Models\Main\Permission::whereKey('veteran-work')
            ->first()
            ->users()
            ->map(function ($user) {
                return $user->division;
            })
            ->unique();
    @endphp

    {{-- HACK Дописать --}}
    @foreach ($divisions as $division)
        @if (($raport = App\Models\CSVI\Veteran\Raport::whereDivision($division)) !== null)
            <li><a href="{{ route('veteran.raport.show', compact('raport')) }}">{{ $division->name }}</a></li>
        @else
            <li><span>{{ $division->name }}</span></li>
        @endif
    @endforeach
@endsection

@section('page-content')
    @yield('page-content')
@endsection
