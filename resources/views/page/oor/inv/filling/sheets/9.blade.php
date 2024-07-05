<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th value="Наименование <br> показателей" rowspan=2 />
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
        <x-table.th value="1" />
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
        <x-table.td type="header"
            value="Численность инвалидов в возрасте 18 лет и старше и детей-инвалидов, получивших услуги по санаторно-курортному лечению:" />
        <x-table.td value="01" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA7') ? $data['CA6'] : '' }}" coord="CA6" />
        <x-table.td type="input" value="{{ $data->has('CB7') ? $data['CB6'] : '' }}" coord="CB6" />
        <x-table.td type="input" value="{{ $data->has('CC7') ? $data['CC6'] : '' }}" coord="CC6" />
        <x-table.td type="input" value="{{ $data->has('CA7') ? $data['CD6'] : '' }}" coord="CD6" />
        <x-table.td type="input" value="{{ $data->has('CA7') ? $data['CE6'] : '' }}" coord="CE6" />
        <x-table.td type="input" value="{{ $data->has('CA7') ? $data['CF6'] : '' }}" coord="CF6" />
        <x-table.td type="input" value="{{ $data->has('CA7') ? $data['CG6'] : '' }}" coord="CG6" />
        <x-table.td type="input" value="{{ $data->has('CA7') ? $data['CH6'] : '' }}" coord="CH6" />

    </tr>
        </tr>
</tbody>
