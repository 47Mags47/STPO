@extends('layouts.page')

@if (auth()->user()->id == 71)
    @section('page-name', 'Кристина котик')
    @section('vip', 'kristina')
    @section('body')
        <x-table.box :form=true :paginate=true action="{{ route('cert.store') }}" w100 top0>
            <x-slot:paginate-link>
                {{ $certificates->links() }}
            </x-slot:paginate-link>

            <thead>
                <tr>
                    <x-table.th value="MEOW Город" />
                    <x-table.th value="MEOW Подразделение" />
                    <x-table.th value="MEOW Сертификат" />
                    <x-table.th value="MEOW Пароль" />
                    <x-table.th value="MEOW Ответственный" />
                    <x-table.th value="MEOW " />
                </tr>
            </thead>
            <tbody>
                <tr>
                    <x-table.td type="select" name="city_id">
                        @foreach ($cities as $city)
                            <x-form.select-option title="MEOW {{ $city->name }}" value="{{ $city->id }}" />
                        @endforeach
                    </x-table.td>
                    <x-table.td type="select" name="division_id" depend="city_id">
                        @foreach ($divisions as $division)
                            <x-form.select-option title="MEOW {{ $division->name }}" value="{{ $division->id }}"
                                dependVal="{{ $division->city->id }}" />
                        @endforeach
                    </x-table.td>
                    <x-table.td type="input-file" name="cert" title="уронить стакан" center required />
                    <x-table.td type="input" name="password" required placeholder="MEOW" />
                    <x-table.td type="input" name="user" required placeholder="MEOW" />
                    <x-table.td type="sbm" title="Муркнуть" />
                </tr>
                <tr>
                </tr>
                @foreach ($certificates as $certificate)
                    <tr>
                        <x-table.td value="MEOW {!! $certificate->division->city->name !!}" />
                        <x-table.td value="MEOW {!! $certificate->division->name !!}" />
                        <x-table.td type="link" link="{{ asset('/storage/cert/' . $certificate->cert) }}"
                            title="MEOW {!! $certificate->cert !!}" />
                        <x-table.td value="MEOW {!! $certificate->password !!}" />
                        <x-table.td value="MEOW {!! $certificate->user !!}" />
                        <x-table.td type="link" link="{{ route('cert.delete', ['cert' => $certificate->id]) }}" title="Жмякнуть" red-button />
                    </tr>
                @endforeach
            </tbody>
        </x-table.box>
    @endsection
@else
    @section('page-name', 'Сертификаты')
    @section('body')
        <x-table.box :form=true :paginate=true action="{{ route('cert.store') }}" w100 top0>
            <x-slot:paginate-link>
                {{ $certificates->links() }}
            </x-slot:paginate-link>

            <thead>
                <tr>
                    <x-table.th value="Город" />
                    <x-table.th value="Подразделение" />
                    <x-table.th value="Сертификат" />
                    <x-table.th value="Пароль" />
                    <x-table.th value="Ответственный" />
                    <x-table.th value="" />
                </tr>
            </thead>
            <tbody>
                <tr>
                    <x-table.td type="select" name="city_id">
                        @foreach ($cities as $city)
                            <x-form.select-option title="{{ $city->name }}" value="{{ $city->id }}" />
                        @endforeach
                    </x-table.td>
                    <x-table.td type="select" name="division_id" depend="city_id">
                        @foreach ($divisions as $division)
                            <x-form.select-option title="{{ $division->name }}" value="{{ $division->id }}"
                                dependVal="{{ $division->city->id }}" />
                        @endforeach
                    </x-table.td>
                    <x-table.td type="input-file" name="cert" center required />
                    <x-table.td type="input" name="password" required />
                    <x-table.td type="input" name="user" required />
                    <x-table.td type="sbm" />
                </tr>
                <tr>
                </tr>
                @foreach ($certificates as $certificate)
                    <tr>
                        <x-table.td value="{!! $certificate->division->city->name !!}" />
                        <x-table.td value="{!! $certificate->division->name !!}" />
                        <x-table.td type="link" link="{{ asset('/storage/cert/' . $certificate->cert) }}"
                            title="{!! $certificate->cert !!}" />
                        <x-table.td value="{!! $certificate->password !!}" />
                        <x-table.td value="{!! $certificate->user !!}" />
                        <x-table.td type="link" link="{{ route('cert.delete', ['cert' => $certificate->id]) }}" title="Удалить" red-button />
                    </tr>
                @endforeach
            </tbody>
        </x-table.box>
    @endsection
@endif
