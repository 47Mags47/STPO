<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th rowspan=3 value="Наименование <br> показателей" />
        <x-table.th rowspan=3 value="№ строки" />
        <x-table.th rowspan=3 value="Всего штатных единиц (сумма граф 6, 12 и 18), ед." />
        <x-table.th rowspan=3 value="Всего занятых штатных единиц (сумма граф 7, 13 и 19), ед." />
        <x-table.th rowspan=3 value="Всего фактически работающих физических лиц (сумма граф 8, 14 и 20), чел." />
        <x-table.th colspan=6
            value="в организациях, предоставляющих услуги (мероприятия) по реабилитации и абилитации инвалидам в возрасте 18 лет и старше" />
        <x-table.th colspan=6
            value="в организациях, предоставляющих услуги (мероприятия) по реабилитации и абилитации детям-инвалидам" />
        <x-table.th colspan=6
            value="в организациях, предоставляющих услуги (мероприятия) по реабилитации и абилитации одновременно инвалидам в возрасте 18 лет и старше и детям-инвалидам" />

    <tr>
        <x-table.th rowspan=2 value="штатные единицы, ставки" />
        <x-table.th rowspan=2 value="занятых штатных единиц, ед." />
        <x-table.th rowspan=2 value="фактически работающих физических лиц, чел." />
        <x-table.th colspan=3 value="в том числе, в многопрофильных реабилитационных центрах" />
        <x-table.th rowspan=2 value="штатные единицы, ставки" />
        <x-table.th rowspan=2 value="занятых штатных единиц,ед." />
        <x-table.th rowspan=2 value="фактически работающих физических лиц, чел." />
        <x-table.th colspan=3 value="в том числе, в многопрофильных реабилитационных центрах" />
        <x-table.th rowspan=2 value="штатные единицы, ставки" />
        <x-table.th rowspan=2 value="фактически работающих физических лиц, чел." />
        <x-table.th rowspan=2 value="в том числе, в многопрофильных реабилитационных центрах" />
        <x-table.th colspan=3 value="штатные единицы, ставки" />
    </tr>
    <tr>
        <x-table.th value="штатные единицы, ставки" />
        <x-table.th value="занятых штатных единиц, ед." />
        <x-table.th value="фактически работающих физических лиц, чел." />
        <x-table.th value="штатные единицы, ставки" />
        <x-table.th value="занятых штатных единиц, ед." />
        <x-table.th value="фактически работающих физических лиц, чел." />
        <x-table.th value="штатные единицы, ставки" />
        <x-table.th value="занятых штатных единиц, ед." />
        <x-table.th value="фактически работающих физических лиц, чел." />
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
        <x-table.th value="19" />
        <x-table.th value="20" />
        <x-table.th value="21" />
        <x-table.th value="22" />
        <x-table.th value="23" />
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header" value="Всего должностей специалистов, из них:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('BF7') ? $data['BF7'] : '' }}" coord="BF7" />
        <x-table.td type="input" value="{{ $data->has('BG7') ? $data['BG7'] : '' }}" coord="BG7" />
        <x-table.td type="input" value="{{ $data->has('BH7') ? $data['BH7'] : '' }}" coord="BH7" />
        <x-table.td type="input" value="{{ $data->has('BI7') ? $data['BI7'] : '' }}" coord="BI7" />
        <x-table.td type="input" value="{{ $data->has('BJ7') ? $data['BJ7'] : '' }}" coord="BJ7" />
        <x-table.td type="input" value="{{ $data->has('BK7') ? $data['BK7'] : '' }}" coord="BK7" />
        <x-table.td type="input" value="{{ $data->has('BL7') ? $data['BL7'] : '' }}" coord="BL7" />
        <x-table.td type="input" value="{{ $data->has('BM7') ? $data['BM7'] : '' }}" coord="BM7" />
        <x-table.td type="input" value="{{ $data->has('BN7') ? $data['BN7'] : '' }}" coord="BN7" />
        <x-table.td type="input" value="{{ $data->has('BO7') ? $data['BO7'] : '' }}" coord="BO7" />
        <x-table.td type="input" value="{{ $data->has('BP7') ? $data['BP7'] : '' }}" coord="BP7" />
        <x-table.td type="input" value="{{ $data->has('BQ7') ? $data['BQ7'] : '' }}" coord="BQ7" />
        <x-table.td type="input" value="{{ $data->has('BR7') ? $data['BR7'] : '' }}" coord="BR7" />
        <x-table.td type="input" value="{{ $data->has('BS7') ? $data['BS7'] : '' }}" coord="BS7" />
        <x-table.td type="input" value="{{ $data->has('BT7') ? $data['BT7'] : '' }}" coord="BT7" />
        <x-table.td type="input" value="{{ $data->has('BU7') ? $data['BU7'] : '' }}" coord="BU7" />
        <x-table.td type="input" value="{{ $data->has('BV7') ? $data['BV7'] : '' }}" coord="BV7" />
        <x-table.td type="input" value="{{ $data->has('BW7') ? $data['BW7'] : '' }}" coord="BW7" />
        <x-table.td type="input" value="{{ $data->has('BX7') ? $data['BX7'] : '' }}" coord="BX7" />
        <x-table.td type="input" value="{{ $data->has('BY7') ? $data['BY7'] : '' }}" coord="BY7" />
        <x-table.td type="input" value="{{ $data->has('BZ7') ? $data['BZ7'] : '' }}" coord="BZ7" />
    </tr>
    <tr>
        <x-table.td type="header" value="Должности медицинских работников - всего, из них:" />
        <x-table.td type="header" value="02" />
        <x-table.td type="input" value="{{ $data->has('BF8') ? $data['BF8'] : '' }}" coord="BF8" />
        <x-table.td type="input" value="{{ $data->has('BG8') ? $data['BG8'] : '' }}" coord="BG8" />
        <x-table.td type="input" value="{{ $data->has('BH8') ? $data['BH8'] : '' }}" coord="BH8" />
        <x-table.td type="input" value="{{ $data->has('BI8') ? $data['BI8'] : '' }}" coord="BI8" />
        <x-table.td type="input" value="{{ $data->has('BJ8') ? $data['BJ8'] : '' }}" coord="BJ8" />
        <x-table.td type="input" value="{{ $data->has('BK8') ? $data['BK8'] : '' }}" coord="BK8" />
        <x-table.td type="input" value="{{ $data->has('BL8') ? $data['BL8'] : '' }}" coord="BL8" />
        <x-table.td type="input" value="{{ $data->has('BM8') ? $data['BM8'] : '' }}" coord="BM8" />
        <x-table.td type="input" value="{{ $data->has('BN8') ? $data['BN8'] : '' }}" coord="BN8" />
        <x-table.td type="input" value="{{ $data->has('BO8') ? $data['BO8'] : '' }}" coord="BO8" />
        <x-table.td type="input" value="{{ $data->has('BP8') ? $data['BP8'] : '' }}" coord="BP8" />
        <x-table.td type="input" value="{{ $data->has('BQ8') ? $data['BQ8'] : '' }}" coord="BQ8" />
        <x-table.td type="input" value="{{ $data->has('BR8') ? $data['BR8'] : '' }}" coord="BR8" />
        <x-table.td type="input" value="{{ $data->has('BS8') ? $data['BS8'] : '' }}" coord="BS8" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
        <x-table.td type="input" value="{{ $data->has('BU8') ? $data['BU8'] : '' }}" coord="BU8" />
        <x-table.td type="input" value="{{ $data->has('BV8') ? $data['BV8'] : '' }}" coord="BV8" />
        <x-table.td type="input" value="{{ $data->has('BW8') ? $data['BW8'] : '' }}" coord="BW8" />
        <x-table.td type="input" value="{{ $data->has('BX8') ? $data['BX8'] : '' }}" coord="BX8" />
        <x-table.td type="input" value="{{ $data->has('BY8') ? $data['BY8'] : '' }}" coord="BY8" />
        <x-table.td type="input" value="{{ $data->has('BZ8') ? $data['BZ8'] : '' }}" coord="BZ8" />
    </tr>
    <tr>
        <x-table.td type="header" value="врачи - специалисты по профилю оказания медицинской помощи - всего, из них:" />
        <x-table.td type="header" value="03" />
        <x-table.td type="input" value="{{ $data->has('BF9') ? $data['BF9'] : '' }}" coord="BF9" />
        <x-table.td type="input" value="{{ $data->has('BG9') ? $data['BG9'] : '' }}" coord="BG9" />
        <x-table.td type="input" value="{{ $data->has('BH9') ? $data['BH9'] : '' }}" coord="BH9" />
        <x-table.td type="input" value="{{ $data->has('BI9') ? $data['BI9'] : '' }}" coord="BI9" />
        <x-table.td type="input" value="{{ $data->has('BJ9') ? $data['BJ9'] : '' }}" coord="BJ9" />
        <x-table.td type="input" value="{{ $data->has('BK9') ? $data['BK9'] : '' }}" coord="BK9" />
        <x-table.td type="input" value="{{ $data->has('BL9') ? $data['BL9'] : '' }}" coord="BL9" />
        <x-table.td type="input" value="{{ $data->has('BM9') ? $data['BM9'] : '' }}" coord="BM9" />
        <x-table.td type="input" value="{{ $data->has('BN9') ? $data['BN9'] : '' }}" coord="BN9" />
        <x-table.td type="input" value="{{ $data->has('BO9') ? $data['BO9'] : '' }}" coord="BO9" />
        <x-table.td type="input" value="{{ $data->has('BP9') ? $data['BP9'] : '' }}" coord="BP9" />
        <x-table.td type="input" value="{{ $data->has('BQ9') ? $data['BQ9'] : '' }}" coord="BQ9" />
        <x-table.td type="input" value="{{ $data->has('BR9') ? $data['BR9'] : '' }}" coord="BR9" />
        <x-table.td type="input" value="{{ $data->has('BS9') ? $data['BS9'] : '' }}" coord="BS9" />
        <x-table.td type="input" value="{{ $data->has('BT9') ? $data['BT9'] : '' }}" coord="BT9" />
        <x-table.td type="input" value="{{ $data->has('BU9') ? $data['BU9'] : '' }}" coord="BU9" />
        <x-table.td type="input" value="{{ $data->has('BV9') ? $data['BV9'] : '' }}" coord="BV9" />
        <x-table.td type="input" value="{{ $data->has('BW9') ? $data['BW9'] : '' }}" coord="BW9" />
        <x-table.td type="input" value="{{ $data->has('BX9') ? $data['BX9'] : '' }}" coord="BX9" />
        <x-table.td type="input" value="{{ $data->has('BY9') ? $data['BY9'] : '' }}" coord="BY9" />
        <x-table.td type="input" value="{{ $data->has('BZ9') ? $data['BZ9'] : '' }}" coord="BZ9" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач по медицинской реабилитации" />
        <x-table.td type="header" value="04" />
        <x-table.td type="input" value="{{ $data->has('BF10') ? $data['BF10'] : '' }}" coord="BF10" />
        <x-table.td type="input" value="{{ $data->has('BG10') ? $data['BG10'] : '' }}" coord="BG10" />
        <x-table.td type="input" value="{{ $data->has('BH10') ? $data['BH10'] : '' }}" coord="BH10" />
        <x-table.td type="input" value="{{ $data->has('BI10') ? $data['BI10'] : '' }}" coord="BI10" />
        <x-table.td type="input" value="{{ $data->has('BJ10') ? $data['BJ10'] : '' }}" coord="BJ10" />
        <x-table.td type="input" value="{{ $data->has('BK10') ? $data['BK10'] : '' }}" coord="BK10" />
        <x-table.td type="input" value="{{ $data->has('BL10') ? $data['BL10'] : '' }}" coord="BL10" />
        <x-table.td type="input" value="{{ $data->has('BM10') ? $data['BM10'] : '' }}" coord="BM10" />
        <x-table.td type="input" value="{{ $data->has('BN10') ? $data['BN10'] : '' }}" coord="BN10" />
        <x-table.td type="input" value="{{ $data->has('BO10') ? $data['BO10'] : '' }}" coord="BO10" />
        <x-table.td type="input" value="{{ $data->has('BP10') ? $data['BP10'] : '' }}" coord="BP10" />
        <x-table.td type="input" value="{{ $data->has('BQ10') ? $data['BQ10'] : '' }}" coord="BQ10" />
        <x-table.td type="input" value="{{ $data->has('BR10') ? $data['BR10'] : '' }}" coord="BR10" />
        <x-table.td type="input" value="{{ $data->has('BS10') ? $data['BS10'] : '' }}" coord="BS10" />
        <x-table.td type="input" value="{{ $data->has('BT10') ? $data['BT10'] : '' }}" coord="BT10" />
        <x-table.td type="input" value="{{ $data->has('BU10') ? $data['BU10'] : '' }}" coord="BU10" />
        <x-table.td type="input" value="{{ $data->has('BV10') ? $data['BV10'] : '' }}" coord="BV10" />
        <x-table.td type="input" value="{{ $data->has('BW10') ? $data['BW10'] : '' }}" coord="BW10" />
        <x-table.td type="input" value="{{ $data->has('BX10') ? $data['BX10'] : '' }}" coord="BX10" />
        <x-table.td type="input" value="{{ $data->has('BY10') ? $data['BY10'] : '' }}" coord="BY10" />
        <x-table.td type="input" value="{{ $data->has('BZ10') ? $data['BZ10'] : '' }}" coord="BZ10" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач по лечебной физкультуре" />
        <x-table.td type="header" value="05" />
        <x-table.td type="input" value="{{ $data->has('BF11') ? $data['BF11'] : '' }}" coord="BF11" />
        <x-table.td type="input" value="{{ $data->has('BG11') ? $data['BG11'] : '' }}" coord="BG11" />
        <x-table.td type="input" value="{{ $data->has('BH11') ? $data['BH11'] : '' }}" coord="BH11" />
        <x-table.td type="input" value="{{ $data->has('BI11') ? $data['BI11'] : '' }}" coord="BI11" />
        <x-table.td type="input" value="{{ $data->has('BJ11') ? $data['BJ11'] : '' }}" coord="BJ11" />
        <x-table.td type="input" value="{{ $data->has('BK11') ? $data['BK11'] : '' }}" coord="BK11" />
        <x-table.td type="input" value="{{ $data->has('BL11') ? $data['BL11'] : '' }}" coord="BL11" />
        <x-table.td type="input" value="{{ $data->has('BM11') ? $data['BM11'] : '' }}" coord="BM11" />
        <x-table.td type="input" value="{{ $data->has('BN11') ? $data['BN11'] : '' }}" coord="BN11" />
        <x-table.td type="input" value="{{ $data->has('BO11') ? $data['BO11'] : '' }}" coord="BO11" />
        <x-table.td type="input" value="{{ $data->has('BP11') ? $data['BP11'] : '' }}" coord="BP11" />
        <x-table.td type="input" value="{{ $data->has('BQ11') ? $data['BQ11'] : '' }}" coord="BQ11" />
        <x-table.td type="input" value="{{ $data->has('BR11') ? $data['BR11'] : '' }}" coord="BR11" />
        <x-table.td type="input" value="{{ $data->has('BS11') ? $data['BS11'] : '' }}" coord="BS11" />
        <x-table.td type="input" value="{{ $data->has('BT11') ? $data['BT11'] : '' }}" coord="BT11" />
        <x-table.td type="input" value="{{ $data->has('BU11') ? $data['BU11'] : '' }}" coord="BU11" />
        <x-table.td type="input" value="{{ $data->has('BV11') ? $data['BV11'] : '' }}" coord="BV11" />
        <x-table.td type="input" value="{{ $data->has('BW11') ? $data['BW11'] : '' }}" coord="BW11" />
        <x-table.td type="input" value="{{ $data->has('BX11') ? $data['BX11'] : '' }}" coord="BX11" />
        <x-table.td type="input" value="{{ $data->has('BY11') ? $data['BY11'] : '' }}" coord="BY11" />
        <x-table.td type="input" value="{{ $data->has('BZ11') ? $data['BZ11'] : '' }}" coord="BZ11" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач физиотерапевт" />
        <x-table.td type="header" value="06" />
        <x-table.td type="input" value="{{ $data->has('BF12') ? $data['BF12'] : '' }}" coord="BF12" />
        <x-table.td type="input" value="{{ $data->has('BG12') ? $data['BG12'] : '' }}" coord="BG12" />
        <x-table.td type="input" value="{{ $data->has('BH12') ? $data['BH12'] : '' }}" coord="BH12" />
        <x-table.td type="input" value="{{ $data->has('BI12') ? $data['BI12'] : '' }}" coord="BI12" />
        <x-table.td type="input" value="{{ $data->has('BJ12') ? $data['BJ12'] : '' }}" coord="BJ12" />
        <x-table.td type="input" value="{{ $data->has('BK12') ? $data['BK12'] : '' }}" coord="BK12" />
        <x-table.td type="input" value="{{ $data->has('BL12') ? $data['BL12'] : '' }}" coord="BL12" />
        <x-table.td type="input" value="{{ $data->has('BM12') ? $data['BM12'] : '' }}" coord="BM12" />
        <x-table.td type="input" value="{{ $data->has('BN12') ? $data['BN12'] : '' }}" coord="BN12" />
        <x-table.td type="input" value="{{ $data->has('BO12') ? $data['BO12'] : '' }}" coord="BO12" />
        <x-table.td type="input" value="{{ $data->has('BP12') ? $data['BP12'] : '' }}" coord="BP12" />
        <x-table.td type="input" value="{{ $data->has('BQ12') ? $data['BQ12'] : '' }}" coord="BQ12" />
        <x-table.td type="input" value="{{ $data->has('BR12') ? $data['BR12'] : '' }}" coord="BR12" />
        <x-table.td type="input" value="{{ $data->has('BS12') ? $data['BS12'] : '' }}" coord="BS12" />
        <x-table.td type="input" value="{{ $data->has('BT12') ? $data['BT12'] : '' }}" coord="BT12" />
        <x-table.td type="input" value="{{ $data->has('BU12') ? $data['BU12'] : '' }}" coord="BU12" />
        <x-table.td type="input" value="{{ $data->has('BV12') ? $data['BV12'] : '' }}" coord="BV12" />
        <x-table.td type="input" value="{{ $data->has('BW12') ? $data['BW12'] : '' }}" coord="BW12" />
        <x-table.td type="input" value="{{ $data->has('BX12') ? $data['BX12'] : '' }}" coord="BX12" />
        <x-table.td type="input" value="{{ $data->has('BY12') ? $data['BY12'] : '' }}" coord="BY12" />
        <x-table.td type="input" value="{{ $data->has('BZ12') ? $data['BZ12'] : '' }}" coord="BZ12" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач-диетолог" />
        <x-table.td type="header" value="07" />
        <x-table.td type="input" value="{{ $data->has('BF13') ? $data['BF13'] : '' }}" coord="BF13" />
        <x-table.td type="input" value="{{ $data->has('BG13') ? $data['BG13'] : '' }}" coord="BG13" />
        <x-table.td type="input" value="{{ $data->has('BH13') ? $data['BH13'] : '' }}" coord="BH13" />
        <x-table.td type="input" value="{{ $data->has('BI13') ? $data['BI13'] : '' }}" coord="BI13" />
        <x-table.td type="input" value="{{ $data->has('BJ13') ? $data['BJ13'] : '' }}" coord="BJ13" />
        <x-table.td type="input" value="{{ $data->has('BK13') ? $data['BK13'] : '' }}" coord="BK13" />
        <x-table.td type="input" value="{{ $data->has('BL13') ? $data['BL13'] : '' }}" coord="BL13" />
        <x-table.td type="input" value="{{ $data->has('BM13') ? $data['BM13'] : '' }}" coord="BM13" />
        <x-table.td type="input" value="{{ $data->has('BN13') ? $data['BN13'] : '' }}" coord="BN13" />
        <x-table.td type="input" value="{{ $data->has('BO13') ? $data['BO13'] : '' }}" coord="BO13" />
        <x-table.td type="input" value="{{ $data->has('BP13') ? $data['BP13'] : '' }}" coord="BP13" />
        <x-table.td type="input" value="{{ $data->has('BQ13') ? $data['BQ13'] : '' }}" coord="BQ13" />
        <x-table.td type="input" value="{{ $data->has('BR13') ? $data['BR13'] : '' }}" coord="BR13" />
        <x-table.td type="input" value="{{ $data->has('BS13') ? $data['BS13'] : '' }}" coord="BS13" />
        <x-table.td type="input" value="{{ $data->has('BT13') ? $data['BT13'] : '' }}" coord="BT13" />
        <x-table.td type="input" value="{{ $data->has('BU13') ? $data['BU13'] : '' }}" coord="BU13" />
        <x-table.td type="input" value="{{ $data->has('BV13') ? $data['BV13'] : '' }}" coord="BV13" />
        <x-table.td type="input" value="{{ $data->has('BW13') ? $data['BW13'] : '' }}" coord="BW13" />
        <x-table.td type="input" value="{{ $data->has('BX13') ? $data['BX13'] : '' }}" coord="BX13" />
        <x-table.td type="input" value="{{ $data->has('BY13') ? $data['BY13'] : '' }}" coord="BY13" />
        <x-table.td type="input" value="{{ $data->has('BZ13') ? $data['BZ13'] : '' }}" coord="BZ13" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач мануальной терапии" />
        <x-table.td type="header" value="08" />
        <x-table.td type="input" value="{{ $data->has('BF14') ? $data['BF14'] : '' }}" coord="BF14" />
        <x-table.td type="input" value="{{ $data->has('BG14') ? $data['BG14'] : '' }}" coord="BG14" />
        <x-table.td type="input" value="{{ $data->has('BH14') ? $data['BH14'] : '' }}" coord="BH14" />
        <x-table.td type="input" value="{{ $data->has('BI14') ? $data['BI14'] : '' }}" coord="BI14" />
        <x-table.td type="input" value="{{ $data->has('BJ14') ? $data['BJ14'] : '' }}" coord="BJ14" />
        <x-table.td type="input" value="{{ $data->has('BK14') ? $data['BK14'] : '' }}" coord="BK14" />
        <x-table.td type="input" value="{{ $data->has('BL14') ? $data['BL14'] : '' }}" coord="BL14" />
        <x-table.td type="input" value="{{ $data->has('BM14') ? $data['BM14'] : '' }}" coord="BM14" />
        <x-table.td type="input" value="{{ $data->has('BN14') ? $data['BN14'] : '' }}" coord="BN14" />
        <x-table.td type="input" value="{{ $data->has('BO14') ? $data['BO14'] : '' }}" coord="BO14" />
        <x-table.td type="input" value="{{ $data->has('BP14') ? $data['BP14'] : '' }}" coord="BP14" />
        <x-table.td type="input" value="{{ $data->has('BQ14') ? $data['BQ14'] : '' }}" coord="BQ14" />
        <x-table.td type="input" value="{{ $data->has('BR14') ? $data['BR14'] : '' }}" coord="BR14" />
        <x-table.td type="input" value="{{ $data->has('BS14') ? $data['BS14'] : '' }}" coord="BS14" />
        <x-table.td type="input" value="{{ $data->has('BT14') ? $data['BT14'] : '' }}" coord="BT14" />
        <x-table.td type="input" value="{{ $data->has('BU14') ? $data['BU14'] : '' }}" coord="BU14" />
        <x-table.td type="input" value="{{ $data->has('BV14') ? $data['BV14'] : '' }}" coord="BV14" />
        <x-table.td type="input" value="{{ $data->has('BW14') ? $data['BW14'] : '' }}" coord="BW14" />
        <x-table.td type="input" value="{{ $data->has('BX14') ? $data['BX14'] : '' }}" coord="BX14" />
        <x-table.td type="input" value="{{ $data->has('BY14') ? $data['BY14'] : '' }}" coord="BY14" />
        <x-table.td type="input" value="{{ $data->has('BZ14') ? $data['BZ14'] : '' }}" coord="BZ14" />
    </tr>
    <tr>
        <x-table.td type="header" value="рефлексотерапевт" />
        <x-table.td type="header" value="09" />
        <x-table.td type="input" value="{{ $data->has('BF15') ? $data['BF15'] : '' }}" coord="BF15" />
        <x-table.td type="input" value="{{ $data->has('BG15') ? $data['BG15'] : '' }}" coord="BG15" />
        <x-table.td type="input" value="{{ $data->has('BH15') ? $data['BH15'] : '' }}" coord="BH15" />
        <x-table.td type="input" value="{{ $data->has('BI15') ? $data['BI15'] : '' }}" coord="BI15" />
        <x-table.td type="input" value="{{ $data->has('BJ15') ? $data['BJ15'] : '' }}" coord="BJ15" />
        <x-table.td type="input" value="{{ $data->has('BK15') ? $data['BK15'] : '' }}" coord="BK15" />
        <x-table.td type="input" value="{{ $data->has('BL15') ? $data['BL15'] : '' }}" coord="BL15" />
        <x-table.td type="input" value="{{ $data->has('BM15') ? $data['BM15'] : '' }}" coord="BM15" />
        <x-table.td type="input" value="{{ $data->has('BN15') ? $data['BN15'] : '' }}" coord="BN15" />
        <x-table.td type="input" value="{{ $data->has('BO15') ? $data['BO15'] : '' }}" coord="BO15" />
        <x-table.td type="input" value="{{ $data->has('BP15') ? $data['BP15'] : '' }}" coord="BP15" />
        <x-table.td type="input" value="{{ $data->has('BQ15') ? $data['BQ15'] : '' }}" coord="BQ15" />
        <x-table.td type="input" value="{{ $data->has('BR15') ? $data['BR15'] : '' }}" coord="BR15" />
        <x-table.td type="input" value="{{ $data->has('BS15') ? $data['BS15'] : '' }}" coord="BS15" />
        <x-table.td type="input" value="{{ $data->has('BT15') ? $data['BT15'] : '' }}" coord="BT15" />
        <x-table.td type="input" value="{{ $data->has('BU15') ? $data['BU15'] : '' }}" coord="BU15" />
        <x-table.td type="input" value="{{ $data->has('BV15') ? $data['BV15'] : '' }}" coord="BV15" />
        <x-table.td type="input" value="{{ $data->has('BW15') ? $data['BW15'] : '' }}" coord="BW15" />
        <x-table.td type="input" value="{{ $data->has('BX15') ? $data['BX15'] : '' }}" coord="BX15" />
        <x-table.td type="input" value="{{ $data->has('BY15') ? $data['BY15'] : '' }}" coord="BY15" />
        <x-table.td type="input" value="{{ $data->has('BZ15') ? $data['BZ15'] : '' }}" coord="BZ15" />
    </tr>
    <tr>
        <x-table.td type="header" value="психотерапевт" />
        <x-table.td type="header" value="10" />
        <x-table.td type="input" value="{{ $data->has('BF16') ? $data['BF16'] : '' }}" coord="BF16" />
        <x-table.td type="input" value="{{ $data->has('BG16') ? $data['BG16'] : '' }}" coord="BG16" />
        <x-table.td type="input" value="{{ $data->has('BH16') ? $data['BH16'] : '' }}" coord="BH16" />
        <x-table.td type="input" value="{{ $data->has('BI16') ? $data['BI16'] : '' }}" coord="BI16" />
        <x-table.td type="input" value="{{ $data->has('BJ16') ? $data['BJ16'] : '' }}" coord="BJ16" />
        <x-table.td type="input" value="{{ $data->has('BK16') ? $data['BK16'] : '' }}" coord="BK16" />
        <x-table.td type="input" value="{{ $data->has('BL16') ? $data['BL16'] : '' }}" coord="BL16" />
        <x-table.td type="input" value="{{ $data->has('BM16') ? $data['BM16'] : '' }}" coord="BM16" />
        <x-table.td type="input" value="{{ $data->has('BN16') ? $data['BN16'] : '' }}" coord="BN16" />
        <x-table.td type="input" value="{{ $data->has('BO16') ? $data['BO16'] : '' }}" coord="BO16" />
        <x-table.td type="input" value="{{ $data->has('BP16') ? $data['BP16'] : '' }}" coord="BP16" />
        <x-table.td type="input" value="{{ $data->has('BQ16') ? $data['BQ16'] : '' }}" coord="BQ16" />
        <x-table.td type="input" value="{{ $data->has('BR16') ? $data['BR16'] : '' }}" coord="BR16" />
        <x-table.td type="input" value="{{ $data->has('BS16') ? $data['BS16'] : '' }}" coord="BS16" />
        <x-table.td type="input" value="{{ $data->has('BT16') ? $data['BT16'] : '' }}" coord="BT16" />
        <x-table.td type="input" value="{{ $data->has('BU16') ? $data['BU16'] : '' }}" coord="BU16" />
        <x-table.td type="input" value="{{ $data->has('BV16') ? $data['BV16'] : '' }}" coord="BV16" />
        <x-table.td type="input" value="{{ $data->has('BW16') ? $data['BW16'] : '' }}" coord="BW16" />
        <x-table.td type="input" value="{{ $data->has('BX16') ? $data['BX16'] : '' }}" coord="BX16" />
        <x-table.td type="input" value="{{ $data->has('BY16') ? $data['BY16'] : '' }}" coord="BY16" />
        <x-table.td type="input" value="{{ $data->has('BZ16') ? $data['BZ16'] : '' }}" coord="BZ16" />
    </tr>
    <tr>
        <x-table.td type="header" value="специалисты с высшим немедицинским образованием - всего, в том числе:" />
        <x-table.td type="header" value="11" />
        <x-table.td type="input" value="{{ $data->has('BF17') ? $data['BF17'] : '' }}" coord="BF17" />
        <x-table.td type="input" value="{{ $data->has('BG17') ? $data['BG17'] : '' }}" coord="BG17" />
        <x-table.td type="input" value="{{ $data->has('BH17') ? $data['BH17'] : '' }}" coord="BH17" />
        <x-table.td type="input" value="{{ $data->has('BI17') ? $data['BI17'] : '' }}" coord="BI17" />
        <x-table.td type="input" value="{{ $data->has('BJ17') ? $data['BJ17'] : '' }}" coord="BJ17" />
        <x-table.td type="input" value="{{ $data->has('BK17') ? $data['BK17'] : '' }}" coord="BK17" />
        <x-table.td type="input" value="{{ $data->has('BL17') ? $data['BL17'] : '' }}" coord="BL17" />
        <x-table.td type="input" value="{{ $data->has('BM17') ? $data['BM17'] : '' }}" coord="BM17" />
        <x-table.td type="input" value="{{ $data->has('BN17') ? $data['BN17'] : '' }}" coord="BN17" />
        <x-table.td type="input" value="{{ $data->has('BO17') ? $data['BO17'] : '' }}" coord="BO17" />
        <x-table.td type="input" value="{{ $data->has('BP17') ? $data['BP17'] : '' }}" coord="BP17" />
        <x-table.td type="input" value="{{ $data->has('BQ17') ? $data['BQ17'] : '' }}" coord="BQ17" />
        <x-table.td type="input" value="{{ $data->has('BR17') ? $data['BR17'] : '' }}" coord="BR17" />
        <x-table.td type="input" value="{{ $data->has('BS17') ? $data['BS17'] : '' }}" coord="BS17" />
        <x-table.td type="input" value="{{ $data->has('BT17') ? $data['BT17'] : '' }}" coord="BT17" />
        <x-table.td type="input" value="{{ $data->has('BU17') ? $data['BU17'] : '' }}" coord="BU17" />
        <x-table.td type="input" value="{{ $data->has('BV17') ? $data['BV17'] : '' }}" coord="BV17" />
        <x-table.td type="input" value="{{ $data->has('BW17') ? $data['BW17'] : '' }}" coord="BW17" />
        <x-table.td type="input" value="{{ $data->has('BX17') ? $data['BX17'] : '' }}" coord="BX17" />
        <x-table.td type="input" value="{{ $data->has('BY17') ? $data['BY17'] : '' }}" coord="BY17" />
        <x-table.td type="input" value="{{ $data->has('BZ17') ? $data['BZ17'] : '' }}" coord="BZ17" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинский психолог" />
        <x-table.td type="header" value="12" />
        <x-table.td type="input" value="{{ $data->has('BF18') ? $data['BF18'] : '' }}" coord="BF18" />
        <x-table.td type="input" value="{{ $data->has('BG18') ? $data['BG18'] : '' }}" coord="BG18" />
        <x-table.td type="input" value="{{ $data->has('BH18') ? $data['BH18'] : '' }}" coord="BH18" />
        <x-table.td type="input" value="{{ $data->has('BI18') ? $data['BI18'] : '' }}" coord="BI18" />
        <x-table.td type="input" value="{{ $data->has('BJ18') ? $data['BJ18'] : '' }}" coord="BJ18" />
        <x-table.td type="input" value="{{ $data->has('BK18') ? $data['BK18'] : '' }}" coord="BK18" />
        <x-table.td type="input" value="{{ $data->has('BL18') ? $data['BL18'] : '' }}" coord="BL18" />
        <x-table.td type="input" value="{{ $data->has('BM18') ? $data['BM18'] : '' }}" coord="BM18" />
        <x-table.td type="input" value="{{ $data->has('BN18') ? $data['BN18'] : '' }}" coord="BN18" />
        <x-table.td type="input" value="{{ $data->has('BO18') ? $data['BO18'] : '' }}" coord="BO18" />
        <x-table.td type="input" value="{{ $data->has('BP18') ? $data['BP18'] : '' }}" coord="BP18" />
        <x-table.td type="input" value="{{ $data->has('BQ18') ? $data['BQ18'] : '' }}" coord="BQ18" />
        <x-table.td type="input" value="{{ $data->has('BR18') ? $data['BR18'] : '' }}" coord="BR18" />
        <x-table.td type="input" value="{{ $data->has('BS18') ? $data['BS18'] : '' }}" coord="BS18" />
        <x-table.td type="input" value="{{ $data->has('BT18') ? $data['BT18'] : '' }}" coord="BT18" />
        <x-table.td type="input" value="{{ $data->has('BU18') ? $data['BU18'] : '' }}" coord="BU18" />
        <x-table.td type="input" value="{{ $data->has('BV18') ? $data['BV18'] : '' }}" coord="BV18" />
        <x-table.td type="input" value="{{ $data->has('BW18') ? $data['BW18'] : '' }}" coord="BW18" />
        <x-table.td type="input" value="{{ $data->has('BX18') ? $data['BX18'] : '' }}" coord="BX18" />
        <x-table.td type="input" value="{{ $data->has('BY18') ? $data['BY18'] : '' }}" coord="BY18" />
        <x-table.td type="input" value="{{ $data->has('BZ18') ? $data['BZ18'] : '' }}" coord="BZ18" />
    </tr>
    <tr>
        <x-table.td type="header" value="нейропсихолог" />
        <x-table.td type="header" value="13" />
        <x-table.td type="input" value="{{ $data->has('BF19') ? $data['BF19'] : '' }}" coord="BF19" />
        <x-table.td type="input" value="{{ $data->has('BG19') ? $data['BG19'] : '' }}" coord="BG19" />
        <x-table.td type="input" value="{{ $data->has('BH19') ? $data['BH19'] : '' }}" coord="BH19" />
        <x-table.td type="input" value="{{ $data->has('BI19') ? $data['BI19'] : '' }}" coord="BI19" />
        <x-table.td type="input" value="{{ $data->has('BJ19') ? $data['BJ19'] : '' }}" coord="BJ19" />
        <x-table.td type="input" value="{{ $data->has('BK19') ? $data['BK19'] : '' }}" coord="BK19" />
        <x-table.td type="input" value="{{ $data->has('BL19') ? $data['BL19'] : '' }}" coord="BL19" />
        <x-table.td type="input" value="{{ $data->has('BM19') ? $data['BM19'] : '' }}" coord="BM19" />
        <x-table.td type="input" value="{{ $data->has('BN19') ? $data['BN19'] : '' }}" coord="BN19" />
        <x-table.td type="input" value="{{ $data->has('BO19') ? $data['BO19'] : '' }}" coord="BO19" />
        <x-table.td type="input" value="{{ $data->has('BP19') ? $data['BP19'] : '' }}" coord="BP19" />
        <x-table.td type="input" value="{{ $data->has('BQ19') ? $data['BQ19'] : '' }}" coord="BQ19" />
        <x-table.td type="input" value="{{ $data->has('BR19') ? $data['BR19'] : '' }}" coord="BR19" />
        <x-table.td type="input" value="{{ $data->has('BS19') ? $data['BS19'] : '' }}" coord="BS19" />
        <x-table.td type="input" value="{{ $data->has('BT19') ? $data['BT19'] : '' }}" coord="BT19" />
        <x-table.td type="input" value="{{ $data->has('BU19') ? $data['BU19'] : '' }}" coord="BU19" />
        <x-table.td type="input" value="{{ $data->has('BV19') ? $data['BV19'] : '' }}" coord="BV19" />
        <x-table.td type="input" value="{{ $data->has('BW19') ? $data['BW19'] : '' }}" coord="BW19" />
        <x-table.td type="input" value="{{ $data->has('BX19') ? $data['BX19'] : '' }}" coord="BX19" />
        <x-table.td type="input" value="{{ $data->has('BY19') ? $data['BY19'] : '' }}" coord="BY19" />
        <x-table.td type="input" value="{{ $data->has('BZ19') ? $data['BZ19'] : '' }}" coord="BZ19" />
    </tr>
    <tr>
        <x-table.td type="header" value="средний медицинский персонал - всего, из них:" />
        <x-table.td type="header" value="14" />
        <x-table.td type="input" value="{{ $data->has('BF20') ? $data['BF20'] : '' }}" coord="BF20" />
        <x-table.td type="input" value="{{ $data->has('BG20') ? $data['BG20'] : '' }}" coord="BG20" />
        <x-table.td type="input" value="{{ $data->has('BH20') ? $data['BH20'] : '' }}" coord="BH20" />
        <x-table.td type="input" value="{{ $data->has('BI20') ? $data['BI20'] : '' }}" coord="BI20" />
        <x-table.td type="input" value="{{ $data->has('BJ20') ? $data['BJ20'] : '' }}" coord="BJ20" />
        <x-table.td type="input" value="{{ $data->has('BK20') ? $data['BK20'] : '' }}" coord="BK20" />
        <x-table.td type="input" value="{{ $data->has('BL20') ? $data['BL20'] : '' }}" coord="BL20" />
        <x-table.td type="input" value="{{ $data->has('BM20') ? $data['BM20'] : '' }}" coord="BM20" />
        <x-table.td type="input" value="{{ $data->has('BN20') ? $data['BN20'] : '' }}" coord="BN20" />
        <x-table.td type="input" value="{{ $data->has('BO20') ? $data['BO20'] : '' }}" coord="BO20" />
        <x-table.td type="input" value="{{ $data->has('BP20') ? $data['BP20'] : '' }}" coord="BP20" />
        <x-table.td type="input" value="{{ $data->has('BQ20') ? $data['BQ20'] : '' }}" coord="BQ20" />
        <x-table.td type="input" value="{{ $data->has('BR20') ? $data['BR20'] : '' }}" coord="BR20" />
        <x-table.td type="input" value="{{ $data->has('BS20') ? $data['BS20'] : '' }}" coord="BS20" />
        <x-table.td type="input" value="{{ $data->has('BT20') ? $data['BT20'] : '' }}" coord="BT20" />
        <x-table.td type="input" value="{{ $data->has('BU20') ? $data['BU20'] : '' }}" coord="BU20" />
        <x-table.td type="input" value="{{ $data->has('BV20') ? $data['BV20'] : '' }}" coord="BV20" />
        <x-table.td type="input" value="{{ $data->has('BW20') ? $data['BW20'] : '' }}" coord="BW20" />
        <x-table.td type="input" value="{{ $data->has('BX20') ? $data['BX20'] : '' }}" coord="BX20" />
        <x-table.td type="input" value="{{ $data->has('BY20') ? $data['BY20'] : '' }}" coord="BY20" />
        <x-table.td type="input" value="{{ $data->has('BZ20') ? $data['BZ20'] : '' }}" coord="BZ20" />
    </tr>
    <tr>
        <x-table.td type="header" value="инструктор по лечебной физкультуре" />
        <x-table.td type="header" value="15" />
        <x-table.td type="input" value="{{ $data->has('BF21') ? $data['BF21'] : '' }}" coord="BF21" />
        <x-table.td type="input" value="{{ $data->has('BG21') ? $data['BG21'] : '' }}" coord="BG21" />
        <x-table.td type="input" value="{{ $data->has('BH21') ? $data['BH21'] : '' }}" coord="BH21" />
        <x-table.td type="input" value="{{ $data->has('BI21') ? $data['BI21'] : '' }}" coord="BI21" />
        <x-table.td type="input" value="{{ $data->has('BJ21') ? $data['BJ21'] : '' }}" coord="BJ21" />
        <x-table.td type="input" value="{{ $data->has('BK21') ? $data['BK21'] : '' }}" coord="BK21" />
        <x-table.td type="input" value="{{ $data->has('BL21') ? $data['BL21'] : '' }}" coord="BL21" />
        <x-table.td type="input" value="{{ $data->has('BM21') ? $data['BM21'] : '' }}" coord="BM21" />
        <x-table.td type="input" value="{{ $data->has('BN21') ? $data['BN21'] : '' }}" coord="BN21" />
        <x-table.td type="input" value="{{ $data->has('BO21') ? $data['BO21'] : '' }}" coord="BO21" />
        <x-table.td type="input" value="{{ $data->has('BP21') ? $data['BP21'] : '' }}" coord="BP21" />
        <x-table.td type="input" value="{{ $data->has('BQ21') ? $data['BQ21'] : '' }}" coord="BQ21" />
        <x-table.td type="input" value="{{ $data->has('BR21') ? $data['BR21'] : '' }}" coord="BR21" />
        <x-table.td type="input" value="{{ $data->has('BS21') ? $data['BS21'] : '' }}" coord="BS21" />
        <x-table.td type="input" value="{{ $data->has('BT21') ? $data['BT21'] : '' }}" coord="BT21" />
        <x-table.td type="input" value="{{ $data->has('BU21') ? $data['BU21'] : '' }}" coord="BU21" />
        <x-table.td type="input" value="{{ $data->has('BV21') ? $data['BV21'] : '' }}" coord="BV21" />
        <x-table.td type="input" value="{{ $data->has('BW21') ? $data['BW21'] : '' }}" coord="BW21" />
        <x-table.td type="input" value="{{ $data->has('BX21') ? $data['BX21'] : '' }}" coord="BX21" />
        <x-table.td type="input" value="{{ $data->has('BY21') ? $data['BY21'] : '' }}" coord="BY21" />
        <x-table.td type="input" value="{{ $data->has('BZ21') ? $data['BZ21'] : '' }}" coord="BZ21" />
    </tr>
    <tr>
        <x-table.td type="header" value="инструктор-методист по лечебной физкультуре" />
        <x-table.td type="header" value="16" />
        <x-table.td type="input" value="{{ $data->has('BF22') ? $data['BF22'] : '' }}" coord="BF22" />
        <x-table.td type="input" value="{{ $data->has('BG22') ? $data['BG22'] : '' }}" coord="BG22" />
        <x-table.td type="input" value="{{ $data->has('BH22') ? $data['BH22'] : '' }}" coord="BH22" />
        <x-table.td type="input" value="{{ $data->has('BI22') ? $data['BI22'] : '' }}" coord="BI22" />
        <x-table.td type="input" value="{{ $data->has('BJ22') ? $data['BJ22'] : '' }}" coord="BJ22" />
        <x-table.td type="input" value="{{ $data->has('BK22') ? $data['BK22'] : '' }}" coord="BK22" />
        <x-table.td type="input" value="{{ $data->has('BL22') ? $data['BL22'] : '' }}" coord="BL22" />
        <x-table.td type="input" value="{{ $data->has('BM22') ? $data['BM22'] : '' }}" coord="BM22" />
        <x-table.td type="input" value="{{ $data->has('BN22') ? $data['BN22'] : '' }}" coord="BN22" />
        <x-table.td type="input" value="{{ $data->has('BO22') ? $data['BO22'] : '' }}" coord="BO22" />
        <x-table.td type="input" value="{{ $data->has('BP22') ? $data['BP22'] : '' }}" coord="BP22" />
        <x-table.td type="input" value="{{ $data->has('BQ22') ? $data['BQ22'] : '' }}" coord="BQ22" />
        <x-table.td type="input" value="{{ $data->has('BR22') ? $data['BR22'] : '' }}" coord="BR22" />
        <x-table.td type="input" value="{{ $data->has('BS22') ? $data['BS22'] : '' }}" coord="BS22" />
        <x-table.td type="input" value="{{ $data->has('BT22') ? $data['BT22'] : '' }}" coord="BT22" />
        <x-table.td type="input" value="{{ $data->has('BU22') ? $data['BU22'] : '' }}" coord="BU22" />
        <x-table.td type="input" value="{{ $data->has('BV22') ? $data['BV22'] : '' }}" coord="BV22" />
        <x-table.td type="input" value="{{ $data->has('BW22') ? $data['BW22'] : '' }}" coord="BW22" />
        <x-table.td type="input" value="{{ $data->has('BX22') ? $data['BX22'] : '' }}" coord="BX22" />
        <x-table.td type="input" value="{{ $data->has('BY22') ? $data['BY22'] : '' }}" coord="BY22" />
        <x-table.td type="input" value="{{ $data->has('BZ22') ? $data['BZ22'] : '' }}" coord="BZ22" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинская сестра по медицинской реабилитации" />
        <x-table.td type="header" value="17" />
        <x-table.td type="input" value="{{ $data->has('BF23') ? $data['BF23'] : '' }}" coord="BF23" />
        <x-table.td type="input" value="{{ $data->has('BG23') ? $data['BG23'] : '' }}" coord="BG23" />
        <x-table.td type="input" value="{{ $data->has('BH23') ? $data['BH23'] : '' }}" coord="BH23" />
        <x-table.td type="input" value="{{ $data->has('BI23') ? $data['BI23'] : '' }}" coord="BI23" />
        <x-table.td type="input" value="{{ $data->has('BJ23') ? $data['BJ23'] : '' }}" coord="BJ23" />
        <x-table.td type="input" value="{{ $data->has('BK23') ? $data['BK23'] : '' }}" coord="BK23" />
        <x-table.td type="input" value="{{ $data->has('BL23') ? $data['BL23'] : '' }}" coord="BL23" />
        <x-table.td type="input" value="{{ $data->has('BM23') ? $data['BM23'] : '' }}" coord="BM23" />
        <x-table.td type="input" value="{{ $data->has('BN23') ? $data['BN23'] : '' }}" coord="BN23" />
        <x-table.td type="input" value="{{ $data->has('BO23') ? $data['BO23'] : '' }}" coord="BO23" />
        <x-table.td type="input" value="{{ $data->has('BP23') ? $data['BP23'] : '' }}" coord="BP23" />
        <x-table.td type="input" value="{{ $data->has('BQ23') ? $data['BQ23'] : '' }}" coord="BQ23" />
        <x-table.td type="input" value="{{ $data->has('BR23') ? $data['BR23'] : '' }}" coord="BR23" />
        <x-table.td type="input" value="{{ $data->has('BS23') ? $data['BS23'] : '' }}" coord="BS23" />
        <x-table.td type="input" value="{{ $data->has('BT23') ? $data['BT23'] : '' }}" coord="BT23" />
        <x-table.td type="input" value="{{ $data->has('BU23') ? $data['BU23'] : '' }}" coord="BU23" />
        <x-table.td type="input" value="{{ $data->has('BV23') ? $data['BV23'] : '' }}" coord="BV23" />
        <x-table.td type="input" value="{{ $data->has('BW23') ? $data['BW23'] : '' }}" coord="BW23" />
        <x-table.td type="input" value="{{ $data->has('BX23') ? $data['BX23'] : '' }}" coord="BX23" />
        <x-table.td type="input" value="{{ $data->has('BY23') ? $data['BY23'] : '' }}" coord="BY23" />
        <x-table.td type="input" value="{{ $data->has('BZ23') ? $data['BZ23'] : '' }}" coord="BZ23" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинская сестра по массажу" />
        <x-table.td type="header" value="18" />
        <x-table.td type="input" value="{{ $data->has('BF24') ? $data['BF24'] : '' }}" coord="BF24" />
        <x-table.td type="input" value="{{ $data->has('BG24') ? $data['BG24'] : '' }}" coord="BG24" />
        <x-table.td type="input" value="{{ $data->has('BH24') ? $data['BH24'] : '' }}" coord="BH24" />
        <x-table.td type="input" value="{{ $data->has('BI24') ? $data['BI24'] : '' }}" coord="BI24" />
        <x-table.td type="input" value="{{ $data->has('BJ24') ? $data['BJ24'] : '' }}" coord="BJ24" />
        <x-table.td type="input" value="{{ $data->has('BK24') ? $data['BK24'] : '' }}" coord="BK24" />
        <x-table.td type="input" value="{{ $data->has('BL24') ? $data['BL24'] : '' }}" coord="BL24" />
        <x-table.td type="input" value="{{ $data->has('BM24') ? $data['BM24'] : '' }}" coord="BM24" />
        <x-table.td type="input" value="{{ $data->has('BN24') ? $data['BN24'] : '' }}" coord="BN24" />
        <x-table.td type="input" value="{{ $data->has('BO24') ? $data['BO24'] : '' }}" coord="BO24" />
        <x-table.td type="input" value="{{ $data->has('BP24') ? $data['BP24'] : '' }}" coord="BP24" />
        <x-table.td type="input" value="{{ $data->has('BQ24') ? $data['BQ24'] : '' }}" coord="BQ24" />
        <x-table.td type="input" value="{{ $data->has('BR24') ? $data['BR24'] : '' }}" coord="BR24" />
        <x-table.td type="input" value="{{ $data->has('BS24') ? $data['BS24'] : '' }}" coord="BS24" />
        <x-table.td type="input" value="{{ $data->has('BT24') ? $data['BT24'] : '' }}" coord="BT24" />
        <x-table.td type="input" value="{{ $data->has('BU24') ? $data['BU24'] : '' }}" coord="BU24" />
        <x-table.td type="input" value="{{ $data->has('BV24') ? $data['BV24'] : '' }}" coord="BV24" />
        <x-table.td type="input" value="{{ $data->has('BW24') ? $data['BW24'] : '' }}" coord="BW24" />
        <x-table.td type="input" value="{{ $data->has('BX24') ? $data['BX24'] : '' }}" coord="BX24" />
        <x-table.td type="input" value="{{ $data->has('BY24') ? $data['BY24'] : '' }}" coord="BY24" />
        <x-table.td type="input" value="{{ $data->has('BZ24') ? $data['BZ24'] : '' }}" coord="BZ24" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинская сестра по физиотерапии" />
        <x-table.td type="header" value="19" />
        <x-table.td type="input" value="{{ $data->has('BF25') ? $data['BF25'] : '' }}" coord="BF25" />
        <x-table.td type="input" value="{{ $data->has('BG25') ? $data['BG25'] : '' }}" coord="BG25" />
        <x-table.td type="input" value="{{ $data->has('BH25') ? $data['BH25'] : '' }}" coord="BH25" />
        <x-table.td type="input" value="{{ $data->has('BI25') ? $data['BI25'] : '' }}" coord="BI25" />
        <x-table.td type="input" value="{{ $data->has('BJ25') ? $data['BJ25'] : '' }}" coord="BJ25" />
        <x-table.td type="input" value="{{ $data->has('BK25') ? $data['BK25'] : '' }}" coord="BK25" />
        <x-table.td type="input" value="{{ $data->has('BL25') ? $data['BL25'] : '' }}" coord="BL25" />
        <x-table.td type="input" value="{{ $data->has('BM25') ? $data['BM25'] : '' }}" coord="BM25" />
        <x-table.td type="input" value="{{ $data->has('BN25') ? $data['BN25'] : '' }}" coord="BN25" />
        <x-table.td type="input" value="{{ $data->has('BO25') ? $data['BO25'] : '' }}" coord="BO25" />
        <x-table.td type="input" value="{{ $data->has('BP25') ? $data['BP25'] : '' }}" coord="BP25" />
        <x-table.td type="input" value="{{ $data->has('BQ25') ? $data['BQ25'] : '' }}" coord="BQ25" />
        <x-table.td type="input" value="{{ $data->has('BR25') ? $data['BR25'] : '' }}" coord="BR25" />
        <x-table.td type="input" value="{{ $data->has('BS25') ? $data['BS25'] : '' }}" coord="BS25" />
        <x-table.td type="input" value="{{ $data->has('BT25') ? $data['BT25'] : '' }}" coord="BT25" />
        <x-table.td type="input" value="{{ $data->has('BU25') ? $data['BU25'] : '' }}" coord="BU25" />
        <x-table.td type="input" value="{{ $data->has('BV25') ? $data['BV25'] : '' }}" coord="BV25" />
        <x-table.td type="input" value="{{ $data->has('BW25') ? $data['BW25'] : '' }}" coord="BW25" />
        <x-table.td type="input" value="{{ $data->has('BX25') ? $data['BX25'] : '' }}" coord="BX25" />
        <x-table.td type="input" value="{{ $data->has('BY25') ? $data['BY25'] : '' }}" coord="BY25" />
        <x-table.td type="input" value="{{ $data->has('BZ25') ? $data['BZ25'] : '' }}" coord="BZ25" />
    </tr>
    <tr>
        <x-table.td type="header" value="кинезиоспециалист" />
        <x-table.td type="header" value="20" />
        <x-table.td type="input" value="{{ $data->has('BF26') ? $data['BF26'] : '' }}" coord="BF26" />
        <x-table.td type="input" value="{{ $data->has('BG26') ? $data['BG26'] : '' }}" coord="BG26" />
        <x-table.td type="input" value="{{ $data->has('BH26') ? $data['BH26'] : '' }}" coord="BH26" />
        <x-table.td type="input" value="{{ $data->has('BI26') ? $data['BI26'] : '' }}" coord="BI26" />
        <x-table.td type="input" value="{{ $data->has('BJ26') ? $data['BJ26'] : '' }}" coord="BJ26" />
        <x-table.td type="input" value="{{ $data->has('BK26') ? $data['BK26'] : '' }}" coord="BK26" />
        <x-table.td type="input" value="{{ $data->has('BL26') ? $data['BL26'] : '' }}" coord="BL26" />
        <x-table.td type="input" value="{{ $data->has('BM26') ? $data['BM26'] : '' }}" coord="BM26" />
        <x-table.td type="input" value="{{ $data->has('BN26') ? $data['BN26'] : '' }}" coord="BN26" />
        <x-table.td type="input" value="{{ $data->has('BO26') ? $data['BO26'] : '' }}" coord="BO26" />
        <x-table.td type="input" value="{{ $data->has('BP26') ? $data['BP26'] : '' }}" coord="BP26" />
        <x-table.td type="input" value="{{ $data->has('BQ26') ? $data['BQ26'] : '' }}" coord="BQ26" />
        <x-table.td type="input" value="{{ $data->has('BR26') ? $data['BR26'] : '' }}" coord="BR26" />
        <x-table.td type="input" value="{{ $data->has('BS26') ? $data['BS26'] : '' }}" coord="BS26" />
        <x-table.td type="input" value="{{ $data->has('BT26') ? $data['BT26'] : '' }}" coord="BT26" />
        <x-table.td type="input" value="{{ $data->has('BU26') ? $data['BU26'] : '' }}" coord="BU26" />
        <x-table.td type="input" value="{{ $data->has('BV26') ? $data['BV26'] : '' }}" coord="BV26" />
        <x-table.td type="input" value="{{ $data->has('BW26') ? $data['BW26'] : '' }}" coord="BW26" />
        <x-table.td type="input" value="{{ $data->has('BX26') ? $data['BX26'] : '' }}" coord="BX26" />
        <x-table.td type="input" value="{{ $data->has('BY26') ? $data['BY26'] : '' }}" coord="BY26" />
        <x-table.td type="input" value="{{ $data->has('BZ26') ? $data['BZ26'] : '' }}" coord="BZ26" />
    </tr>
    <tr>
        <x-table.td type="header" value="эргоспециалист" />
        <x-table.td type="header" value="21" />
        <x-table.td type="input" value="{{ $data->has('BF27') ? $data['BF27'] : '' }}" coord="BF27" />
        <x-table.td type="input" value="{{ $data->has('BG27') ? $data['BG27'] : '' }}" coord="BG27" />
        <x-table.td type="input" value="{{ $data->has('BH27') ? $data['BH27'] : '' }}" coord="BH27" />
        <x-table.td type="input" value="{{ $data->has('BI27') ? $data['BI27'] : '' }}" coord="BI27" />
        <x-table.td type="input" value="{{ $data->has('BJ27') ? $data['BJ27'] : '' }}" coord="BJ27" />
        <x-table.td type="input" value="{{ $data->has('BK27') ? $data['BK27'] : '' }}" coord="BK27" />
        <x-table.td type="input" value="{{ $data->has('BL27') ? $data['BL27'] : '' }}" coord="BL27" />
        <x-table.td type="input" value="{{ $data->has('BM27') ? $data['BM27'] : '' }}" coord="BM27" />
        <x-table.td type="input" value="{{ $data->has('BN27') ? $data['BN27'] : '' }}" coord="BN27" />
        <x-table.td type="input" value="{{ $data->has('BO27') ? $data['BO27'] : '' }}" coord="BO27" />
        <x-table.td type="input" value="{{ $data->has('BP27') ? $data['BP27'] : '' }}" coord="BP27" />
        <x-table.td type="input" value="{{ $data->has('BQ27') ? $data['BQ27'] : '' }}" coord="BQ27" />
        <x-table.td type="input" value="{{ $data->has('BR27') ? $data['BR27'] : '' }}" coord="BR27" />
        <x-table.td type="input" value="{{ $data->has('BS27') ? $data['BS27'] : '' }}" coord="BS27" />
        <x-table.td type="input" value="{{ $data->has('BT27') ? $data['BT27'] : '' }}" coord="BT27" />
        <x-table.td type="input" value="{{ $data->has('BU27') ? $data['BU27'] : '' }}" coord="BU27" />
        <x-table.td type="input" value="{{ $data->has('BV27') ? $data['BV27'] : '' }}" coord="BV27" />
        <x-table.td type="input" value="{{ $data->has('BW27') ? $data['BW27'] : '' }}" coord="BW27" />
        <x-table.td type="input" value="{{ $data->has('BX27') ? $data['BX27'] : '' }}" coord="BX27" />
        <x-table.td type="input" value="{{ $data->has('BY27') ? $data['BY27'] : '' }}" coord="BY27" />
        <x-table.td type="input" value="{{ $data->has('BZ27') ? $data['BZ27'] : '' }}" coord="BZ27" />
    </tr>
    <tr>
        <x-table.td type="header" value="Должности специалистов в области социального обслуживания - всего, из них:" />
        <x-table.td type="header" value="22" />
        <x-table.td type="input" value="{{ $data->has('BF28') ? $data['BF28'] : '' }}" coord="BF28" />
        <x-table.td type="input" value="{{ $data->has('BG28') ? $data['BG28'] : '' }}" coord="BG28" />
        <x-table.td type="input" value="{{ $data->has('BH28') ? $data['BH28'] : '' }}" coord="BH28" />
        <x-table.td type="input" value="{{ $data->has('BI28') ? $data['BI28'] : '' }}" coord="BI28" />
        <x-table.td type="input" value="{{ $data->has('BJ28') ? $data['BJ28'] : '' }}" coord="BJ28" />
        <x-table.td type="input" value="{{ $data->has('BK28') ? $data['BK28'] : '' }}" coord="BK28" />
        <x-table.td type="input" value="{{ $data->has('BL28') ? $data['BL28'] : '' }}" coord="BL28" />
        <x-table.td type="input" value="{{ $data->has('BM28') ? $data['BM28'] : '' }}" coord="BM28" />
        <x-table.td type="input" value="{{ $data->has('BN28') ? $data['BN28'] : '' }}" coord="BN28" />
        <x-table.td type="input" value="{{ $data->has('BO28') ? $data['BO28'] : '' }}" coord="BO28" />
        <x-table.td type="input" value="{{ $data->has('BP28') ? $data['BP28'] : '' }}" coord="BP28" />
        <x-table.td type="input" value="{{ $data->has('BQ28') ? $data['BQ28'] : '' }}" coord="BQ28" />
        <x-table.td type="input" value="{{ $data->has('BR28') ? $data['BR28'] : '' }}" coord="BR28" />
        <x-table.td type="input" value="{{ $data->has('BS28') ? $data['BS28'] : '' }}" coord="BS28" />
        <x-table.td type="input" value="{{ $data->has('BT28') ? $data['BT28'] : '' }}" coord="BT28" />
        <x-table.td type="input" value="{{ $data->has('BU28') ? $data['BU28'] : '' }}" coord="BU28" />
        <x-table.td type="input" value="{{ $data->has('BV28') ? $data['BV28'] : '' }}" coord="BV28" />
        <x-table.td type="input" value="{{ $data->has('BW28') ? $data['BW28'] : '' }}" coord="BW28" />
        <x-table.td type="input" value="{{ $data->has('BX28') ? $data['BX28'] : '' }}" coord="BX28" />
        <x-table.td type="input" value="{{ $data->has('BY28') ? $data['BY28'] : '' }}" coord="BY28" />
        <x-table.td type="input" value="{{ $data->has('BZ28') ? $data['BZ28'] : '' }}" coord="BZ28" />
    </tr>
    <tr>
        <x-table.td type="header" value="специалист по социальной работе" />
        <x-table.td type="header" value="23" />
        <x-table.td type="input" value="{{ $data->has('BF29') ? $data['BF29'] : '' }}" coord="BF29" />
        <x-table.td type="input" value="{{ $data->has('BG29') ? $data['BG29'] : '' }}" coord="BG29" />
        <x-table.td type="input" value="{{ $data->has('BH29') ? $data['BH29'] : '' }}" coord="BH29" />
        <x-table.td type="input" value="{{ $data->has('BI29') ? $data['BI29'] : '' }}" coord="BI29" />
        <x-table.td type="input" value="{{ $data->has('BJ29') ? $data['BJ29'] : '' }}" coord="BJ29" />
        <x-table.td type="input" value="{{ $data->has('BK29') ? $data['BK29'] : '' }}" coord="BK29" />
        <x-table.td type="input" value="{{ $data->has('BL29') ? $data['BL29'] : '' }}" coord="BL29" />
        <x-table.td type="input" value="{{ $data->has('BM29') ? $data['BM29'] : '' }}" coord="BM29" />
        <x-table.td type="input" value="{{ $data->has('BN29') ? $data['BN29'] : '' }}" coord="BN29" />
        <x-table.td type="input" value="{{ $data->has('BO29') ? $data['BO29'] : '' }}" coord="BO29" />
        <x-table.td type="input" value="{{ $data->has('BP29') ? $data['BP29'] : '' }}" coord="BP29" />
        <x-table.td type="input" value="{{ $data->has('BQ29') ? $data['BQ29'] : '' }}" coord="BQ29" />
        <x-table.td type="input" value="{{ $data->has('BR29') ? $data['BR29'] : '' }}" coord="BR29" />
        <x-table.td type="input" value="{{ $data->has('BS29') ? $data['BS29'] : '' }}" coord="BS29" />
        <x-table.td type="input" value="{{ $data->has('BT29') ? $data['BT29'] : '' }}" coord="BT29" />
        <x-table.td type="input" value="{{ $data->has('BU29') ? $data['BU29'] : '' }}" coord="BU29" />
        <x-table.td type="input" value="{{ $data->has('BV29') ? $data['BV29'] : '' }}" coord="BV29" />
        <x-table.td type="input" value="{{ $data->has('BW29') ? $data['BW29'] : '' }}" coord="BW29" />
        <x-table.td type="input" value="{{ $data->has('BX29') ? $data['BX29'] : '' }}" coord="BX29" />
        <x-table.td type="input" value="{{ $data->has('BY29') ? $data['BY29'] : '' }}" coord="BY29" />
        <x-table.td type="input" value="{{ $data->has('BZ29') ? $data['BZ29'] : '' }}" coord="BZ29" />
    </tr>
    <tr>
        <x-table.td type="header" value="социальный работник" />
        <x-table.td type="header" value="24" />
        <x-table.td type="input" value="{{ $data->has('BF30') ? $data['BF30'] : '' }}" coord="BF30" />
        <x-table.td type="input" value="{{ $data->has('BG30') ? $data['BG30'] : '' }}" coord="BG30" />
        <x-table.td type="input" value="{{ $data->has('BH30') ? $data['BH30'] : '' }}" coord="BH30" />
        <x-table.td type="input" value="{{ $data->has('BI30') ? $data['BI30'] : '' }}" coord="BI30" />
        <x-table.td type="input" value="{{ $data->has('BJ30') ? $data['BJ30'] : '' }}" coord="BJ30" />
        <x-table.td type="input" value="{{ $data->has('BK30') ? $data['BK30'] : '' }}" coord="BK30" />
        <x-table.td type="input" value="{{ $data->has('BL30') ? $data['BL30'] : '' }}" coord="BL30" />
        <x-table.td type="input" value="{{ $data->has('BM30') ? $data['BM30'] : '' }}" coord="BM30" />
        <x-table.td type="input" value="{{ $data->has('BN30') ? $data['BN30'] : '' }}" coord="BN30" />
        <x-table.td type="input" value="{{ $data->has('BO30') ? $data['BO30'] : '' }}" coord="BO30" />
        <x-table.td type="input" value="{{ $data->has('BP30') ? $data['BP30'] : '' }}" coord="BP30" />
        <x-table.td type="input" value="{{ $data->has('BQ30') ? $data['BQ30'] : '' }}" coord="BQ30" />
        <x-table.td type="input" value="{{ $data->has('BR30') ? $data['BR30'] : '' }}" coord="BR30" />
        <x-table.td type="input" value="{{ $data->has('BS30') ? $data['BS30'] : '' }}" coord="BS30" />
        <x-table.td type="input" value="{{ $data->has('BT30') ? $data['BT30'] : '' }}" coord="BT30" />
        <x-table.td type="input" value="{{ $data->has('BU30') ? $data['BU30'] : '' }}" coord="BU30" />
        <x-table.td type="input" value="{{ $data->has('BV30') ? $data['BV30'] : '' }}" coord="BV30" />
        <x-table.td type="input" value="{{ $data->has('BW30') ? $data['BW30'] : '' }}" coord="BW30" />
        <x-table.td type="input" value="{{ $data->has('BX30') ? $data['BX30'] : '' }}" coord="BX30" />
        <x-table.td type="input" value="{{ $data->has('BY30') ? $data['BY30'] : '' }}" coord="BY30" />
        <x-table.td type="input" value="{{ $data->has('BZ30') ? $data['BZ30'] : '' }}" coord="BZ30" />
    </tr>
    <tr>
        <x-table.td type="header" value="специалист по реабилитационной работе в социальной сфере" />
        <x-table.td type="header" value="25" />
        <x-table.td type="input" value="{{ $data->has('BF31') ? $data['BF31'] : '' }}" coord="BF31" />
        <x-table.td type="input" value="{{ $data->has('BG31') ? $data['BG31'] : '' }}" coord="BG31" />
        <x-table.td type="input" value="{{ $data->has('BH31') ? $data['BH31'] : '' }}" coord="BH31" />
        <x-table.td type="input" value="{{ $data->has('BI31') ? $data['BI31'] : '' }}" coord="BI31" />
        <x-table.td type="input" value="{{ $data->has('BJ31') ? $data['BJ31'] : '' }}" coord="BJ31" />
        <x-table.td type="input" value="{{ $data->has('BK31') ? $data['BK31'] : '' }}" coord="BK31" />
        <x-table.td type="input" value="{{ $data->has('BL31') ? $data['BL31'] : '' }}" coord="BL31" />
        <x-table.td type="input" value="{{ $data->has('BM31') ? $data['BM31'] : '' }}" coord="BM31" />
        <x-table.td type="input" value="{{ $data->has('BN31') ? $data['BN31'] : '' }}" coord="BN31" />
        <x-table.td type="input" value="{{ $data->has('BO31') ? $data['BO31'] : '' }}" coord="BO31" />
        <x-table.td type="input" value="{{ $data->has('BP31') ? $data['BP31'] : '' }}" coord="BP31" />
        <x-table.td type="input" value="{{ $data->has('BQ31') ? $data['BQ31'] : '' }}" coord="BQ31" />
        <x-table.td type="input" value="{{ $data->has('BR31') ? $data['BR31'] : '' }}" coord="BR31" />
        <x-table.td type="input" value="{{ $data->has('BS31') ? $data['BS31'] : '' }}" coord="BS31" />
        <x-table.td type="input" value="{{ $data->has('BT31') ? $data['BT31'] : '' }}" coord="BT31" />
        <x-table.td type="input" value="{{ $data->has('BU31') ? $data['BU31'] : '' }}" coord="BU31" />
        <x-table.td type="input" value="{{ $data->has('BV31') ? $data['BV31'] : '' }}" coord="BV31" />
        <x-table.td type="input" value="{{ $data->has('BW31') ? $data['BW31'] : '' }}" coord="BW31" />
        <x-table.td type="input" value="{{ $data->has('BX31') ? $data['BX31'] : '' }}" coord="BX31" />
        <x-table.td type="input" value="{{ $data->has('BY31') ? $data['BY31'] : '' }}" coord="BY31" />
        <x-table.td type="input" value="{{ $data->has('BZ31') ? $data['BZ31'] : '' }}" coord="BZ31" />
    </tr>
    <tr>
        <x-table.td type="header" value="психолог в социальной сфере" />
        <x-table.td type="header" value="26" />
        <x-table.td type="input" value="{{ $data->has('BF32') ? $data['BF32'] : '' }}" coord="BF32" />
        <x-table.td type="input" value="{{ $data->has('BG32') ? $data['BG32'] : '' }}" coord="BG32" />
        <x-table.td type="input" value="{{ $data->has('BH32') ? $data['BH32'] : '' }}" coord="BH32" />
        <x-table.td type="input" value="{{ $data->has('BI32') ? $data['BI32'] : '' }}" coord="BI32" />
        <x-table.td type="input" value="{{ $data->has('BJ32') ? $data['BJ32'] : '' }}" coord="BJ32" />
        <x-table.td type="input" value="{{ $data->has('BK32') ? $data['BK32'] : '' }}" coord="BK32" />
        <x-table.td type="input" value="{{ $data->has('BL32') ? $data['BL32'] : '' }}" coord="BL32" />
        <x-table.td type="input" value="{{ $data->has('BM32') ? $data['BM32'] : '' }}" coord="BM32" />
        <x-table.td type="input" value="{{ $data->has('BN32') ? $data['BN32'] : '' }}" coord="BN32" />
        <x-table.td type="input" value="{{ $data->has('BO32') ? $data['BO32'] : '' }}" coord="BO32" />
        <x-table.td type="input" value="{{ $data->has('BP32') ? $data['BP32'] : '' }}" coord="BP32" />
        <x-table.td type="input" value="{{ $data->has('BQ32') ? $data['BQ32'] : '' }}" coord="BQ32" />
        <x-table.td type="input" value="{{ $data->has('BR32') ? $data['BR32'] : '' }}" coord="BR32" />
        <x-table.td type="input" value="{{ $data->has('BS32') ? $data['BS32'] : '' }}" coord="BS32" />
        <x-table.td type="input" value="{{ $data->has('BT32') ? $data['BT32'] : '' }}" coord="BT32" />
        <x-table.td type="input" value="{{ $data->has('BU32') ? $data['BU32'] : '' }}" coord="BU32" />
        <x-table.td type="input" value="{{ $data->has('BV32') ? $data['BV32'] : '' }}" coord="BV32" />
        <x-table.td type="input" value="{{ $data->has('BW32') ? $data['BW32'] : '' }}" coord="BW32" />
        <x-table.td type="input" value="{{ $data->has('BX32') ? $data['BX32'] : '' }}" coord="BX32" />
        <x-table.td type="input" value="{{ $data->has('BY32') ? $data['BY32'] : '' }}" coord="BY32" />
        <x-table.td type="input" value="{{ $data->has('BZ32') ? $data['BZ32'] : '' }}" coord="BZ32" />
    </tr>
    <tr>
        <x-table.td type="header" value="специалист по работе с семьей" />
        <x-table.td type="header" value="27" />
        <x-table.td type="input" value="{{ $data->has('BF33') ? $data['BF33'] : '' }}" coord="BF33" />
        <x-table.td type="input" value="{{ $data->has('BG33') ? $data['BG33'] : '' }}" coord="BG33" />
        <x-table.td type="input" value="{{ $data->has('BH33') ? $data['BH33'] : '' }}" coord="BH33" />
        <x-table.td type="input" value="{{ $data->has('BI33') ? $data['BI33'] : '' }}" coord="BI33" />
        <x-table.td type="input" value="{{ $data->has('BJ33') ? $data['BJ33'] : '' }}" coord="BJ33" />
        <x-table.td type="input" value="{{ $data->has('BK33') ? $data['BK33'] : '' }}" coord="BK33" />
        <x-table.td type="input" value="{{ $data->has('BL33') ? $data['BL33'] : '' }}" coord="BL33" />
        <x-table.td type="input" value="{{ $data->has('BM33') ? $data['BM33'] : '' }}" coord="BM33" />
        <x-table.td type="input" value="{{ $data->has('BN33') ? $data['BN33'] : '' }}" coord="BN33" />
        <x-table.td type="input" value="{{ $data->has('BO33') ? $data['BO33'] : '' }}" coord="BO33" />
        <x-table.td type="input" value="{{ $data->has('BP33') ? $data['BP33'] : '' }}" coord="BP33" />
        <x-table.td type="input" value="{{ $data->has('BQ33') ? $data['BQ33'] : '' }}" coord="BQ33" />
        <x-table.td type="input" value="{{ $data->has('BR33') ? $data['BR33'] : '' }}" coord="BR33" />
        <x-table.td type="input" value="{{ $data->has('BS33') ? $data['BS33'] : '' }}" coord="BS33" />
        <x-table.td type="input" value="{{ $data->has('BT33') ? $data['BT33'] : '' }}" coord="BT33" />
        <x-table.td type="input" value="{{ $data->has('BU33') ? $data['BU33'] : '' }}" coord="BU33" />
        <x-table.td type="input" value="{{ $data->has('BV33') ? $data['BV33'] : '' }}" coord="BV33" />
        <x-table.td type="input" value="{{ $data->has('BW33') ? $data['BW33'] : '' }}" coord="BW33" />
        <x-table.td type="input" value="{{ $data->has('BX33') ? $data['BX33'] : '' }}" coord="BX33" />
        <x-table.td type="input" value="{{ $data->has('BY33') ? $data['BY33'] : '' }}" coord="BY33" />
        <x-table.td type="input" value="{{ $data->has('BZ33') ? $data['BZ33'] : '' }}" coord="BZ33" />
    </tr>
    <tr>
        <x-table.td type="header" value="ассистент (помощник) по оказанию технической помощи инвалидами и лицам с ограниченными возможностями здоровья" />
        <x-table.td type="header" value="28" />
        <x-table.td type="input" value="{{ $data->has('BF34') ? $data['BF34'] : '' }}" coord="BF34" />
        <x-table.td type="input" value="{{ $data->has('BG34') ? $data['BG34'] : '' }}" coord="BG34" />
        <x-table.td type="input" value="{{ $data->has('BH34') ? $data['BH34'] : '' }}" coord="BH34" />
        <x-table.td type="input" value="{{ $data->has('BI34') ? $data['BI34'] : '' }}" coord="BI34" />
        <x-table.td type="input" value="{{ $data->has('BJ34') ? $data['BJ34'] : '' }}" coord="BJ34" />
        <x-table.td type="input" value="{{ $data->has('BK34') ? $data['BK34'] : '' }}" coord="BK34" />
        <x-table.td type="input" value="{{ $data->has('BL34') ? $data['BL34'] : '' }}" coord="BL34" />
        <x-table.td type="input" value="{{ $data->has('BM34') ? $data['BM34'] : '' }}" coord="BM34" />
        <x-table.td type="input" value="{{ $data->has('BN34') ? $data['BN34'] : '' }}" coord="BN34" />
        <x-table.td type="input" value="{{ $data->has('BO34') ? $data['BO34'] : '' }}" coord="BO34" />
        <x-table.td type="input" value="{{ $data->has('BP34') ? $data['BP34'] : '' }}" coord="BP34" />
        <x-table.td type="input" value="{{ $data->has('BQ34') ? $data['BQ34'] : '' }}" coord="BQ34" />
        <x-table.td type="input" value="{{ $data->has('BR34') ? $data['BR34'] : '' }}" coord="BR34" />
        <x-table.td type="input" value="{{ $data->has('BS34') ? $data['BS34'] : '' }}" coord="BS34" />
        <x-table.td type="input" value="{{ $data->has('BT34') ? $data['BT34'] : '' }}" coord="BT34" />
        <x-table.td type="input" value="{{ $data->has('BU34') ? $data['BU34'] : '' }}" coord="BU34" />
        <x-table.td type="input" value="{{ $data->has('BV34') ? $data['BV34'] : '' }}" coord="BV34" />
        <x-table.td type="input" value="{{ $data->has('BW34') ? $data['BW34'] : '' }}" coord="BW34" />
        <x-table.td type="input" value="{{ $data->has('BX34') ? $data['BX34'] : '' }}" coord="BX34" />
        <x-table.td type="input" value="{{ $data->has('BY34') ? $data['BY34'] : '' }}" coord="BY34" />
        <x-table.td type="input" value="{{ $data->has('BZ34') ? $data['BZ34'] : '' }}" coord="BZ34" />
    </tr>
    <tr>
        <x-table.td type="header" value="переводчик русского жестового языка" />
        <x-table.td type="header" value="29" />
        <x-table.td type="input" value="{{ $data->has('BF35') ? $data['BF35'] : '' }}" coord="BF35" />
        <x-table.td type="input" value="{{ $data->has('BG35') ? $data['BG35'] : '' }}" coord="BG35" />
        <x-table.td type="input" value="{{ $data->has('BH35') ? $data['BH35'] : '' }}" coord="BH35" />
        <x-table.td type="input" value="{{ $data->has('BI35') ? $data['BI35'] : '' }}" coord="BI35" />
        <x-table.td type="input" value="{{ $data->has('BJ35') ? $data['BJ35'] : '' }}" coord="BJ35" />
        <x-table.td type="input" value="{{ $data->has('BK35') ? $data['BK35'] : '' }}" coord="BK35" />
        <x-table.td type="input" value="{{ $data->has('BL35') ? $data['BL35'] : '' }}" coord="BL35" />
        <x-table.td type="input" value="{{ $data->has('BM35') ? $data['BM35'] : '' }}" coord="BM35" />
        <x-table.td type="input" value="{{ $data->has('BN35') ? $data['BN35'] : '' }}" coord="BN35" />
        <x-table.td type="input" value="{{ $data->has('BO35') ? $data['BO35'] : '' }}" coord="BO35" />
        <x-table.td type="input" value="{{ $data->has('BP35') ? $data['BP35'] : '' }}" coord="BP35" />
        <x-table.td type="input" value="{{ $data->has('BQ35') ? $data['BQ35'] : '' }}" coord="BQ35" />
        <x-table.td type="input" value="{{ $data->has('BR35') ? $data['BR35'] : '' }}" coord="BR35" />
        <x-table.td type="input" value="{{ $data->has('BS35') ? $data['BS35'] : '' }}" coord="BS35" />
        <x-table.td type="input" value="{{ $data->has('BT35') ? $data['BT35'] : '' }}" coord="BT35" />
        <x-table.td type="input" value="{{ $data->has('BU35') ? $data['BU35'] : '' }}" coord="BU35" />
        <x-table.td type="input" value="{{ $data->has('BV35') ? $data['BV35'] : '' }}" coord="BV35" />
        <x-table.td type="input" value="{{ $data->has('BW35') ? $data['BW35'] : '' }}" coord="BW35" />
        <x-table.td type="input" value="{{ $data->has('BX35') ? $data['BX35'] : '' }}" coord="BX35" />
        <x-table.td type="input" value="{{ $data->has('BY35') ? $data['BY35'] : '' }}" coord="BY35" />
        <x-table.td type="input" value="{{ $data->has('BZ35') ? $data['BZ35'] : '' }}" coord="BZ35" />
    </tr>
    <tr>
        <x-table.td type="header" value="тифлосурдопереводчик" />
        <x-table.td type="header" value="30" />
        <x-table.td type="input" value="{{ $data->has('BF36') ? $data['BF36'] : '' }}" coord="BF36" />
        <x-table.td type="input" value="{{ $data->has('BG36') ? $data['BG36'] : '' }}" coord="BG36" />
        <x-table.td type="input" value="{{ $data->has('BH36') ? $data['BH36'] : '' }}" coord="BH36" />
        <x-table.td type="input" value="{{ $data->has('BI36') ? $data['BI36'] : '' }}" coord="BI36" />
        <x-table.td type="input" value="{{ $data->has('BJ36') ? $data['BJ36'] : '' }}" coord="BJ36" />
        <x-table.td type="input" value="{{ $data->has('BK36') ? $data['BK36'] : '' }}" coord="BK36" />
        <x-table.td type="input" value="{{ $data->has('BL36') ? $data['BL36'] : '' }}" coord="BL36" />
        <x-table.td type="input" value="{{ $data->has('BM36') ? $data['BM36'] : '' }}" coord="BM36" />
        <x-table.td type="input" value="{{ $data->has('BN36') ? $data['BN36'] : '' }}" coord="BN36" />
        <x-table.td type="input" value="{{ $data->has('BO36') ? $data['BO36'] : '' }}" coord="BO36" />
        <x-table.td type="input" value="{{ $data->has('BP36') ? $data['BP36'] : '' }}" coord="BP36" />
        <x-table.td type="input" value="{{ $data->has('BQ36') ? $data['BQ36'] : '' }}" coord="BQ36" />
        <x-table.td type="input" value="{{ $data->has('BR36') ? $data['BR36'] : '' }}" coord="BR36" />
        <x-table.td type="input" value="{{ $data->has('BS36') ? $data['BS36'] : '' }}" coord="BS36" />
        <x-table.td type="input" value="{{ $data->has('BT36') ? $data['BT36'] : '' }}" coord="BT36" />
        <x-table.td type="input" value="{{ $data->has('BU36') ? $data['BU36'] : '' }}" coord="BU36" />
        <x-table.td type="input" value="{{ $data->has('BV36') ? $data['BV36'] : '' }}" coord="BV36" />
        <x-table.td type="input" value="{{ $data->has('BW36') ? $data['BW36'] : '' }}" coord="BW36" />
        <x-table.td type="input" value="{{ $data->has('BX36') ? $data['BX36'] : '' }}" coord="BX36" />
        <x-table.td type="input" value="{{ $data->has('BY36') ? $data['BY36'] : '' }}" coord="BY36" />
        <x-table.td type="input" value="{{ $data->has('BZ36') ? $data['BZ36'] : '' }}" coord="BZ36" />
    </tr>
    <tr>
        <x-table.td type="header" value="Должности специалистов в области физической культуры и спорта - всего, из них:" />
        <x-table.td type="header" value="31" />
        <x-table.td type="input" value="{{ $data->has('BF37') ? $data['BF37'] : '' }}" coord="BF37" />
        <x-table.td type="input" value="{{ $data->has('BG37') ? $data['BG37'] : '' }}" coord="BG37" />
        <x-table.td type="input" value="{{ $data->has('BH37') ? $data['BH37'] : '' }}" coord="BH37" />
        <x-table.td type="input" value="{{ $data->has('BI37') ? $data['BI37'] : '' }}" coord="BI37" />
        <x-table.td type="input" value="{{ $data->has('BJ37') ? $data['BJ37'] : '' }}" coord="BJ37" />
        <x-table.td type="input" value="{{ $data->has('BK37') ? $data['BK37'] : '' }}" coord="BK37" />
        <x-table.td type="input" value="{{ $data->has('BL37') ? $data['BL37'] : '' }}" coord="BL37" />
        <x-table.td type="input" value="{{ $data->has('BM37') ? $data['BM37'] : '' }}" coord="BM37" />
        <x-table.td type="input" value="{{ $data->has('BN37') ? $data['BN37'] : '' }}" coord="BN37" />
        <x-table.td type="input" value="{{ $data->has('BO37') ? $data['BO37'] : '' }}" coord="BO37" />
        <x-table.td type="input" value="{{ $data->has('BP37') ? $data['BP37'] : '' }}" coord="BP37" />
        <x-table.td type="input" value="{{ $data->has('BQ37') ? $data['BQ37'] : '' }}" coord="BQ37" />
        <x-table.td type="input" value="{{ $data->has('BR37') ? $data['BR37'] : '' }}" coord="BR37" />
        <x-table.td type="input" value="{{ $data->has('BS37') ? $data['BS37'] : '' }}" coord="BS37" />
        <x-table.td type="input" value="{{ $data->has('BT37') ? $data['BT37'] : '' }}" coord="BT37" />
        <x-table.td type="input" value="{{ $data->has('BU37') ? $data['BU37'] : '' }}" coord="BU37" />
        <x-table.td type="input" value="{{ $data->has('BV37') ? $data['BV37'] : '' }}" coord="BV37" />
        <x-table.td type="input" value="{{ $data->has('BW37') ? $data['BW37'] : '' }}" coord="BW37" />
        <x-table.td type="input" value="{{ $data->has('BX37') ? $data['BX37'] : '' }}" coord="BX37" />
        <x-table.td type="input" value="{{ $data->has('BY37') ? $data['BY37'] : '' }}" coord="BY37" />
        <x-table.td type="input" value="{{ $data->has('BZ37') ? $data['BZ37'] : '' }}" coord="BZ37" />
    </tr>
    <tr>
        <x-table.td type="header" value="инструктор по адаптивной физической культуре" />
        <x-table.td type="header" value="32" />
        <x-table.td type="input" value="{{ $data->has('BF38') ? $data['BF38'] : '' }}" coord="BF38" />
        <x-table.td type="input" value="{{ $data->has('BG38') ? $data['BG38'] : '' }}" coord="BG38" />
        <x-table.td type="input" value="{{ $data->has('BH38') ? $data['BH38'] : '' }}" coord="BH38" />
        <x-table.td type="input" value="{{ $data->has('BI38') ? $data['BI38'] : '' }}" coord="BI38" />
        <x-table.td type="input" value="{{ $data->has('BJ38') ? $data['BJ38'] : '' }}" coord="BJ38" />
        <x-table.td type="input" value="{{ $data->has('BK38') ? $data['BK38'] : '' }}" coord="BK38" />
        <x-table.td type="input" value="{{ $data->has('BL38') ? $data['BL38'] : '' }}" coord="BL38" />
        <x-table.td type="input" value="{{ $data->has('BM38') ? $data['BM38'] : '' }}" coord="BM38" />
        <x-table.td type="input" value="{{ $data->has('BN38') ? $data['BN38'] : '' }}" coord="BN38" />
        <x-table.td type="input" value="{{ $data->has('BO38') ? $data['BO38'] : '' }}" coord="BO38" />
        <x-table.td type="input" value="{{ $data->has('BP38') ? $data['BP38'] : '' }}" coord="BP38" />
        <x-table.td type="input" value="{{ $data->has('BQ38') ? $data['BQ38'] : '' }}" coord="BQ38" />
        <x-table.td type="input" value="{{ $data->has('BR38') ? $data['BR38'] : '' }}" coord="BR38" />
        <x-table.td type="input" value="{{ $data->has('BS38') ? $data['BS38'] : '' }}" coord="BS38" />
        <x-table.td type="input" value="{{ $data->has('BT38') ? $data['BT38'] : '' }}" coord="BT38" />
        <x-table.td type="input" value="{{ $data->has('BU38') ? $data['BU38'] : '' }}" coord="BU38" />
        <x-table.td type="input" value="{{ $data->has('BV38') ? $data['BV38'] : '' }}" coord="BV38" />
        <x-table.td type="input" value="{{ $data->has('BW38') ? $data['BW38'] : '' }}" coord="BW38" />
        <x-table.td type="input" value="{{ $data->has('BX38') ? $data['BX38'] : '' }}" coord="BX38" />
        <x-table.td type="input" value="{{ $data->has('BY38') ? $data['BY38'] : '' }}" coord="BY38" />
        <x-table.td type="input" value="{{ $data->has('BZ38') ? $data['BZ38'] : '' }}" coord="BZ38" />
    </tr>
    <tr>
        <x-table.td type="header" value="инструктор-методист по адаптивной физической культуре и адаптивному спорту" />
        <x-table.td type="header" value="33" />
        <x-table.td type="input" value="{{ $data->has('BF39') ? $data['BF39'] : '' }}" coord="BF39" />
        <x-table.td type="input" value="{{ $data->has('BG39') ? $data['BG39'] : '' }}" coord="BG39" />
        <x-table.td type="input" value="{{ $data->has('BH39') ? $data['BH39'] : '' }}" coord="BH39" />
        <x-table.td type="input" value="{{ $data->has('BI39') ? $data['BI39'] : '' }}" coord="BI39" />
        <x-table.td type="input" value="{{ $data->has('BJ39') ? $data['BJ39'] : '' }}" coord="BJ39" />
        <x-table.td type="input" value="{{ $data->has('BK39') ? $data['BK39'] : '' }}" coord="BK39" />
        <x-table.td type="input" value="{{ $data->has('BL39') ? $data['BL39'] : '' }}" coord="BL39" />
        <x-table.td type="input" value="{{ $data->has('BM39') ? $data['BM39'] : '' }}" coord="BM39" />
        <x-table.td type="input" value="{{ $data->has('BN39') ? $data['BN39'] : '' }}" coord="BN39" />
        <x-table.td type="input" value="{{ $data->has('BO39') ? $data['BO39'] : '' }}" coord="BO39" />
        <x-table.td type="input" value="{{ $data->has('BP39') ? $data['BP39'] : '' }}" coord="BP39" />
        <x-table.td type="input" value="{{ $data->has('BQ39') ? $data['BQ39'] : '' }}" coord="BQ39" />
        <x-table.td type="input" value="{{ $data->has('BR39') ? $data['BR39'] : '' }}" coord="BR39" />
        <x-table.td type="input" value="{{ $data->has('BS39') ? $data['BS39'] : '' }}" coord="BS39" />
        <x-table.td type="input" value="{{ $data->has('BT39') ? $data['BT39'] : '' }}" coord="BT39" />
        <x-table.td type="input" value="{{ $data->has('BU39') ? $data['BU39'] : '' }}" coord="BU39" />
        <x-table.td type="input" value="{{ $data->has('BV39') ? $data['BV39'] : '' }}" coord="BV39" />
        <x-table.td type="input" value="{{ $data->has('BW39') ? $data['BW39'] : '' }}" coord="BW39" />
        <x-table.td type="input" value="{{ $data->has('BX39') ? $data['BX39'] : '' }}" coord="BX39" />
        <x-table.td type="input" value="{{ $data->has('BY39') ? $data['BY39'] : '' }}" coord="BY39" />
        <x-table.td type="input" value="{{ $data->has('BZ39') ? $data['BZ39'] : '' }}" coord="BZ39" />
    </tr>
    <tr>
        <x-table.td type="header" value="тренер по адаптивной физической культуре и адаптивному спорту" />
        <x-table.td type="header" value="34" />
        <x-table.td type="input" value="{{ $data->has('BF40') ? $data['BF40'] : '' }}" coord="BF40" />
        <x-table.td type="input" value="{{ $data->has('BG40') ? $data['BG40'] : '' }}" coord="BG40" />
        <x-table.td type="input" value="{{ $data->has('BH40') ? $data['BH40'] : '' }}" coord="BH40" />
        <x-table.td type="input" value="{{ $data->has('BI40') ? $data['BI40'] : '' }}" coord="BI40" />
        <x-table.td type="input" value="{{ $data->has('BJ40') ? $data['BJ40'] : '' }}" coord="BJ40" />
        <x-table.td type="input" value="{{ $data->has('BK40') ? $data['BK40'] : '' }}" coord="BK40" />
        <x-table.td type="input" value="{{ $data->has('BL40') ? $data['BL40'] : '' }}" coord="BL40" />
        <x-table.td type="input" value="{{ $data->has('BM40') ? $data['BM40'] : '' }}" coord="BM40" />
        <x-table.td type="input" value="{{ $data->has('BN40') ? $data['BN40'] : '' }}" coord="BN40" />
        <x-table.td type="input" value="{{ $data->has('BO40') ? $data['BO40'] : '' }}" coord="BO40" />
        <x-table.td type="input" value="{{ $data->has('BP40') ? $data['BP40'] : '' }}" coord="BP40" />
        <x-table.td type="input" value="{{ $data->has('BQ40') ? $data['BQ40'] : '' }}" coord="BQ40" />
        <x-table.td type="input" value="{{ $data->has('BR40') ? $data['BR40'] : '' }}" coord="BR40" />
        <x-table.td type="input" value="{{ $data->has('BS40') ? $data['BS40'] : '' }}" coord="BS40" />
        <x-table.td type="input" value="{{ $data->has('BT40') ? $data['BT40'] : '' }}" coord="BT40" />
        <x-table.td type="input" value="{{ $data->has('BU40') ? $data['BU40'] : '' }}" coord="BU40" />
        <x-table.td type="input" value="{{ $data->has('BV40') ? $data['BV40'] : '' }}" coord="BV40" />
        <x-table.td type="input" value="{{ $data->has('BW40') ? $data['BW40'] : '' }}" coord="BW40" />
        <x-table.td type="input" value="{{ $data->has('BX40') ? $data['BX40'] : '' }}" coord="BX40" />
        <x-table.td type="input" value="{{ $data->has('BY40') ? $data['BY40'] : '' }}" coord="BY40" />
        <x-table.td type="input" value="{{ $data->has('BZ40') ? $data['BZ40'] : '' }}" coord="BZ40" />
    </tr>
    <tr>
        <x-table.td type="header" value="Должности специалистов в области образования и науки - всего, из них:" />
        <x-table.td type="header" value="35" />
        <x-table.td type="input" value="{{ $data->has('BF41') ? $data['BF41'] : '' }}" coord="BF41" />
        <x-table.td type="input" value="{{ $data->has('BG41') ? $data['BG41'] : '' }}" coord="BG41" />
        <x-table.td type="input" value="{{ $data->has('BH41') ? $data['BH41'] : '' }}" coord="BH41" />
        <x-table.td type="input" value="{{ $data->has('BI41') ? $data['BI41'] : '' }}" coord="BI41" />
        <x-table.td type="input" value="{{ $data->has('BJ41') ? $data['BJ41'] : '' }}" coord="BJ41" />
        <x-table.td type="input" value="{{ $data->has('BK41') ? $data['BK41'] : '' }}" coord="BK41" />
        <x-table.td type="input" value="{{ $data->has('BL41') ? $data['BL41'] : '' }}" coord="BL41" />
        <x-table.td type="input" value="{{ $data->has('BM41') ? $data['BM41'] : '' }}" coord="BM41" />
        <x-table.td type="input" value="{{ $data->has('BN41') ? $data['BN41'] : '' }}" coord="BN41" />
        <x-table.td type="input" value="{{ $data->has('BO41') ? $data['BO41'] : '' }}" coord="BO41" />
        <x-table.td type="input" value="{{ $data->has('BP41') ? $data['BP41'] : '' }}" coord="BP41" />
        <x-table.td type="input" value="{{ $data->has('BQ41') ? $data['BQ41'] : '' }}" coord="BQ41" />
        <x-table.td type="input" value="{{ $data->has('BR41') ? $data['BR41'] : '' }}" coord="BR41" />
        <x-table.td type="input" value="{{ $data->has('BS41') ? $data['BS41'] : '' }}" coord="BS41" />
        <x-table.td type="input" value="{{ $data->has('BT41') ? $data['BT41'] : '' }}" coord="BT41" />
        <x-table.td type="input" value="{{ $data->has('BU41') ? $data['BU41'] : '' }}" coord="BU41" />
        <x-table.td type="input" value="{{ $data->has('BV41') ? $data['BV41'] : '' }}" coord="BV41" />
        <x-table.td type="input" value="{{ $data->has('BW41') ? $data['BW41'] : '' }}" coord="BW41" />
        <x-table.td type="input" value="{{ $data->has('BX41') ? $data['BX41'] : '' }}" coord="BX41" />
        <x-table.td type="input" value="{{ $data->has('BY41') ? $data['BY41'] : '' }}" coord="BY41" />
        <x-table.td type="input" value="{{ $data->has('BZ41') ? $data['BZ41'] : '' }}" coord="BZ41" />
    </tr>
    <tr>
        <x-table.td type="header" value="педагог-психолог (психолог в сфере образования)" />
        <x-table.td type="header" value="36" />
        <x-table.td type="input" value="{{ $data->has('BF42') ? $data['BF42'] : '' }}" coord="BF42" />
        <x-table.td type="input" value="{{ $data->has('BG42') ? $data['BG42'] : '' }}" coord="BG42" />
        <x-table.td type="input" value="{{ $data->has('BH42') ? $data['BH42'] : '' }}" coord="BH42" />
        <x-table.td type="input" value="{{ $data->has('BI42') ? $data['BI42'] : '' }}" coord="BI42" />
        <x-table.td type="input" value="{{ $data->has('BJ42') ? $data['BJ42'] : '' }}" coord="BJ42" />
        <x-table.td type="input" value="{{ $data->has('BK42') ? $data['BK42'] : '' }}" coord="BK42" />
        <x-table.td type="input" value="{{ $data->has('BL42') ? $data['BL42'] : '' }}" coord="BL42" />
        <x-table.td type="input" value="{{ $data->has('BM42') ? $data['BM42'] : '' }}" coord="BM42" />
        <x-table.td type="input" value="{{ $data->has('BN42') ? $data['BN42'] : '' }}" coord="BN42" />
        <x-table.td type="input" value="{{ $data->has('BO42') ? $data['BO42'] : '' }}" coord="BO42" />
        <x-table.td type="input" value="{{ $data->has('BP42') ? $data['BP42'] : '' }}" coord="BP42" />
        <x-table.td type="input" value="{{ $data->has('BQ42') ? $data['BQ42'] : '' }}" coord="BQ42" />
        <x-table.td type="input" value="{{ $data->has('BR42') ? $data['BR42'] : '' }}" coord="BR42" />
        <x-table.td type="input" value="{{ $data->has('BS42') ? $data['BS42'] : '' }}" coord="BS42" />
        <x-table.td type="input" value="{{ $data->has('BT42') ? $data['BT42'] : '' }}" coord="BT42" />
        <x-table.td type="input" value="{{ $data->has('BU42') ? $data['BU42'] : '' }}" coord="BU42" />
        <x-table.td type="input" value="{{ $data->has('BV42') ? $data['BV42'] : '' }}" coord="BV42" />
        <x-table.td type="input" value="{{ $data->has('BW42') ? $data['BW42'] : '' }}" coord="BW42" />
        <x-table.td type="input" value="{{ $data->has('BX42') ? $data['BX42'] : '' }}" coord="BX42" />
        <x-table.td type="input" value="{{ $data->has('BY42') ? $data['BY42'] : '' }}" coord="BY42" />
        <x-table.td type="input" value="{{ $data->has('BZ42') ? $data['BZ42'] : '' }}" coord="BZ42" />
    </tr>
    <tr>
        <x-table.td type="header" value="ассистент (помощник)" />
        <x-table.td type="header" value="37" />
        <x-table.td type="input" value="{{ $data->has('BF43') ? $data['BF43'] : '' }}" coord="BF43" />
        <x-table.td type="input" value="{{ $data->has('BG43') ? $data['BG43'] : '' }}" coord="BG43" />
        <x-table.td type="input" value="{{ $data->has('BH43') ? $data['BH43'] : '' }}" coord="BH43" />
        <x-table.td type="input" value="{{ $data->has('BI43') ? $data['BI43'] : '' }}" coord="BI43" />
        <x-table.td type="input" value="{{ $data->has('BJ43') ? $data['BJ43'] : '' }}" coord="BJ43" />
        <x-table.td type="input" value="{{ $data->has('BK43') ? $data['BK43'] : '' }}" coord="BK43" />
        <x-table.td type="input" value="{{ $data->has('BL43') ? $data['BL43'] : '' }}" coord="BL43" />
        <x-table.td type="input" value="{{ $data->has('BM43') ? $data['BM43'] : '' }}" coord="BM43" />
        <x-table.td type="input" value="{{ $data->has('BN43') ? $data['BN43'] : '' }}" coord="BN43" />
        <x-table.td type="input" value="{{ $data->has('BO43') ? $data['BO43'] : '' }}" coord="BO43" />
        <x-table.td type="input" value="{{ $data->has('BP43') ? $data['BP43'] : '' }}" coord="BP43" />
        <x-table.td type="input" value="{{ $data->has('BQ43') ? $data['BQ43'] : '' }}" coord="BQ43" />
        <x-table.td type="input" value="{{ $data->has('BR43') ? $data['BR43'] : '' }}" coord="BR43" />
        <x-table.td type="input" value="{{ $data->has('BS43') ? $data['BS43'] : '' }}" coord="BS43" />
        <x-table.td type="input" value="{{ $data->has('BT43') ? $data['BT43'] : '' }}" coord="BT43" />
        <x-table.td type="input" value="{{ $data->has('BU43') ? $data['BU43'] : '' }}" coord="BU43" />
        <x-table.td type="input" value="{{ $data->has('BV43') ? $data['BV43'] : '' }}" coord="BV43" />
        <x-table.td type="input" value="{{ $data->has('BW43') ? $data['BW43'] : '' }}" coord="BW43" />
        <x-table.td type="input" value="{{ $data->has('BX43') ? $data['BX43'] : '' }}" coord="BX43" />
        <x-table.td type="input" value="{{ $data->has('BY43') ? $data['BY43'] : '' }}" coord="BY43" />
        <x-table.td type="input" value="{{ $data->has('BZ43') ? $data['BZ43'] : '' }}" coord="BZ43" />
    </tr>
    <tr>
        <x-table.td type="header" value="тьютор" />
        <x-table.td type="header" value="38" />
        <x-table.td type="input" value="{{ $data->has('BF44') ? $data['BF44'] : '' }}" coord="BF44" />
        <x-table.td type="input" value="{{ $data->has('BG44') ? $data['BG44'] : '' }}" coord="BG44" />
        <x-table.td type="input" value="{{ $data->has('BH44') ? $data['BH44'] : '' }}" coord="BH44" />
        <x-table.td type="input" value="{{ $data->has('BI44') ? $data['BI44'] : '' }}" coord="BI44" />
        <x-table.td type="input" value="{{ $data->has('BJ44') ? $data['BJ44'] : '' }}" coord="BJ44" />
        <x-table.td type="input" value="{{ $data->has('BK44') ? $data['BK44'] : '' }}" coord="BK44" />
        <x-table.td type="input" value="{{ $data->has('BL44') ? $data['BL44'] : '' }}" coord="BL44" />
        <x-table.td type="input" value="{{ $data->has('BM44') ? $data['BM44'] : '' }}" coord="BM44" />
        <x-table.td type="input" value="{{ $data->has('BN44') ? $data['BN44'] : '' }}" coord="BN44" />
        <x-table.td type="input" value="{{ $data->has('BO44') ? $data['BO44'] : '' }}" coord="BO44" />
        <x-table.td type="input" value="{{ $data->has('BP44') ? $data['BP44'] : '' }}" coord="BP44" />
        <x-table.td type="input" value="{{ $data->has('BQ44') ? $data['BQ44'] : '' }}" coord="BQ44" />
        <x-table.td type="input" value="{{ $data->has('BR44') ? $data['BR44'] : '' }}" coord="BR44" />
        <x-table.td type="input" value="{{ $data->has('BS44') ? $data['BS44'] : '' }}" coord="BS44" />
        <x-table.td type="input" value="{{ $data->has('BT44') ? $data['BT44'] : '' }}" coord="BT44" />
        <x-table.td type="input" value="{{ $data->has('BU44') ? $data['BU44'] : '' }}" coord="BU44" />
        <x-table.td type="input" value="{{ $data->has('BV44') ? $data['BV44'] : '' }}" coord="BV44" />
        <x-table.td type="input" value="{{ $data->has('BW44') ? $data['BW44'] : '' }}" coord="BW44" />
        <x-table.td type="input" value="{{ $data->has('BX44') ? $data['BX44'] : '' }}" coord="BX44" />
        <x-table.td type="input" value="{{ $data->has('BY44') ? $data['BY44'] : '' }}" coord="BY44" />
        <x-table.td type="input" value="{{ $data->has('BZ44') ? $data['BZ44'] : '' }}" coord="BZ44" />
    </tr>
    <tr>
        <x-table.td type="header" value="логопед (в том числе учитель-логопед)" />
        <x-table.td type="header" value="39" />
        <x-table.td type="input" value="{{ $data->has('BF45') ? $data['BF45'] : '' }}" coord="BF45" />
        <x-table.td type="input" value="{{ $data->has('BG45') ? $data['BG45'] : '' }}" coord="BG45" />
        <x-table.td type="input" value="{{ $data->has('BH45') ? $data['BH45'] : '' }}" coord="BH45" />
        <x-table.td type="input" value="{{ $data->has('BI45') ? $data['BI45'] : '' }}" coord="BI45" />
        <x-table.td type="input" value="{{ $data->has('BJ45') ? $data['BJ45'] : '' }}" coord="BJ45" />
        <x-table.td type="input" value="{{ $data->has('BK45') ? $data['BK45'] : '' }}" coord="BK45" />
        <x-table.td type="input" value="{{ $data->has('BL45') ? $data['BL45'] : '' }}" coord="BL45" />
        <x-table.td type="input" value="{{ $data->has('BM45') ? $data['BM45'] : '' }}" coord="BM45" />
        <x-table.td type="input" value="{{ $data->has('BN45') ? $data['BN45'] : '' }}" coord="BN45" />
        <x-table.td type="input" value="{{ $data->has('BO45') ? $data['BO45'] : '' }}" coord="BO45" />
        <x-table.td type="input" value="{{ $data->has('BP45') ? $data['BP45'] : '' }}" coord="BP45" />
        <x-table.td type="input" value="{{ $data->has('BQ45') ? $data['BQ45'] : '' }}" coord="BQ45" />
        <x-table.td type="input" value="{{ $data->has('BR45') ? $data['BR45'] : '' }}" coord="BR45" />
        <x-table.td type="input" value="{{ $data->has('BS45') ? $data['BS45'] : '' }}" coord="BS45" />
        <x-table.td type="input" value="{{ $data->has('BT45') ? $data['BT45'] : '' }}" coord="BT45" />
        <x-table.td type="input" value="{{ $data->has('BU45') ? $data['BU45'] : '' }}" coord="BU45" />
        <x-table.td type="input" value="{{ $data->has('BV45') ? $data['BV45'] : '' }}" coord="BV45" />
        <x-table.td type="input" value="{{ $data->has('BW45') ? $data['BW45'] : '' }}" coord="BW45" />
        <x-table.td type="input" value="{{ $data->has('BX45') ? $data['BX45'] : '' }}" coord="BX45" />
        <x-table.td type="input" value="{{ $data->has('BY45') ? $data['BY45'] : '' }}" coord="BY45" />
        <x-table.td type="input" value="{{ $data->has('BZ45') ? $data['BZ45'] : '' }}" coord="BZ45" />
    </tr>
    <tr>
        <x-table.td type="header" value="дефектолог (в том числе учитель-дефектолог) - всего, в том числе:" />
        <x-table.td type="header" value="40" />
        <x-table.td type="input" value="{{ $data->has('BF46') ? $data['BF46'] : '' }}" coord="BF46" />
        <x-table.td type="input" value="{{ $data->has('BG46') ? $data['BG46'] : '' }}" coord="BG46" />
        <x-table.td type="input" value="{{ $data->has('BH46') ? $data['BH46'] : '' }}" coord="BH46" />
        <x-table.td type="input" value="{{ $data->has('BI46') ? $data['BI46'] : '' }}" coord="BI46" />
        <x-table.td type="input" value="{{ $data->has('BJ46') ? $data['BJ46'] : '' }}" coord="BJ46" />
        <x-table.td type="input" value="{{ $data->has('BK46') ? $data['BK46'] : '' }}" coord="BK46" />
        <x-table.td type="input" value="{{ $data->has('BL46') ? $data['BL46'] : '' }}" coord="BL46" />
        <x-table.td type="input" value="{{ $data->has('BM46') ? $data['BM46'] : '' }}" coord="BM46" />
        <x-table.td type="input" value="{{ $data->has('BN46') ? $data['BN46'] : '' }}" coord="BN46" />
        <x-table.td type="input" value="{{ $data->has('BO46') ? $data['BO46'] : '' }}" coord="BO46" />
        <x-table.td type="input" value="{{ $data->has('BP46') ? $data['BP46'] : '' }}" coord="BP46" />
        <x-table.td type="input" value="{{ $data->has('BQ46') ? $data['BQ46'] : '' }}" coord="BQ46" />
        <x-table.td type="input" value="{{ $data->has('BR46') ? $data['BR46'] : '' }}" coord="BR46" />
        <x-table.td type="input" value="{{ $data->has('BS46') ? $data['BS46'] : '' }}" coord="BS46" />
        <x-table.td type="input" value="{{ $data->has('BT46') ? $data['BT46'] : '' }}" coord="BT46" />
        <x-table.td type="input" value="{{ $data->has('BU46') ? $data['BU46'] : '' }}" coord="BU46" />
        <x-table.td type="input" value="{{ $data->has('BV46') ? $data['BV46'] : '' }}" coord="BV46" />
        <x-table.td type="input" value="{{ $data->has('BW46') ? $data['BW46'] : '' }}" coord="BW46" />
        <x-table.td type="input" value="{{ $data->has('BX46') ? $data['BX46'] : '' }}" coord="BX46" />
        <x-table.td type="input" value="{{ $data->has('BY46') ? $data['BY46'] : '' }}" coord="BY46" />
        <x-table.td type="input" value="{{ $data->has('BZ46') ? $data['BZ46'] : '' }}" coord="BZ46" />
    </tr>
    <tr>
        <x-table.td type="header" value="тифлопедагог" />
        <x-table.td type="header" value="41" />
        <x-table.td type="input" value="{{ $data->has('BF47') ? $data['BF47'] : '' }}" coord="BF47" />
        <x-table.td type="input" value="{{ $data->has('BG47') ? $data['BG47'] : '' }}" coord="BG47" />
        <x-table.td type="input" value="{{ $data->has('BH47') ? $data['BH47'] : '' }}" coord="BH47" />
        <x-table.td type="input" value="{{ $data->has('BI47') ? $data['BI47'] : '' }}" coord="BI47" />
        <x-table.td type="input" value="{{ $data->has('BJ47') ? $data['BJ47'] : '' }}" coord="BJ47" />
        <x-table.td type="input" value="{{ $data->has('BK47') ? $data['BK47'] : '' }}" coord="BK47" />
        <x-table.td type="input" value="{{ $data->has('BL47') ? $data['BL47'] : '' }}" coord="BL47" />
        <x-table.td type="input" value="{{ $data->has('BM47') ? $data['BM47'] : '' }}" coord="BM47" />
        <x-table.td type="input" value="{{ $data->has('BN47') ? $data['BN47'] : '' }}" coord="BN47" />
        <x-table.td type="input" value="{{ $data->has('BO47') ? $data['BO47'] : '' }}" coord="BO47" />
        <x-table.td type="input" value="{{ $data->has('BP47') ? $data['BP47'] : '' }}" coord="BP47" />
        <x-table.td type="input" value="{{ $data->has('BQ47') ? $data['BQ47'] : '' }}" coord="BQ47" />
        <x-table.td type="input" value="{{ $data->has('BR47') ? $data['BR47'] : '' }}" coord="BR47" />
        <x-table.td type="input" value="{{ $data->has('BS47') ? $data['BS47'] : '' }}" coord="BS47" />
        <x-table.td type="input" value="{{ $data->has('BT47') ? $data['BT47'] : '' }}" coord="BT47" />
        <x-table.td type="input" value="{{ $data->has('BU47') ? $data['BU47'] : '' }}" coord="BU47" />
        <x-table.td type="input" value="{{ $data->has('BV47') ? $data['BV47'] : '' }}" coord="BV47" />
        <x-table.td type="input" value="{{ $data->has('BW47') ? $data['BW47'] : '' }}" coord="BW47" />
        <x-table.td type="input" value="{{ $data->has('BX47') ? $data['BX47'] : '' }}" coord="BX47" />
        <x-table.td type="input" value="{{ $data->has('BY47') ? $data['BY47'] : '' }}" coord="BY47" />
        <x-table.td type="input" value="{{ $data->has('BZ47') ? $data['BZ47'] : '' }}" coord="BZ47" />
    </tr>
    <tr>
        <x-table.td type="header" value="сурдопедагог" />
        <x-table.td type="header" value="42" />
        <x-table.td type="input" value="{{ $data->has('BF48') ? $data['BF48'] : '' }}" coord="BF48" />
        <x-table.td type="input" value="{{ $data->has('BG48') ? $data['BG48'] : '' }}" coord="BG48" />
        <x-table.td type="input" value="{{ $data->has('BH48') ? $data['BH48'] : '' }}" coord="BH48" />
        <x-table.td type="input" value="{{ $data->has('BI48') ? $data['BI48'] : '' }}" coord="BI48" />
        <x-table.td type="input" value="{{ $data->has('BJ48') ? $data['BJ48'] : '' }}" coord="BJ48" />
        <x-table.td type="input" value="{{ $data->has('BK48') ? $data['BK48'] : '' }}" coord="BK48" />
        <x-table.td type="input" value="{{ $data->has('BL48') ? $data['BL48'] : '' }}" coord="BL48" />
        <x-table.td type="input" value="{{ $data->has('BM48') ? $data['BM48'] : '' }}" coord="BM48" />
        <x-table.td type="input" value="{{ $data->has('BN48') ? $data['BN48'] : '' }}" coord="BN48" />
        <x-table.td type="input" value="{{ $data->has('BO48') ? $data['BO48'] : '' }}" coord="BO48" />
        <x-table.td type="input" value="{{ $data->has('BP48') ? $data['BP48'] : '' }}" coord="BP48" />
        <x-table.td type="input" value="{{ $data->has('BQ48') ? $data['BQ48'] : '' }}" coord="BQ48" />
        <x-table.td type="input" value="{{ $data->has('BR48') ? $data['BR48'] : '' }}" coord="BR48" />
        <x-table.td type="input" value="{{ $data->has('BS48') ? $data['BS48'] : '' }}" coord="BS48" />
        <x-table.td type="input" value="{{ $data->has('BT48') ? $data['BT48'] : '' }}" coord="BT48" />
        <x-table.td type="input" value="{{ $data->has('BU48') ? $data['BU48'] : '' }}" coord="BU48" />
        <x-table.td type="input" value="{{ $data->has('BV48') ? $data['BV48'] : '' }}" coord="BV48" />
        <x-table.td type="input" value="{{ $data->has('BW48') ? $data['BW48'] : '' }}" coord="BW48" />
        <x-table.td type="input" value="{{ $data->has('BX48') ? $data['BX48'] : '' }}" coord="BX48" />
        <x-table.td type="input" value="{{ $data->has('BY48') ? $data['BY48'] : '' }}" coord="BY48" />
        <x-table.td type="input" value="{{ $data->has('BZ48') ? $data['BZ48'] : '' }}" coord="BZ48" />
    </tr>
    <tr>
        <x-table.td type="header" value="олигофренопедагог" />
        <x-table.td type="header" value="43" />
        <x-table.td type="input" value="{{ $data->has('BF49') ? $data['BF49'] : '' }}" coord="BF49" />
        <x-table.td type="input" value="{{ $data->has('BG49') ? $data['BG49'] : '' }}" coord="BG49" />
        <x-table.td type="input" value="{{ $data->has('BH49') ? $data['BH49'] : '' }}" coord="BH49" />
        <x-table.td type="input" value="{{ $data->has('BI49') ? $data['BI49'] : '' }}" coord="BI49" />
        <x-table.td type="input" value="{{ $data->has('BJ49') ? $data['BJ49'] : '' }}" coord="BJ49" />
        <x-table.td type="input" value="{{ $data->has('BK49') ? $data['BK49'] : '' }}" coord="BK49" />
        <x-table.td type="input" value="{{ $data->has('BL49') ? $data['BL49'] : '' }}" coord="BL49" />
        <x-table.td type="input" value="{{ $data->has('BM49') ? $data['BM49'] : '' }}" coord="BM49" />
        <x-table.td type="input" value="{{ $data->has('BN49') ? $data['BN49'] : '' }}" coord="BN49" />
        <x-table.td type="input" value="{{ $data->has('BO49') ? $data['BO49'] : '' }}" coord="BO49" />
        <x-table.td type="input" value="{{ $data->has('BP49') ? $data['BP49'] : '' }}" coord="BP49" />
        <x-table.td type="input" value="{{ $data->has('BQ49') ? $data['BQ49'] : '' }}" coord="BQ49" />
        <x-table.td type="input" value="{{ $data->has('BR49') ? $data['BR49'] : '' }}" coord="BR49" />
        <x-table.td type="input" value="{{ $data->has('BS49') ? $data['BS49'] : '' }}" coord="BS49" />
        <x-table.td type="input" value="{{ $data->has('BT49') ? $data['BT49'] : '' }}" coord="BT49" />
        <x-table.td type="input" value="{{ $data->has('BU49') ? $data['BU49'] : '' }}" coord="BU49" />
        <x-table.td type="input" value="{{ $data->has('BV49') ? $data['BV49'] : '' }}" coord="BV49" />
        <x-table.td type="input" value="{{ $data->has('BW49') ? $data['BW49'] : '' }}" coord="BW49" />
        <x-table.td type="input" value="{{ $data->has('BX49') ? $data['BX49'] : '' }}" coord="BX49" />
        <x-table.td type="input" value="{{ $data->has('BY49') ? $data['BY49'] : '' }}" coord="BY49" />
        <x-table.td type="input" value="{{ $data->has('BZ49') ? $data['BZ49'] : '' }}" coord="BZ49" />
    </tr>
    <tr>
        <x-table.td type="header" value="методист" />
        <x-table.td type="header" value="44" />
        <x-table.td type="input" value="{{ $data->has('BF50') ? $data['BF50'] : '' }}" coord="BF50" />
        <x-table.td type="input" value="{{ $data->has('BG50') ? $data['BG50'] : '' }}" coord="BG50" />
        <x-table.td type="input" value="{{ $data->has('BH50') ? $data['BH50'] : '' }}" coord="BH50" />
        <x-table.td type="input" value="{{ $data->has('BI50') ? $data['BI50'] : '' }}" coord="BI50" />
        <x-table.td type="input" value="{{ $data->has('BJ50') ? $data['BJ50'] : '' }}" coord="BJ50" />
        <x-table.td type="input" value="{{ $data->has('BK50') ? $data['BK50'] : '' }}" coord="BK50" />
        <x-table.td type="input" value="{{ $data->has('BL50') ? $data['BL50'] : '' }}" coord="BL50" />
        <x-table.td type="input" value="{{ $data->has('BM50') ? $data['BM50'] : '' }}" coord="BM50" />
        <x-table.td type="input" value="{{ $data->has('BN50') ? $data['BN50'] : '' }}" coord="BN50" />
        <x-table.td type="input" value="{{ $data->has('BO50') ? $data['BO50'] : '' }}" coord="BO50" />
        <x-table.td type="input" value="{{ $data->has('BP50') ? $data['BP50'] : '' }}" coord="BP50" />
        <x-table.td type="input" value="{{ $data->has('BQ50') ? $data['BQ50'] : '' }}" coord="BQ50" />
        <x-table.td type="input" value="{{ $data->has('BR50') ? $data['BR50'] : '' }}" coord="BR50" />
        <x-table.td type="input" value="{{ $data->has('BS50') ? $data['BS50'] : '' }}" coord="BS50" />
        <x-table.td type="input" value="{{ $data->has('BT50') ? $data['BT50'] : '' }}" coord="BT50" />
        <x-table.td type="input" value="{{ $data->has('BU50') ? $data['BU50'] : '' }}" coord="BU50" />
        <x-table.td type="input" value="{{ $data->has('BV50') ? $data['BV50'] : '' }}" coord="BV50" />
        <x-table.td type="input" value="{{ $data->has('BW50') ? $data['BW50'] : '' }}" coord="BW50" />
        <x-table.td type="input" value="{{ $data->has('BX50') ? $data['BX50'] : '' }}" coord="BX50" />
        <x-table.td type="input" value="{{ $data->has('BY50') ? $data['BY50'] : '' }}" coord="BY50" />
        <x-table.td type="input" value="{{ $data->has('BZ50') ? $data['BZ50'] : '' }}" coord="BZ50" />
    </tr>
    <tr>
        <x-table.td type="header" value="Технический персонал, из них:" />
        <x-table.td type="header" value="45" />
        <x-table.td type="input" value="{{ $data->has('BF51') ? $data['BF51'] : '' }}" coord="BF51" />
        <x-table.td type="input" value="{{ $data->has('BG51') ? $data['BG51'] : '' }}" coord="BG51" />
        <x-table.td type="input" value="{{ $data->has('BH51') ? $data['BH51'] : '' }}" coord="BH51" />
        <x-table.td type="input" value="{{ $data->has('BI51') ? $data['BI51'] : '' }}" coord="BI51" />
        <x-table.td type="input" value="{{ $data->has('BJ51') ? $data['BJ51'] : '' }}" coord="BJ51" />
        <x-table.td type="input" value="{{ $data->has('BK51') ? $data['BK51'] : '' }}" coord="BK51" />
        <x-table.td type="input" value="{{ $data->has('BL51') ? $data['BL51'] : '' }}" coord="BL51" />
        <x-table.td type="input" value="{{ $data->has('BM51') ? $data['BM51'] : '' }}" coord="BM51" />
        <x-table.td type="input" value="{{ $data->has('BN51') ? $data['BN51'] : '' }}" coord="BN51" />
        <x-table.td type="input" value="{{ $data->has('BO51') ? $data['BO51'] : '' }}" coord="BO51" />
        <x-table.td type="input" value="{{ $data->has('BP51') ? $data['BP51'] : '' }}" coord="BP51" />
        <x-table.td type="input" value="{{ $data->has('BQ51') ? $data['BQ51'] : '' }}" coord="BQ51" />
        <x-table.td type="input" value="{{ $data->has('BR51') ? $data['BR51'] : '' }}" coord="BR51" />
        <x-table.td type="input" value="{{ $data->has('BS51') ? $data['BS51'] : '' }}" coord="BS51" />
        <x-table.td type="input" value="{{ $data->has('BT51') ? $data['BT51'] : '' }}" coord="BT51" />
        <x-table.td type="input" value="{{ $data->has('BU51') ? $data['BU51'] : '' }}" coord="BU51" />
        <x-table.td type="input" value="{{ $data->has('BV51') ? $data['BV51'] : '' }}" coord="BV51" />
        <x-table.td type="input" value="{{ $data->has('BW51') ? $data['BW51'] : '' }}" coord="BW51" />
        <x-table.td type="input" value="{{ $data->has('BX51') ? $data['BX51'] : '' }}" coord="BX51" />
        <x-table.td type="input" value="{{ $data->has('BY51') ? $data['BY51'] : '' }}" coord="BY51" />
        <x-table.td type="input" value="{{ $data->has('BZ51') ? $data['BZ51'] : '' }}" coord="BZ51" />
    </tr>
    <tr>
        <x-table.td type="header" value="протезист" />
        <x-table.td type="header" value="46" />
        <x-table.td type="input" value="{{ $data->has('BF52') ? $data['BF52'] : '' }}" coord="BF52" />
        <x-table.td type="input" value="{{ $data->has('BG52') ? $data['BG52'] : '' }}" coord="BG52" />
        <x-table.td type="input" value="{{ $data->has('BH52') ? $data['BH52'] : '' }}" coord="BH52" />
        <x-table.td type="input" value="{{ $data->has('BI52') ? $data['BI52'] : '' }}" coord="BI52" />
        <x-table.td type="input" value="{{ $data->has('BJ52') ? $data['BJ52'] : '' }}" coord="BJ52" />
        <x-table.td type="input" value="{{ $data->has('BK52') ? $data['BK52'] : '' }}" coord="BK52" />
        <x-table.td type="input" value="{{ $data->has('BL52') ? $data['BL52'] : '' }}" coord="BL52" />
        <x-table.td type="input" value="{{ $data->has('BM52') ? $data['BM52'] : '' }}" coord="BM52" />
        <x-table.td type="input" value="{{ $data->has('BN52') ? $data['BN52'] : '' }}" coord="BN52" />
        <x-table.td type="input" value="{{ $data->has('BO52') ? $data['BO52'] : '' }}" coord="BO52" />
        <x-table.td type="input" value="{{ $data->has('BP52') ? $data['BP52'] : '' }}" coord="BP52" />
        <x-table.td type="input" value="{{ $data->has('BQ52') ? $data['BQ52'] : '' }}" coord="BQ52" />
        <x-table.td type="input" value="{{ $data->has('BR52') ? $data['BR52'] : '' }}" coord="BR52" />
        <x-table.td type="input" value="{{ $data->has('BS52') ? $data['BS52'] : '' }}" coord="BS52" />
        <x-table.td type="input" value="{{ $data->has('BT52') ? $data['BT52'] : '' }}" coord="BT52" />
        <x-table.td type="input" value="{{ $data->has('BU52') ? $data['BU52'] : '' }}" coord="BU52" />
        <x-table.td type="input" value="{{ $data->has('BV52') ? $data['BV52'] : '' }}" coord="BV52" />
        <x-table.td type="input" value="{{ $data->has('BW52') ? $data['BW52'] : '' }}" coord="BW52" />
        <x-table.td type="input" value="{{ $data->has('BX52') ? $data['BX52'] : '' }}" coord="BX52" />
        <x-table.td type="input" value="{{ $data->has('BY52') ? $data['BY52'] : '' }}" coord="BY52" />
        <x-table.td type="input" value="{{ $data->has('BZ52') ? $data['BZ52'] : '' }}" coord="BZ52" />
    </tr>
</tbody>
