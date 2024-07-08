<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th value="Наименование <br> показателей" />
        <x-table.th value="№ строки" />
        <x-table.th value="Всего (сумма граф 4, 5 и 6), ед." />
        <x-table.th value="Организации среднего профессионального образования, ед." />
        <x-table.th value="Организации высшего образования, ед." />
        <x-table.th value="Организации дополнительного профессионального образования, ед." />
    </tr>
    <tr>
        <x-table.th value="1" />
        <x-table.th value="2" />
        <x-table.th value="3" />
        <x-table.th value="4" />
        <x-table.th value="5" />
        <x-table.th value="6" />
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header" value="Всего организаций, из них:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('CA5') ? $data['CA5'] : '' }}" coord="CA5" />
        <x-table.td type="input" value="{{ $data->has('CB5') ? $data['CB5'] : '' }}" coord="CB5" />
        <x-table.td type="input" value="{{ $data->has('CC5') ? $data['CC5'] : '' }}" coord="CC5" />
        <x-table.td type="input" value="{{ $data->has('CD5') ? $data['CD5'] : '' }}" coord="CD5" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере социальной защиты населения" />
        <x-table.td type="header" value="02" />
        <x-table.td type="input" value="{{ $data->has('CA6') ? $data['CA6'] : '' }}" coord="CA6" />
        <x-table.td type="input" value="{{ $data->has('CB6') ? $data['CB6'] : '' }}" coord="CB6" />
        <x-table.td type="input" value="{{ $data->has('CC6') ? $data['CC6'] : '' }}" coord="CC6" />
        <x-table.td type="input" value="{{ $data->has('CD6') ? $data['CD6'] : '' }}" coord="CD6" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере здравоохранения" />
        <x-table.td type="header" value="03" />
        <x-table.td type="input" value="{{ $data->has('CA7') ? $data['CA7'] : '' }}" coord="CA7" />
        <x-table.td type="input" value="{{ $data->has('CB7') ? $data['CB7'] : '' }}" coord="CB7" />
        <x-table.td type="input" value="{{ $data->has('CC7') ? $data['CC7'] : '' }}" coord="CC7" />
        <x-table.td type="input" value="{{ $data->has('CD7') ? $data['CD7'] : '' }}" coord="CD7" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере образования" />
        <x-table.td type="header" value="04" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере занятости населения" />
        <x-table.td type="header" value="05" />
        <x-table.td type="input" value="{{ $data->has('CA9') ? $data['CA9'] : '' }}" coord="CA9" />
        <x-table.td type="input" value="{{ $data->has('CB9') ? $data['CB9'] : '' }}" coord="CB9" />
        <x-table.td type="input" value="{{ $data->has('CC9') ? $data['CC9'] : '' }}" coord="CC9" />
        <x-table.td type="input" value="{{ $data->has('CD9') ? $data['CD9'] : '' }}" coord="CD9" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере физической культуры и спорта" />
        <x-table.td type="header" value="06" />
        <x-table.td type="input" value="{{ $data->has('CA10') ? $data['CA10'] : '' }}" coord="CA10" />
        <x-table.td type="input" value="{{ $data->has('CB10') ? $data['CB10'] : '' }}" coord="CB10" />
        <x-table.td type="input" value="{{ $data->has('CC10') ? $data['CC10'] : '' }}" coord="CC10" />
        <x-table.td type="input" value="{{ $data->has('CD10') ? $data['CD10'] : '' }}" coord="CD10" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере культуры" />
        <x-table.td type="header" value="07" />
        <x-table.td type="input" value="{{ $data->has('CA11') ? $data['CA11'] : '' }}" coord="CA11" />
        <x-table.td type="input" value="{{ $data->has('CB11') ? $data['CB11'] : '' }}" coord="CB11" />
        <x-table.td type="input" value="{{ $data->has('CC11') ? $data['CC11'] : '' }}" coord="CC11" />
        <x-table.td type="input" value="{{ $data->has('CD11') ? $data['CD11'] : '' }}" coord="CD11" />
    </tr>
</tbody>
