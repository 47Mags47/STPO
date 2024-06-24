@extends('layouts.page')
@section('page-name', 'DBFViewer')
@section('body')
    <x-page.page type="box-2">
        <x-page.meny>
            <li><x-page.meny-point type="file-form" name="open_file" action="{{ route('DBFViewer.open') }}" label="Открыть" />
            </li>
            <li><x-page.meny-point type="file-form" name="import_file" action="{{ route('DBFViewer.import') }}" label="Импорт" /></li>
            <li><input type="submit" form="export-form" value="Экспорт"></li>
        </x-page.meny>
        <x-page.message />
        <x-page.content>
            @isset($records)
                <x-table.box class="table-page" :options=false :message=false action="{{ route('DBFViewer.export') }}"
                    formid="export-form">
                    <x-slot:header>
                        @isset($headers)
                            <tr>
                                <th></th>
                                @foreach ($headers as $header)
                                    <th>{{ $header }}</th>
                                @endforeach
                                <th></th>
                            </tr>
                        @endisset
                    </x-slot:header>
                    <x-slot:body>
                        @isset($records)
                            @foreach ($records as $row_n => $record)
                                <tr>
                                    <td class="h-center">
                                        <div>{{ $row_n }}</div>
                                    </td>
                                    @foreach ($record as $key_n => $col)
                                        @if ($key_n == 'deleted')
                                            @if ($col)
                                                <td>
                                                    <div>Удалено</div>
                                                </td>
                                            @else
                                                <td>
                                                    <div>Нет</div>
                                                </td>
                                            @endif
                                        @else
                                            <td>
                                                <div>
                                                    <input type="text" value="{{ trim($col) }}"
                                                        name="{{ "data[$row_n][$key_n]" }}">
                                                </div>
                                            </td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        @endisset
                    </x-slot:body>
                </x-table.box>
            @endisset
        </x-page.content>
    </x-page.page>
@endsection
