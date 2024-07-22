<caption>{{ $sheet->header }}</caption>
<thead>
    <tr>
        <x-table.th rowspan=2 value="Наименование показателей" header />
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
        <x-table.th value="1" header />
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
        <x-table.td value="01" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA6') ? $data['CA6'] : '' }}" name="CA6" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="Численность инвалидов, обратившихся в службу занятости населения, из них:" />
        <x-table.td value="02" center />
        <x-table.td type="input-d" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB7') ? $data['CB7'] : '' }}" name="CB7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC7') ? $data['CC7'] : '' }}" name="CC7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD7') ? $data['CD7'] : '' }}" name="CD7" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="трудоустроенных через службу занятости населения" />
        <x-table.td value="03" center />
        <x-table.td type="input-d" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" name="CB8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" name="CC8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" name="CD8" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="получивших государственную услугу по сопровождению при содействии занятости инвалидов" />
        <x-table.td value="04" center />
        <x-table.td type="input-d" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB9') ? $data['CB9'] : '' }}" name="CB9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC9') ? $data['CC9'] : '' }}" name="CC9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD9') ? $data['CD9'] : '' }}" name="CD9" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="Численность трудоустроенных инвалидов в субъекте Российской Федерации за отчетный год, всего" />
        <x-table.td value="05" center />
        <x-table.td type="input-d" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB10') ? $data['CB10'] : '' }}" name="CB10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC10') ? $data['CC10'] : '' }}" name="CC10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD10') ? $data['CD10'] : '' }}" name="CD10" />
    </tr>
</tbody>
