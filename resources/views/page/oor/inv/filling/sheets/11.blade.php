<caption>{{ $sheet->name }}</caption>
<thead>
    <tr>
        <x-table.th value="Наименование <br> показателей" rowspan=2 header />
        <x-table.th value="№ строки" rowspan=2 />
        <x-table.th value="Всего, чел." rowspan=2 />
        <x-table.th value="из них:" colspan=2 />
    </tr>
    <tr>
        <x-table.th value="инвалиды в возрасте 18 лет и старше, чел." />
        <x-table.th value="дети-инвалиды, чел." />
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
        <x-table.td type="header" value="Численность инвалидов в возрасте 18 лет и старше и детей-инвалидов, получивших ТСР:" />
        <x-table.td value="01" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA6') ? $data['CA6'] : '' }}" name="CA6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB6') ? $data['CB6'] : '' }}" name="CB6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC6') ? $data['CC6'] : '' }}" name="CC6" />

    </tr>

</tbody>
