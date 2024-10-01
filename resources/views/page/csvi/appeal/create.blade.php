@extends('layouts.page')
@section('page-name', 'Обращения')

@section('body')
    <x-form.box action="{{ route('appeal.store') }}" method="POST" header="Новое обращение" center sbm shadow file>
        @can('is_ministry')
            <x-form.input label="Кабинет" name="office" value="{{ old('office') }}" />
        @endcan
        <x-form.select label="Категория" name="category_id">
            @foreach ($categoryes as $category)
                <x-form.select-option title="{{ $category->name }}" value="{{ $category->id }}" p-name="category_id" />
            @endforeach
        </x-form.select>
        <x-form.select label="Тема" name="them_id" depend="category_id">
            @foreach ($thems as $them)
                <x-form.select-option title="{{ $them->name }}" value="{{ $them->id }}"
                    depend-val="{{ $them->category_id }}" p-name="them_id" />
            @endforeach
        </x-form.select>
        <x-form.area label="Комментарий" name="comment" rows=10 />
        <x-form.file-list />
    </x-form.box>
@endsection
