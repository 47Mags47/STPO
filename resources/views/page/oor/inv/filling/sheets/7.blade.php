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
        <x-table.td type="input" formul="{BU8}+{BV8}" name="BT8" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" name="BU8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" name="BV8" />
        <x-table.td type="input" formul="{BX8}+{BY8}" name="BW8" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" name="BX8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" name="BY8" />
        <x-table.td type="input" formul="{CA8}+{CB8}" name="BZ8" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" name="CA8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" name="CB8" />
        <x-table.td type="input" formul="{CD8}+{CE8}" name="CC8" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" name="CD8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" name="CE8" />
        <x-table.td type="input" formul="{CG8}+{CH8}" name="CF8" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" name="CG8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" name="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="некоторые инфекционные и паразитарные болезни, из них A00 - В99" />
        <x-table.td value="A00 - В99" />
        <x-table.td value="02" center />
        <x-table.td type="input" formul="{BU9}+{BV9}" name="BT9" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU9') ? $data['BU9'] : '' }}" name="BU9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV9') ? $data['BV9'] : '' }}" name="BV9" />
        <x-table.td type="input" formul="{BX9}+{BY9}" name="BW9" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX9') ? $data['BX9'] : '' }}" name="BX9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY9') ? $data['BY9'] : '' }}" name="BY9" />
        <x-table.td type="input" formul="{CA9}+{CB9}" name="BZ9" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA9') ? $data['CA9'] : '' }}" name="CA9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB9') ? $data['CB9'] : '' }}" name="CB9" />
        <x-table.td type="input" formul="{CD9}+{CE9}" name="CC9" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD9') ? $data['CD9'] : '' }}" name="CD9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE9') ? $data['CE9'] : '' }}" name="CE9" />
        <x-table.td type="input" formul="{CG9}+{CH9}" name="CF9" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG9') ? $data['CG9'] : '' }}" name="CG9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH9') ? $data['CH9'] : '' }}" name="CH9" />
    </tr>
    <tr>
        <x-table.td type="header" value="туберкулез A15 - A19" />
        <x-table.td value="A15 - A19" />
        <x-table.td value="03" center />
        <x-table.td type="input" formul="{BU10}+{BV10}" name="BT10" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU10') ? $data['BU10'] : '' }}" name="BU10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV10') ? $data['BV10'] : '' }}" name="BV10" />
        <x-table.td type="input" formul="{BX10}+{BY10}" name="BW10" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX10') ? $data['BX10'] : '' }}" name="BX10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY10') ? $data['BY10'] : '' }}" name="BY10" />
        <x-table.td type="input" formul="{CA10}+{CB10}" name="BZ10" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA10') ? $data['CA10'] : '' }}" name="CA10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB10') ? $data['CB10'] : '' }}" name="CB10" />
        <x-table.td type="input" formul="{CD10}+{CE10}" name="CC10" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD10') ? $data['CD10'] : '' }}" name="CD10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE10') ? $data['CE10'] : '' }}" name="CE10" />
        <x-table.td type="input" formul="{CG10}+{CH10}" name="CF10" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG10') ? $data['CG10'] : '' }}" name="CG10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH10') ? $data['CH10'] : '' }}" name="CH10" />
    </tr>

    <tr>
        <x-table.td type="header" value="вирусные инфекции центральной нервной системы: A80 - A89" />
        <x-table.td value="A80 - A89" />
        <x-table.td value="04" center />
        <x-table.td type="input" formul="{BU11}+{BV11}" name="BT11" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU11') ? $data['BU11'] : '' }}" name="BU11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV11') ? $data['BV11'] : '' }}" name="BV11" />
        <x-table.td type="input" formul="{BX11}+{BY11}" name="BW11" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX11') ? $data['BX11'] : '' }}" name="BX11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY11') ? $data['BY11'] : '' }}" name="BY11" />
        <x-table.td type="input" formul="{CA11}+{CB11}" name="BZ11" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA11') ? $data['CA11'] : '' }}" name="CA11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB11') ? $data['CB11'] : '' }}" name="CB11" />
        <x-table.td type="input" formul="{CD11}+{CE11}" name="CC11" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD11') ? $data['CD11'] : '' }}" name="CD11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE11') ? $data['CE11'] : '' }}" name="CE11" />
        <x-table.td type="input" formul="{CG11}+{CH11}" name="CF11" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG11') ? $data['CG11'] : '' }}" name="CG11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH11') ? $data['CH11'] : '' }}" name="CH11" />
    </tr>
    <tr>
        <x-table.td type="header" value="последствия инфекционных и паразитарных болезней В90 - В94" />
        <x-table.td value="В90 - В94" />
        <x-table.td value="05" center />
        <x-table.td type="input" formul="{BU12}+{BV12}" name="BT12" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU12') ? $data['BU12'] : '' }}" name="BU12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV12') ? $data['BV12'] : '' }}" name="BV12" />
        <x-table.td type="input" formul="{BX12}+{BY12}" name="BW12" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX12') ? $data['BX12'] : '' }}" name="BX12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY12') ? $data['BY12'] : '' }}" name="BY12" />
        <x-table.td type="input" formul="{CA12}+{CB12}" name="BZ12" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA12') ? $data['CA12'] : '' }}" name="CA12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB12') ? $data['CB12'] : '' }}" name="CB12" />
        <x-table.td type="input" formul="{CD12}+{CE12}" name="CC12" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD12') ? $data['CD12'] : '' }}" name="CD12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE12') ? $data['CE12'] : '' }}" name="CE12" />
        <x-table.td type="input" formul="{CG12}+{CH12}" name="CF12" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG12') ? $data['CG12'] : '' }}" name="CG12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH12') ? $data['CH12'] : '' }}" name="CH12" />
    </tr>
    <tr>
        <x-table.td type="header" value="новообразования, из них: C00 - D48" />
        <x-table.td value="C00 - D48" />
        <x-table.td value="06" center />
        <x-table.td type="input" formul="{BU13}+{BV13}" name="BT13" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU13') ? $data['BU13'] : '' }}" name="BU13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV13') ? $data['BV13'] : '' }}" name="BV13" />
        <x-table.td type="input" formul="{BX13}+{BY13}" name="BW13" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX13') ? $data['BX13'] : '' }}" name="BX13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY13') ? $data['BY13'] : '' }}" name="BY13" />
        <x-table.td type="input" formul="{CA13}+{CB13}" name="BZ13" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA13') ? $data['CA13'] : '' }}" name="CA13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB13') ? $data['CB13'] : '' }}" name="CB13" />
        <x-table.td type="input" formul="{CD13}+{CE13}" name="CC13" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD13') ? $data['CD13'] : '' }}" name="CD13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE13') ? $data['CE13'] : '' }}" name="CE13" />
        <x-table.td type="input" formul="{CG13}+{CH13}" name="CF13" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG13') ? $data['CG13'] : '' }}" name="CG13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH13') ? $data['CH13'] : '' }}" name="CH13" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="злокачественные новообразования лимфоидной, кроветворной и родственных им тканей: C81 - C96" />
        <x-table.td value="C81 - C96" />
        <x-table.td value="07" center />
        <x-table.td type="input" formul="{BU14}+{BV14}" name="BT14" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU14') ? $data['BU14'] : '' }}" name="BU14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV14') ? $data['BV14'] : '' }}" name="BV14" />
        <x-table.td type="input" formul="{BX14}+{BY14}" name="BW14" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX14') ? $data['BX14'] : '' }}" name="BX14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY14') ? $data['BY14'] : '' }}" name="BY14" />
        <x-table.td type="input" formul="{CA14}+{CB14}" name="BZ14" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA14') ? $data['CA14'] : '' }}" name="CA14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB14') ? $data['CB14'] : '' }}" name="CB14" />
        <x-table.td type="input" formul="{CD14}+{CE14}" name="CC14" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD14') ? $data['CD14'] : '' }}" name="CD14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE14') ? $data['CE14'] : '' }}" name="CE14" />
        <x-table.td type="input" formul="{CG14}+{CH14}" name="CF14" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG14') ? $data['CG14'] : '' }}" name="CG14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH14') ? $data['CH14'] : '' }}" name="CH14" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="болезни крови, кроветворных органов и отдельные нарушения, вовлекающие имунный механизм, из них: D50 - D89" />
        <x-table.td value="D50 - D89" />
        <x-table.td value="08" center />
        <x-table.td type="input" formul="{BU15}+{BV15}" name="BT15" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU15') ? $data['BU15'] : '' }}" name="BU15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV15') ? $data['BV15'] : '' }}" name="BV15" />
        <x-table.td type="input" formul="{BX15}+{BY15}" name="BW15" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX15') ? $data['BX15'] : '' }}" name="BX15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY15') ? $data['BY15'] : '' }}" name="BY15" />
        <x-table.td type="input" formul="{CA15}+{CB15}" name="BZ15" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA15') ? $data['CA15'] : '' }}" name="CA15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB15') ? $data['CB15'] : '' }}" name="CB15" />
        <x-table.td type="input" formul="{CD15}+{CE15}" name="CC15" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD15') ? $data['CD15'] : '' }}" name="CD15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE15') ? $data['CE15'] : '' }}" name="CE15" />
        <x-table.td type="input" formul="{CG15}+{CH15}" name="CF15" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG15') ? $data['CG15'] : '' }}" name="CG15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH15') ? $data['CH15'] : '' }}" name="CH15" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="нарушения свертываемости крови, пурпура и другие гепорррагические состояния: D65 - D69" />
        <x-table.td value="D65 - D69" />
        <x-table.td value="09" center />
        <x-table.td type="input" formul="{BU16}+{BV16}" name="BT16" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU16') ? $data['BU16'] : '' }}" name="BU16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV16') ? $data['BV16'] : '' }}" name="BV16" />
        <x-table.td type="input" formul="{BX16}+{BY16}" name="BW16" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX16') ? $data['BX16'] : '' }}" name="BX16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY16') ? $data['BY16'] : '' }}" name="BY16" />
        <x-table.td type="input" formul="{CA16}+{CB16}" name="BZ16" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA16') ? $data['CA16'] : '' }}" name="CA16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB16') ? $data['CB16'] : '' }}" name="CB16" />
        <x-table.td type="input" formul="{CD16}+{CE16}" name="CC16" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD16') ? $data['CD16'] : '' }}" name="CD16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE16') ? $data['CE16'] : '' }}" name="CE16" />
        <x-table.td type="input" formul="{CG16}+{CH16}" name="CF16" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG16') ? $data['CG16'] : '' }}" name="CG16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH16') ? $data['CH16'] : '' }}" name="CH16" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="Болезни эндокринной системы, расстройства питания и нарушения обмена веществ, из них: E00 - E90" />
        <x-table.td value="E00 - E90" />
        <x-table.td value="10" center />
        <x-table.td type="input" formul="{BU17}+{BV17}" name="BT17" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU17') ? $data['BU17'] : '' }}" name="BU17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV17') ? $data['BV17'] : '' }}" name="BV17" />
        <x-table.td type="input" formul="{BX17}+{BY17}" name="BW17" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX17') ? $data['BX17'] : '' }}" name="BX17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY17') ? $data['BY17'] : '' }}" name="BY17" />
        <x-table.td type="input" formul="{CA17}+{CB17}" name="BZ17" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA17') ? $data['CA17'] : '' }}" name="CA17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB17') ? $data['CB17'] : '' }}" name="CB17" />
        <x-table.td type="input" formul="{CD17}+{CE17}" name="CC17" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD17') ? $data['CD17'] : '' }}" name="CD17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE17') ? $data['CE17'] : '' }}" name="CE17" />
        <x-table.td type="input" formul="{CG17}+{CH17}" name="CF17" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG17') ? $data['CG17'] : '' }}" name="CG17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH17') ? $data['CH17'] : '' }}" name="CH17" />
    </tr>
    <tr>
        <x-table.td type="header" value="болезни щитовидной железы: E00 - E07" />
        <x-table.td value="E00 - E07" />
        <x-table.td value="11" center />
        <x-table.td type="input" formul="{BU18}+{BV18}" name="BT18" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU18') ? $data['BU18'] : '' }}" name="BU18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV18') ? $data['BV18'] : '' }}" name="BV18" />
        <x-table.td type="input" formul="{BX18}+{BY18}" name="BW18" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX18') ? $data['BX18'] : '' }}" name="BX18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY18') ? $data['BY18'] : '' }}" name="BY18" />
        <x-table.td type="input" formul="{CA18}+{CB18}" name="BZ18" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA18') ? $data['CA18'] : '' }}" name="CA18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB18') ? $data['CB18'] : '' }}" name="CB18" />
        <x-table.td type="input" formul="{CD18}+{CE18}" name="CC18" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD18') ? $data['CD18'] : '' }}" name="CD18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE18') ? $data['CE18'] : '' }}" name="CE18" />
        <x-table.td type="input" formul="{CG18}+{CH18}" name="CF18" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG18') ? $data['CG18'] : '' }}" name="CG18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH18') ? $data['CH18'] : '' }}" name="CH18" />
    </tr>
    <tr>
        <x-table.td type="header" value="сахарный диабет: E10 - E14" />
        <x-table.td value="E10 - E14" />
        <x-table.td value="12" center />
        <x-table.td type="input" formul="{BU19}+{BV19}" name="BT19" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU19') ? $data['BU19'] : '' }}" name="BU19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV19') ? $data['BV19'] : '' }}" name="BV19" />
        <x-table.td type="input" formul="{BX19}+{BY19}" name="BW19" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX19') ? $data['BX19'] : '' }}" name="BX19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY19') ? $data['BY19'] : '' }}" name="BY19" />
        <x-table.td type="input" formul="{CA19}+{CB19}" name="BZ19" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA19') ? $data['CA19'] : '' }}" name="CA19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB19') ? $data['CB19'] : '' }}" name="CB19" />
        <x-table.td type="input" formul="{CD19}+{CE19}" name="CC19" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD19') ? $data['CD19'] : '' }}" name="CD19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE19') ? $data['CE19'] : '' }}" name="CE19" />
        <x-table.td type="input" formul="{CG19}+{CH19}" name="CF19" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG19') ? $data['CG19'] : '' }}" name="CG19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH19') ? $data['CH19'] : '' }}" name="CH19" />
    </tr>
    <tr>
        <x-table.td type="header" value="Психические расстройства и расстройства поведения, из них: F00 - F99" />
        <x-table.td value="F00 - F99" />
        <x-table.td value="13" center />
        <x-table.td type="input" formul="{BU20}+{BV20}" name="BT20" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU20') ? $data['BU20'] : '' }}" name="BU20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV20') ? $data['BV20'] : '' }}" name="BV20" />
        <x-table.td type="input" formul="{BX20}+{BY20}" name="BW20" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX20') ? $data['BX20'] : '' }}" name="BX20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY20') ? $data['BY20'] : '' }}" name="BY20" />
        <x-table.td type="input" formul="{CA20}+{CB20}" name="BZ20" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA20') ? $data['CA20'] : '' }}" name="CA20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB20') ? $data['CB20'] : '' }}" name="CB20" />
        <x-table.td type="input" formul="{CD20}+{CE20}" name="CC20" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD20') ? $data['CD20'] : '' }}" name="CD20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE20') ? $data['CE20'] : '' }}" name="CE20" />
        <x-table.td type="input" formul="{CG20}+{CH20}" name="CF20" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG20') ? $data['CG20'] : '' }}" name="CG20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH20') ? $data['CH20'] : '' }}" name="CH20" />
    </tr>
    <tr>
        <x-table.td type="header" value="умственная отсталость:F70 - F79" />
        <x-table.td value="F70 - F79" />
        <x-table.td value="14" center />
        <x-table.td type="input" formul="{BU21}+{BV21}" name="BT21" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU21') ? $data['BU21'] : '' }}" name="BU21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV21') ? $data['BV21'] : '' }}" name="BV21" />
        <x-table.td type="input" formul="{BX21}+{BY21}" name="BW21" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX21') ? $data['BX21'] : '' }}" name="BX21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY21') ? $data['BY21'] : '' }}" name="BY21" />
        <x-table.td type="input" formul="{CA21}+{CB21}" name="BZ21" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA21') ? $data['CA21'] : '' }}" name="CA21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB21') ? $data['CB21'] : '' }}" name="CB21" />
        <x-table.td type="input" formul="{CD21}+{CE21}" name="CC21" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD21') ? $data['CD21'] : '' }}" name="CD21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE21') ? $data['CE21'] : '' }}" name="CE21" />
        <x-table.td type="input" formul="{CG21}+{CH21}" name="CF21" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG21') ? $data['CG21'] : '' }}" name="CG21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH21') ? $data['CH21'] : '' }}" name="CH21" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="детский аутизм, атипичный аутизм, синдром Ретта, дезинтегративное расстройство детского возраста:F84.0-3" />
        <x-table.td value="F84.0-3" />
        <x-table.td value="15" center />
        <x-table.td type="input" formul="{BU22}+{BV22}" name="BT22" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU22') ? $data['BU22'] : '' }}" name="BU22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV22') ? $data['BV22'] : '' }}" name="BV22" />
        <x-table.td type="input" formul="{BX22}+{BY22}" name="BW22" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX22') ? $data['BX22'] : '' }}" name="BX22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY22') ? $data['BY22'] : '' }}" name="BY22" />
        <x-table.td type="input" formul="{CA22}+{CB22}" name="BZ22" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA22') ? $data['CA22'] : '' }}" name="CA22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB22') ? $data['CB22'] : '' }}" name="CB22" />
        <x-table.td type="input" formul="{CD22}+{CE22}" name="CC22" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD22') ? $data['CD22'] : '' }}" name="CD22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE22') ? $data['CE22'] : '' }}" name="CE22" />
        <x-table.td type="input" formul="{CG22}+{CH22}" name="CF22" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG22') ? $data['CG22'] : '' }}" name="CG22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH22') ? $data['CH22'] : '' }}" name="CH22" />
    </tr>










    <tr>
        <x-table.td type="header" value="Болезни нервной системы, из них: G00 - G99" />
        <x-table.td value="G00 - G99" />
        <x-table.td value="16" center />
        <x-table.td type="input" formul="{BU23}+{BV23}" name="BT23" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU23') ? $data['BU23'] : '' }}" name="BU23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV23') ? $data['BV23'] : '' }}" name="BV23" />
        <x-table.td type="input" formul="{BX23}+{BY23}" name="BW23" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX23') ? $data['BX23'] : '' }}" name="BX23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY23') ? $data['BY23'] : '' }}" name="BY23" />
        <x-table.td type="input" formul="{CA23}+{CB23}" name="BZ23" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA23') ? $data['CA23'] : '' }}" name="CA23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB23') ? $data['CB23'] : '' }}" name="CB23" />
        <x-table.td type="input" formul="{CD23}+{CE23}" name="CC23" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD23') ? $data['CD23'] : '' }}" name="CD23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE23') ? $data['CE23'] : '' }}" name="CE23" />
        <x-table.td type="input" formul="{CG23}+{CH23}" name="CF23" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG23') ? $data['CG23'] : '' }}" name="CG23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH23') ? $data['CH23'] : '' }}" name="CH23" />
    </tr>
    <tr>
        <x-table.td type="header" value="воспалительные болезни центральной нервной системы:G00-G09" />
        <x-table.td value="G00-G09" />
        <x-table.td value="17" center />
        <x-table.td type="input" formul="{BU24}+{BV24}" name="BT24" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU24') ? $data['BU24'] : '' }}" name="BU24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV24') ? $data['BV24'] : '' }}" name="BV24" />
        <x-table.td type="input" formul="{BX24}+{BY24}" name="BW24" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX24') ? $data['BX24'] : '' }}" name="BX24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY24') ? $data['BY24'] : '' }}" name="BY24" />
        <x-table.td type="input" formul="{CA24}+{CB24}" name="BZ24" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA24') ? $data['CA24'] : '' }}" name="CA24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB24') ? $data['CB24'] : '' }}" name="CB24" />
        <x-table.td type="input" formul="{CD24}+{CE24}" name="CC24" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD24') ? $data['CD24'] : '' }}" name="CD24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE24') ? $data['CE24'] : '' }}" name="CE24" />
        <x-table.td type="input" formul="{CG24}+{CH24}" name="CF24" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG24') ? $data['CG24'] : '' }}" name="CG24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH24') ? $data['CH24'] : '' }}" name="CH24" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="системыне атрофии, поражающие преимущественно центральную нервную систему:G10-G13" />
        <x-table.td value="G10-G13" />
        <x-table.td value="18" center />
        <x-table.td type="input" formul="{BU25}+{BV25}" name="BT25" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU25') ? $data['BU25'] : '' }}" name="BU25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV25') ? $data['BV25'] : '' }}" name="BV25" />
        <x-table.td type="input" formul="{BX25}+{BY25}" name="BW25" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX25') ? $data['BX25'] : '' }}" name="BX25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY25') ? $data['BY25'] : '' }}" name="BY25" />
        <x-table.td type="input" formul="{CA25}+{CB25}" name="BZ25" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA25') ? $data['CA25'] : '' }}" name="CA25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB25') ? $data['CB25'] : '' }}" name="CB25" />
        <x-table.td type="input" formul="{CD25}+{CE25}" name="CC25" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD25') ? $data['CD25'] : '' }}" name="CD25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE25') ? $data['CE25'] : '' }}" name="CE25" />
        <x-table.td type="input" formul="{CG25}+{CH25}" name="CF25" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG25') ? $data['CG25'] : '' }}" name="CG25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH25') ? $data['CH25'] : '' }}" name="CH25" />
    </tr>
    <tr>
        <x-table.td type="header" value="эпизодические и пароксизмальные расстройства:G40-G47" />
        <x-table.td value="G40-G47" />
        <x-table.td value="19" center />
        <x-table.td type="input" formul="{BU26}+{BV26}" name="BT26" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU26') ? $data['BU26'] : '' }}" name="BU26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV26') ? $data['BV26'] : '' }}" name="BV26" />
        <x-table.td type="input" formul="{BX26}+{BY26}" name="BW26" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX26') ? $data['BX26'] : '' }}" name="BX26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY26') ? $data['BY26'] : '' }}" name="BY26" />
        <x-table.td type="input" formul="{CA26}+{CB26}" name="BZ26" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA26') ? $data['CA26'] : '' }}" name="CA26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB26') ? $data['CB26'] : '' }}" name="CB26" />
        <x-table.td type="input" formul="{CD26}+{CE26}" name="CC26" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD26') ? $data['CD26'] : '' }}" name="CD26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE26') ? $data['CE26'] : '' }}" name="CE26" />
        <x-table.td type="input" formul="{CG26}+{CH26}" name="CF26" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG26') ? $data['CG26'] : '' }}" name="CG26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH26') ? $data['CH26'] : '' }}" name="CH26" />
    </tr>
    <tr>
        <x-table.td type="header" value="церебральный паралич и другие паралитические синдромы:G80 - G83" />
        <x-table.td value="G80 - G83" />
        <x-table.td value="20" center />
        <x-table.td type="input" formul="{BU27}+{BV27}" name="BT27" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU27') ? $data['BU27'] : '' }}" name="BU27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV27') ? $data['BV27'] : '' }}" name="BV27" />
        <x-table.td type="input" formul="{BX27}+{BY27}" name="BW27" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX27') ? $data['BX27'] : '' }}" name="BX27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY27') ? $data['BY27'] : '' }}" name="BY27" />
        <x-table.td type="input" formul="{CA27}+{CB27}" name="BZ27" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA27') ? $data['CA27'] : '' }}" name="CA27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB27') ? $data['CB27'] : '' }}" name="CB27" />
        <x-table.td type="input" formul="{CD27}+{CE27}" name="CC27" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD27') ? $data['CD27'] : '' }}" name="CD27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE27') ? $data['CE27'] : '' }}" name="CE27" />
        <x-table.td type="input" formul="{CG27}+{CH27}" name="CF27" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG27') ? $data['CG27'] : '' }}" name="CG27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH27') ? $data['CH27'] : '' }}" name="CH27" />
    </tr>
    <tr>
        <x-table.td type="header" value="другие нарушения нервной системы" />
        <x-table.td value="G90-G99" />
        <x-table.td value="21" center />
        <x-table.td type="input" formul="{BU28}+{BV28}" name="BT28" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU28') ? $data['BU28'] : '' }}" name="BU28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV28') ? $data['BV28'] : '' }}" name="BV28" />
        <x-table.td type="input" formul="{BX28}+{BY28}" name="BW28" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX28') ? $data['BX28'] : '' }}" name="BX28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY28') ? $data['BY28'] : '' }}" name="BY28" />
        <x-table.td type="input" formul="{CA28}+{CB28}" name="BZ28" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA28') ? $data['CA28'] : '' }}" name="CA28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB28') ? $data['CB28'] : '' }}" name="CB28" />
        <x-table.td type="input" formul="{CD28}+{CE28}" name="CC28" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD28') ? $data['CD28'] : '' }}" name="CD28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE28') ? $data['CE28'] : '' }}" name="CE28" />
        <x-table.td type="input" formul="{CG28}+{CH28}" name="CF28" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG28') ? $data['CG28'] : '' }}" name="CG28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH28') ? $data['CH28'] : '' }}" name="CH28" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезни глаза и его придаточного аппарата, из них H00 - H59:" />
        <x-table.td value="H00 - H59" />
        <x-table.td value="22" center />
        <x-table.td type="input" formul="{BU29}+{BV29}" name="BT29" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU29') ? $data['BU29'] : '' }}" name="BU29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV29') ? $data['BV29'] : '' }}" name="BV29" />
        <x-table.td type="input" formul="{BX29}+{BY29}" name="BW29" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX29') ? $data['BX29'] : '' }}" name="BX29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY29') ? $data['BY29'] : '' }}" name="BY29" />
        <x-table.td type="input" formul="{CA29}+{CB29}" name="BZ29" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA29') ? $data['CA29'] : '' }}" name="CA29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB29') ? $data['CB29'] : '' }}" name="CB29" />
        <x-table.td type="input" formul="{CD29}+{CE29}" name="CC29" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD29') ? $data['CD29'] : '' }}" name="CD29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE29') ? $data['CE29'] : '' }}" name="CE29" />
        <x-table.td type="input" formul="{CG29}+{CH29}" name="CF29" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG29') ? $data['CG29'] : '' }}" name="CG29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH29') ? $data['CH29'] : '' }}" name="CH29" />
    </tr>
    <tr>
        <x-table.td type="header" value="слепота обоих глаз H54.0" />
        <x-table.td value="H54.0" />
        <x-table.td value="23" center />
        <x-table.td type="input" formul="{BU30}+{BV30}" name="BT30" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU30') ? $data['BU30'] : '' }}" name="BU30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV30') ? $data['BV30'] : '' }}" name="BV30" />
        <x-table.td type="input" formul="{BX30}+{BY30}" name="BW30" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX30') ? $data['BX30'] : '' }}" name="BX30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY30') ? $data['BY30'] : '' }}" name="BY30" />
        <x-table.td type="input" formul="{CA30}+{CB30}" name="BZ30" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA30') ? $data['CA30'] : '' }}" name="CA30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB30') ? $data['CB30'] : '' }}" name="CB30" />
        <x-table.td type="input" formul="{CD30}+{CE30}" name="CC30" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD30') ? $data['CD30'] : '' }}" name="CD30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE30') ? $data['CE30'] : '' }}" name="CE30" />
        <x-table.td type="input" formul="{CG30}+{CH30}" name="CF30" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG30') ? $data['CG30'] : '' }}" name="CG30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH30') ? $data['CH30'] : '' }}" name="CH30" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезни уха и сосцевидного отростка, из них: H60 - H95" />
        <x-table.td value="H60 - H95" />
        <x-table.td value="24" center />
        <x-table.td type="input" formul="{BU31}+{BV31}" name="BT31" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU31') ? $data['BU31'] : '' }}" name="BU31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV31') ? $data['BV31'] : '' }}" name="BV31" />
        <x-table.td type="input" formul="{BX31}+{BY31}" name="BW31" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX31') ? $data['BX31'] : '' }}" name="BX31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY31') ? $data['BY31'] : '' }}" name="BY31" />
        <x-table.td type="input" formul="{CA31}+{CB31}" name="BZ31" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA31') ? $data['CA31'] : '' }}" name="CA31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB31') ? $data['CB31'] : '' }}" name="CB31" />
        <x-table.td type="input" formul="{CD31}+{CE31}" name="CC31" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD31') ? $data['CD31'] : '' }}" name="CD31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE31') ? $data['CE31'] : '' }}" name="CE31" />
        <x-table.td type="input" formul="{CG31}+{CH31}" name="CF31" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG31') ? $data['CG31'] : '' }}" name="CG31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH31') ? $data['CH31'] : '' }}" name="CH31" />
    </tr>
    <tr>
        <x-table.td type="header" value="кондуктивная потеря слуха двусторонняя: H90" />
        <x-table.td value="H90" />
        <x-table.td value="25" center />
        <x-table.td type="input" formul="{BU32}+{BV32}" name="BT32" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU32') ? $data['BU32'] : '' }}" name="BU32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV32') ? $data['BV32'] : '' }}" name="BV32" />
        <x-table.td type="input" formul="{BX32}+{BY32}" name="BW32" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX32') ? $data['BX32'] : '' }}" name="BX32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY32') ? $data['BY32'] : '' }}" name="BY32" />
        <x-table.td type="input" formul="{CA32}+{CB32}" name="BZ32" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA32') ? $data['CA32'] : '' }}" name="CA32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB32') ? $data['CB32'] : '' }}" name="CB32" />
        <x-table.td type="input" formul="{CD32}+{CE32}" name="CC32" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD32') ? $data['CD32'] : '' }}" name="CD32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE32') ? $data['CE32'] : '' }}" name="CE32" />
        <x-table.td type="input" formul="{CG32}+{CH32}" name="CF32" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG32') ? $data['CG32'] : '' }}" name="CG32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH32') ? $data['CH32'] : '' }}" name="CH32" />
    </tr>
    <tr>
        <x-table.td type="header" value="нейросенсорная потеря слуха двусторонняя: H90.3" />
        <x-table.td value="H90.3" />
        <x-table.td value="26" center />
        <x-table.td type="input" formul="{BU33}+{BV33}" name="BT33" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU33') ? $data['BU33'] : '' }}" name="BU33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV33') ? $data['BV33'] : '' }}" name="BV33" />
        <x-table.td type="input" formul="{BX33}+{BY33}" name="BW33" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX33') ? $data['BX33'] : '' }}" name="BX33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY33') ? $data['BY33'] : '' }}" name="BY33" />
        <x-table.td type="input" formul="{CA33}+{CB33}" name="BZ33" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA33') ? $data['CA33'] : '' }}" name="CA33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB33') ? $data['CB33'] : '' }}" name="CB33" />
        <x-table.td type="input" formul="{CD33}+{CE33}" name="CC33" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD33') ? $data['CD33'] : '' }}" name="CD33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE33') ? $data['CE33'] : '' }}" name="CE33" />
        <x-table.td type="input" formul="{CG33}+{CH33}" name="CF33" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG33') ? $data['CG33'] : '' }}" name="CG33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH33') ? $data['CH33'] : '' }}" name="CH33" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезни системы кровообращения: I00 - I99" />
        <x-table.td value="I00 - I99" />
        <x-table.td value="27" center />
        <x-table.td type="input" formul="{BU34}+{BV34}" name="BT34" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU34') ? $data['BU34'] : '' }}" name="BU34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV34') ? $data['BV34'] : '' }}" name="BV34" />
        <x-table.td type="input" formul="{BX34}+{BY34}" name="BW34" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX34') ? $data['BX34'] : '' }}" name="BX34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY34') ? $data['BY34'] : '' }}" name="BY34" />
        <x-table.td type="input" formul="{CA34}+{CB34}" name="BZ34" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA34') ? $data['CA34'] : '' }}" name="CA34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB34') ? $data['CB34'] : '' }}" name="CB34" />
        <x-table.td type="input" formul="{CD34}+{CE34}" name="CC34" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD34') ? $data['CD34'] : '' }}" name="CD34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE34') ? $data['CE34'] : '' }}" name="CE34" />
        <x-table.td type="input" formul="{CG34}+{CH34}" name="CF34" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG34') ? $data['CG34'] : '' }}" name="CG34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH34') ? $data['CH34'] : '' }}" name="CH34" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезнь органов дыхания, из них: J00 - J99" />
        <x-table.td value="J00 - J99" />
        <x-table.td value="28" center />
        <x-table.td type="input" formul="{BU35}+{BV35}" name="BT35" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU35') ? $data['BU35'] : '' }}" name="BU35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV35') ? $data['BV35'] : '' }}" name="BV35" />
        <x-table.td type="input" formul="{BX35}+{BY35}" name="BW35" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX35') ? $data['BX35'] : '' }}" name="BX35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY35') ? $data['BY35'] : '' }}" name="BY35" />
        <x-table.td type="input" formul="{CA35}+{CB35}" name="BZ35" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA35') ? $data['CA35'] : '' }}" name="CA35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB35') ? $data['CB35'] : '' }}" name="CB35" />
        <x-table.td type="input" formul="{CD35}+{CE35}" name="CC35" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD35') ? $data['CD35'] : '' }}" name="CD35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE35') ? $data['CE35'] : '' }}" name="CE35" />
        <x-table.td type="input" formul="{CG35}+{CH35}" name="CF35" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG35') ? $data['CG35'] : '' }}" name="CG35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH35') ? $data['CH35'] : '' }}" name="CH35" />
    </tr>
    <tr>
        <x-table.td type="header" value="астма, астматический статус: J45, J46" />
        <x-table.td value="J45, J46" />
        <x-table.td value="29" center />
        <x-table.td type="input" formul="{BU36}+{BV36}" name="BT36" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU36') ? $data['BU36'] : '' }}" name="BU36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV36') ? $data['BV36'] : '' }}" name="BV36" />
        <x-table.td type="input" formul="{BX36}+{BY36}" name="BW36" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX36') ? $data['BX36'] : '' }}" name="BX36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY36') ? $data['BY36'] : '' }}" name="BY36" />
        <x-table.td type="input" formul="{CA36}+{CB36}" name="BZ36" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA36') ? $data['CA36'] : '' }}" name="CA36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB36') ? $data['CB36'] : '' }}" name="CB36" />
        <x-table.td type="input" formul="{CD36}+{CE36}" name="CC36" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD36') ? $data['CD36'] : '' }}" name="CD36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE36') ? $data['CE36'] : '' }}" name="CE36" />
        <x-table.td type="input" formul="{CG36}+{CH36}" name="CF36" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG36') ? $data['CG36'] : '' }}" name="CG36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH36') ? $data['CH36'] : '' }}" name="CH36" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезни органов пищеварения, из них: K00 - K93" />
        <x-table.td value="K00 - K93" />
        <x-table.td value="30" center />
        <x-table.td type="input" formul="{BU37}+{BV37}" name="BT37" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU37') ? $data['BU37'] : '' }}" name="BU37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV37') ? $data['BV37'] : '' }}" name="BV37" />
        <x-table.td type="input" formul="{BX37}+{BY37}" name="BW37" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX37') ? $data['BX37'] : '' }}" name="BX37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY37') ? $data['BY37'] : '' }}" name="BY37" />
        <x-table.td type="input" formul="{CA37}+{CB37}" name="BZ37" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA37') ? $data['CA37'] : '' }}" name="CA37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB37') ? $data['CB37'] : '' }}" name="CB37" />
        <x-table.td type="input" formul="{CD37}+{CE37}" name="CC37" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD37') ? $data['CD37'] : '' }}" name="CD37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE37') ? $data['CE37'] : '' }}" name="CE37" />
        <x-table.td type="input" formul="{CG37}+{CH37}" name="CF37" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG37') ? $data['CG37'] : '' }}" name="CG37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH37') ? $data['CH37'] : '' }}" name="CH37" />
    </tr>
    <tr>
        <x-table.td type="header" value="болезни пищевода, желудка и двенадцатиперстной кишки: K20 - K31" />
        <x-table.td value="K20 - K31" />
        <x-table.td value="31" center />
        <x-table.td type="input" formul="{BU38}+{BV38}" name="BT38" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU38') ? $data['BU38'] : '' }}" name="BU38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV38') ? $data['BV38'] : '' }}" name="BV38" />
        <x-table.td type="input" formul="{BX38}+{BY38}" name="BW38" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX38') ? $data['BX38'] : '' }}" name="BX38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY38') ? $data['BY38'] : '' }}" name="BY38" />
        <x-table.td type="input" formul="{CA38}+{CB38}" name="BZ38" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA38') ? $data['CA38'] : '' }}" name="CA38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB38') ? $data['CB38'] : '' }}" name="CB38" />
        <x-table.td type="input" formul="{CD38}+{CE38}" name="CC38" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD38') ? $data['CD38'] : '' }}" name="CD38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE38') ? $data['CE38'] : '' }}" name="CE38" />
        <x-table.td type="input" formul="{CG38}+{CH38}" name="CF38" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG38') ? $data['CG38'] : '' }}" name="CG38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH38') ? $data['CH38'] : '' }}" name="CH38" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="болезни печени, желчного пузыря, желчевыводящих путей и поджелудочной железы: K80 - K87" />
        <x-table.td value="K70 - K77,K80 - K87" />
        <x-table.td value="32" center />
        <x-table.td type="input" formul="{BU39}+{BV39}" name="BT39" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU39') ? $data['BU39'] : '' }}" name="BU39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV39') ? $data['BV39'] : '' }}" name="BV39" />
        <x-table.td type="input" formul="{BX39}+{BY39}" name="BW39" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX39') ? $data['BX39'] : '' }}" name="BX39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY39') ? $data['BY39'] : '' }}" name="BY39" />
        <x-table.td type="input" formul="{CA39}+{CB39}" name="BZ39" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA39') ? $data['CA39'] : '' }}" name="CA39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB39') ? $data['CB39'] : '' }}" name="CB39" />
        <x-table.td type="input" formul="{CD39}+{CE39}" name="CC39" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD39') ? $data['CD39'] : '' }}" name="CD39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE39') ? $data['CE39'] : '' }}" name="CE39" />
        <x-table.td type="input" formul="{CG39}+{CH39}" name="CF39" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG39') ? $data['CG39'] : '' }}" name="CG39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH39') ? $data['CH39'] : '' }}" name="CH39" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезни кожи и подкожной клетчатки, из них: L00 - L99" />
        <x-table.td value="L00 - L99" />
        <x-table.td value="33" center />
        <x-table.td type="input" formul="{BU40}+{BV40}" name="BT40" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU40') ? $data['BU40'] : '' }}" name="BU40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV40') ? $data['BV40'] : '' }}" name="BV40" />
        <x-table.td type="input" formul="{BX40}+{BY40}" name="BW40" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX40') ? $data['BX40'] : '' }}" name="BX40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY40') ? $data['BY40'] : '' }}" name="BY40" />
        <x-table.td type="input" formul="{CA40}+{CB40}" name="BZ40" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA40') ? $data['CA40'] : '' }}" name="CA40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB40') ? $data['CB40'] : '' }}" name="CB40" />
        <x-table.td type="input" formul="{CD40}+{CE40}" name="CC40" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD40') ? $data['CD40'] : '' }}" name="CD40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE40') ? $data['CE40'] : '' }}" name="CE40" />
        <x-table.td type="input" formul="{CG40}+{CH40}" name="CF40" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG40') ? $data['CG40'] : '' }}" name="CG40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH40') ? $data['CH40'] : '' }}" name="CH40" />
    </tr>
    <tr>
        <x-table.td type="header" value="атопический дерматит:" />
        <x-table.td value="L20" />
        <x-table.td value="34" center />
        <x-table.td type="input" formul="{BU41}+{BV41}" name="BT41" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU41') ? $data['BU41'] : '' }}" name="BU41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV41') ? $data['BV41'] : '' }}" name="BV41" />
        <x-table.td type="input" formul="{BX41}+{BY41}" name="BW41" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX41') ? $data['BX41'] : '' }}" name="BX41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY41') ? $data['BY41'] : '' }}" name="BY41" />
        <x-table.td type="input" formul="{CA41}+{CB41}" name="BZ41" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA41') ? $data['CA41'] : '' }}" name="CA41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB41') ? $data['CB41'] : '' }}" name="CB41" />
        <x-table.td type="input" formul="{CD41}+{CE41}" name="CC41" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD41') ? $data['CD41'] : '' }}" name="CD41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE41') ? $data['CE41'] : '' }}" name="CE41" />
        <x-table.td type="input" formul="{CG41}+{CH41}" name="CF41" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG41') ? $data['CG41'] : '' }}" name="CG41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH41') ? $data['CH41'] : '' }}" name="CH41" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="Болезни костно-мышечной системы и соединительной ткани, из них: M00 - M99" />
        <x-table.td value="M00 - M99" />
        <x-table.td value="35" center />
        <x-table.td type="input" formul="{BU42}+{BV42}" name="BT42" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU42') ? $data['BU42'] : '' }}" name="BU42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV42') ? $data['BV42'] : '' }}" name="BV42" />
        <x-table.td type="input" formul="{BX42}+{BY42}" name="BW42" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX42') ? $data['BX42'] : '' }}" name="BX42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY42') ? $data['BY42'] : '' }}" name="BY42" />
        <x-table.td type="input" formul="{CA42}+{CB42}" name="BZ42" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA42') ? $data['CA42'] : '' }}" name="CA42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB42') ? $data['CB42'] : '' }}" name="CB42" />
        <x-table.td type="input" formul="{CD42}+{CE42}" name="CC42" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD42') ? $data['CD42'] : '' }}" name="CD42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE42') ? $data['CE42'] : '' }}" name="CE42" />
        <x-table.td type="input" formul="{CG42}+{CH42}" name="CF42" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG42') ? $data['CG42'] : '' }}" name="CG42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH42') ? $data['CH42'] : '' }}" name="CH42" />
    </tr>
    <tr>
        <x-table.td type="header" value="реактивные артропатии: M02" />
        <x-table.td value="M02" />
        <x-table.td value="36" center />
        <x-table.td type="input" formul="{BU43}+{BV43}" name="BT43" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU43') ? $data['BU43'] : '' }}" name="BU43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV43') ? $data['BV43'] : '' }}" name="BV43" />
        <x-table.td type="input" formul="{BX43}+{BY43}" name="BW43" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX43') ? $data['BX43'] : '' }}" name="BX43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY43') ? $data['BY43'] : '' }}" name="BY43" />
        <x-table.td type="input" formul="{CA43}+{CB43}" name="BZ43" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA43') ? $data['CA43'] : '' }}" name="CA43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB43') ? $data['CB43'] : '' }}" name="CB43" />
        <x-table.td type="input" formul="{CD43}+{CE43}" name="CC43" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD43') ? $data['CD43'] : '' }}" name="CD43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE43') ? $data['CE43'] : '' }}" name="CE43" />
        <x-table.td type="input" formul="{CG43}+{CH43}" name="CF43" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG43') ? $data['CG43'] : '' }}" name="CG43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH43') ? $data['CH43'] : '' }}" name="CH43" />
    </tr>
    <tr>
        <x-table.td type="header" value="юношеский (ювенильный) артрит: M08" />
        <x-table.td value="M08" />
        <x-table.td value="37" center />
        <x-table.td type="input" formul="{BU44}+{BV44}" name="BT44" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU44') ? $data['BU44'] : '' }}" name="BU44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV44') ? $data['BV44'] : '' }}" name="BV44" />
        <x-table.td type="input" formul="{BX44}+{BY44}" name="BW44" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX44') ? $data['BX44'] : '' }}" name="BX44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY44') ? $data['BY44'] : '' }}" name="BY44" />
        <x-table.td type="input" formul="{CA44}+{CB44}" name="BZ44" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA44') ? $data['CA44'] : '' }}" name="CA44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB44') ? $data['CB44'] : '' }}" name="CB44" />
        <x-table.td type="input" formul="{CD44}+{CE44}" name="CC44" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD44') ? $data['CD44'] : '' }}" name="CD44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE44') ? $data['CE44'] : '' }}" name="CE44" />
        <x-table.td type="input" formul="{CG44}+{CH44}" name="CF44" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG44') ? $data['CG44'] : '' }}" name="CG44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH44') ? $data['CH44'] : '' }}" name="CH44" />
    </tr>
    <tr>
        <x-table.td type="header" value="системные поражения соединительной ткани: M30 - M36" />
        <x-table.td value="M30 - M36" />
        <x-table.td value="38" center />
        <x-table.td type="input" formul="{BU45}+{BV45}" name="BT45" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU45') ? $data['BU45'] : '' }}" name="BU45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV45') ? $data['BV45'] : '' }}" name="BV45" />
        <x-table.td type="input" formul="{BX45}+{BY45}" name="BW45" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX45') ? $data['BX45'] : '' }}" name="BX45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY45') ? $data['BY45'] : '' }}" name="BY45" />
        <x-table.td type="input" formul="{CA45}+{CB45}" name="BZ45" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA45') ? $data['CA45'] : '' }}" name="CA45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB45') ? $data['CB45'] : '' }}" name="CB45" />
        <x-table.td type="input" formul="{CD45}+{CE45}" name="CC45" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD45') ? $data['CD45'] : '' }}" name="CD45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE45') ? $data['CE45'] : '' }}" name="CE45" />
        <x-table.td type="input" formul="{CG45}+{CH45}" name="CF45" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG45') ? $data['CG45'] : '' }}" name="CG45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH45') ? $data['CH45'] : '' }}" name="CH45" />
    </tr>
    <tr>
        <x-table.td type="header" value="остеопатии и хондропатии:M80 - M94" />
        <x-table.td value="M80 - M94" />
        <x-table.td value="39" center />
        <x-table.td type="input" formul="{BU46}+{BV46}" name="BT46" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU46') ? $data['BU46'] : '' }}" name="BU46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV46') ? $data['BV46'] : '' }}" name="BV46" />
        <x-table.td type="input" formul="{BX46}+{BY46}" name="BW46" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX46') ? $data['BX46'] : '' }}" name="BX46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY46') ? $data['BY46'] : '' }}" name="BY46" />
        <x-table.td type="input" formul="{CA46}+{CB46}" name="BZ46" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA46') ? $data['CA46'] : '' }}" name="CA46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB46') ? $data['CB46'] : '' }}" name="CB46" />
        <x-table.td type="input" formul="{CD46}+{CE46}" name="CC46" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD46') ? $data['CD46'] : '' }}" name="CD46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE46') ? $data['CE46'] : '' }}" name="CE46" />
        <x-table.td type="input" formul="{CG46}+{CH46}" name="CF46" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG46') ? $data['CG46'] : '' }}" name="CG46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH46') ? $data['CH46'] : '' }}" name="CH46" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезни мочеполовой системы, из них: N00 - N99" />
        <x-table.td value="N00 - N99" />
        <x-table.td value="40" center />
        <x-table.td type="input" formul="{BU47}+{BV47}" name="BT47" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU47') ? $data['BU47'] : '' }}" name="BU47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV47') ? $data['BV47'] : '' }}" name="BV47" />
        <x-table.td type="input" formul="{BX47}+{BY47}" name="BW47" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX47') ? $data['BX47'] : '' }}" name="BX47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY47') ? $data['BY47'] : '' }}" name="BY47" />
        <x-table.td type="input" formul="{CA47}+{CB47}" name="BZ47" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA47') ? $data['CA47'] : '' }}" name="CA47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB47') ? $data['CB47'] : '' }}" name="CB47" />
        <x-table.td type="input" formul="{CD47}+{CE47}" name="CC47" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD47') ? $data['CD47'] : '' }}" name="CD47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE47') ? $data['CE47'] : '' }}" name="CE47" />
        <x-table.td type="input" formul="{CG47}+{CH47}" name="CF47" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG47') ? $data['CG47'] : '' }}" name="CG47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH47') ? $data['CH47'] : '' }}" name="CH47" />
    </tr>
    <tr>
        <x-table.td type="header" value="гломерулярные, тубулоинтерстициальные болезни почек, почечная недостаточность, другие болезни почек N00 - N19, N25 - N29" />
        <x-table.td value="N00 - N19, N25 - N29" />
        <x-table.td value="41" center />
        <x-table.td type="input" formul="{BU48}+{BV48}" name="BT48" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU48') ? $data['BU48'] : '' }}" name="BU48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV48') ? $data['BV48'] : '' }}" name="BV48" />
        <x-table.td type="input" formul="{BX48}+{BY48}" name="BW48" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX48') ? $data['BX48'] : '' }}" name="BX48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY48') ? $data['BY48'] : '' }}" name="BY48" />
        <x-table.td type="input" formul="{CA48}+{CB48}" name="BZ48" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA48') ? $data['CA48'] : '' }}" name="CA48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB48') ? $data['CB48'] : '' }}" name="CB48" />
        <x-table.td type="input" formul="{CD48}+{CE48}" name="CC48" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD48') ? $data['CD48'] : '' }}" name="CD48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE48') ? $data['CE48'] : '' }}" name="CE48" />
        <x-table.td type="input" formul="{CG48}+{CH48}" name="CF48" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG48') ? $data['CG48'] : '' }}" name="CG48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH48') ? $data['CH48'] : '' }}" name="CH48" />
    </tr>
    <tr>
        <x-table.td type="header" value="Беременность, роды и послеродовой период: O00 - O99" />
        <x-table.td value="O00 - O99" />
        <x-table.td value="42" center />
        <x-table.td type="input" formul="{BU49}+{BV49}" name="BT49" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU49') ? $data['BU49'] : '' }}" name="BU49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV49') ? $data['BV49'] : '' }}" name="BV49" />
        <x-table.td type="input" formul="{BX49}+{BY49}" name="BW49" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX49') ? $data['BX49'] : '' }}" name="BX49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY49') ? $data['BY49'] : '' }}" name="BY49" />
        <x-table.td type="input" formul="{CA49}+{CB49}" name="BZ49" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA49') ? $data['CA49'] : '' }}" name="CA49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB49') ? $data['CB49'] : '' }}" name="CB49" />
        <x-table.td type="input" formul="{CD49}+{CE49}" name="CC49" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD49') ? $data['CD49'] : '' }}" name="CD49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE49') ? $data['CE49'] : '' }}" name="CE49" />
        <x-table.td type="input" formul="{CG49}+{CH49}" name="CF49" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG49') ? $data['CG49'] : '' }}" name="CG49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH49') ? $data['CH49'] : '' }}" name="CH49" />
    </tr>
    <tr>
        <x-table.td type="header" value="Отдельные состояния, возникающие в перинатальном периоде: P05 - P96" />
        <x-table.td value="P05 - P96" />
        <x-table.td value="43" center />
        <x-table.td type="input" formul="{BU50}+{BV50}" name="BT50" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU50') ? $data['BU50'] : '' }}" name="BU50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV50') ? $data['BV50'] : '' }}" name="BV50" />
        <x-table.td type="input" formul="{BX50}+{BY50}" name="BW50" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX50') ? $data['BX50'] : '' }}" name="BX50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY50') ? $data['BY50'] : '' }}" name="BY50" />
        <x-table.td type="input" formul="{CA50}+{CB50}" name="BZ50" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA50') ? $data['CA50'] : '' }}" name="CA50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB50') ? $data['CB50'] : '' }}" name="CB50" />
        <x-table.td type="input" formul="{CD50}+{CE50}" name="CC50" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD50') ? $data['CD50'] : '' }}" name="CD50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE50') ? $data['CE50'] : '' }}" name="CE50" />
        <x-table.td type="input" formul="{CG50}+{CH50}" name="CF50" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG50') ? $data['CG50'] : '' }}" name="CG50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH50') ? $data['CH50'] : '' }}" name="CH50" />
    </tr>
    <tr>
        <x-table.td type="header" value="Врожденные аномалии (пороки развития), деформации и хромосомные нарушения, из них: Q00 - Q99" />
        <x-table.td value="Q00 - Q99" />
        <x-table.td value="44" center />
        <x-table.td type="input" formul="{BU51}+{BV51}" name="BT51" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU51') ? $data['BU51'] : '' }}" name="BU51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV51') ? $data['BV51'] : '' }}" name="BV51" />
        <x-table.td type="input" formul="{BX51}+{BY51}" name="BW51" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX51') ? $data['BX51'] : '' }}" name="BX51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY51') ? $data['BY51'] : '' }}" name="BY51" />
        <x-table.td type="input" formul="{CA51}+{CB51}" name="BZ51" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA51') ? $data['CA51'] : '' }}" name="CA51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB51') ? $data['CB51'] : '' }}" name="CB51" />
        <x-table.td type="input" formul="{CD51}+{CE51}" name="CC51" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD51') ? $data['CD51'] : '' }}" name="CD51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE51') ? $data['CE51'] : '' }}" name="CE51" />
        <x-table.td type="input" formul="{CG51}+{CH51}" name="CF51" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG51') ? $data['CG51'] : '' }}" name="CG51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH51') ? $data['CH51'] : '' }}" name="CH51" />
    </tr>
    <tr>
        <x-table.td type="header" value="врожденные аномалии (пороки развития) центральной нервной системы и органов чувств: Q00 - Q07" />
        <x-table.td value="Q00 - Q07" />
        <x-table.td value="45" center />
        <x-table.td type="input" formul="{BU52}+{BV52}" name="BT52" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU52') ? $data['BU52'] : '' }}" name="BU52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV52') ? $data['BV52'] : '' }}" name="BV52" />
        <x-table.td type="input" formul="{BX52}+{BY52}" name="BW52" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX52') ? $data['BX52'] : '' }}" name="BX52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY52') ? $data['BY52'] : '' }}" name="BY52" />
        <x-table.td type="input" formul="{CA52}+{CB52}" name="BZ52" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA52') ? $data['CA52'] : '' }}" name="CA52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB52') ? $data['CB52'] : '' }}" name="CB52" />
        <x-table.td type="input" formul="{CD52}+{CE52}" name="CC52" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD52') ? $data['CD52'] : '' }}" name="CD52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE52') ? $data['CE52'] : '' }}" name="CE52" />
        <x-table.td type="input" formul="{CG52}+{CH52}" name="CF52" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG52') ? $data['CG52'] : '' }}" name="CG52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH52') ? $data['CH52'] : '' }}" name="CH52" />
    </tr>
    <tr>
        <x-table.td type="header" value="врожденные аномалии (пороки развития) системы кровообращения:Q20 - Q28" />
        <x-table.td value="Q20 - Q28" />
        <x-table.td value="46" center />
        <x-table.td type="input" formul="{BU53}+{BV53}" name="BT53" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU53') ? $data['BU53'] : '' }}" name="BU53" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV53') ? $data['BV53'] : '' }}" name="BV53" />
        <x-table.td type="input" formul="{BX53}+{BY53}" name="BW53" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX53') ? $data['BX53'] : '' }}" name="BX53" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY53') ? $data['BY53'] : '' }}" name="BY53" />
        <x-table.td type="input" formul="{CA53}+{CB53}" name="BZ53" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA53') ? $data['CA53'] : '' }}" name="CA53" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB53') ? $data['CB53'] : '' }}" name="CB53" />
        <x-table.td type="input" formul="{CD53}+{CE53}" name="CC53" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD53') ? $data['CD53'] : '' }}" name="CD53" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE53') ? $data['CE53'] : '' }}" name="CE53" />
        <x-table.td type="input" formul="{CG53}+{CH53}" name="CF53" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG53') ? $data['CG53'] : '' }}" name="CG53" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH53') ? $data['CH53'] : '' }}" name="CH53" />
    </tr>
    <tr>
        <x-table.td type="header" value="хромосомные аномалии, не классифицированные в других рубриках, из них: Q90 - Q99" />
        <x-table.td value="Q90 - Q99" />
        <x-table.td value="47" center />
        <x-table.td type="input" formul="{BU54}+{BV54}" name="BT54" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU54') ? $data['BU54'] : '' }}" name="BU54" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV54') ? $data['BV54'] : '' }}" name="BV54" />
        <x-table.td type="input" formul="{BX54}+{BY54}" name="BW54" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX54') ? $data['BX54'] : '' }}" name="BX54" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY54') ? $data['BY54'] : '' }}" name="BY54" />
        <x-table.td type="input" formul="{CA54}+{CB54}" name="BZ54" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA54') ? $data['CA54'] : '' }}" name="CA54" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB54') ? $data['CB54'] : '' }}" name="CB54" />
        <x-table.td type="input" formul="{CD54}+{CE54}" name="CC54" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD54') ? $data['CD54'] : '' }}" name="CD54" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE54') ? $data['CE54'] : '' }}" name="CE54" />
        <x-table.td type="input" formul="{CG54}+{CH54}" name="CF54" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG54') ? $data['CG54'] : '' }}" name="CG54" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH54') ? $data['CH54'] : '' }}" name="CH54" />
    </tr>
    <tr>
        <x-table.td type="header" value="Травмы, отравления и некоторые другие последствия воздействия внешних причин: S00 - T98" />
        <x-table.td value="S00 - T98" />
        <x-table.td value="48" center />
        <x-table.td type="input" formul="{BU55}+{BV55}" name="BT55" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU55') ? $data['BU55'] : '' }}" name="BU55" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV55') ? $data['BV55'] : '' }}" name="BV55" />
        <x-table.td type="input" formul="{BX55}+{BY55}" name="BW55" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX55') ? $data['BX55'] : '' }}" name="BX55" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY55') ? $data['BY55'] : '' }}" name="BY55" />
        <x-table.td type="input" formul="{CA55}+{CB55}" name="BZ55" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA55') ? $data['CA55'] : '' }}" name="CA55" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB55') ? $data['CB55'] : '' }}" name="CB55" />
        <x-table.td type="input" formul="{CD55}+{CE55}" name="CC55" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD55') ? $data['CD55'] : '' }}" name="CD55" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE55') ? $data['CE55'] : '' }}" name="CE55" />
        <x-table.td type="input" formul="{CG55}+{CH55}" name="CF55" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG55') ? $data['CG55'] : '' }}" name="CG55" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH55') ? $data['CH55'] : '' }}" name="CH55" />
    </tr>
    <tr>
        <x-table.td type="header" value="Факторы, влияющие на состояние здоровья населения и обращения в медицинские организации:Z00-Z99" />
        <x-table.td value="Z00-Z99" />
        <x-table.td value="49" center />
        <x-table.td type="input" formul="{BU56}+{BV56}" name="BT56" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU56') ? $data['BU56'] : '' }}" name="BU56" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV56') ? $data['BV56'] : '' }}" name="BV56" />
        <x-table.td type="input" formul="{BX56}+{BY56}" name="BW56" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX56') ? $data['BX56'] : '' }}" name="BX56" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY56') ? $data['BY56'] : '' }}" name="BY56" />
        <x-table.td type="input" formul="{CA56}+{CB56}" name="BZ56" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA56') ? $data['CA56'] : '' }}" name="CA56" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB56') ? $data['CB56'] : '' }}" name="CB56" />
        <x-table.td type="input" formul="{CD56}+{CE56}" name="CC56" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD56') ? $data['CD56'] : '' }}" name="CD56" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE56') ? $data['CE56'] : '' }}" name="CE56" />
        <x-table.td type="input" formul="{CG56}+{CH56}" name="CF56" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG56') ? $data['CG56'] : '' }}" name="CG56" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH56') ? $data['CH56'] : '' }}" name="CH56" />
    </tr>

</tbody>
