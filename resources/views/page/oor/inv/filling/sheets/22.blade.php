<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th value="Наименование <br> показателей" />
        <x-table.th value="№ строки" />
        <x-table.th value="Всего, чел." />
        <x-table.th value="Инвалиды-выпускники 9 классов, чел." />
        <x-table.th value="Инвалиды-выпускники 11 классов, чел." />
    </tr>
    <tr>
        <x-table.th value="1" />
        <x-table.th value="2" />
        <x-table.th value="3" />
        <x-table.th value="4" />
        <x-table.th value="5" />
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header" value="Численность выпускников-инвалидов 9 и 11 классов, охваченных профориентационной работой" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT5') ? $data['BT5'] : '' }}" coord="BT5" />
        <x-table.td type="input" value="{{ $data->has('CG5') ? $data['CG5'] : '' }}" coord="CG5" />
        <x-table.td type="input" value="{{ $data->has('CH5') ? $data['CH5'] : '' }}" coord="CH5" />
    </tr>
</tbody>
