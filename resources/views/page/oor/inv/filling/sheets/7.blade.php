<caption>{{ $sheet->header }}</caption>
<thead>
    <tr>
        <x-table.th value="Наименование классов и отдельных болезней" rowspan=4 header />
        <x-table.th value="Код по МКБ-10 пересмотра" rowspan=4 />
        <x-table.th value="№ строки" rowspan=4 />
        <x-table.th value="Число инвалидов, получивших медицинскую реабилитацию на дому" colspan=3 />
        <x-table.th value="Число инвалидов, получивших медицинскую реабилитацию амбулаторно" colspan=3 />
        <x-table.th value="Число инвалидов, получивших медицинскую реабилитацию в условиях дневного стационара"
            colspan=3 />
        <x-table.th value="Число инвалидов, получивших медицинскую реабилитацию в условиях  стационара" colspan=3 />
        <x-table.th
            value="Число инвалидов, получивших медицинскую реабилитацию в условиях отделения реанимации и интенсивной терапии"
            colspan=3 />
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
        <x-table.td value="A00 - T98" />
        <x-table.td value="01" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" name="BT8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" name="BU8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" name="BV8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" name="BW8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" name="BX8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" name="BY8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" name="BZ8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" name="CA8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" name="CB8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" name="CC8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" name="CD8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" name="CE8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" name="CF8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" name="CG8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" name="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="некоторые инфекционные и паразитарные болезни, из них A00 - В99" />
        <x-table.td value="A00 - В99" />
        <x-table.td value="02" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT9') ? $data['BT9'] : '' }}" name="BT9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU9') ? $data['BU9'] : '' }}" name="BU9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV9') ? $data['BV9'] : '' }}" name="BV9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW9') ? $data['BW9'] : '' }}" name="BW9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX9') ? $data['BX9'] : '' }}" name="BX9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY9') ? $data['BY9'] : '' }}" name="BY9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ9') ? $data['BZ9'] : '' }}" name="BZ9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA9') ? $data['CA9'] : '' }}" name="CA9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB9') ? $data['CB9'] : '' }}" name="CB9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC9') ? $data['CC9'] : '' }}" name="CC9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD9') ? $data['CD9'] : '' }}" name="CD9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE9') ? $data['CE9'] : '' }}" name="CE9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF9') ? $data['CF9'] : '' }}" name="CF9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG9') ? $data['CG9'] : '' }}" name="CG9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH9') ? $data['CH9'] : '' }}" name="CH9" />
    </tr>
    <tr>
        <x-table.td type="header" value="туберкулез A15 - A19" />
        <x-table.td value="A15 - A19" />
        <x-table.td value="03" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT10') ? $data['BT10'] : '' }}" name="BT10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU10') ? $data['BU10'] : '' }}" name="BU10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV10') ? $data['BV10'] : '' }}" name="BV10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW10') ? $data['BW10'] : '' }}" name="BW10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX10') ? $data['BX10'] : '' }}" name="BX10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY10') ? $data['BY10'] : '' }}" name="BY10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ10') ? $data['BZ10'] : '' }}" name="BZ10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA10') ? $data['CA10'] : '' }}" name="CA10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB10') ? $data['CB10'] : '' }}" name="CB10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC10') ? $data['CC10'] : '' }}" name="CC10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD10') ? $data['CD10'] : '' }}" name="CD10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE10') ? $data['CE10'] : '' }}" name="CE10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF10') ? $data['CF10'] : '' }}" name="CF10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG10') ? $data['CG10'] : '' }}" name="CG10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH10') ? $data['CH10'] : '' }}" name="CH10" />

    </tr>

    <tr>
        <x-table.td type="header" value="вирусные инфекции центральной нервной системы: A80 - A89" />
        <x-table.td value="A80 - A89" />
        <x-table.td value="04" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT11') ? $data['BT11'] : '' }}" name="BT11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU11') ? $data['BU11'] : '' }}" name="BU11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV11') ? $data['BV11'] : '' }}" name="BV11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW11') ? $data['BW11'] : '' }}" name="BW11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX11') ? $data['BX11'] : '' }}" name="BX11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY11') ? $data['BY11'] : '' }}" name="BY11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ11') ? $data['BZ11'] : '' }}" name="BZ11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA11') ? $data['CA11'] : '' }}" name="CA11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB11') ? $data['CB11'] : '' }}" name="CB11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC11') ? $data['CC11'] : '' }}" name="CC11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD11') ? $data['CD11'] : '' }}" name="CD11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE11') ? $data['CE11'] : '' }}" name="CE11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF11') ? $data['CF11'] : '' }}" name="CF11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG11') ? $data['CG11'] : '' }}" name="CG11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH11') ? $data['CH11'] : '' }}" name="CH11" />
    </tr>
    <tr>
        <x-table.td type="header" value="последствия инфекционных и паразитарных болезней В90 - В94" />
        <x-table.td value="В90 - В94" />
        <x-table.td value="05" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT12') ? $data['BT12'] : '' }}" name="BT12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU12') ? $data['BU12'] : '' }}" name="BU12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV12') ? $data['BV12'] : '' }}" name="BV12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW12') ? $data['BW12'] : '' }}" name="BW12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX12') ? $data['BX12'] : '' }}" name="BX12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY12') ? $data['BY12'] : '' }}" name="BY12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ12') ? $data['BZ12'] : '' }}" name="BZ12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA12') ? $data['CA12'] : '' }}" name="CA12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB12') ? $data['CB12'] : '' }}" name="CB12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC12') ? $data['CC12'] : '' }}" name="CC12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD12') ? $data['CD12'] : '' }}" name="CD12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE12') ? $data['CE12'] : '' }}" name="CE12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF12') ? $data['CF12'] : '' }}" name="CF12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG12') ? $data['CG12'] : '' }}" name="CG12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH12') ? $data['CH12'] : '' }}" name="CH12" />
    </tr>
    <tr>
        <x-table.td type="header" value="новообразования, из них: C00 - D48" />
        <x-table.td value="C00 - D48" />
        <x-table.td value="06" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT13') ? $data['BT13'] : '' }}" name="BT13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU13') ? $data['BU13'] : '' }}" name="BU13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV13') ? $data['BV13'] : '' }}" name="BV13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW13') ? $data['BW13'] : '' }}" name="BW13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX13') ? $data['BX13'] : '' }}" name="BX13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY13') ? $data['BY13'] : '' }}" name="BY13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ13') ? $data['BZ13'] : '' }}" name="BZ13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA13') ? $data['CA13'] : '' }}" name="CA13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB13') ? $data['CB13'] : '' }}" name="CB13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC13') ? $data['CC13'] : '' }}" name="CC13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD13') ? $data['CD13'] : '' }}" name="CD13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE13') ? $data['CE13'] : '' }}" name="CE13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF13') ? $data['CF13'] : '' }}" name="CF13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG13') ? $data['CG13'] : '' }}" name="CG13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH13') ? $data['CH13'] : '' }}" name="CH13" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="злокачественные новообразования лимфоидной, кроветворной и родственных им тканей: C81 - C96" />
        <x-table.td value="C81 - C96" />
        <x-table.td value="07" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT14') ? $data['BT14'] : '' }}" name="BT14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU14') ? $data['BU14'] : '' }}" name="BU14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV14') ? $data['BV14'] : '' }}" name="BV14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW14') ? $data['BW14'] : '' }}" name="BW14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX14') ? $data['BX14'] : '' }}" name="BX14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY14') ? $data['BY14'] : '' }}" name="BY14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ14') ? $data['BZ14'] : '' }}" name="BZ14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA14') ? $data['CA14'] : '' }}" name="CA14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB14') ? $data['CB14'] : '' }}" name="CB14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC14') ? $data['CC14'] : '' }}" name="CC14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD14') ? $data['CD14'] : '' }}" name="CD14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE14') ? $data['CE14'] : '' }}" name="CE14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF14') ? $data['CF14'] : '' }}" name="CF14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG14') ? $data['CG14'] : '' }}" name="CG14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH14') ? $data['CH14'] : '' }}" name="CH14" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="болезни крови, кроветворных органов и отдельные нарушения, вовлекающие имунный механизм, из них: D50 - D89" />
        <x-table.td value="D50 - D89" />
        <x-table.td value="08" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT15') ? $data['BT15'] : '' }}" name="BT15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU15') ? $data['BU15'] : '' }}" name="BU15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV15') ? $data['BV15'] : '' }}" name="BV15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW15') ? $data['BW15'] : '' }}" name="BW15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX15') ? $data['BX15'] : '' }}" name="BX15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY15') ? $data['BY15'] : '' }}" name="BY15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ15') ? $data['BZ15'] : '' }}" name="BZ15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA15') ? $data['CA15'] : '' }}" name="CA15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB15') ? $data['CB15'] : '' }}" name="CB15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC15') ? $data['CC15'] : '' }}" name="CC15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD15') ? $data['CD15'] : '' }}" name="CD15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE15') ? $data['CE15'] : '' }}" name="CE15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF15') ? $data['CF15'] : '' }}" name="CF15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG15') ? $data['CG15'] : '' }}" name="CG15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH15') ? $data['CH15'] : '' }}" name="CH15" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="нарушения свертываемости крови, пурпура и другие гепорррагические состояния: D65 - D69" />
        <x-table.td value="D65 - D69" />
        <x-table.td value="09" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT16') ? $data['BT16'] : '' }}" name="BT16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU16') ? $data['BU16'] : '' }}" name="BU16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV16') ? $data['BV16'] : '' }}" name="BV16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW16') ? $data['BW16'] : '' }}" name="BW16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX16') ? $data['BX16'] : '' }}" name="BX16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY16') ? $data['BY16'] : '' }}" name="BY16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ16') ? $data['BZ16'] : '' }}" name="BZ16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA16') ? $data['CA16'] : '' }}" name="CA16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB16') ? $data['CB16'] : '' }}" name="CB16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC16') ? $data['CC16'] : '' }}" name="CC16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD16') ? $data['CD16'] : '' }}" name="CD16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE16') ? $data['CE16'] : '' }}" name="CE16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF16') ? $data['CF16'] : '' }}" name="CF16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG16') ? $data['CG16'] : '' }}" name="CG16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH16') ? $data['CH16'] : '' }}" name="CH16" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="Болезни эндокринной системы, расстройства питания и нарушения обмена веществ, из них: E00 - E90" />
        <x-table.td value="E00 - E90" />
        <x-table.td value="10" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT17') ? $data['BT17'] : '' }}" name="BT17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU17') ? $data['BU17'] : '' }}" name="BU17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV17') ? $data['BV17'] : '' }}" name="BV17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW17') ? $data['BW17'] : '' }}" name="BW17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX17') ? $data['BX17'] : '' }}" name="BX17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY17') ? $data['BY17'] : '' }}" name="BY17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ17') ? $data['BZ17'] : '' }}" name="BZ17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA17') ? $data['CA17'] : '' }}" name="CA17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB17') ? $data['CB17'] : '' }}" name="CB17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC17') ? $data['CC17'] : '' }}" name="CC17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD17') ? $data['CD17'] : '' }}" name="CD17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE17') ? $data['CE17'] : '' }}" name="CE17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF17') ? $data['CF17'] : '' }}" name="CF17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG17') ? $data['CG17'] : '' }}" name="CG17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH17') ? $data['CH17'] : '' }}" name="CH17" />
    </tr>
    <tr>
        <x-table.td type="header" value="болезни щитовидной железы: E00 - E07" />
        <x-table.td value="E00 - E07" />
        <x-table.td value="11" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT18') ? $data['BT18'] : '' }}" name="BT18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU18') ? $data['BU18'] : '' }}" name="BU18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV18') ? $data['BV18'] : '' }}" name="BV18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW18') ? $data['BW18'] : '' }}" name="BW18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX18') ? $data['BX18'] : '' }}" name="BX18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY18') ? $data['BY18'] : '' }}" name="BY18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ18') ? $data['BZ18'] : '' }}" name="BZ18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA18') ? $data['CA18'] : '' }}" name="CA18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB18') ? $data['CB18'] : '' }}" name="CB18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC18') ? $data['CC18'] : '' }}" name="CC18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD18') ? $data['CD18'] : '' }}" name="CD18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE18') ? $data['CE18'] : '' }}" name="CE18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF18') ? $data['CF18'] : '' }}" name="CF18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG18') ? $data['CG18'] : '' }}" name="CG18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH18') ? $data['CH18'] : '' }}" name="CH18" />
    </tr>
    <tr>
        <x-table.td type="header" value="сахарный диабет: E10 - E14" />
        <x-table.td value="E10 - E14" />
        <x-table.td value="12" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT19') ? $data['BT19'] : '' }}" name="BT19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU19') ? $data['BU19'] : '' }}" name="BU19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV19') ? $data['BV19'] : '' }}" name="BV19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW19') ? $data['BW19'] : '' }}" name="BW19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX19') ? $data['BX19'] : '' }}" name="BX19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY19') ? $data['BY19'] : '' }}" name="BY19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ19') ? $data['BZ19'] : '' }}" name="BZ19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA19') ? $data['CA19'] : '' }}" name="CA19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB19') ? $data['CB19'] : '' }}" name="CB19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC19') ? $data['CC19'] : '' }}" name="CC19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD19') ? $data['CD19'] : '' }}" name="CD19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE19') ? $data['CE19'] : '' }}" name="CE19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF19') ? $data['CF19'] : '' }}" name="CF19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG19') ? $data['CG19'] : '' }}" name="CG19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH19') ? $data['CH19'] : '' }}" name="CH19" />
    </tr>
    <tr>
        <x-table.td type="header" value="Психические расстройства и расстройства поведения, из них: F00 - F99" />
        <x-table.td value="F00 - F99" />
        <x-table.td value="13" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT20') ? $data['BT20'] : '' }}" name="BT20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU20') ? $data['BU20'] : '' }}" name="BU20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV20') ? $data['BV20'] : '' }}" name="BV20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW20') ? $data['BW20'] : '' }}" name="BW20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX20') ? $data['BX20'] : '' }}" name="BX20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY20') ? $data['BY20'] : '' }}" name="BY20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ20') ? $data['BZ20'] : '' }}" name="BZ20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA20') ? $data['CA20'] : '' }}" name="CA20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB20') ? $data['CB20'] : '' }}" name="CB20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC20') ? $data['CC20'] : '' }}" name="CC20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD20') ? $data['CD20'] : '' }}" name="CD20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE20') ? $data['CE20'] : '' }}" name="CE20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF20') ? $data['CF20'] : '' }}" name="CF20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG20') ? $data['CG20'] : '' }}" name="CG20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH20') ? $data['CH20'] : '' }}" name="CH20" />
    </tr>
    <tr>
        <x-table.td type="header" value="умственная отсталость:F70 - F79" />
        <x-table.td value="F70 - F79" />
        <x-table.td value="14" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT21') ? $data['BT21'] : '' }}" name="BT21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU21') ? $data['BU21'] : '' }}" name="BU21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV21') ? $data['BV21'] : '' }}" name="BV21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW21') ? $data['BW21'] : '' }}" name="BW21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX21') ? $data['BX21'] : '' }}" name="BX21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY21') ? $data['BY21'] : '' }}" name="BY21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ21') ? $data['BZ21'] : '' }}" name="BZ21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA21') ? $data['CA21'] : '' }}" name="CA21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB21') ? $data['CB21'] : '' }}" name="CB21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC21') ? $data['CC21'] : '' }}" name="CC21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD21') ? $data['CD21'] : '' }}" name="CD21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE21') ? $data['CE21'] : '' }}" name="CE21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF21') ? $data['CF21'] : '' }}" name="CF21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG21') ? $data['CG21'] : '' }}" name="CG21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH21') ? $data['CH21'] : '' }}" name="CH21" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="детский аутизм, атипичный аутизм, синдром Ретта, дезинтегративное расстройство детского возраста:F84.0-3" />
        <x-table.td value="F84.0-3" />
        <x-table.td value="15" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT22') ? $data['BT22'] : '' }}" name="BT22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU22') ? $data['BU22'] : '' }}" name="BU22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV22') ? $data['BV22'] : '' }}" name="BV22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW22') ? $data['BW22'] : '' }}" name="BW22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX22') ? $data['BX22'] : '' }}" name="BX22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY22') ? $data['BY22'] : '' }}" name="BY22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ22') ? $data['BZ22'] : '' }}" name="BZ22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA22') ? $data['CA22'] : '' }}" name="CA22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB22') ? $data['CB22'] : '' }}" name="CB22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC22') ? $data['CC22'] : '' }}" name="CC22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD22') ? $data['CD22'] : '' }}" name="CD22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE22') ? $data['CE22'] : '' }}" name="CE22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF22') ? $data['CF22'] : '' }}" name="CF22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG22') ? $data['CG22'] : '' }}" name="CG22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH22') ? $data['CH22'] : '' }}" name="CH22" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезни нервной системы, из них: G00 - G99" />
        <x-table.td value="G00 - G99" />
        <x-table.td value="16" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT23') ? $data['BT23'] : '' }}" name="BT23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU23') ? $data['BU23'] : '' }}" name="BU23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV23') ? $data['BV23'] : '' }}" name="BV23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW23') ? $data['BW23'] : '' }}" name="BW23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX23') ? $data['BX23'] : '' }}" name="BX23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY23') ? $data['BY23'] : '' }}" name="BY23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ23') ? $data['BZ23'] : '' }}" name="BZ23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA23') ? $data['CA23'] : '' }}" name="CA23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB23') ? $data['CB23'] : '' }}" name="CB23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC23') ? $data['CC23'] : '' }}" name="CC23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD23') ? $data['CD23'] : '' }}" name="CD23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE23') ? $data['CE23'] : '' }}" name="CE23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF23') ? $data['CF23'] : '' }}" name="CF23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG23') ? $data['CG23'] : '' }}" name="CG23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH23') ? $data['CH23'] : '' }}" name="CH23" />
    </tr>
    <tr>
        <x-table.td type="header" value="воспалительные болезни центральной нервной системы:G00-G09" />
        <x-table.td value="G00-G09" />
        <x-table.td value="17" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT24') ? $data['BT24'] : '' }}" name="BT24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU24') ? $data['BU24'] : '' }}" name="BU24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV24') ? $data['BV24'] : '' }}" name="BV24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW24') ? $data['BW24'] : '' }}" name="BW24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX24') ? $data['BX24'] : '' }}" name="BX24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY24') ? $data['BY24'] : '' }}" name="BY24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ24') ? $data['BZ24'] : '' }}" name="BZ24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA24') ? $data['CA24'] : '' }}" name="CA24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB24') ? $data['CB24'] : '' }}" name="CB24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC24') ? $data['CC24'] : '' }}" name="CC24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD24') ? $data['CD24'] : '' }}" name="CD24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE24') ? $data['CE24'] : '' }}" name="CE24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF24') ? $data['CF24'] : '' }}" name="CF24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG24') ? $data['CG24'] : '' }}" name="CG24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH24') ? $data['CH24'] : '' }}" name="CH24" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="системыне атрофии, поражающие преимущественно центральную нервную систему:G10-G13" />
        <x-table.td value="G10-G13" />
        <x-table.td value="18" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT25') ? $data['BT25'] : '' }}" name="BT25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU25') ? $data['BU25'] : '' }}" name="BU25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV25') ? $data['BV25'] : '' }}" name="BV25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW25') ? $data['BW25'] : '' }}" name="BW25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX25') ? $data['BX25'] : '' }}" name="BX25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY25') ? $data['BY25'] : '' }}" name="BY25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ25') ? $data['BZ25'] : '' }}" name="BZ25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA25') ? $data['CA25'] : '' }}" name="CA25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB25') ? $data['CB25'] : '' }}" name="CB25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC25') ? $data['CC25'] : '' }}" name="CC25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD25') ? $data['CD25'] : '' }}" name="CD25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE25') ? $data['CE25'] : '' }}" name="CE25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF25') ? $data['CF25'] : '' }}" name="CF25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG25') ? $data['CG25'] : '' }}" name="CG25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH25') ? $data['CH25'] : '' }}" name="CH25" />
    </tr>
    <tr>
        <x-table.td type="header" value="эпизодические и пароксизмальные расстройства:G40-G47" />
        <x-table.td value="G40-G47" />
        <x-table.td value="19" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT26') ? $data['BT26'] : '' }}" name="BT26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU26') ? $data['BU26'] : '' }}" name="BU26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV26') ? $data['BV26'] : '' }}" name="BV26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW26') ? $data['BW26'] : '' }}" name="BW26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX26') ? $data['BX26'] : '' }}" name="BX26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY26') ? $data['BY26'] : '' }}" name="BY26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ26') ? $data['BZ26'] : '' }}" name="BZ26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA26') ? $data['CA26'] : '' }}" name="CA26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB26') ? $data['CB26'] : '' }}" name="CB26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC26') ? $data['CC26'] : '' }}" name="CC26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD26') ? $data['CD26'] : '' }}" name="CD26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE26') ? $data['CE26'] : '' }}" name="CE26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF26') ? $data['CF26'] : '' }}" name="CF26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG26') ? $data['CG26'] : '' }}" name="CG26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH26') ? $data['CH26'] : '' }}" name="CH26" />
    </tr>
    <tr>
        <x-table.td type="header" value="церебральный паралич и другие паралитические синдромы:G80 - G83" />
        <x-table.td value="G80 - G83" />
        <x-table.td value="20" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT27') ? $data['BT27'] : '' }}" name="BT27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU27') ? $data['BU27'] : '' }}" name="BU27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV27') ? $data['BV27'] : '' }}" name="BV27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW27') ? $data['BW27'] : '' }}" name="BW27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX27') ? $data['BX27'] : '' }}" name="BX27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY27') ? $data['BY27'] : '' }}" name="BY27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ27') ? $data['BZ27'] : '' }}" name="BZ27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA27') ? $data['CA27'] : '' }}" name="CA27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB27') ? $data['CB27'] : '' }}" name="CB27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC27') ? $data['CC27'] : '' }}" name="CC27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD27') ? $data['CD27'] : '' }}" name="CD27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE27') ? $data['CE27'] : '' }}" name="CE27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF27') ? $data['CF27'] : '' }}" name="CF27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG27') ? $data['CG27'] : '' }}" name="CG27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH27') ? $data['CH27'] : '' }}" name="CH27" />
    </tr>
    <tr>
        <x-table.td type="header" value="другие нарушения нервной системы" />
        <x-table.td value="G90-G99" />
        <x-table.td value="21" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT28') ? $data['BT28'] : '' }}" name="BT28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU28') ? $data['BU28'] : '' }}" name="BU28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV28') ? $data['BV28'] : '' }}" name="BV28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW28') ? $data['BW28'] : '' }}" name="BW28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX28') ? $data['BX28'] : '' }}" name="BX28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY28') ? $data['BY28'] : '' }}" name="BY28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ28') ? $data['BZ28'] : '' }}" name="BZ28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA28') ? $data['CA28'] : '' }}" name="CA28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB28') ? $data['CB28'] : '' }}" name="CB28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC28') ? $data['CC28'] : '' }}" name="CC28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD28') ? $data['CD28'] : '' }}" name="CD28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE28') ? $data['CE28'] : '' }}" name="CE28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF28') ? $data['CF28'] : '' }}" name="CF28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG28') ? $data['CG28'] : '' }}" name="CG28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH28') ? $data['CH28'] : '' }}" name="CH28" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезни глаза и его придаточного аппарата, из них H00 - H59:" />
        <x-table.td value="H00 - H59" />
        <x-table.td value="22" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT29') ? $data['BT29'] : '' }}" name="BT29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU29') ? $data['BU29'] : '' }}" name="BU29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV29') ? $data['BV29'] : '' }}" name="BV29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW29') ? $data['BW29'] : '' }}" name="BW29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX29') ? $data['BX29'] : '' }}" name="BX29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY29') ? $data['BY29'] : '' }}" name="BY29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ29') ? $data['BZ29'] : '' }}" name="BZ29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA29') ? $data['CA29'] : '' }}" name="CA29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB29') ? $data['CB29'] : '' }}" name="CB29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC29') ? $data['CC29'] : '' }}" name="CC29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD29') ? $data['CD29'] : '' }}" name="CD29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE29') ? $data['CE29'] : '' }}" name="CE29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF29') ? $data['CF29'] : '' }}" name="CF29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG29') ? $data['CG29'] : '' }}" name="CG29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH29') ? $data['CH29'] : '' }}" name="CH29" />
    </tr>
    <tr>
        <x-table.td type="header" value="слепота обоих глаз H54.0" />
        <x-table.td value="H54.0" />
        <x-table.td value="23" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT30') ? $data['BT30'] : '' }}" name="BT30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU30') ? $data['BU30'] : '' }}" name="BU30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV30') ? $data['BV30'] : '' }}" name="BV30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW30') ? $data['BW30'] : '' }}" name="BW30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX30') ? $data['BX30'] : '' }}" name="BX30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY30') ? $data['BY30'] : '' }}" name="BY30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ30') ? $data['BZ30'] : '' }}" name="BZ30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA30') ? $data['CA30'] : '' }}" name="CA30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB30') ? $data['CB30'] : '' }}" name="CB30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC30') ? $data['CC30'] : '' }}" name="CC30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD30') ? $data['CD30'] : '' }}" name="CD30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE30') ? $data['CE30'] : '' }}" name="CE30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF30') ? $data['CF30'] : '' }}" name="CF30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG30') ? $data['CG30'] : '' }}" name="CG30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH30') ? $data['CH30'] : '' }}" name="CH30" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезни уха и сосцевидного отростка, из них: H60 - H95" />
        <x-table.td value="H60 - H95" />
        <x-table.td value="24" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT31') ? $data['BT31'] : '' }}" name="BT31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU31') ? $data['BU31'] : '' }}" name="BU31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV31') ? $data['BV31'] : '' }}" name="BV31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW31') ? $data['BW31'] : '' }}" name="BW31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX31') ? $data['BX31'] : '' }}" name="BX31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY31') ? $data['BY31'] : '' }}" name="BY31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ31') ? $data['BZ31'] : '' }}" name="BZ31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA31') ? $data['CA31'] : '' }}" name="CA31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB31') ? $data['CB31'] : '' }}" name="CB31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC31') ? $data['CC31'] : '' }}" name="CC31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD31') ? $data['CD31'] : '' }}" name="CD31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE31') ? $data['CE31'] : '' }}" name="CE31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF31') ? $data['CF31'] : '' }}" name="CF31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG31') ? $data['CG31'] : '' }}" name="CG31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH31') ? $data['CH31'] : '' }}" name="CH31" />
    </tr>
    <tr>
        <x-table.td type="header" value="кондуктивная потеря слуха двусторонняя: H90" />
        <x-table.td value="H90" />
        <x-table.td value="25" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT32') ? $data['BT32'] : '' }}" name="BT32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU32') ? $data['BU32'] : '' }}" name="BU32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV32') ? $data['BV32'] : '' }}" name="BV32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW32') ? $data['BW32'] : '' }}" name="BW32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX32') ? $data['BX32'] : '' }}" name="BX32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY32') ? $data['BY32'] : '' }}" name="BY32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ32') ? $data['BZ32'] : '' }}" name="BZ32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA32') ? $data['CA32'] : '' }}" name="CA32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB32') ? $data['CB32'] : '' }}" name="CB32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC32') ? $data['CC32'] : '' }}" name="CC32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD32') ? $data['CD32'] : '' }}" name="CD32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE32') ? $data['CE32'] : '' }}" name="CE32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF32') ? $data['CF32'] : '' }}" name="CF32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG32') ? $data['CG32'] : '' }}" name="CG32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH32') ? $data['CH32'] : '' }}" name="CH32" />
    </tr>
    <tr>
        <x-table.td type="header" value="нейросенсорная потеря слуха двусторонняя: H90.3" />
        <x-table.td value="H90.3" />
        <x-table.td value="26" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT33') ? $data['BT33'] : '' }}" name="BT33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU33') ? $data['BU33'] : '' }}" name="BU33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV33') ? $data['BV33'] : '' }}" name="BV33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW33') ? $data['BW33'] : '' }}" name="BW33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX33') ? $data['BX33'] : '' }}" name="BX33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY33') ? $data['BY33'] : '' }}" name="BY33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ33') ? $data['BZ33'] : '' }}" name="BZ33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA33') ? $data['CA33'] : '' }}" name="CA33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB33') ? $data['CB33'] : '' }}" name="CB33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC33') ? $data['CC33'] : '' }}" name="CC33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD33') ? $data['CD33'] : '' }}" name="CD33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE33') ? $data['CE33'] : '' }}" name="CE33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF33') ? $data['CF33'] : '' }}" name="CF33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG33') ? $data['CG33'] : '' }}" name="CG33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH33') ? $data['CH33'] : '' }}" name="CH33" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезни системы кровообращения: I00 - I99" />
        <x-table.td value="I00 - I99" />
        <x-table.td value="27" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT34') ? $data['BT34'] : '' }}" name="BT34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU34') ? $data['BU34'] : '' }}" name="BU34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV34') ? $data['BV34'] : '' }}" name="BV34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW34') ? $data['BW34'] : '' }}" name="BW34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX34') ? $data['BX34'] : '' }}" name="BX34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY34') ? $data['BY34'] : '' }}" name="BY34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ34') ? $data['BZ34'] : '' }}" name="BZ34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA34') ? $data['CA34'] : '' }}" name="CA34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB34') ? $data['CB34'] : '' }}" name="CB34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC34') ? $data['CC34'] : '' }}" name="CC34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD34') ? $data['CD34'] : '' }}" name="CD34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE34') ? $data['CE34'] : '' }}" name="CE34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF34') ? $data['CF34'] : '' }}" name="CF34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG34') ? $data['CG34'] : '' }}" name="CG34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH34') ? $data['CH34'] : '' }}" name="CH34" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезнь органов дыхания, из них: J00 - J99" />
        <x-table.td value="J00 - J99" />
        <x-table.td value="28" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT35') ? $data['BT35'] : '' }}" name="BT35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU35') ? $data['BU35'] : '' }}" name="BU35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV35') ? $data['BV35'] : '' }}" name="BV35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW35') ? $data['BW35'] : '' }}" name="BW35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX35') ? $data['BX35'] : '' }}" name="BX35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY35') ? $data['BY35'] : '' }}" name="BY35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ35') ? $data['BZ35'] : '' }}" name="BZ35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA35') ? $data['CA35'] : '' }}" name="CA35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB35') ? $data['CB35'] : '' }}" name="CB35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC35') ? $data['CC35'] : '' }}" name="CC35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD35') ? $data['CD35'] : '' }}" name="CD35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE35') ? $data['CE35'] : '' }}" name="CE35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF35') ? $data['CF35'] : '' }}" name="CF35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG35') ? $data['CG35'] : '' }}" name="CG35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH35') ? $data['CH35'] : '' }}" name="CH35" />
    </tr>
    <tr>
        <x-table.td type="header" value="астма, астматический статус: J45, J46" />
        <x-table.td value="J45, J46" />
        <x-table.td value="29" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT36') ? $data['BT36'] : '' }}" name="BT36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU36') ? $data['BU36'] : '' }}" name="BU36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV36') ? $data['BV36'] : '' }}" name="BV36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW36') ? $data['BW36'] : '' }}" name="BW36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX36') ? $data['BX36'] : '' }}" name="BX36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY36') ? $data['BY36'] : '' }}" name="BY36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ36') ? $data['BZ36'] : '' }}" name="BZ36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA36') ? $data['CA36'] : '' }}" name="CA36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB36') ? $data['CB36'] : '' }}" name="CB36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC36') ? $data['CC36'] : '' }}" name="CC36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD36') ? $data['CD36'] : '' }}" name="CD36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE36') ? $data['CE36'] : '' }}" name="CE36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF36') ? $data['CF36'] : '' }}" name="CF36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG36') ? $data['CG36'] : '' }}" name="CG36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH36') ? $data['CH36'] : '' }}" name="CH36" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезни органов пищеварения, из них: K00 - K93" />
        <x-table.td value="K00 - K93" />
        <x-table.td value="30" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT37') ? $data['BT37'] : '' }}" name="BT37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU37') ? $data['BU37'] : '' }}" name="BU37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV37') ? $data['BV37'] : '' }}" name="BV37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW37') ? $data['BW37'] : '' }}" name="BW37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX37') ? $data['BX37'] : '' }}" name="BX37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY37') ? $data['BY37'] : '' }}" name="BY37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ37') ? $data['BZ37'] : '' }}" name="BZ37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA37') ? $data['CA37'] : '' }}" name="CA37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB37') ? $data['CB37'] : '' }}" name="CB37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC37') ? $data['CC37'] : '' }}" name="CC37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD37') ? $data['CD37'] : '' }}" name="CD37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE37') ? $data['CE37'] : '' }}" name="CE37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF37') ? $data['CF37'] : '' }}" name="CF37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG37') ? $data['CG37'] : '' }}" name="CG37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH37') ? $data['CH37'] : '' }}" name="CH37" />
    </tr>
    <tr>
        <x-table.td type="header" value="болезни пищевода, желудка и двенадцатиперстной кишки: K20 - K31" />
        <x-table.td value="K20 - K31" />
        <x-table.td value="31" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT38') ? $data['BT38'] : '' }}" name="BT38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU38') ? $data['BU38'] : '' }}" name="BU38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV38') ? $data['BV38'] : '' }}" name="BV38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW38') ? $data['BW38'] : '' }}" name="BW38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX38') ? $data['BX38'] : '' }}" name="BX38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY38') ? $data['BY38'] : '' }}" name="BY38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ38') ? $data['BZ38'] : '' }}" name="BZ38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA38') ? $data['CA38'] : '' }}" name="CA38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB38') ? $data['CB38'] : '' }}" name="CB38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC38') ? $data['CC38'] : '' }}" name="CC38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD38') ? $data['CD38'] : '' }}" name="CD38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE38') ? $data['CE38'] : '' }}" name="CE38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF38') ? $data['CF38'] : '' }}" name="CF38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG38') ? $data['CG38'] : '' }}" name="CG38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH38') ? $data['CH38'] : '' }}" name="CH38" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="болезни печени, желчного пузыря, желчевыводящих путей и поджелудочной железы: K80 - K87" />
            <x-table.td value="K70 - K77,K80 - K87" />
            <x-table.td value="32" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT39') ? $data['BT39'] : '' }}" name="BT39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU39') ? $data['BU39'] : '' }}" name="BU39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV39') ? $data['BV39'] : '' }}" name="BV39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW39') ? $data['BW39'] : '' }}" name="BW39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX39') ? $data['BX39'] : '' }}" name="BX39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY39') ? $data['BY39'] : '' }}" name="BY39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ39') ? $data['BZ39'] : '' }}" name="BZ39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA39') ? $data['CA39'] : '' }}" name="CA39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB39') ? $data['CB39'] : '' }}" name="CB39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC39') ? $data['CC39'] : '' }}" name="CC39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD39') ? $data['CD39'] : '' }}" name="CD39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE39') ? $data['CE39'] : '' }}" name="CE39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF39') ? $data['CF39'] : '' }}" name="CF39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG39') ? $data['CG39'] : '' }}" name="CG39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH39') ? $data['CH39'] : '' }}" name="CH39" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезни кожи и подкожной клетчатки, из них: L00 - L99" />
        <x-table.td value="L00 - L99" />
        <x-table.td value="33" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT40') ? $data['BT40'] : '' }}" name="BT40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU40') ? $data['BU40'] : '' }}" name="BU40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV40') ? $data['BV40'] : '' }}" name="BV40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW40') ? $data['BW40'] : '' }}" name="BW40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX40') ? $data['BX40'] : '' }}" name="BX40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY40') ? $data['BY40'] : '' }}" name="BY40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ40') ? $data['BZ40'] : '' }}" name="BZ40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA40') ? $data['CA40'] : '' }}" name="CA40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB40') ? $data['CB40'] : '' }}" name="CB40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC40') ? $data['CC40'] : '' }}" name="CC40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD40') ? $data['CD40'] : '' }}" name="CD40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE40') ? $data['CE40'] : '' }}" name="CE40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF40') ? $data['CF40'] : '' }}" name="CF40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG40') ? $data['CG40'] : '' }}" name="CG40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH40') ? $data['CH40'] : '' }}" name="CH40" />
    </tr>
    <tr>
        <x-table.td type="header" value="атопический дерматит:" />
        <x-table.td value="L20" />
        <x-table.td value="34" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT41') ? $data['BT41'] : '' }}" name="BT41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU41') ? $data['BU41'] : '' }}" name="BU41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV41') ? $data['BV41'] : '' }}" name="BV41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW41') ? $data['BW41'] : '' }}" name="BW41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX41') ? $data['BX41'] : '' }}" name="BX41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY41') ? $data['BY41'] : '' }}" name="BY41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ41') ? $data['BZ41'] : '' }}" name="BZ41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA41') ? $data['CA41'] : '' }}" name="CA41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB41') ? $data['CB41'] : '' }}" name="CB41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC41') ? $data['CC41'] : '' }}" name="CC41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD41') ? $data['CD41'] : '' }}" name="CD41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE41') ? $data['CE41'] : '' }}" name="CE41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF41') ? $data['CF41'] : '' }}" name="CF41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG41') ? $data['CG41'] : '' }}" name="CG41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH41') ? $data['CH41'] : '' }}" name="CH41" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="Болезни костно-мышечной системы и соединительной ткани, из них: M00 - M99" />
            <x-table.td value="M00 - M99" />
            <x-table.td value="35" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT42') ? $data['BT42'] : '' }}" name="BT42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU42') ? $data['BU42'] : '' }}" name="BU42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV42') ? $data['BV42'] : '' }}" name="BV42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW42') ? $data['BW42'] : '' }}" name="BW42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX42') ? $data['BX42'] : '' }}" name="BX42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY42') ? $data['BY42'] : '' }}" name="BY42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ42') ? $data['BZ42'] : '' }}" name="BZ42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA42') ? $data['CA42'] : '' }}" name="CA42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB42') ? $data['CB42'] : '' }}" name="CB42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC42') ? $data['CC42'] : '' }}" name="CC42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD42') ? $data['CD42'] : '' }}" name="CD42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE42') ? $data['CE42'] : '' }}" name="CE42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF42') ? $data['CF42'] : '' }}" name="CF42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG42') ? $data['CG42'] : '' }}" name="CG42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH42') ? $data['CH42'] : '' }}" name="CH42" />
    </tr>
    <tr>
        <x-table.td type="header" value="реактивные артропатии: M02" />
        <x-table.td value="M02" />
        <x-table.td value="36" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT43') ? $data['BT43'] : '' }}" name="BT43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU43') ? $data['BU43'] : '' }}" name="BU43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV43') ? $data['BV43'] : '' }}" name="BV43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW43') ? $data['BW43'] : '' }}" name="BW43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX43') ? $data['BX43'] : '' }}" name="BX43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY43') ? $data['BY43'] : '' }}" name="BY43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ43') ? $data['BZ43'] : '' }}" name="BZ43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA43') ? $data['CA43'] : '' }}" name="CA43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB43') ? $data['CB43'] : '' }}" name="CB43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC43') ? $data['CC43'] : '' }}" name="CC43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD43') ? $data['CD43'] : '' }}" name="CD43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE43') ? $data['CE43'] : '' }}" name="CE43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF43') ? $data['CF43'] : '' }}" name="CF43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG43') ? $data['CG43'] : '' }}" name="CG43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH43') ? $data['CH43'] : '' }}" name="CH43" />
    </tr>
    <tr>
        <x-table.td type="header" value="юношеский (ювенильный) артрит: M08" />
        <x-table.td value="M08" />
        <x-table.td value="37" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT44') ? $data['BT44'] : '' }}" name="BT44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU44') ? $data['BU44'] : '' }}" name="BU44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV44') ? $data['BV44'] : '' }}" name="BV44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW44') ? $data['BW44'] : '' }}" name="BW44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX44') ? $data['BX44'] : '' }}" name="BX44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY44') ? $data['BY44'] : '' }}" name="BY44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ44') ? $data['BZ44'] : '' }}" name="BZ44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA44') ? $data['CA44'] : '' }}" name="CA44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB44') ? $data['CB44'] : '' }}" name="CB44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC44') ? $data['CC44'] : '' }}" name="CC44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD44') ? $data['CD44'] : '' }}" name="CD44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE44') ? $data['CE44'] : '' }}" name="CE44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF44') ? $data['CF44'] : '' }}" name="CF44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG44') ? $data['CG44'] : '' }}" name="CG44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH44') ? $data['CH44'] : '' }}" name="CH44" />

    </tr>
    <tr>
        <x-table.td type="header" value="системные поражения соединительной ткани: M30 - M36" />
        <x-table.td value="M30 - M36" />
        <x-table.td value="38" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT45') ? $data['BT45'] : '' }}" name="BT45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU45') ? $data['BU45'] : '' }}" name="BU45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV45') ? $data['BV45'] : '' }}" name="BV45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW45') ? $data['BW45'] : '' }}" name="BW45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX45') ? $data['BX45'] : '' }}" name="BX45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY45') ? $data['BY45'] : '' }}" name="BY45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ45') ? $data['BZ45'] : '' }}" name="BZ45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA45') ? $data['CA45'] : '' }}" name="CA45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB45') ? $data['CB45'] : '' }}" name="CB45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC45') ? $data['CC45'] : '' }}" name="CC45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD45') ? $data['CD45'] : '' }}" name="CD45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE45') ? $data['CE45'] : '' }}" name="CE45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF45') ? $data['CF45'] : '' }}" name="CF45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG45') ? $data['CG45'] : '' }}" name="CG45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH45') ? $data['CH45'] : '' }}" name="CH45" />
    </tr>
    <tr>
        <x-table.td type="header" value="остеопатии и хондропатии:M80 - M94" />
        <x-table.td value="M80 - M94" />
        <x-table.td value="39" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT46') ? $data['BT46'] : '' }}" name="BT46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU46') ? $data['BU46'] : '' }}" name="BU46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV46') ? $data['BV46'] : '' }}" name="BV46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW46') ? $data['BW46'] : '' }}" name="BW46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX46') ? $data['BX46'] : '' }}" name="BX46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY46') ? $data['BY46'] : '' }}" name="BY46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ46') ? $data['BZ46'] : '' }}" name="BZ46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA46') ? $data['CA46'] : '' }}" name="CA46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB46') ? $data['CB46'] : '' }}" name="CB46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC46') ? $data['CC46'] : '' }}" name="CC46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD46') ? $data['CD46'] : '' }}" name="CD46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE46') ? $data['CE46'] : '' }}" name="CE46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF46') ? $data['CF46'] : '' }}" name="CF46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG46') ? $data['CG46'] : '' }}" name="CG46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH46') ? $data['CH46'] : '' }}" name="CH46" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезни мочеполовой системы, из них: N00 - N99" />
        <x-table.td value="N00 - N99" />
        <x-table.td value="40" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT47') ? $data['BT47'] : '' }}" name="BT47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU47') ? $data['BU47'] : '' }}" name="BU47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV47') ? $data['BV47'] : '' }}" name="BV47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW47') ? $data['BW47'] : '' }}" name="BW47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX47') ? $data['BX47'] : '' }}" name="BX47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY47') ? $data['BY47'] : '' }}" name="BY47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ47') ? $data['BZ47'] : '' }}" name="BZ47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA47') ? $data['CA47'] : '' }}" name="CA47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB47') ? $data['CB47'] : '' }}" name="CB47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC47') ? $data['CC47'] : '' }}" name="CC47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD47') ? $data['CD47'] : '' }}" name="CD47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE47') ? $data['CE47'] : '' }}" name="CE47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF47') ? $data['CF47'] : '' }}" name="CF47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG47') ? $data['CG47'] : '' }}" name="CG47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH47') ? $data['CH47'] : '' }}" name="CH47" />
    </tr>
    <tr>
        <x-table.td type="header" value="гломерулярные, тубулоинтерстициальные болезни почек, почечная недостаточность, другие болезни почек N00 - N19, N25 - N29" />
        <x-table.td value="N00 - N19, N25 - N29" />
        <x-table.td value="41" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT48') ? $data['BT48'] : '' }}" name="BT48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU48') ? $data['BU48'] : '' }}" name="BU48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV48') ? $data['BV48'] : '' }}" name="BV48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW48') ? $data['BW48'] : '' }}" name="BW48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX48') ? $data['BX48'] : '' }}" name="BX48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY48') ? $data['BY48'] : '' }}" name="BY48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ48') ? $data['BZ48'] : '' }}" name="BZ48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA48') ? $data['CA48'] : '' }}" name="CA48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB48') ? $data['CB48'] : '' }}" name="CB48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC48') ? $data['CC48'] : '' }}" name="CC48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD48') ? $data['CD48'] : '' }}" name="CD48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE48') ? $data['CE48'] : '' }}" name="CE48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF48') ? $data['CF48'] : '' }}" name="CF48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG48') ? $data['CG48'] : '' }}" name="CG48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH48') ? $data['CH48'] : '' }}" name="CH48" />
    </tr>
    <tr>
        <x-table.td type="header" value="Беременность, роды и послеродовой период: O00 - O99" />
        <x-table.td value="O00 - O99" />
        <x-table.td value="42" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT49') ? $data['BT49'] : '' }}" name="BT49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU49') ? $data['BU49'] : '' }}" name="BU49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV49') ? $data['BV49'] : '' }}" name="BV49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW49') ? $data['BW49'] : '' }}" name="BW49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX49') ? $data['BX49'] : '' }}" name="BX49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY49') ? $data['BY49'] : '' }}" name="BY49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ49') ? $data['BZ49'] : '' }}" name="BZ49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA49') ? $data['CA49'] : '' }}" name="CA49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB49') ? $data['CB49'] : '' }}" name="CB49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC49') ? $data['CC49'] : '' }}" name="CC49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD49') ? $data['CD49'] : '' }}" name="CD49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE49') ? $data['CE49'] : '' }}" name="CE49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF49') ? $data['CF49'] : '' }}" name="CF49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG49') ? $data['CG49'] : '' }}" name="CG49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH49') ? $data['CH49'] : '' }}" name="CH49" />
    </tr>
    <tr>
        <x-table.td type="header" value="Отдельные состояния, возникающие в перинатальном периоде: P05 - P96" />
        <x-table.td value="P05 - P96" />
        <x-table.td value="43" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT50') ? $data['BT50'] : '' }}" name="BT50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU50') ? $data['BU50'] : '' }}" name="BU50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV50') ? $data['BV50'] : '' }}" name="BV50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW50') ? $data['BW50'] : '' }}" name="BW50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX50') ? $data['BX50'] : '' }}" name="BX50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY50') ? $data['BY50'] : '' }}" name="BY50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ50') ? $data['BZ50'] : '' }}" name="BZ50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA50') ? $data['CA50'] : '' }}" name="CA50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB50') ? $data['CB50'] : '' }}" name="CB50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC50') ? $data['CC50'] : '' }}" name="CC50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD50') ? $data['CD50'] : '' }}" name="CD50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE50') ? $data['CE50'] : '' }}" name="CE50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF50') ? $data['CF50'] : '' }}" name="CF50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG50') ? $data['CG50'] : '' }}" name="CG50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH50') ? $data['CH50'] : '' }}" name="CH50" />
    </tr>
    <tr>
        <x-table.td type="header" value="Врожденные аномалии (пороки развития), деформации и хромосомные нарушения, из них: Q00 - Q99" />
        <x-table.td value="Q00 - Q99" />
        <x-table.td value="44" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT51') ? $data['BT51'] : '' }}" name="BT51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU51') ? $data['BU51'] : '' }}" name="BU51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV51') ? $data['BV51'] : '' }}" name="BV51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW51') ? $data['BW51'] : '' }}" name="BW51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX51') ? $data['BX51'] : '' }}" name="BX51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY51') ? $data['BY51'] : '' }}" name="BY51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ51') ? $data['BZ51'] : '' }}" name="BZ51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA51') ? $data['CA51'] : '' }}" name="CA51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB51') ? $data['CB51'] : '' }}" name="CB51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC51') ? $data['CC51'] : '' }}" name="CC51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD51') ? $data['CD51'] : '' }}" name="CD51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE51') ? $data['CE51'] : '' }}" name="CE51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF51') ? $data['CF51'] : '' }}" name="CF51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG51') ? $data['CG51'] : '' }}" name="CG51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH51') ? $data['CH51'] : '' }}" name="CH51" />
    </tr>
    <tr>
        <x-table.td type="header" value="врожденные аномалии (пороки развития) центральной нервной системы и органов чувств: Q00 - Q07" />
        <x-table.td value="Q00 - Q07" />
        <x-table.td value="45" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT52') ? $data['BT52'] : '' }}" name="BT52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU52') ? $data['BU52'] : '' }}" name="BU52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV52') ? $data['BV52'] : '' }}" name="BV52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW52') ? $data['BW52'] : '' }}" name="BW52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX52') ? $data['BX52'] : '' }}" name="BX52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY52') ? $data['BY52'] : '' }}" name="BY52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ52') ? $data['BZ52'] : '' }}" name="BZ52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA52') ? $data['CA52'] : '' }}" name="CA52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB52') ? $data['CB52'] : '' }}" name="CB52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC52') ? $data['CC52'] : '' }}" name="CC52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD52') ? $data['CD52'] : '' }}" name="CD52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE52') ? $data['CE52'] : '' }}" name="CE52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF52') ? $data['CF52'] : '' }}" name="CF52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG52') ? $data['CG52'] : '' }}" name="CG52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH52') ? $data['CH52'] : '' }}" name="CH52" />
    </tr>
    <tr>
        <x-table.td type="header" value="врожденные аномалии (пороки развития) системы кровообращения:Q20 - Q28" />
        <x-table.td value="Q20 - Q28" />
        <x-table.td value="46" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT53') ? $data['BT53'] : '' }}" name="BT53" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU53') ? $data['BU53'] : '' }}" name="BU53" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV53') ? $data['BV53'] : '' }}" name="BV53" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW53') ? $data['BW53'] : '' }}" name="BW53" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX53') ? $data['BX53'] : '' }}" name="BX53" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY53') ? $data['BY53'] : '' }}" name="BY53" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ53') ? $data['BZ53'] : '' }}" name="BZ53" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA53') ? $data['CA53'] : '' }}" name="CA53" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB53') ? $data['CB53'] : '' }}" name="CB53" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC53') ? $data['CC53'] : '' }}" name="CC53" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD53') ? $data['CD53'] : '' }}" name="CD53" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE53') ? $data['CE53'] : '' }}" name="CE53" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF53') ? $data['CF53'] : '' }}" name="CF53" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG53') ? $data['CG53'] : '' }}" name="CG53" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH53') ? $data['CH53'] : '' }}" name="CH53" />
    </tr>
    <tr>
        <x-table.td type="header" value="хромосомные аномалии, не классифицированные в других рубриках, из них: Q90 - Q99" />
        <x-table.td value="Q90 - Q99" />
        <x-table.td value="47" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT54') ? $data['BT54'] : '' }}" name="BT54" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU54') ? $data['BU54'] : '' }}" name="BU54" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV54') ? $data['BV54'] : '' }}" name="BV54" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW54') ? $data['BW54'] : '' }}" name="BW54" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX54') ? $data['BX54'] : '' }}" name="BX54" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY54') ? $data['BY54'] : '' }}" name="BY54" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ54') ? $data['BZ54'] : '' }}" name="BZ54" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA54') ? $data['CA54'] : '' }}" name="CA54" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB54') ? $data['CB54'] : '' }}" name="CB54" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC54') ? $data['CC54'] : '' }}" name="CC54" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD54') ? $data['CD54'] : '' }}" name="CD54" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE54') ? $data['CE54'] : '' }}" name="CE54" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF54') ? $data['CF54'] : '' }}" name="CF54" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG54') ? $data['CG54'] : '' }}" name="CG54" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH54') ? $data['CH54'] : '' }}" name="CH54" />
    </tr>
    <tr>
        <x-table.td type="header" value="Травмы, отравления и некоторые другие последствия воздействия внешних причин: S00 - T98" />
        <x-table.td value="S00 - T98" />
        <x-table.td value="48" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT55') ? $data['BT55'] : '' }}" name="BT55" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU55') ? $data['BU55'] : '' }}" name="BU55" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV55') ? $data['BV55'] : '' }}" name="BV55" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW55') ? $data['BW55'] : '' }}" name="BW55" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX55') ? $data['BX55'] : '' }}" name="BX55" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY55') ? $data['BY55'] : '' }}" name="BY55" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ55') ? $data['BZ55'] : '' }}" name="BZ55" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA55') ? $data['CA55'] : '' }}" name="CA55" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB55') ? $data['CB55'] : '' }}" name="CB55" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC55') ? $data['CC55'] : '' }}" name="CC55" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD55') ? $data['CD55'] : '' }}" name="CD55" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE55') ? $data['CE55'] : '' }}" name="CE55" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF55') ? $data['CF55'] : '' }}" name="CF55" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG55') ? $data['CG55'] : '' }}" name="CG55" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH55') ? $data['CH55'] : '' }}" name="CH55" />
    </tr>
    <tr>
        <x-table.td type="header" value="Факторы, влияющие на состояние здоровья населения и обращения в медицинские организации:Z00-Z99" />
        <x-table.td value="Z00-Z99" />
        <x-table.td value="49" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT56') ? $data['BT56'] : '' }}" name="BT56" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU56') ? $data['BU56'] : '' }}" name="BU56" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV56') ? $data['BV56'] : '' }}" name="BV56" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW56') ? $data['BW56'] : '' }}" name="BW56" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX56') ? $data['BX56'] : '' }}" name="BX56" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY56') ? $data['BY56'] : '' }}" name="BY56" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ56') ? $data['BZ56'] : '' }}" name="BZ56" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA56') ? $data['CA56'] : '' }}" name="CA56" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB56') ? $data['CB56'] : '' }}" name="CB56" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC56') ? $data['CC56'] : '' }}" name="CC56" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD56') ? $data['CD56'] : '' }}" name="CD56" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE56') ? $data['CE56'] : '' }}" name="CE56" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF56') ? $data['CF56'] : '' }}" name="CF56" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG56') ? $data['CG56'] : '' }}" name="CG56" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH56') ? $data['CH56'] : '' }}" name="CH56" />
    </tr>

</tbody>
