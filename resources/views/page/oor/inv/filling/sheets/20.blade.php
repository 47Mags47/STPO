<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th rowspan=2 value="Наименование <br> показателей" header />
        <x-table.th rowspan=2 value="№ строки" />
        <x-table.th colspan=2 value="Психолого-педагогическая реабилитация в ППМС- центрах" />
    </tr>
    <tr>
        <x-table.th value="Всего, чел." />
        <x-table.th value="из них, получивших комплекс реабилитационных мероприятий, чел." />
    </tr>
    <tr>
        <x-table.th value="1" header />
        <x-table.th value="2" />
        <x-table.th value="3" />
        <x-table.th value="4" />
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header" value="Численность детей-инвалидов, получивших услуги по психолого-педагогической реабилитации и абилитации" />
        <x-table.td value="01" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('DO6') ? $data['DO6'] : '' }}" name="DO6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('DP6') ? $data['DP6'] : '' }}" name="DP6" />
    </tr>
</tbody>
