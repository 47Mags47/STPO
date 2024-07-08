<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th rowspan=2 value="Наименование показателей" />
        <x-table.th rowspan=2 value="№ строки" />
        <x-table.th rowspan=2 value="Количество выписок, ед." />
        <x-table.th rowspan=2 value="Всего, чел." />
        <x-table.th colspan=2 value="из них:" />
    </tr>
    <tr>
        <x-table.th value="инвалиды в возрасте 18 лет  и старше, чел." />
        <x-table.th value="дети-инвалиды, чел" />
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
        <x-table.td type="header"
            value="Количество выписок из ИПРА инвалида (ИПРА ребенка-инвалида) поступивших в органы службы занятости" />
        <x-table.td value="01" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA6') ? $data['CA6'] : '' }}" coord="CA6" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="Численность инвалидов, обратившихся в службу занятости населения, из них:" />
        <x-table.td value="02" h='center' />
        <x-table.td type="input-d" />
        <x-table.td type="input" value="{{ $data->has('CA7') ? $data['CA7'] : '' }}" coord="CA7" />
        <x-table.td type="input" value="{{ $data->has('CA7') ? $data['CA7'] : '' }}" coord="CA7" />
        <x-table.td type="input" value="{{ $data->has('CA7') ? $data['CA7'] : '' }}" coord="CA7" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="трудоустроенных через службу занятости населения" />
        <x-table.td value="03" h='center' />
        <x-table.td type="input-d" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="получивших государственную услугу по сопровождению при содействии занятости инвалидов" />
        <x-table.td value="04" h='center' />
        <x-table.td type="input-d" />
        <x-table.td type="input" value="{{ $data->has('CA9') ? $data['CA9'] : '' }}" coord="CA9" />
        <x-table.td type="input" value="{{ $data->has('CA9') ? $data['CA9'] : '' }}" coord="CA9" />
        <x-table.td type="input" value="{{ $data->has('CA9') ? $data['CA9'] : '' }}" coord="CA9" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="Численность трудоустроенных инвалидов в субъекте Российской Федерации за отчетный год, всего" />
        <x-table.td value="05" h='center' />
        <x-table.td type="input-d" />
        <x-table.td type="input" value="{{ $data->has('CA10') ? $data['CA10'] : '' }}" coord="CA10" />
        <x-table.td type="input" value="{{ $data->has('CA10') ? $data['CA10'] : '' }}" coord="CA10" />
        <x-table.td type="input" value="{{ $data->has('CA10') ? $data['CA10'] : '' }}" coord="CA10" />
    </tr>
</tbody>
