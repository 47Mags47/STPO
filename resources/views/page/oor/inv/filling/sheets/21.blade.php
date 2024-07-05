<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th rowspan=2 value="Наименование <br> показателей" />
        <x-table.th rowspan=2 value="№ строки" />
        <x-table.th colspan=2 value="Психолого-педагогическая реабилитация в ППМС- центрах" />
    </tr>
    <tr>
        <x-table.th value="Всего, чел." />
        <x-table.th value="из них, получивших комплекс реабилитационных мероприятий, чел." />
    </tr>
    <tr>
        <x-table.th value="1" />
        <x-table.th value="2" />
        <x-table.th value="3" />
        <x-table.th value="4" />
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header" value="Численность выпускников-инвалидов 9 и 11 классов, охваченных профориентационной работой" />
        <x-table.td value="01" h='center' />
        <x-table.td type="input" value="{{ $data->has('DO5') ? $data['DO5'] : '' }}" coord="DO5" />
        <x-table.td type="input" value="{{ $data->has('DP5') ? $data['DP5'] : '' }}" coord="DP5" />
    </tr>
</tbody>
