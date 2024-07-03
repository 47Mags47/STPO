<thead>
    <tr>
        <x-table.th value="Наименование классов и отдельных болезней" rowspan=4 />
        <x-table.th value="Код по МКБ-10 пересмотра" rowspan=4 />
        <x-table.th value="№ строки" rowspan=4 />
        <x-table.th value="Число инвалидов, получивших медицинскую реабилитацию на дому" colspan=3 />
        <x-table.th value="Число инвалидов, получивших медицинскую реабилитацию амбулаторно" colspan=3 />
        <x-table.th value="Число инвалидов, получивших медицинскую реабилитацию в условиях дневного стационара" colspan=3 />
        <x-table.th value="Число инвалидов, получивших медицинскую реабилитацию в условиях  стационара" colspan=3 />
        <x-table.th value="Число инвалидов, получивших медицинскую реабилитацию в условиях отделения реанимации и интенсивной терапии" colspan=3 />
    </tr>
    <tr>
        <x-table.th value="Всего обращений (сумма граф 5 и 6)" rowspan=2 />
        <x-table.th value="из них:" colspan=2 />
        <x-table.th value="Всего обращений.(сумма граф 8 и 9)" rowspan=2 />
        <x-table.th value="из них:" colspan=2 />
        <x-table.th value="Всего случаев госпитализации (сумма граф 11 и 12)" rowspan=2 />
        <x-table.th value="из них:" colspan=2 />
        <x-table.th value="Всего случаев госпитализации (сумма граф 14 и 15)" rowspan=2 />
        <x-table.th value="из них:" colspan=2 />
        <x-table.th value="Всего случаев госпитализации (сумма граф 17 и 18)" rowspan=2 />
        <x-table.th value="из них:" colspan=2 />
    </tr>
    <tr>
        <x-table.th value="инвалидов в возрасте 18 лет и старше, обращений" />
        <x-table.th value="детей-инвалидов, обращений" />
        <x-table.th value="инвалидов в возрасте 18 лет и старше, обращений" />
        <x-table.th value="детей-инвалидов, обращений" />
        <x-table.th value="инвалидов в возрасте 18 лет и старше, случаев госпитализации" />
        <x-table.th value="детей-инвалидов, случаев госпитализации" />
        <x-table.th value="инвалидов в возрасте 18 лет и старше, случаев госпитализации" />
        <x-table.th value="детей-инвалидов, случаев госпитализации" />
        <x-table.th value="инвалидов в возрасте 18 лет и старше, случаев госпитализации" />
        <x-table.th value="детей-инвалидов, случаев госпитализации" />
    </tr>
    <tr>
        <x-table.th value="III этап" colspan=3 />
        <x-table.th value="III этап" colspan=3 />
        <x-table.th value="III этап" colspan=3 />
        <x-table.th value="II этап" colspan=3 />
        <x-table.th value="I этап" colspan=3 />
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
        <x-table.th value="11" />
        <x-table.th value="12" />
        <x-table.th value="13" />
        <x-table.th value="14" />
        <x-table.th value="15" />
        <x-table.th value="16" />
        <x-table.th value="17" />
        <x-table.th value="18" />
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="некоторые инфекционные и паразитарные болезни, из них A00 - В99" />
        <x-table.td type="header" value="02" />
        <x-table.td type="input" value="{{ $data->has('BT9') ? $data['BT9'] : '' }}" coord="BT9" />
        <x-table.td type="input" value="{{ $data->has('BU9') ? $data['BU9'] : '' }}" coord="BU9" />
        <x-table.td type="input" value="{{ $data->has('BV9') ? $data['BV9'] : '' }}" coord="BV9" />
        <x-table.td type="input" value="{{ $data->has('BW9') ? $data['BW9'] : '' }}" coord="BW9" />
        <x-table.td type="input" value="{{ $data->has('BX9') ? $data['BX9'] : '' }}" coord="BX9" />
        <x-table.td type="input" value="{{ $data->has('BY9') ? $data['BY9'] : '' }}" coord="BY9" />
        <x-table.td type="input" value="{{ $data->has('BZ9') ? $data['BZ9'] : '' }}" coord="BZ9" />
        <x-table.td type="input" value="{{ $data->has('CA9') ? $data['CA9'] : '' }}" coord="CA9" />
        <x-table.td type="input" value="{{ $data->has('CB9') ? $data['CB9'] : '' }}" coord="CB9" />
        <x-table.td type="input" value="{{ $data->has('CC9') ? $data['CC9'] : '' }}" coord="CC9" />
        <x-table.td type="input" value="{{ $data->has('CD9') ? $data['CD9'] : '' }}" coord="CD9" />
        <x-table.td type="input" value="{{ $data->has('CE9') ? $data['CE9'] : '' }}" coord="CE9" />
        <x-table.td type="input" value="{{ $data->has('CF9') ? $data['CF9'] : '' }}" coord="CF9" />
        <x-table.td type="input" value="{{ $data->has('CG9') ? $data['CG9'] : '' }}" coord="CG9" />
        <x-table.td type="input" value="{{ $data->has('CH9') ? $data['CH9'] : '' }}" coord="CH9" />
    </tr>
    <tr>
        <x-table.td type="header" value="туберкулез A15 - A19" />
        <x-table.td type="header" value="03" />
        <x-table.td type="input" value="{{ $data->has('BT10') ? $data['BT10'] : '' }}" coord="BT10" />
        <x-table.td type="input" value="{{ $data->has('BU10') ? $data['BU10'] : '' }}" coord="BU10" />
        <x-table.td type="input" value="{{ $data->has('BV10') ? $data['BV10'] : '' }}" coord="BV10" />
        <x-table.td type="input" value="{{ $data->has('BW10') ? $data['BW10'] : '' }}" coord="BW10" />
        <x-table.td type="input" value="{{ $data->has('BX10') ? $data['BX10'] : '' }}" coord="BX10" />
        <x-table.td type="input" value="{{ $data->has('BY10') ? $data['BY10'] : '' }}" coord="BY10" />
        <x-table.td type="input" value="{{ $data->has('BZ10') ? $data['BZ10'] : '' }}" coord="BZ10" />
        <x-table.td type="input" value="{{ $data->has('CA10') ? $data['CA10'] : '' }}" coord="CA10" />
        <x-table.td type="input" value="{{ $data->has('CB10') ? $data['CB10'] : '' }}" coord="CB10" />
        <x-table.td type="input" value="{{ $data->has('CC10') ? $data['CC10'] : '' }}" coord="CC10" />
        <x-table.td type="input" value="{{ $data->has('CD10') ? $data['CD10'] : '' }}" coord="CD10" />
        <x-table.td type="input" value="{{ $data->has('CE10') ? $data['CE10'] : '' }}" coord="CE10" />
        <x-table.td type="input" value="{{ $data->has('CF10') ? $data['CF10'] : '' }}" coord="CF10" />
        <x-table.td type="input" value="{{ $data->has('CG10') ? $data['CG10'] : '' }}" coord="CG10" />
        <x-table.td type="input" value="{{ $data->has('CH10') ? $data['CH10'] : '' }}" coord="CH10" />

    </tr>

    <tr>
        <x-table.td type="header" value="вирусные инфекции центральной нервной системы: A80 - A89" />
        <x-table.td type="header" value="04" />
        <x-table.td type="input" value="{{ $data->has('BT11') ? $data['BT11'] : '' }}" coord="BT11" />
        <x-table.td type="input" value="{{ $data->has('BU11') ? $data['BU11'] : '' }}" coord="BU11" />
        <x-table.td type="input" value="{{ $data->has('BV11') ? $data['BV11'] : '' }}" coord="BV11" />
        <x-table.td type="input" value="{{ $data->has('BW11') ? $data['BW11'] : '' }}" coord="BW11" />
        <x-table.td type="input" value="{{ $data->has('BX11') ? $data['BX11'] : '' }}" coord="BX11" />
        <x-table.td type="input" value="{{ $data->has('BY11') ? $data['BY11'] : '' }}" coord="BY11" />
        <x-table.td type="input" value="{{ $data->has('BZ11') ? $data['BZ11'] : '' }}" coord="BZ11" />
        <x-table.td type="input" value="{{ $data->has('CA11') ? $data['CA11'] : '' }}" coord="CA11" />
        <x-table.td type="input" value="{{ $data->has('CB11') ? $data['CB11'] : '' }}" coord="CB11" />
        <x-table.td type="input" value="{{ $data->has('CC11') ? $data['CC11'] : '' }}" coord="CC11" />
        <x-table.td type="input" value="{{ $data->has('CD11') ? $data['CD11'] : '' }}" coord="CD11" />
        <x-table.td type="input" value="{{ $data->has('CE11') ? $data['CE11'] : '' }}" coord="CE11" />
        <x-table.td type="input" value="{{ $data->has('CF11') ? $data['CF11'] : '' }}" coord="CF11" />
        <x-table.td type="input" value="{{ $data->has('CG11') ? $data['CG11'] : '' }}" coord="CG11" />
        <x-table.td type="input" value="{{ $data->has('CH11') ? $data['CH11'] : '' }}" coord="CH11" />
    </tr>
    <tr>
        <x-table.td type="header" value="последствия инфекционных и паразитарных болезней В90 - В94" />
        <x-table.td type="header" value="05" />
        <x-table.td type="input" value="{{ $data->has('BT12') ? $data['BT12'] : '' }}" coord="BT12" />
        <x-table.td type="input" value="{{ $data->has('BU12') ? $data['BU12'] : '' }}" coord="BU12" />
        <x-table.td type="input" value="{{ $data->has('BV12') ? $data['BV12'] : '' }}" coord="BV12" />
        <x-table.td type="input" value="{{ $data->has('BW12') ? $data['BW12'] : '' }}" coord="BW12" />
        <x-table.td type="input" value="{{ $data->has('BX12') ? $data['BX12'] : '' }}" coord="BX12" />
        <x-table.td type="input" value="{{ $data->has('BY12') ? $data['BY12'] : '' }}" coord="BY12" />
        <x-table.td type="input" value="{{ $data->has('BZ12') ? $data['BZ12'] : '' }}" coord="BZ12" />
        <x-table.td type="input" value="{{ $data->has('CA12') ? $data['CA12'] : '' }}" coord="CA12" />
        <x-table.td type="input" value="{{ $data->has('CB12') ? $data['CB12'] : '' }}" coord="CB12" />
        <x-table.td type="input" value="{{ $data->has('CC12') ? $data['CC12'] : '' }}" coord="CC12" />
        <x-table.td type="input" value="{{ $data->has('CD12') ? $data['CD12'] : '' }}" coord="CD12" />
        <x-table.td type="input" value="{{ $data->has('CE12') ? $data['CE12'] : '' }}" coord="CE12" />
        <x-table.td type="input" value="{{ $data->has('CF12') ? $data['CF12'] : '' }}" coord="CF12" />
        <x-table.td type="input" value="{{ $data->has('CG12') ? $data['CG12'] : '' }}" coord="CG12" />
        <x-table.td type="input" value="{{ $data->has('CH12') ? $data['CH12'] : '' }}" coord="CH12" />
    </tr>
    <tr>
        <x-table.td type="header" value="новообразования, из них: C00 - D48" />
        <x-table.td type="header" value="06" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Всего заболеваний, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>

</tbody>
