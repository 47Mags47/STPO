@extends('page.oor.inv.inspector.index')

@section('content')
    <x-excel.box action="{{ route('inv.filling.sheet.save', ['sheet' => $sheet_id]) }}" class='box-2'>
        <x-slot:sheet>
            @include('page.oor.inv.filling.sheets.' . $sheet_id)
        </x-slot:sheet>
        <x-slot:sheets>
            <x-excel.sheet-list>
                @foreach ($sheets as $sheet)
                    <x-excel.sheet-link link="{{ route('inv.inspector.raport.show', ['division' => $division_id, 'sheet' => $sheet->id]) }}"
                        title="{{ $sheet->name }}" opened="{{ $sheet->id == $sheet_id }}"/>
                @endforeach
            </x-excel.sheet-list>
        </x-slot:sheets>
    </x-excel.box>
@endsection
