<caption>{{ $sheet->header }}</caption>
<thead>
    <tr>
        <x-table.th value="Наименование <br> показателей" rowspan=2 header />
        <x-table.th value="№ строки" rowspan=2 />
        <x-table.th value="за счет средств ФСС" colspan=2 />
        <x-table.th value="за счет средств ОМС" colspan=2 />
        <x-table.th value="за счет средств субъекта РФ" colspan=2 />
        <x-table.th value="за счет иных средств" colspan=2 />
    </tr>
    <tr>
        <x-table.th value="инвалиды в возрасте 18 лет  и старше, чел." />
        <x-table.th value="дети-инвалиды, чел." />
        <x-table.th value="инвалиды в возрасте 18 лет  и старше, чел." />
        <x-table.th value="дети-инвалиды, чел." />
        <x-table.th value="инвалиды в возрасте 18 лет  и старше, чел." />
        <x-table.th value="дети-инвалиды, чел." />
        <x-table.th value="инвалиды в возрасте 18 лет  и старше, чел." />
        <x-table.th value="дети-инвалиды, чел." />
    </tr>
    <tr>
        <x-table.th value="1" header />
        <x-table.th value="2" />
        <x-table.th value="3" />
        <x-table.th value="4" />
        <x-table.th value="5" />
        <x-table.th value="6" />
        <x-table.th value="7" />
        <x-table.th value="8" />
        <x-table.th value="9" />
        <x-table.th value="10" />
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header" value="Численность инвалидов в возрасте 18 лет и старше и детей-инвалидов, получивших услуги по санаторно-курортному лечению:" />
        <x-table.td value="01" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA6') ? $data['CA6'] : '' }}" name="CA6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB6') ? $data['CB6'] : '' }}" name="CB6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC6') ? $data['CC6'] : '' }}" name="CC6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD6') ? $data['CD6'] : '' }}" name="CD6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE6') ? $data['CE6'] : '' }}" name="CE6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF6') ? $data['CF6'] : '' }}" name="CF6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG6') ? $data['CG6'] : '' }}" name="CG6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH6') ? $data['CH6'] : '' }}" name="CH6" />
    </tr>
        </tr>
</tbody>
