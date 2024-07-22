@extends('page.oor.inv.inspector.index')

@section('content')
    <x-excel.box action="" form-id="data-form">
        <x-slot:sheet>
            @include('page.oor.inv.filling.sheets.' . $sheet->id)
        </x-slot:sheet>
        <x-slot:sheets>
            @foreach ($sheets as $sheet2)
                <x-excel.sheet-link
                    link="{{ route('inv.inspector.raport.show', ['raport' => $current_raport->id, 'sheet' => $sheet2->id]) }}"
                    title="{{ $sheet2->name }}"
                    opened="{{ $sheet2->id == $sheet->id }}" />
            @endforeach
        </x-slot:sheets>
    </x-excel.box>
@endsection
