@extends (user()->hasPermission('veteran-admin') ? 'pages.CSVI.veteran.layout' : 'layouts.main.default')

@section('page-content')
    <x-form.types.vertical header='Колличество заявлений по присвоению звания "Ветеран труда"'>
        <x-slot:content>
            <p class="box-header">На {{ $raport->inDate->date->format('d.m.Y') }}</p>
            <x-form.inputs.text name="all"
                type="number"
                label="Всего"
                :value="$raport->all"
                disabled
            />
            <x-form.inputs.text
                name="el" type="number"
                label="В электронном виде"
                :value="$raport->el"
                disabled
            />
            <x-form.inputs.text
                name="mfc" type="number"
                label="Через МФЦ"
                :value="$raport->mfc"
                disabled
            />
        </x-slot:content>
    </x-form.types.vertical>
@endsection
