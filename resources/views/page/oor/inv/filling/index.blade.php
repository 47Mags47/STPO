@extends('layouts.page')
@section('page-name', 'формирования и развития системы комплексной реабилитации и абилитации инвалидов')

@section('body')
    <x-excel.box action="{{route('inv.filling.sheet.save', ['sheet'=> $sheet_id])}}">
        <x-slot:meny>
            <x-excel.meny>
                <x-excel.nav type="form-submit" title="Сохранить" form="data-form" />
                <x-excel.nav title="Импорт" link="inv/import"/>
                <x-excel.nav title="Экспорт" link="inv/export"/>
            </x-excel.meny>
        </x-slot:meny>
        <x-slot:sheet>
            @include('page.oor.inv.filling.sheets.' . $sheet_id)
        </x-slot:sheet>
        <x-slot:sheets>
            <x-excel.sheet-list>
                @foreach ($sheets as $sheet)
                    <x-excel.sheet-link link="{{ route('inv.filling.sheet', ['sheet' => $sheet->sheet_id]) }}" title="{{$sheet->name}}"/>
                @endforeach
            </x-excel.sheet-list>
        </x-slot:sheets>
    </x-excel.box>

@endsection