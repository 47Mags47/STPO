@extends('layouts.page')
@section('page-name', 'формирования и развития системы комплексной реабилитации и абилитации инвалидов')

@section('body')
    <x-excel.box action="">
        <x-slot:meny>
            <li><a href="">Сохранить</a></li>
        </x-slot:meny>
        @yield('sheet')
    </x-excel.box>

    {{-- <x-excel.box action="{{route('inv.filling.sheet.save', ['sheet'=> $sheet_id])}}" form-id="data-form" form>
        <x-slot:meny>
            <x-page.meny>
                <x-page.nav type="form-submit" title="Сохранить" form="data-form" />
                <x-page.nav title="Импорт" link="inv/import" disabled/>
                <x-page.nav title="Экспорт" link="inv/export" disabled/>
            </x-page.meny>
        </x-slot:meny>
        <x-slot:sheet>
            @include('page.oor.inv.filling.sheets.' . $sheet_id)
        </x-slot:sheet>
        <x-slot:sheets>
            @foreach ($sheets as $sheet)
                <x-excel.sheet-link
                    link="{{ route('inv.filling.sheet', ['sheet' => $sheet->id]) }}"
                    title="{{$sheet->name}}"
                    opened="{{$sheet->id == $sheet_id}}"
                />
            @endforeach
        </x-slot:sheets>
    </x-excel.box> --}}
@endsection
