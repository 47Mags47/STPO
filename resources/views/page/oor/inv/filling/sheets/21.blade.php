<caption>{{ $sheet->header }}</caption>
<thead>
    <tr>
        <x-table.th value="Наименование <br> показателей" header />
        <x-table.th value="№ строки" />
        <x-table.th value="Всего, чел." />
        <x-table.th value="Инвалиды-выпускники 9 классов, чел." />
        <x-table.th value="Инвалиды-выпускники 11 классов, чел." />
    </tr>
    <tr>
        <x-table.th value="1" header />
        <x-table.th value="2" />
        <x-table.th value="3" />
        <x-table.th value="4" />
        <x-table.th value="5" />
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header"
            value="Численность выпускников-инвалидов 9 и 11 классов, охваченных профориентационной работой" />
        <x-table.td value="01" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT5') ? $data['BT5'] : '' }}" name="BT5" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG5') ? $data['CG5'] : '' }}" name="CG5" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH5') ? $data['CH5'] : '' }}" name="CH5" />
    </tr>
</tbody>
