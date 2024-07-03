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
        <x-table.td type="input" value="{{ $data->has('BT13') ? $data['BT13'] : '' }}" coord="BT13" />
        <x-table.td type="input" value="{{ $data->has('BU13') ? $data['BU13'] : '' }}" coord="BU13" />
        <x-table.td type="input" value="{{ $data->has('BV13') ? $data['BV13'] : '' }}" coord="BV13" />
        <x-table.td type="input" value="{{ $data->has('BW13') ? $data['BW13'] : '' }}" coord="BW13" />
        <x-table.td type="input" value="{{ $data->has('BX13') ? $data['BX13'] : '' }}" coord="BX13" />
        <x-table.td type="input" value="{{ $data->has('BY13') ? $data['BY13'] : '' }}" coord="BY13" />
        <x-table.td type="input" value="{{ $data->has('BZ13') ? $data['BZ13'] : '' }}" coord="BZ13" />
        <x-table.td type="input" value="{{ $data->has('CA13') ? $data['CA13'] : '' }}" coord="CA13" />
        <x-table.td type="input" value="{{ $data->has('CB13') ? $data['CB13'] : '' }}" coord="CB13" />
        <x-table.td type="input" value="{{ $data->has('CC13') ? $data['CC13'] : '' }}" coord="CC13" />
        <x-table.td type="input" value="{{ $data->has('CD13') ? $data['CD13'] : '' }}" coord="CD13" />
        <x-table.td type="input" value="{{ $data->has('CE13') ? $data['CE13'] : '' }}" coord="CE13" />
        <x-table.td type="input" value="{{ $data->has('CF13') ? $data['CF13'] : '' }}" coord="CF13" />
        <x-table.td type="input" value="{{ $data->has('CG13') ? $data['CG13'] : '' }}" coord="CG13" />
        <x-table.td type="input" value="{{ $data->has('CH13') ? $data['CH13'] : '' }}" coord="CH13" />
      </tr>
    <tr>
        <x-table.td type="header" value="злокачественные новообразования лимфоидной, кроветворной и родственных им тканей: C81 - C96" />
        <x-table.td type="header" value="07" />
        <x-table.td type="input" value="{{ $data->has('BT14') ? $data['BT14'] : '' }}" coord="BT14" />
        <x-table.td type="input" value="{{ $data->has('BU14') ? $data['BU14'] : '' }}" coord="BU14" />
        <x-table.td type="input" value="{{ $data->has('BV14') ? $data['BV14'] : '' }}" coord="BV14" />
        <x-table.td type="input" value="{{ $data->has('BW14') ? $data['BW14'] : '' }}" coord="BW14" />
        <x-table.td type="input" value="{{ $data->has('BX14') ? $data['BX14'] : '' }}" coord="BX14" />
        <x-table.td type="input" value="{{ $data->has('BY14') ? $data['BY14'] : '' }}" coord="BY14" />
        <x-table.td type="input" value="{{ $data->has('BZ14') ? $data['BZ14'] : '' }}" coord="BZ14" />
        <x-table.td type="input" value="{{ $data->has('CA14') ? $data['CA14'] : '' }}" coord="CA14" />
        <x-table.td type="input" value="{{ $data->has('CB14') ? $data['CB14'] : '' }}" coord="CB14" />
        <x-table.td type="input" value="{{ $data->has('CC14') ? $data['CC14'] : '' }}" coord="CC14" />
        <x-table.td type="input" value="{{ $data->has('CD14') ? $data['CD14'] : '' }}" coord="CD14" />
        <x-table.td type="input" value="{{ $data->has('CE14') ? $data['CE14'] : '' }}" coord="CE14" />
        <x-table.td type="input" value="{{ $data->has('CF14') ? $data['CF14'] : '' }}" coord="CF14" />
        <x-table.td type="input" value="{{ $data->has('CG14') ? $data['CG14'] : '' }}" coord="CG14" />
        <x-table.td type="input" value="{{ $data->has('CH14') ? $data['CH14'] : '' }}" coord="CH14" />
    </tr>
    <tr>
        <x-table.td type="header" value="болезни крови, кроветворных органов и отдельные нарушения, вовлекающие имунный механизм, из них: D50 - D89" />
        <x-table.td type="header" value="08" />
        <x-table.td type="input" value="{{ $data->has('BT15') ? $data['BT15'] : '' }}" coord="BT15" />
        <x-table.td type="input" value="{{ $data->has('BU15') ? $data['BU15'] : '' }}" coord="BU15" />
        <x-table.td type="input" value="{{ $data->has('BV15') ? $data['BV15'] : '' }}" coord="BV15" />
        <x-table.td type="input" value="{{ $data->has('BW15') ? $data['BW15'] : '' }}" coord="BW15" />
        <x-table.td type="input" value="{{ $data->has('BX15') ? $data['BX15'] : '' }}" coord="BX15" />
        <x-table.td type="input" value="{{ $data->has('BY15') ? $data['BY15'] : '' }}" coord="BY15" />
        <x-table.td type="input" value="{{ $data->has('BZ15') ? $data['BZ15'] : '' }}" coord="BZ15" />
        <x-table.td type="input" value="{{ $data->has('CA15') ? $data['CA15'] : '' }}" coord="CA15" />
        <x-table.td type="input" value="{{ $data->has('CB15') ? $data['CB15'] : '' }}" coord="CB15" />
        <x-table.td type="input" value="{{ $data->has('CC15') ? $data['CC15'] : '' }}" coord="CC15" />
        <x-table.td type="input" value="{{ $data->has('CD15') ? $data['CD15'] : '' }}" coord="CD15" />
        <x-table.td type="input" value="{{ $data->has('CE15') ? $data['CE15'] : '' }}" coord="CE15" />
        <x-table.td type="input" value="{{ $data->has('CF15') ? $data['CF15'] : '' }}" coord="CF15" />
        <x-table.td type="input" value="{{ $data->has('CG15') ? $data['CG15'] : '' }}" coord="CG15" />
        <x-table.td type="input" value="{{ $data->has('CH15') ? $data['CH15'] : '' }}" coord="CH15" />
    </tr>
    <tr>
        <x-table.td type="header" value="нарушения свертываемости крови, пурпура и другие гепорррагические состояния: D65 - D69" />
        <x-table.td type="header" value="09" />
        <x-table.td type="input" value="{{ $data->has('BT16') ? $data['BT16'] : '' }}" coord="BT16" />
        <x-table.td type="input" value="{{ $data->has('BU16') ? $data['BU16'] : '' }}" coord="BU16" />
        <x-table.td type="input" value="{{ $data->has('BV16') ? $data['BV16'] : '' }}" coord="BV16" />
        <x-table.td type="input" value="{{ $data->has('BW16') ? $data['BW16'] : '' }}" coord="BW16" />
        <x-table.td type="input" value="{{ $data->has('BX16') ? $data['BX16'] : '' }}" coord="BX16" />
        <x-table.td type="input" value="{{ $data->has('BY16') ? $data['BY16'] : '' }}" coord="BY16" />
        <x-table.td type="input" value="{{ $data->has('BZ16') ? $data['BZ16'] : '' }}" coord="BZ16" />
        <x-table.td type="input" value="{{ $data->has('CA16') ? $data['CA16'] : '' }}" coord="CA16" />
        <x-table.td type="input" value="{{ $data->has('CB16') ? $data['CB16'] : '' }}" coord="CB16" />
        <x-table.td type="input" value="{{ $data->has('CC16') ? $data['CC16'] : '' }}" coord="CC16" />
        <x-table.td type="input" value="{{ $data->has('CD16') ? $data['CD16'] : '' }}" coord="CD16" />
        <x-table.td type="input" value="{{ $data->has('CE16') ? $data['CE16'] : '' }}" coord="CE16" />
        <x-table.td type="input" value="{{ $data->has('CF16') ? $data['CF16'] : '' }}" coord="CF16" />
        <x-table.td type="input" value="{{ $data->has('CG16') ? $data['CG16'] : '' }}" coord="CG16" />
        <x-table.td type="input" value="{{ $data->has('CH16') ? $data['CH16'] : '' }}" coord="CH16" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезни эндокринной системы, расстройства питания и нарушения обмена веществ, из них: E00 - E90" />
        <x-table.td type="header" value="10" />
        <x-table.td type="input" value="{{ $data->has('BT17') ? $data['BT17'] : '' }}" coord="BT17" />
        <x-table.td type="input" value="{{ $data->has('BU17') ? $data['BU17'] : '' }}" coord="BU17" />
        <x-table.td type="input" value="{{ $data->has('BV17') ? $data['BV17'] : '' }}" coord="BV17" />
        <x-table.td type="input" value="{{ $data->has('BW17') ? $data['BW17'] : '' }}" coord="BW17" />
        <x-table.td type="input" value="{{ $data->has('BX17') ? $data['BX17'] : '' }}" coord="BX17" />
        <x-table.td type="input" value="{{ $data->has('BY17') ? $data['BY17'] : '' }}" coord="BY17" />
        <x-table.td type="input" value="{{ $data->has('BZ17') ? $data['BZ17'] : '' }}" coord="BZ17" />
        <x-table.td type="input" value="{{ $data->has('CA17') ? $data['CA17'] : '' }}" coord="CA17" />
        <x-table.td type="input" value="{{ $data->has('CB17') ? $data['CB17'] : '' }}" coord="CB17" />
        <x-table.td type="input" value="{{ $data->has('CC17') ? $data['CC17'] : '' }}" coord="CC17" />
        <x-table.td type="input" value="{{ $data->has('CD17') ? $data['CD17'] : '' }}" coord="CD17" />
        <x-table.td type="input" value="{{ $data->has('CE17') ? $data['CE17'] : '' }}" coord="CE17" />
        <x-table.td type="input" value="{{ $data->has('CF17') ? $data['CF17'] : '' }}" coord="CF17" />
        <x-table.td type="input" value="{{ $data->has('CG17') ? $data['CG17'] : '' }}" coord="CG17" />
        <x-table.td type="input" value="{{ $data->has('CH17') ? $data['CH17'] : '' }}" coord="CH17" />
    </tr>
    <tr>
        <x-table.td type="header" value="болезни щитовидной железы: E00 - E07" />
        <x-table.td type="header" value="11" />
        <x-table.td type="input" value="{{ $data->has('BT18') ? $data['BT18'] : '' }}" coord="BT18" />
        <x-table.td type="input" value="{{ $data->has('BU18') ? $data['BU18'] : '' }}" coord="BU18" />
        <x-table.td type="input" value="{{ $data->has('BV18') ? $data['BV18'] : '' }}" coord="BV18" />
        <x-table.td type="input" value="{{ $data->has('BW18') ? $data['BW18'] : '' }}" coord="BW18" />
        <x-table.td type="input" value="{{ $data->has('BX18') ? $data['BX18'] : '' }}" coord="BX18" />
        <x-table.td type="input" value="{{ $data->has('BY18') ? $data['BY18'] : '' }}" coord="BY18" />
        <x-table.td type="input" value="{{ $data->has('BZ18') ? $data['BZ18'] : '' }}" coord="BZ18" />
        <x-table.td type="input" value="{{ $data->has('CA18') ? $data['CA18'] : '' }}" coord="CA18" />
        <x-table.td type="input" value="{{ $data->has('CB18') ? $data['CB18'] : '' }}" coord="CB18" />
        <x-table.td type="input" value="{{ $data->has('CC18') ? $data['CC18'] : '' }}" coord="CC18" />
        <x-table.td type="input" value="{{ $data->has('CD18') ? $data['CD18'] : '' }}" coord="CD18" />
        <x-table.td type="input" value="{{ $data->has('CE18') ? $data['CE18'] : '' }}" coord="CE18" />
        <x-table.td type="input" value="{{ $data->has('CF18') ? $data['CF18'] : '' }}" coord="CF18" />
        <x-table.td type="input" value="{{ $data->has('CG18') ? $data['CG18'] : '' }}" coord="CG18" />
        <x-table.td type="input" value="{{ $data->has('CH18') ? $data['CH18'] : '' }}" coord="CH18" />
    </tr>
    <tr>
        <x-table.td type="header" value="сахарный диабет: E10 - E14" />
        <x-table.td type="header" value="12" />
        <x-table.td type="input" value="{{ $data->has('BT19') ? $data['BT19'] : '' }}" coord="BT19" />
        <x-table.td type="input" value="{{ $data->has('BU19') ? $data['BU19'] : '' }}" coord="BU19" />
        <x-table.td type="input" value="{{ $data->has('BV19') ? $data['BV19'] : '' }}" coord="BV19" />
        <x-table.td type="input" value="{{ $data->has('BW19') ? $data['BW19'] : '' }}" coord="BW19" />
        <x-table.td type="input" value="{{ $data->has('BX19') ? $data['BX19'] : '' }}" coord="BX19" />
        <x-table.td type="input" value="{{ $data->has('BY19') ? $data['BY19'] : '' }}" coord="BY19" />
        <x-table.td type="input" value="{{ $data->has('BZ19') ? $data['BZ19'] : '' }}" coord="BZ19" />
        <x-table.td type="input" value="{{ $data->has('CA19') ? $data['CA19'] : '' }}" coord="CA19" />
        <x-table.td type="input" value="{{ $data->has('CB19') ? $data['CB19'] : '' }}" coord="CB19" />
        <x-table.td type="input" value="{{ $data->has('CC19') ? $data['CC19'] : '' }}" coord="CC19" />
        <x-table.td type="input" value="{{ $data->has('CD19') ? $data['CD19'] : '' }}" coord="CD19" />
        <x-table.td type="input" value="{{ $data->has('CE19') ? $data['CE19'] : '' }}" coord="CE19" />
        <x-table.td type="input" value="{{ $data->has('CF19') ? $data['CF19'] : '' }}" coord="CF19" />
        <x-table.td type="input" value="{{ $data->has('CG19') ? $data['CG19'] : '' }}" coord="CG19" />
        <x-table.td type="input" value="{{ $data->has('CH19') ? $data['CH19'] : '' }}" coord="CH19" />
    </tr>
    <tr>
        <x-table.td type="header" value="Психические расстройства и расстройства поведения, из них: F00 - F99" />
        <x-table.td type="header" value="13" />
        <x-table.td type="input" value="{{ $data->has('BT20') ? $data['BT20'] : '' }}" coord="BT20" />
        <x-table.td type="input" value="{{ $data->has('BU20') ? $data['BU20'] : '' }}" coord="BU20" />
        <x-table.td type="input" value="{{ $data->has('BV20') ? $data['BV20'] : '' }}" coord="BV20" />
        <x-table.td type="input" value="{{ $data->has('BW20') ? $data['BW20'] : '' }}" coord="BW20" />
        <x-table.td type="input" value="{{ $data->has('BX20') ? $data['BX20'] : '' }}" coord="BX20" />
        <x-table.td type="input" value="{{ $data->has('BY20') ? $data['BY20'] : '' }}" coord="BY20" />
        <x-table.td type="input" value="{{ $data->has('BZ20') ? $data['BZ20'] : '' }}" coord="BZ20" />
        <x-table.td type="input" value="{{ $data->has('CA20') ? $data['CA20'] : '' }}" coord="CA20" />
        <x-table.td type="input" value="{{ $data->has('CB20') ? $data['CB20'] : '' }}" coord="CB20" />
        <x-table.td type="input" value="{{ $data->has('CC20') ? $data['CC20'] : '' }}" coord="CC20" />
        <x-table.td type="input" value="{{ $data->has('CD20') ? $data['CD20'] : '' }}" coord="CD20" />
        <x-table.td type="input" value="{{ $data->has('CE20') ? $data['CE20'] : '' }}" coord="CE20" />
        <x-table.td type="input" value="{{ $data->has('CF20') ? $data['CF20'] : '' }}" coord="CF20" />
        <x-table.td type="input" value="{{ $data->has('CG20') ? $data['CG20'] : '' }}" coord="CG20" />
        <x-table.td type="input" value="{{ $data->has('CH20') ? $data['CH20'] : '' }}" coord="CH20" />
    </tr>
    <tr>
        <x-table.td type="header" value="умственная отсталость:F70 - F79" />
        <x-table.td type="header" value="14" />
        <x-table.td type="input" value="{{ $data->has('BT21') ? $data['BT21'] : '' }}" coord="BT21" />
        <x-table.td type="input" value="{{ $data->has('BU21') ? $data['BU21'] : '' }}" coord="BU21" />
        <x-table.td type="input" value="{{ $data->has('BV21') ? $data['BV21'] : '' }}" coord="BV21" />
        <x-table.td type="input" value="{{ $data->has('BW21') ? $data['BW21'] : '' }}" coord="BW21" />
        <x-table.td type="input" value="{{ $data->has('BX21') ? $data['BX21'] : '' }}" coord="BX21" />
        <x-table.td type="input" value="{{ $data->has('BY21') ? $data['BY21'] : '' }}" coord="BY21" />
        <x-table.td type="input" value="{{ $data->has('BZ21') ? $data['BZ21'] : '' }}" coord="BZ21" />
        <x-table.td type="input" value="{{ $data->has('CA21') ? $data['CA21'] : '' }}" coord="CA21" />
        <x-table.td type="input" value="{{ $data->has('CB21') ? $data['CB21'] : '' }}" coord="CB21" />
        <x-table.td type="input" value="{{ $data->has('CC21') ? $data['CC21'] : '' }}" coord="CC21" />
        <x-table.td type="input" value="{{ $data->has('CD21') ? $data['CD21'] : '' }}" coord="CD21" />
        <x-table.td type="input" value="{{ $data->has('CE21') ? $data['CE21'] : '' }}" coord="CE21" />
        <x-table.td type="input" value="{{ $data->has('CF21') ? $data['CF21'] : '' }}" coord="CF21" />
        <x-table.td type="input" value="{{ $data->has('CG21') ? $data['CG21'] : '' }}" coord="CG21" />
        <x-table.td type="input" value="{{ $data->has('CH21') ? $data['CH21'] : '' }}" coord="CH21" />
    </tr>
    <tr>
        <x-table.td type="header" value="детский аутизм, атипичный аутизм, синдром Ретта, дезинтегративное расстройство детского возраста:F84.0-3" />
        <x-table.td type="header" value="15" />
        <x-table.td type="input" value="{{ $data->has('BT22') ? $data['BT22'] : '' }}" coord="BT22" />
        <x-table.td type="input" value="{{ $data->has('BU22') ? $data['BU22'] : '' }}" coord="BU22" />
        <x-table.td type="input" value="{{ $data->has('BV22') ? $data['BV22'] : '' }}" coord="BV22" />
        <x-table.td type="input" value="{{ $data->has('BW22') ? $data['BW22'] : '' }}" coord="BW22" />
        <x-table.td type="input" value="{{ $data->has('BX22') ? $data['BX22'] : '' }}" coord="BX22" />
        <x-table.td type="input" value="{{ $data->has('BY22') ? $data['BY22'] : '' }}" coord="BY22" />
        <x-table.td type="input" value="{{ $data->has('BZ22') ? $data['BZ22'] : '' }}" coord="BZ22" />
        <x-table.td type="input" value="{{ $data->has('CA22') ? $data['CA22'] : '' }}" coord="CA22" />
        <x-table.td type="input" value="{{ $data->has('CB22') ? $data['CB22'] : '' }}" coord="CB22" />
        <x-table.td type="input" value="{{ $data->has('CC22') ? $data['CC22'] : '' }}" coord="CC22" />
        <x-table.td type="input" value="{{ $data->has('CD22') ? $data['CD22'] : '' }}" coord="CD22" />
        <x-table.td type="input" value="{{ $data->has('CE22') ? $data['CE22'] : '' }}" coord="CE22" />
        <x-table.td type="input" value="{{ $data->has('CF22') ? $data['CF22'] : '' }}" coord="CF22" />
        <x-table.td type="input" value="{{ $data->has('CG22') ? $data['CG22'] : '' }}" coord="CG22" />
        <x-table.td type="input" value="{{ $data->has('CH22') ? $data['CH22'] : '' }}" coord="CH22" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезни нервной системы, из них: G00 - G99" />
        <x-table.td type="header" value="16" />
        <x-table.td type="input" value="{{ $data->has('BT23') ? $data['BT23'] : '' }}" coord="BT23" />
        <x-table.td type="input" value="{{ $data->has('BU23') ? $data['BU23'] : '' }}" coord="BU23" />
        <x-table.td type="input" value="{{ $data->has('BV23') ? $data['BV23'] : '' }}" coord="BV23" />
        <x-table.td type="input" value="{{ $data->has('BW23') ? $data['BW23'] : '' }}" coord="BW23" />
        <x-table.td type="input" value="{{ $data->has('BX23') ? $data['BX23'] : '' }}" coord="BX23" />
        <x-table.td type="input" value="{{ $data->has('BY23') ? $data['BY23'] : '' }}" coord="BY23" />
        <x-table.td type="input" value="{{ $data->has('BZ23') ? $data['BZ23'] : '' }}" coord="BZ23" />
        <x-table.td type="input" value="{{ $data->has('CA23') ? $data['CA23'] : '' }}" coord="CA23" />
        <x-table.td type="input" value="{{ $data->has('CB23') ? $data['CB23'] : '' }}" coord="CB23" />
        <x-table.td type="input" value="{{ $data->has('CC23') ? $data['CC23'] : '' }}" coord="CC23" />
        <x-table.td type="input" value="{{ $data->has('CD23') ? $data['CD23'] : '' }}" coord="CD23" />
        <x-table.td type="input" value="{{ $data->has('CE23') ? $data['CE23'] : '' }}" coord="CE23" />
        <x-table.td type="input" value="{{ $data->has('CF23') ? $data['CF23'] : '' }}" coord="CF23" />
        <x-table.td type="input" value="{{ $data->has('CG23') ? $data['CG23'] : '' }}" coord="CG23" />
        <x-table.td type="input" value="{{ $data->has('CH23') ? $data['CH23'] : '' }}" coord="CH23" />
    </tr>
    <tr>
        <x-table.td type="header" value="воспалительные болезни центральной нервной системы:G00-G09" />
        <x-table.td type="header" value="17" />
        <x-table.td type="input" value="{{ $data->has('BT24') ? $data['BT24'] : '' }}" coord="BT24" />
        <x-table.td type="input" value="{{ $data->has('BU24') ? $data['BU24'] : '' }}" coord="BU24" />
        <x-table.td type="input" value="{{ $data->has('BV24') ? $data['BV24'] : '' }}" coord="BV24" />
        <x-table.td type="input" value="{{ $data->has('BW24') ? $data['BW24'] : '' }}" coord="BW24" />
        <x-table.td type="input" value="{{ $data->has('BX24') ? $data['BX24'] : '' }}" coord="BX24" />
        <x-table.td type="input" value="{{ $data->has('BY24') ? $data['BY24'] : '' }}" coord="BY24" />
        <x-table.td type="input" value="{{ $data->has('BZ24') ? $data['BZ24'] : '' }}" coord="BZ24" />
        <x-table.td type="input" value="{{ $data->has('CA24') ? $data['CA24'] : '' }}" coord="CA24" />
        <x-table.td type="input" value="{{ $data->has('CB24') ? $data['CB24'] : '' }}" coord="CB24" />
        <x-table.td type="input" value="{{ $data->has('CC24') ? $data['CC24'] : '' }}" coord="CC24" />
        <x-table.td type="input" value="{{ $data->has('CD24') ? $data['CD24'] : '' }}" coord="CD24" />
        <x-table.td type="input" value="{{ $data->has('CE24') ? $data['CE24'] : '' }}" coord="CE24" />
        <x-table.td type="input" value="{{ $data->has('CF24') ? $data['CF24'] : '' }}" coord="CF24" />
        <x-table.td type="input" value="{{ $data->has('CG24') ? $data['CG24'] : '' }}" coord="CG24" />
        <x-table.td type="input" value="{{ $data->has('CH24') ? $data['CH24'] : '' }}" coord="CH24" />
    </tr>
    <tr>
        <x-table.td type="header" value="системыне атрофии, поражающие преимущественно центральную нервную систему:G10-G13" />
        <x-table.td type="header" value="18" />
        <x-table.td type="input" value="{{ $data->has('BT25') ? $data['BT25'] : '' }}" coord="BT25" />
        <x-table.td type="input" value="{{ $data->has('BU25') ? $data['BU25'] : '' }}" coord="BU25" />
        <x-table.td type="input" value="{{ $data->has('BV25') ? $data['BV25'] : '' }}" coord="BV25" />
        <x-table.td type="input" value="{{ $data->has('BW25') ? $data['BW25'] : '' }}" coord="BW25" />
        <x-table.td type="input" value="{{ $data->has('BX25') ? $data['BX25'] : '' }}" coord="BX25" />
        <x-table.td type="input" value="{{ $data->has('BY25') ? $data['BY25'] : '' }}" coord="BY25" />
        <x-table.td type="input" value="{{ $data->has('BZ25') ? $data['BZ25'] : '' }}" coord="BZ25" />
        <x-table.td type="input" value="{{ $data->has('CA25') ? $data['CA25'] : '' }}" coord="CA25" />
        <x-table.td type="input" value="{{ $data->has('CB25') ? $data['CB25'] : '' }}" coord="CB25" />
        <x-table.td type="input" value="{{ $data->has('CC25') ? $data['CC25'] : '' }}" coord="CC25" />
        <x-table.td type="input" value="{{ $data->has('CD25') ? $data['CD25'] : '' }}" coord="CD25" />
        <x-table.td type="input" value="{{ $data->has('CE25') ? $data['CE25'] : '' }}" coord="CE25" />
        <x-table.td type="input" value="{{ $data->has('CF25') ? $data['CF25'] : '' }}" coord="CF25" />
        <x-table.td type="input" value="{{ $data->has('CG25') ? $data['CG25'] : '' }}" coord="CG25" />
        <x-table.td type="input" value="{{ $data->has('CH25') ? $data['CH25'] : '' }}" coord="CH25" />
    </tr>
    <tr>
        <x-table.td type="header" value="эпизодические и пароксизмальные расстройства:G40-G47" />
        <x-table.td type="header" value="19" />
        <x-table.td type="input" value="{{ $data->has('BT26') ? $data['BT26'] : '' }}" coord="BT26" />
        <x-table.td type="input" value="{{ $data->has('BU26') ? $data['BU26'] : '' }}" coord="BU26" />
        <x-table.td type="input" value="{{ $data->has('BV26') ? $data['BV26'] : '' }}" coord="BV26" />
        <x-table.td type="input" value="{{ $data->has('BW26') ? $data['BW26'] : '' }}" coord="BW26" />
        <x-table.td type="input" value="{{ $data->has('BX26') ? $data['BX26'] : '' }}" coord="BX26" />
        <x-table.td type="input" value="{{ $data->has('BY26') ? $data['BY26'] : '' }}" coord="BY26" />
        <x-table.td type="input" value="{{ $data->has('BZ26') ? $data['BZ26'] : '' }}" coord="BZ26" />
        <x-table.td type="input" value="{{ $data->has('CA26') ? $data['CA26'] : '' }}" coord="CA26" />
        <x-table.td type="input" value="{{ $data->has('CB26') ? $data['CB26'] : '' }}" coord="CB26" />
        <x-table.td type="input" value="{{ $data->has('CC26') ? $data['CC26'] : '' }}" coord="CC26" />
        <x-table.td type="input" value="{{ $data->has('CD26') ? $data['CD26'] : '' }}" coord="CD26" />
        <x-table.td type="input" value="{{ $data->has('CE26') ? $data['CE26'] : '' }}" coord="CE26" />
        <x-table.td type="input" value="{{ $data->has('CF26') ? $data['CF26'] : '' }}" coord="CF26" />
        <x-table.td type="input" value="{{ $data->has('CG26') ? $data['CG26'] : '' }}" coord="CG26" />
        <x-table.td type="input" value="{{ $data->has('CH26') ? $data['CH26'] : '' }}" coord="CH26" />
    </tr>
    <tr>
        <x-table.td type="header" value="церебральный паралич и другие паралитические синдромы:G80 - G83" />
        <x-table.td type="header" value="20" />
        <x-table.td type="input" value="{{ $data->has('BT27') ? $data['BT27'] : '' }}" coord="BT27" />
        <x-table.td type="input" value="{{ $data->has('BU27') ? $data['BU27'] : '' }}" coord="BU27" />
        <x-table.td type="input" value="{{ $data->has('BV27') ? $data['BV27'] : '' }}" coord="BV27" />
        <x-table.td type="input" value="{{ $data->has('BW27') ? $data['BW27'] : '' }}" coord="BW27" />
        <x-table.td type="input" value="{{ $data->has('BX27') ? $data['BX27'] : '' }}" coord="BX27" />
        <x-table.td type="input" value="{{ $data->has('BY27') ? $data['BY27'] : '' }}" coord="BY27" />
        <x-table.td type="input" value="{{ $data->has('BZ27') ? $data['BZ27'] : '' }}" coord="BZ27" />
        <x-table.td type="input" value="{{ $data->has('CA27') ? $data['CA27'] : '' }}" coord="CA27" />
        <x-table.td type="input" value="{{ $data->has('CB27') ? $data['CB27'] : '' }}" coord="CB27" />
        <x-table.td type="input" value="{{ $data->has('CC27') ? $data['CC27'] : '' }}" coord="CC27" />
        <x-table.td type="input" value="{{ $data->has('CD27') ? $data['CD27'] : '' }}" coord="CD27" />
        <x-table.td type="input" value="{{ $data->has('CE27') ? $data['CE27'] : '' }}" coord="CE27" />
        <x-table.td type="input" value="{{ $data->has('CF27') ? $data['CF27'] : '' }}" coord="CF27" />
        <x-table.td type="input" value="{{ $data->has('CG27') ? $data['CG27'] : '' }}" coord="CG27" />
        <x-table.td type="input" value="{{ $data->has('CH27') ? $data['CH27'] : '' }}" coord="CH27" />
    </tr>
    <tr>
        <x-table.td type="header" value="другие нарушения нервной системы:G90-G99" />
        <x-table.td type="header" value="21" />
        <x-table.td type="input" value="{{ $data->has('BT28') ? $data['BT28'] : '' }}" coord="BT28" />
        <x-table.td type="input" value="{{ $data->has('BU28') ? $data['BU28'] : '' }}" coord="BU28" />
        <x-table.td type="input" value="{{ $data->has('BV28') ? $data['BV28'] : '' }}" coord="BV28" />
        <x-table.td type="input" value="{{ $data->has('BW28') ? $data['BW28'] : '' }}" coord="BW28" />
        <x-table.td type="input" value="{{ $data->has('BX28') ? $data['BX28'] : '' }}" coord="BX28" />
        <x-table.td type="input" value="{{ $data->has('BY28') ? $data['BY28'] : '' }}" coord="BY28" />
        <x-table.td type="input" value="{{ $data->has('BZ28') ? $data['BZ28'] : '' }}" coord="BZ28" />
        <x-table.td type="input" value="{{ $data->has('CA28') ? $data['CA28'] : '' }}" coord="CA28" />
        <x-table.td type="input" value="{{ $data->has('CB28') ? $data['CB28'] : '' }}" coord="CB28" />
        <x-table.td type="input" value="{{ $data->has('CC28') ? $data['CC28'] : '' }}" coord="CC28" />
        <x-table.td type="input" value="{{ $data->has('CD28') ? $data['CD28'] : '' }}" coord="CD28" />
        <x-table.td type="input" value="{{ $data->has('CE28') ? $data['CE28'] : '' }}" coord="CE28" />
        <x-table.td type="input" value="{{ $data->has('CF28') ? $data['CF28'] : '' }}" coord="CF28" />
        <x-table.td type="input" value="{{ $data->has('CG28') ? $data['CG28'] : '' }}" coord="CG28" />
        <x-table.td type="input" value="{{ $data->has('CH28') ? $data['CH28'] : '' }}" coord="CH28" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезни глаза и его придаточного аппарата, из них H00 - H59:" />
        <x-table.td type="header" value="22" />
        <x-table.td type="input" value="{{ $data->has('BT29') ? $data['BT29'] : '' }}" coord="BT29" />
        <x-table.td type="input" value="{{ $data->has('BU29') ? $data['BU29'] : '' }}" coord="BU29" />
        <x-table.td type="input" value="{{ $data->has('BV29') ? $data['BV29'] : '' }}" coord="BV29" />
        <x-table.td type="input" value="{{ $data->has('BW29') ? $data['BW29'] : '' }}" coord="BW29" />
        <x-table.td type="input" value="{{ $data->has('BX29') ? $data['BX29'] : '' }}" coord="BX29" />
        <x-table.td type="input" value="{{ $data->has('BY29') ? $data['BY29'] : '' }}" coord="BY29" />
        <x-table.td type="input" value="{{ $data->has('BZ29') ? $data['BZ29'] : '' }}" coord="BZ29" />
        <x-table.td type="input" value="{{ $data->has('CA29') ? $data['CA29'] : '' }}" coord="CA29" />
        <x-table.td type="input" value="{{ $data->has('CB29') ? $data['CB29'] : '' }}" coord="CB29" />
        <x-table.td type="input" value="{{ $data->has('CC29') ? $data['CC29'] : '' }}" coord="CC29" />
        <x-table.td type="input" value="{{ $data->has('CD29') ? $data['CD29'] : '' }}" coord="CD29" />
        <x-table.td type="input" value="{{ $data->has('CE29') ? $data['CE29'] : '' }}" coord="CE29" />
        <x-table.td type="input" value="{{ $data->has('CF29') ? $data['CF29'] : '' }}" coord="CF29" />
        <x-table.td type="input" value="{{ $data->has('CG29') ? $data['CG29'] : '' }}" coord="CG29" />
        <x-table.td type="input" value="{{ $data->has('CH29') ? $data['CH29'] : '' }}" coord="CH29" />
    </tr>
    <tr>
        <x-table.td type="header" value="слепота обоих глаз H54.0" />
        <x-table.td type="header" value="23" />
        <x-table.td type="input" value="{{ $data->has('BT30') ? $data['BT30'] : '' }}" coord="BT30" />
        <x-table.td type="input" value="{{ $data->has('BU30') ? $data['BU30'] : '' }}" coord="BU30" />
        <x-table.td type="input" value="{{ $data->has('BV30') ? $data['BV30'] : '' }}" coord="BV30" />
        <x-table.td type="input" value="{{ $data->has('BW30') ? $data['BW30'] : '' }}" coord="BW30" />
        <x-table.td type="input" value="{{ $data->has('BX30') ? $data['BX30'] : '' }}" coord="BX30" />
        <x-table.td type="input" value="{{ $data->has('BY30') ? $data['BY30'] : '' }}" coord="BY30" />
        <x-table.td type="input" value="{{ $data->has('BZ30') ? $data['BZ30'] : '' }}" coord="BZ30" />
        <x-table.td type="input" value="{{ $data->has('CA30') ? $data['CA30'] : '' }}" coord="CA30" />
        <x-table.td type="input" value="{{ $data->has('CB30') ? $data['CB30'] : '' }}" coord="CB30" />
        <x-table.td type="input" value="{{ $data->has('CC30') ? $data['CC30'] : '' }}" coord="CC30" />
        <x-table.td type="input" value="{{ $data->has('CD30') ? $data['CD30'] : '' }}" coord="CD30" />
        <x-table.td type="input" value="{{ $data->has('CE30') ? $data['CE30'] : '' }}" coord="CE30" />
        <x-table.td type="input" value="{{ $data->has('CF30') ? $data['CF30'] : '' }}" coord="CF30" />
        <x-table.td type="input" value="{{ $data->has('CG30') ? $data['CG30'] : '' }}" coord="CG30" />
        <x-table.td type="input" value="{{ $data->has('CH30') ? $data['CH30'] : '' }}" coord="CH30" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезни уха и сосцевидного отростка, из них: H60 - H95" />
        <x-table.td type="header" value="24" />
        <x-table.td type="input" value="{{ $data->has('BT31') ? $data['BT31'] : '' }}" coord="BT31" />
        <x-table.td type="input" value="{{ $data->has('BU31') ? $data['BU31'] : '' }}" coord="BU31" />
        <x-table.td type="input" value="{{ $data->has('BV31') ? $data['BV31'] : '' }}" coord="BV31" />
        <x-table.td type="input" value="{{ $data->has('BW31') ? $data['BW31'] : '' }}" coord="BW31" />
        <x-table.td type="input" value="{{ $data->has('BX31') ? $data['BX31'] : '' }}" coord="BX31" />
        <x-table.td type="input" value="{{ $data->has('BY31') ? $data['BY31'] : '' }}" coord="BY31" />
        <x-table.td type="input" value="{{ $data->has('BZ31') ? $data['BZ31'] : '' }}" coord="BZ31" />
        <x-table.td type="input" value="{{ $data->has('CA31') ? $data['CA31'] : '' }}" coord="CA31" />
        <x-table.td type="input" value="{{ $data->has('CB31') ? $data['CB31'] : '' }}" coord="CB31" />
        <x-table.td type="input" value="{{ $data->has('CC31') ? $data['CC31'] : '' }}" coord="CC31" />
        <x-table.td type="input" value="{{ $data->has('CD31') ? $data['CD31'] : '' }}" coord="CD31" />
        <x-table.td type="input" value="{{ $data->has('CE31') ? $data['CE31'] : '' }}" coord="CE31" />
        <x-table.td type="input" value="{{ $data->has('CF31') ? $data['CF31'] : '' }}" coord="CF31" />
        <x-table.td type="input" value="{{ $data->has('CG31') ? $data['CG31'] : '' }}" coord="CG31" />
        <x-table.td type="input" value="{{ $data->has('CH31') ? $data['CH31'] : '' }}" coord="CH31" />
    </tr>
    <tr>
        <x-table.td type="header" value="кондуктивная потеря слуха двусторонняя: H90" />
        <x-table.td type="header" value="25" />
        <x-table.td type="input" value="{{ $data->has('BT32') ? $data['BT32'] : '' }}" coord="BT32" />
        <x-table.td type="input" value="{{ $data->has('BU32') ? $data['BU32'] : '' }}" coord="BU32" />
        <x-table.td type="input" value="{{ $data->has('BV32') ? $data['BV32'] : '' }}" coord="BV32" />
        <x-table.td type="input" value="{{ $data->has('BW32') ? $data['BW32'] : '' }}" coord="BW32" />
        <x-table.td type="input" value="{{ $data->has('BX32') ? $data['BX32'] : '' }}" coord="BX32" />
        <x-table.td type="input" value="{{ $data->has('BY32') ? $data['BY32'] : '' }}" coord="BY32" />
        <x-table.td type="input" value="{{ $data->has('BZ32') ? $data['BZ32'] : '' }}" coord="BZ32" />
        <x-table.td type="input" value="{{ $data->has('CA32') ? $data['CA32'] : '' }}" coord="CA32" />
        <x-table.td type="input" value="{{ $data->has('CB32') ? $data['CB32'] : '' }}" coord="CB32" />
        <x-table.td type="input" value="{{ $data->has('CC32') ? $data['CC32'] : '' }}" coord="CC32" />
        <x-table.td type="input" value="{{ $data->has('CD32') ? $data['CD32'] : '' }}" coord="CD32" />
        <x-table.td type="input" value="{{ $data->has('CE32') ? $data['CE32'] : '' }}" coord="CE32" />
        <x-table.td type="input" value="{{ $data->has('CF32') ? $data['CF32'] : '' }}" coord="CF32" />
        <x-table.td type="input" value="{{ $data->has('CG32') ? $data['CG32'] : '' }}" coord="CG32" />
        <x-table.td type="input" value="{{ $data->has('CH32') ? $data['CH32'] : '' }}" coord="CH32" />
    </tr>
    <tr>
        <x-table.td type="header" value="нейросенсорная потеря слуха двусторонняя: H90.3" />
        <x-table.td type="header" value="26" />
        <x-table.td type="input" value="{{ $data->has('BT33') ? $data['BT33'] : '' }}" coord="BT33" />
        <x-table.td type="input" value="{{ $data->has('BU33') ? $data['BU33'] : '' }}" coord="BU33" />
        <x-table.td type="input" value="{{ $data->has('BV33') ? $data['BV33'] : '' }}" coord="BV33" />
        <x-table.td type="input" value="{{ $data->has('BW33') ? $data['BW33'] : '' }}" coord="BW33" />
        <x-table.td type="input" value="{{ $data->has('BX33') ? $data['BX33'] : '' }}" coord="BX33" />
        <x-table.td type="input" value="{{ $data->has('BY33') ? $data['BY33'] : '' }}" coord="BY33" />
        <x-table.td type="input" value="{{ $data->has('BZ33') ? $data['BZ33'] : '' }}" coord="BZ33" />
        <x-table.td type="input" value="{{ $data->has('CA33') ? $data['CA33'] : '' }}" coord="CA33" />
        <x-table.td type="input" value="{{ $data->has('CB33') ? $data['CB33'] : '' }}" coord="CB33" />
        <x-table.td type="input" value="{{ $data->has('CC33') ? $data['CC33'] : '' }}" coord="CC33" />
        <x-table.td type="input" value="{{ $data->has('CD33') ? $data['CD33'] : '' }}" coord="CD33" />
        <x-table.td type="input" value="{{ $data->has('CE33') ? $data['CE33'] : '' }}" coord="CE33" />
        <x-table.td type="input" value="{{ $data->has('CF33') ? $data['CF33'] : '' }}" coord="CF33" />
        <x-table.td type="input" value="{{ $data->has('CG33') ? $data['CG33'] : '' }}" coord="CG33" />
        <x-table.td type="input" value="{{ $data->has('CH33') ? $data['CH33'] : '' }}" coord="CH33" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезни системы кровообращения: I00 - I99" />
        <x-table.td type="header" value="27" />
        <x-table.td type="input" value="{{ $data->has('BT34') ? $data['BT34'] : '' }}" coord="BT34" />
        <x-table.td type="input" value="{{ $data->has('BU34') ? $data['BU34'] : '' }}" coord="BU34" />
        <x-table.td type="input" value="{{ $data->has('BV34') ? $data['BV34'] : '' }}" coord="BV34" />
        <x-table.td type="input" value="{{ $data->has('BW34') ? $data['BW34'] : '' }}" coord="BW34" />
        <x-table.td type="input" value="{{ $data->has('BX34') ? $data['BX34'] : '' }}" coord="BX34" />
        <x-table.td type="input" value="{{ $data->has('BY34') ? $data['BY34'] : '' }}" coord="BY34" />
        <x-table.td type="input" value="{{ $data->has('BZ34') ? $data['BZ34'] : '' }}" coord="BZ34" />
        <x-table.td type="input" value="{{ $data->has('CA34') ? $data['CA34'] : '' }}" coord="CA34" />
        <x-table.td type="input" value="{{ $data->has('CB34') ? $data['CB34'] : '' }}" coord="CB34" />
        <x-table.td type="input" value="{{ $data->has('CC34') ? $data['CC34'] : '' }}" coord="CC34" />
        <x-table.td type="input" value="{{ $data->has('CD34') ? $data['CD34'] : '' }}" coord="CD34" />
        <x-table.td type="input" value="{{ $data->has('CE34') ? $data['CE34'] : '' }}" coord="CE34" />
        <x-table.td type="input" value="{{ $data->has('CF34') ? $data['CF34'] : '' }}" coord="CF34" />
        <x-table.td type="input" value="{{ $data->has('CG34') ? $data['CG34'] : '' }}" coord="CG34" />
        <x-table.td type="input" value="{{ $data->has('CH34') ? $data['CH34'] : '' }}" coord="CH34" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезнь органов дыхания, из них: J00 - J99" />
        <x-table.td type="header" value="28" />
        <x-table.td type="input" value="{{ $data->has('BT35') ? $data['BT35'] : '' }}" coord="BT35" />
        <x-table.td type="input" value="{{ $data->has('BU35') ? $data['BU35'] : '' }}" coord="BU35" />
        <x-table.td type="input" value="{{ $data->has('BV35') ? $data['BV35'] : '' }}" coord="BV35" />
        <x-table.td type="input" value="{{ $data->has('BW35') ? $data['BW35'] : '' }}" coord="BW35" />
        <x-table.td type="input" value="{{ $data->has('BX35') ? $data['BX35'] : '' }}" coord="BX35" />
        <x-table.td type="input" value="{{ $data->has('BY35') ? $data['BY35'] : '' }}" coord="BY35" />
        <x-table.td type="input" value="{{ $data->has('BZ35') ? $data['BZ35'] : '' }}" coord="BZ35" />
        <x-table.td type="input" value="{{ $data->has('CA35') ? $data['CA35'] : '' }}" coord="CA35" />
        <x-table.td type="input" value="{{ $data->has('CB35') ? $data['CB35'] : '' }}" coord="CB35" />
        <x-table.td type="input" value="{{ $data->has('CC35') ? $data['CC35'] : '' }}" coord="CC35" />
        <x-table.td type="input" value="{{ $data->has('CD35') ? $data['CD35'] : '' }}" coord="CD35" />
        <x-table.td type="input" value="{{ $data->has('CE35') ? $data['CE35'] : '' }}" coord="CE35" />
        <x-table.td type="input" value="{{ $data->has('CF35') ? $data['CF35'] : '' }}" coord="CF35" />
        <x-table.td type="input" value="{{ $data->has('CG35') ? $data['CG35'] : '' }}" coord="CG35" />
        <x-table.td type="input" value="{{ $data->has('CH35') ? $data['CH35'] : '' }}" coord="CH35" />
    </tr>
    <tr>
        <x-table.td type="header" value="астма, астматический статус: J45, J46" />
        <x-table.td type="header" value="29" />
        <x-table.td type="input" value="{{ $data->has('BT36') ? $data['BT36'] : '' }}" coord="BT36" />
        <x-table.td type="input" value="{{ $data->has('BU36') ? $data['BU36'] : '' }}" coord="BU36" />
        <x-table.td type="input" value="{{ $data->has('BV36') ? $data['BV36'] : '' }}" coord="BV36" />
        <x-table.td type="input" value="{{ $data->has('BW36') ? $data['BW36'] : '' }}" coord="BW36" />
        <x-table.td type="input" value="{{ $data->has('BX36') ? $data['BX36'] : '' }}" coord="BX36" />
        <x-table.td type="input" value="{{ $data->has('BY36') ? $data['BY36'] : '' }}" coord="BY36" />
        <x-table.td type="input" value="{{ $data->has('BZ36') ? $data['BZ36'] : '' }}" coord="BZ36" />
        <x-table.td type="input" value="{{ $data->has('CA36') ? $data['CA36'] : '' }}" coord="CA36" />
        <x-table.td type="input" value="{{ $data->has('CB36') ? $data['CB36'] : '' }}" coord="CB36" />
        <x-table.td type="input" value="{{ $data->has('CC36') ? $data['CC36'] : '' }}" coord="CC36" />
        <x-table.td type="input" value="{{ $data->has('CD36') ? $data['CD36'] : '' }}" coord="CD36" />
        <x-table.td type="input" value="{{ $data->has('CE36') ? $data['CE36'] : '' }}" coord="CE36" />
        <x-table.td type="input" value="{{ $data->has('CF36') ? $data['CF36'] : '' }}" coord="CF36" />
        <x-table.td type="input" value="{{ $data->has('CG36') ? $data['CG36'] : '' }}" coord="CG36" />
        <x-table.td type="input" value="{{ $data->has('CH36') ? $data['CH36'] : '' }}" coord="CH36" />
    </tr>
    <tr>
        <x-table.td type="header" value="Болезни органов пищеварения, из них: K00 - K93" />
        <x-table.td type="header" value="30" />
        <x-table.td type="input" value="{{ $data->has('BT37') ? $data['BT37'] : '' }}" coord="BT37" />
        <x-table.td type="input" value="{{ $data->has('BU37') ? $data['BU37'] : '' }}" coord="BU37" />
        <x-table.td type="input" value="{{ $data->has('BV37') ? $data['BV37'] : '' }}" coord="BV37" />
        <x-table.td type="input" value="{{ $data->has('BW37') ? $data['BW37'] : '' }}" coord="BW37" />
        <x-table.td type="input" value="{{ $data->has('BX37') ? $data['BX37'] : '' }}" coord="BX37" />
        <x-table.td type="input" value="{{ $data->has('BY37') ? $data['BY37'] : '' }}" coord="BY37" />
        <x-table.td type="input" value="{{ $data->has('BZ37') ? $data['BZ37'] : '' }}" coord="BZ37" />
        <x-table.td type="input" value="{{ $data->has('CA37') ? $data['CA37'] : '' }}" coord="CA37" />
        <x-table.td type="input" value="{{ $data->has('CB37') ? $data['CB37'] : '' }}" coord="CB37" />
        <x-table.td type="input" value="{{ $data->has('CC37') ? $data['CC37'] : '' }}" coord="CC37" />
        <x-table.td type="input" value="{{ $data->has('CD37') ? $data['CD37'] : '' }}" coord="CD37" />
        <x-table.td type="input" value="{{ $data->has('CE37') ? $data['CE37'] : '' }}" coord="CE37" />
        <x-table.td type="input" value="{{ $data->has('CF37') ? $data['CF37'] : '' }}" coord="CF37" />
        <x-table.td type="input" value="{{ $data->has('CG37') ? $data['CG37'] : '' }}" coord="CG37" />
        <x-table.td type="input" value="{{ $data->has('CH37') ? $data['CH37'] : '' }}" coord="CH37" />
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
