@extends('layouts.main.default')

@section('page-content')
    <x-form.types.vertical
            action="{{ route('appeal.store') }}"
            header="Новое обращение"
            sbm="Отправить"
        >
        <x-slot:content>
            @if (user()->hasRole('csvi_worker') or user()->hasRole('ministry_worker'))
                <x-form.inputs.text name="office" label="Номер кабинета" req />
            @endif

            <x-form.inputs.select
                name="them_id"
                label="Тема"
                :items="$categories"
                opt-text="name"
                child-param="thems"
                child-text="name"
                child-value="id"
                nullable
                req
            />
            <x-form.inputs.area
                name="comment"
                label="Комментарий"
                ph="Кратко опишите проблему"
                height="200px"
                req
            />
        </x-slot:content>

    </x-form.types.vertical>
@endsection