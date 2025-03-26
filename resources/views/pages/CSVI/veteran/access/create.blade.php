@extends('pages.CSVI.veteran.layout')

@section('page-content')
    <x-form.types.vertical :action="route('veteran.access.store')" header="Добавить доступ" sbm="Добавить">
        <x-slot:content>
            <x-form.inputs.select
                name="user_id"
                label="Пользователь"
                :items="$divisions"
                opt-text="name"
                child-param="users"
                child-text="full_name"
                child-value="id"
                nullable
                req
            />
            <x-form.inputs.select
                name="permission_code"
                label="Уровень доступа"
                :items="$permissions"
                opt-text="name"
                opt-value="code"
                nullable
                req
            />
        </x-slot:content>
    </x-form.types.vertical>
@endsection
