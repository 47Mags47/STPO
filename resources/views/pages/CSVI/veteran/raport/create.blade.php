@extends ('layouts.main.default')

@section('page-content')
    <x-form.types.vertical
        header='Колличество заявлений по присвоению звания "Ветеран труда"'
        sbm="Отправить"
        :action="route('veteran.raport.store')"
    >
        <x-slot:content>
            <p class="box-header">На {{ $date->date->format('d.m.Y') }}</p>
            <x-form.inputs.text name="all"
                type="number"
                label="Всего"
            />
            <x-form.inputs.text
                name="el" type="number"
                label="В электронном виде"
            />
            <x-form.inputs.text
                name="mfc" type="number"
                label="Через МФЦ"
            />
        </x-slot:content>
    </x-form.types.vertical>
@endsection
