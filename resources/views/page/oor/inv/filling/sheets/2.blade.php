@extends('page.oor.inv.filling.index')
@section('sheet')
    <x-table.box w100>
        <x-slot:head>
            <x-table.row>
                <x-table.hcell val="Наименование показателей" rowspan=3 />
                <x-table.hcell val="№ строки" rowspan=3 />
                <x-table.hcell val="Всего, чел." rowspan=3 />
                <x-table.hcell val="в том числе" colspan=10 />
            </x-table.row>
            <x-table.row>
                <x-table.hcell val="Женщины" colspan=2 />
                <x-table.hcell val="Мужчины" colspan=2 />
                <x-table.hcell val="в возрасте от 0 до 3 лет" colspan=2 />
                <x-table.hcell val="в возрасте от 4 до 7 лет" colspan=2 />
                <x-table.hcell val="в возрасте от 8 до 17 лет" colspan=2 />
            </x-table.row>
            <x-table.row>
                <x-table.hcell val="всего" />
                <x-table.hcell val="от 18 до 59 лет" />
                <x-table.hcell val="всего" />
                <x-table.hcell val="от 18 до 64 лет" />
                <x-table.hcell val="мальчики" />
                <x-table.hcell val="девочки" />
                <x-table.hcell val="мальчики" />
                <x-table.hcell val="девочки" />
                <x-table.hcell val="мальчики" />
                <x-table.hcell val="девочки" />
            </x-table.row>
            <x-table.row>
                <x-table.hcell val="1" />
                <x-table.hcell val="2" />
                <x-table.hcell val="3" />
                <x-table.hcell val="4" />
                <x-table.hcell val="5" />
                <x-table.hcell val="6" />
                <x-table.hcell val="7" />
                <x-table.hcell val="8" />
                <x-table.hcell val="9" />
                <x-table.hcell val="10" />
                <x-table.hcell val="11" />
                <x-table.hcell val="12" />
                <x-table.hcell val="13" />
            </x-table.row>
        </x-slot:head>
        <x-slot:body>
            <x-table.row input>
                <x-table.cell val="Общая численность населения субъекта Российской Федерации, в том числе:" pd/>
                <x-table.cell val="01" center pd/>
                <x-table.cell><x-form.input formul="CA8+CA9" disabled /></x-table.cell>
                <x-table.cell><x-form.input name="CB7" /></x-table.cell>
                <x-table.cell><x-form.input name="CC7" /></x-table.cell>
                <x-table.cell><x-form.input name="CD7" /></x-table.cell>
                <x-table.cell><x-form.input name="CE7" /></x-table.cell>
                <x-table.cell><x-form.input disabled /></x-table.cell>
                <x-table.cell><x-form.input disabled /></x-table.cell>
                <x-table.cell><x-form.input disabled /></x-table.cell>
                <x-table.cell><x-form.input disabled /></x-table.cell>
                <x-table.cell><x-form.input disabled /></x-table.cell>
                <x-table.cell><x-form.input disabled /></x-table.cell>
            </x-table.row>
            <x-table.row input>
                <x-table.cell val="Численность взрослого населения в возрасте 18 лет и старше" pd/>
                <x-table.cell val="02" center pd />
                <x-table.cell><x-form.input disabled /></x-table.cell>
                <x-table.cell><x-form.input name="CB8" /></x-table.cell>
                <x-table.cell><x-form.input name="CC8" /></x-table.cell>
                <x-table.cell><x-form.input name="CD8" /></x-table.cell>
                <x-table.cell><x-form.input name="CE8" /></x-table.cell>
                <x-table.cell><x-form.input disabled /></x-table.cell>
                <x-table.cell><x-form.input disabled /></x-table.cell>
                <x-table.cell><x-form.input disabled /></x-table.cell>
                <x-table.cell><x-form.input disabled /></x-table.cell>
                <x-table.cell><x-form.input disabled /></x-table.cell>
                <x-table.cell><x-form.input disabled /></x-table.cell>
            </x-table.row>
            <x-table.row input>
                <x-table.cell val="Численность детского населения" pd/>
                <x-table.cell val="03" center pd />
                <x-table.cell><x-form.input disabled /></x-table.cell>
                <x-table.cell><x-form.input disabled /></x-table.cell>
                <x-table.cell><x-form.input disabled /></x-table.cell>
                <x-table.cell><x-form.input disabled /></x-table.cell>
                <x-table.cell><x-form.input disabled /></x-table.cell>
                <x-table.cell><x-form.input name="CF9" /></x-table.cell>
                <x-table.cell><x-form.input name="CG9" /></x-table.cell>
                <x-table.cell><x-form.input name="CH9" /></x-table.cell>
                <x-table.cell><x-form.input name="CI9" /></x-table.cell>
                <x-table.cell><x-form.input name="CJ9" /></x-table.cell>
                <x-table.cell><x-form.input name="CK9" /></x-table.cell>
            </x-table.row>
        </x-slot:body>
    </x-table.box>
@endsection

{{-- <caption>{{ $sheet->name }}</caption>
<tbody>
    <tr>
        <x-table.td type="header" value="Общая численность населения субъекта Российской Федерации, в том числе:" />
        <x-table.td value="01" center />
        <x-table.td type="input" formul="{CA8}+{CA9}" name="CA7" disabled />
        <x-table.td type="input" formul="{CB8}" name="CB7" disabled />
        <x-table.td type="input" formul="{CC8}" name="CC7" disabled />
        <x-table.td type="input" formul="{CD8}" name="CD7" disabled />
        <x-table.td type="input" formul="{CE8}" name="CE7" disabled />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
    </tr>
    <tr>
        <x-table.td type="header" value="Численность взрослого населения в возрасте 18 лет и старше" />
        <x-table.td value="02" center />
        <x-table.td type="input" formul="{CB8}+{CD8}" name="CA8" disabled />
        <x-table.td type="input" formul="{this}>{CC8}" inp-type="number" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" name="CB8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" name="CC8" />
        <x-table.td type="input" formul="{this}>{CE8}" inp-type="number" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" name="CD8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" name="CE8" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
    </tr>
    <tr>
        <x-table.td type="header" value="Численность детского населения" />
        <x-table.td value="03" center />
        <x-table.td type="input" formul="{CF9}+{CG9}+{CH9}+{CI9}+{CJ9}+{CK9}" name="CA9" disabled />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF9') ? $data['CF9'] : '' }}" name="CF9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG9') ? $data['CG9'] : '' }}" name="CG9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH9') ? $data['CH9'] : '' }}" name="CH9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CI9') ? $data['CI9'] : '' }}" name="CI9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CJ9') ? $data['CJ9'] : '' }}" name="CJ9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CK9') ? $data['CK9'] : '' }}" name="CK9" />

    </tr>
</tbody> --}}
