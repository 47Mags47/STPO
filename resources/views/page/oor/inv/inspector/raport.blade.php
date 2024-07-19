@extends('page.oor.inv.inspector.index')

@section('content')
    <x-excel.box action="" form-id="data-form">
        <x-slot:sheet>
            @include('page.oor.inv.filling.sheets.' . $sheet_id)
        </x-slot:sheet>
        <x-slot:sheets>
            @foreach ($sheets as $sheet)
                <x-excel.sheet-link
                    link="{{ route('inv.inspector.raport.show', ['raport' => $raport_id, 'sheet' => $sheet->id]) }}"
                    title="{{ $sheet->name }}" opened="{{ $sheet->id == $sheet_id }}" />
            @endforeach
        </x-slot:sheets>
    </x-excel.box>
@endsection
