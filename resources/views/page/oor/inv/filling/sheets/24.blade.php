<caption>{{ $sheet->header }}</caption>
<thead>
    <tr>
        <x-table.th rowspan=3 value="Наименование <br> показателей" header />
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
        <x-table.td value="01" center />
        <x-table.td type="input" formul="({BI7}+{BO7}+{BU7})==({BF8}+{BF28}+{BF37}+{BF41}+{BF51})" bool-val="{BI7}+{BO7}+{BU7}" name="BF7" disabled />
        <x-table.td type="input" formul="({BJ7}+{BP7}+{BV7})==({BG8}+{BG28}+{BG37}+{BG41}+{BG51})" bool-val="{BJ7}+{BP7}+{BV7}" name="BG7" disabled />
        <x-table.td type="input" formul="({BK7}+{BQ7}+{BW7})==({BH8}+{BH28}+{BH37}+{BH41}+{BH51})" bool-val="{BK7}+{BQ7}+{BW7}" name="BH7" disabled />
        <x-table.td type="input" formul="{BI8}+{BI28}+{BI37}+{BI41}+{BI51}" name="BI7" disabled />
        <x-table.td type="input" formul="{BJ8}+{BJ28}+{BJ37}+{BJ41}+{BJ51}" name="BJ7" disabled />
        <x-table.td type="input" formul="{BK8}+{BK28}+{BK37}+{BK41}+{BK51}" name="BK7" disabled />
        <x-table.td type="input" formul="{BL8}+{BL28}+{BL37}+{BL41}+{BL51}" name="BL7" disabled />
        <x-table.td type="input" formul="{BM8}+{BM28}+{BM37}+{BM41}+{BM51}" name="BM7" disabled />
        <x-table.td type="input" formul="{BN8}+{BN28}+{BN37}+{BN41}+{BN51}" name="BN7" disabled />
        <x-table.td type="input" formul="{BO8}+{BO28}+{BO37}+{BO41}+{BO51}" name="BO7" disabled />
        <x-table.td type="input" formul="{BP8}+{BP28}+{BP37}+{BP41}+{BP51}" name="BP7" disabled />
        <x-table.td type="input" formul="{BQ8}+{BQ28}+{BQ37}+{BQ41}+{BQ51}" name="BQ7" disabled />
        <x-table.td type="input" formul="{BR8}+{BR28}+{BR37}+{BR41}+{BR51}" name="BR7" disabled />
        <x-table.td type="input" formul="{BS8}+{BS28}+{BS37}+{BS41}+{BS51}" name="BS7" disabled />
        <x-table.td type="input" formul="{BT8}+{BT28}+{BT37}+{BT41}+{BT51}" name="BT7" disabled />
        <x-table.td type="input" formul="{BU8}+{BU28}+{BU37}+{BU41}+{BU51}" name="BU7" disabled />
        <x-table.td type="input" formul="{BV8}+{BV28}+{BV37}+{BV41}+{BV51}" name="BV7" disabled />
        <x-table.td type="input" formul="{BW8}+{BW28}+{BW37}+{BW41}+{BW51}" name="BW7" disabled />
        <x-table.td type="input" formul="{BX8}+{BX28}+{BX37}+{BX41}+{BX51}" name="BX7" disabled />
        <x-table.td type="input" formul="{BY8}+{BY28}+{BY37}+{BY41}+{BY51}" name="BY7" disabled />
        <x-table.td type="input" formul="{BZ8}+{BZ28}+{BZ37}+{BZ41}+{BZ51}" name="BZ7" disabled />
    </tr>
    <tr>
        <x-table.td type="header" value="Должности медицинских работников - всего, из них:" />
        <x-table.td value="02" center />
        <x-table.td type="input" formul="{BF9}+{BF17}+{BF20}" name="BF8" disabled />
        <x-table.td type="input" formul="{BG9}+{BG17}+{BG20}" name="BG8" disabled />
        <x-table.td type="input" formul="{BH9}+{BH17}+{BH20}" name="BH8" disabled />
        <x-table.td type="input" formul="{BI9}+{BI17}+{BI20}" name="BI8" disabled />
        <x-table.td type="input" formul="{BJ9}+{BJ17}+{BJ20}" name="BJ8" disabled />
        <x-table.td type="input" formul="{BK9}+{BK17}+{BK20}" name="BK8" disabled />
        <x-table.td type="input" formul="{BL9}+{BL17}+{BL20}" name="BL8" disabled />
        <x-table.td type="input" formul="{BM9}+{BM17}+{BM20}" name="BM8" disabled />
        <x-table.td type="input" formul="{BN9}+{BN17}+{BN20}" name="BN8" disabled />
        <x-table.td type="input" formul="{BO9}+{BO17}+{BO20}" name="BO8" disabled />
        <x-table.td type="input" formul="{BP9}+{BP17}+{BP20}" name="BP8" disabled />
        <x-table.td type="input" formul="{BQ9}+{BQ17}+{BQ20}" name="BQ8" disabled />
        <x-table.td type="input" formul="{BR9}+{BR17}+{BR20}" name="BR8" disabled />
        <x-table.td type="input" formul="{BS9}+{BS17}+{BS20}" name="BS8" disabled />
        <x-table.td type="input" formul="{BT9}+{BT17}+{BT20}" name="BT8" disabled />
        <x-table.td type="input" formul="{BU9}+{BU17}+{BU20}" name="BU8" disabled />
        <x-table.td type="input" formul="{BV9}+{BV17}+{BV20}" name="BV8" disabled />
        <x-table.td type="input" formul="{BW9}+{BW17}+{BW20}" name="BW8" disabled />
        <x-table.td type="input" formul="{BX9}+{BX17}+{BX20}" name="BX8" disabled />
        <x-table.td type="input" formul="{BY9}+{BY17}+{BY20}" name="BY8" disabled />
        <x-table.td type="input" formul="{BZ9}+{BZ17}+{BZ20}" name="BZ8" disabled />
    </tr>
    <tr>
        <x-table.td type="header" value="врачи - специалисты по профилю оказания медицинской помощи - всего, из них:" />
        <x-table.td value="03" center />
        <x-table.td type="input" formul="{this}>=({BF10}+{BF11}+{BF12}+{BF13}+{BF14}+{BF15}+{BF16})" value="{{ $data->has('BF9') ? $data['BF9'] : '' }}" name="BF9" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BG10}+{BG11}+{BG12}+{BG13}+{BG14}+{BG15}+{BG16})" value="{{ $data->has('BG9') ? $data['BG9'] : '' }}" name="BG9" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BH10}+{BH11}+{BH12}+{BH13}+{BH14}+{BH15}+{BH16})" value="{{ $data->has('BH9') ? $data['BH9'] : '' }}" name="BH9" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BI10}+{BI11}+{BI12}+{BI13}+{BI14}+{BI15}+{BI16})" value="{{ $data->has('BI9') ? $data['BI9'] : '' }}" name="BI9" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BJ10}+{BJ11}+{BJ12}+{BJ13}+{BJ14}+{BJ15}+{BJ16})" value="{{ $data->has('BJ9') ? $data['BJ9'] : '' }}" name="BJ9" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BK10}+{BK11}+{BK12}+{BK13}+{BK14}+{BK15}+{BK16})" value="{{ $data->has('BK9') ? $data['BK9'] : '' }}" name="BK9" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BL10}+{BL11}+{BL12}+{BL13}+{BL14}+{BL15}+{BL16})" value="{{ $data->has('BL9') ? $data['BL9'] : '' }}" name="BL9" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BM10}+{BM11}+{BM12}+{BM13}+{BM14}+{BM15}+{BM16})" value="{{ $data->has('BM9') ? $data['BM9'] : '' }}" name="BM9" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BN10}+{BN11}+{BN12}+{BN13}+{BN14}+{BN15}+{BN16})" value="{{ $data->has('BN9') ? $data['BN9'] : '' }}" name="BN9" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BO10}+{BO11}+{BO12}+{BO13}+{BO14}+{BO15}+{BO16})" value="{{ $data->has('BO9') ? $data['BO9'] : '' }}" name="BO9" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BP10}+{BP11}+{BP12}+{BP13}+{BP14}+{BP15}+{BP16})" value="{{ $data->has('BP9') ? $data['BP9'] : '' }}" name="BP9" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BQ10}+{BQ11}+{BQ12}+{BQ13}+{BQ14}+{BQ15}+{BQ16})" value="{{ $data->has('BQ9') ? $data['BQ9'] : '' }}" name="BQ9" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BR10}+{BR11}+{BR12}+{BR13}+{BR14}+{BR15}+{BR16})" value="{{ $data->has('BR9') ? $data['BR9'] : '' }}" name="BR9" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BS10}+{BS11}+{BS12}+{BS13}+{BS14}+{BS15}+{BS16})" value="{{ $data->has('BS9') ? $data['BS9'] : '' }}" name="BS9" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BT10}+{BT11}+{BT12}+{BT13}+{BT14}+{BT15}+{BT16})" value="{{ $data->has('BT9') ? $data['BT9'] : '' }}" name="BT9" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BU10}+{BU11}+{BU12}+{BU13}+{BU14}+{BU15}+{BU16})" value="{{ $data->has('BU9') ? $data['BU9'] : '' }}" name="BU9" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BV10}+{BV11}+{BV12}+{BV13}+{BV14}+{BV15}+{BV16})" value="{{ $data->has('BV9') ? $data['BV9'] : '' }}" name="BV9" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BW10}+{BW11}+{BW12}+{BW13}+{BW14}+{BW15}+{BW16})" value="{{ $data->has('BW9') ? $data['BW9'] : '' }}" name="BW9" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BX10}+{BX11}+{BX12}+{BX13}+{BX14}+{BX15}+{BX16})" value="{{ $data->has('BX9') ? $data['BX9'] : '' }}" name="BX9" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BY10}+{BY11}+{BY12}+{BY13}+{BY14}+{BY15}+{BY16})" value="{{ $data->has('BY9') ? $data['BY9'] : '' }}" name="BY9" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BZ10}+{BZ11}+{BZ12}+{BZ13}+{BZ14}+{BZ15}+{BZ16})" value="{{ $data->has('BZ9') ? $data['BZ9'] : '' }}" name="BZ9" step="0.25" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач по медицинской реабилитации" />
        <x-table.td value="04" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF10') ? $data['BF10'] : '' }}" name="BF10" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG10') ? $data['BG10'] : '' }}" name="BG10" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH10') ? $data['BH10'] : '' }}" name="BH10" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI10') ? $data['BI10'] : '' }}" name="BI10" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ10') ? $data['BJ10'] : '' }}" name="BJ10" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK10') ? $data['BK10'] : '' }}" name="BK10" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL10') ? $data['BL10'] : '' }}" name="BL10" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM10') ? $data['BM10'] : '' }}" name="BM10" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN10') ? $data['BN10'] : '' }}" name="BN10" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO10') ? $data['BO10'] : '' }}" name="BO10" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP10') ? $data['BP10'] : '' }}" name="BP10" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ10') ? $data['BQ10'] : '' }}" name="BQ10" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR10') ? $data['BR10'] : '' }}" name="BR10" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS10') ? $data['BS10'] : '' }}" name="BS10" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT10') ? $data['BT10'] : '' }}" name="BT10" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU10') ? $data['BU10'] : '' }}" name="BU10" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV10') ? $data['BV10'] : '' }}" name="BV10" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW10') ? $data['BW10'] : '' }}" name="BW10" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX10') ? $data['BX10'] : '' }}" name="BX10" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY10') ? $data['BY10'] : '' }}" name="BY10" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ10') ? $data['BZ10'] : '' }}" name="BZ10" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="врач по лечебной физкультуре" />
        <x-table.td value="05" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF11') ? $data['BF11'] : '' }}" name="BF11" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG11') ? $data['BG11'] : '' }}" name="BG11" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH11') ? $data['BH11'] : '' }}" name="BH11" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI11') ? $data['BI11'] : '' }}" name="BI11" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ11') ? $data['BJ11'] : '' }}" name="BJ11" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK11') ? $data['BK11'] : '' }}" name="BK11" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL11') ? $data['BL11'] : '' }}" name="BL11" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM11') ? $data['BM11'] : '' }}" name="BM11" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN11') ? $data['BN11'] : '' }}" name="BN11" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO11') ? $data['BO11'] : '' }}" name="BO11" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP11') ? $data['BP11'] : '' }}" name="BP11" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ11') ? $data['BQ11'] : '' }}" name="BQ11" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR11') ? $data['BR11'] : '' }}" name="BR11" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS11') ? $data['BS11'] : '' }}" name="BS11" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT11') ? $data['BT11'] : '' }}" name="BT11" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU11') ? $data['BU11'] : '' }}" name="BU11" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV11') ? $data['BV11'] : '' }}" name="BV11" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW11') ? $data['BW11'] : '' }}" name="BW11" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX11') ? $data['BX11'] : '' }}" name="BX11" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY11') ? $data['BY11'] : '' }}" name="BY11" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ11') ? $data['BZ11'] : '' }}" name="BZ11" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="врач физиотерапевт" />
        <x-table.td value="06" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF12') ? $data['BF12'] : '' }}" name="BF12" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG12') ? $data['BG12'] : '' }}" name="BG12" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH12') ? $data['BH12'] : '' }}" name="BH12" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI12') ? $data['BI12'] : '' }}" name="BI12" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ12') ? $data['BJ12'] : '' }}" name="BJ12" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK12') ? $data['BK12'] : '' }}" name="BK12" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL12') ? $data['BL12'] : '' }}" name="BL12" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM12') ? $data['BM12'] : '' }}" name="BM12" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN12') ? $data['BN12'] : '' }}" name="BN12" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO12') ? $data['BO12'] : '' }}" name="BO12" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP12') ? $data['BP12'] : '' }}" name="BP12" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ12') ? $data['BQ12'] : '' }}" name="BQ12" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR12') ? $data['BR12'] : '' }}" name="BR12" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS12') ? $data['BS12'] : '' }}" name="BS12" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT12') ? $data['BT12'] : '' }}" name="BT12" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU12') ? $data['BU12'] : '' }}" name="BU12" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV12') ? $data['BV12'] : '' }}" name="BV12" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW12') ? $data['BW12'] : '' }}" name="BW12" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX12') ? $data['BX12'] : '' }}" name="BX12" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY12') ? $data['BY12'] : '' }}" name="BY12" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ12') ? $data['BZ12'] : '' }}" name="BZ12" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="врач-диетолог" />
        <x-table.td value="07" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF13') ? $data['BF13'] : '' }}" name="BF13" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG13') ? $data['BG13'] : '' }}" name="BG13" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH13') ? $data['BH13'] : '' }}" name="BH13" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI13') ? $data['BI13'] : '' }}" name="BI13" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ13') ? $data['BJ13'] : '' }}" name="BJ13" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK13') ? $data['BK13'] : '' }}" name="BK13" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL13') ? $data['BL13'] : '' }}" name="BL13" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM13') ? $data['BM13'] : '' }}" name="BM13" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN13') ? $data['BN13'] : '' }}" name="BN13" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO13') ? $data['BO13'] : '' }}" name="BO13" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP13') ? $data['BP13'] : '' }}" name="BP13" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ13') ? $data['BQ13'] : '' }}" name="BQ13" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR13') ? $data['BR13'] : '' }}" name="BR13" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS13') ? $data['BS13'] : '' }}" name="BS13" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT13') ? $data['BT13'] : '' }}" name="BT13" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU13') ? $data['BU13'] : '' }}" name="BU13" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV13') ? $data['BV13'] : '' }}" name="BV13" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW13') ? $data['BW13'] : '' }}" name="BW13" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX13') ? $data['BX13'] : '' }}" name="BX13" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY13') ? $data['BY13'] : '' }}" name="BY13" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ13') ? $data['BZ13'] : '' }}" name="BZ13" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="врач мануальной терапии" />
        <x-table.td value="08" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF14') ? $data['BF14'] : '' }}" name="BF14" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG14') ? $data['BG14'] : '' }}" name="BG14" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH14') ? $data['BH14'] : '' }}" name="BH14" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI14') ? $data['BI14'] : '' }}" name="BI14" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ14') ? $data['BJ14'] : '' }}" name="BJ14" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK14') ? $data['BK14'] : '' }}" name="BK14" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL14') ? $data['BL14'] : '' }}" name="BL14" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM14') ? $data['BM14'] : '' }}" name="BM14" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN14') ? $data['BN14'] : '' }}" name="BN14" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO14') ? $data['BO14'] : '' }}" name="BO14" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP14') ? $data['BP14'] : '' }}" name="BP14" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ14') ? $data['BQ14'] : '' }}" name="BQ14" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR14') ? $data['BR14'] : '' }}" name="BR14" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS14') ? $data['BS14'] : '' }}" name="BS14" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT14') ? $data['BT14'] : '' }}" name="BT14" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU14') ? $data['BU14'] : '' }}" name="BU14" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV14') ? $data['BV14'] : '' }}" name="BV14" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW14') ? $data['BW14'] : '' }}" name="BW14" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX14') ? $data['BX14'] : '' }}" name="BX14" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY14') ? $data['BY14'] : '' }}" name="BY14" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ14') ? $data['BZ14'] : '' }}" name="BZ14" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="рефлексотерапевт" />
        <x-table.td value="09" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF15') ? $data['BF15'] : '' }}" name="BF15" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG15') ? $data['BG15'] : '' }}" name="BG15" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH15') ? $data['BH15'] : '' }}" name="BH15" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI15') ? $data['BI15'] : '' }}" name="BI15" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ15') ? $data['BJ15'] : '' }}" name="BJ15" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK15') ? $data['BK15'] : '' }}" name="BK15" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL15') ? $data['BL15'] : '' }}" name="BL15" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM15') ? $data['BM15'] : '' }}" name="BM15" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN15') ? $data['BN15'] : '' }}" name="BN15" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO15') ? $data['BO15'] : '' }}" name="BO15" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP15') ? $data['BP15'] : '' }}" name="BP15" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ15') ? $data['BQ15'] : '' }}" name="BQ15" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR15') ? $data['BR15'] : '' }}" name="BR15" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS15') ? $data['BS15'] : '' }}" name="BS15" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT15') ? $data['BT15'] : '' }}" name="BT15" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU15') ? $data['BU15'] : '' }}" name="BU15" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV15') ? $data['BV15'] : '' }}" name="BV15" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW15') ? $data['BW15'] : '' }}" name="BW15" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX15') ? $data['BX15'] : '' }}" name="BX15" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY15') ? $data['BY15'] : '' }}" name="BY15" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ15') ? $data['BZ15'] : '' }}" name="BZ15" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="психотерапевт" />
        <x-table.td value="10" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF16') ? $data['BF16'] : '' }}" name="BF16" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG16') ? $data['BG16'] : '' }}" name="BG16" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH16') ? $data['BH16'] : '' }}" name="BH16" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI16') ? $data['BI16'] : '' }}" name="BI16" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ16') ? $data['BJ16'] : '' }}" name="BJ16" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK16') ? $data['BK16'] : '' }}" name="BK16" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL16') ? $data['BL16'] : '' }}" name="BL16" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM16') ? $data['BM16'] : '' }}" name="BM16" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN16') ? $data['BN16'] : '' }}" name="BN16" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO16') ? $data['BO16'] : '' }}" name="BO16" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP16') ? $data['BP16'] : '' }}" name="BP16" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ16') ? $data['BQ16'] : '' }}" name="BQ16" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR16') ? $data['BR16'] : '' }}" name="BR16" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS16') ? $data['BS16'] : '' }}" name="BS16" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT16') ? $data['BT16'] : '' }}" name="BT16" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU16') ? $data['BU16'] : '' }}" name="BU16" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV16') ? $data['BV16'] : '' }}" name="BV16" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW16') ? $data['BW16'] : '' }}" name="BW16" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX16') ? $data['BX16'] : '' }}" name="BX16" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY16') ? $data['BY16'] : '' }}" name="BY16" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ16') ? $data['BZ16'] : '' }}" name="BZ16" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="специалисты с высшим немедицинским образованием - всего, в том числе:" />
        <x-table.td value="11" center />
        <x-table.td type="input" formul="{this}>=({BF18}+{BF19})" value="{{ $data->has('BF17') ? $data['BF17'] : '' }}" name="BF17" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BG18}+{BG19})" value="{{ $data->has('BG17') ? $data['BG17'] : '' }}" name="BG17" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BH18}+{BH19})" value="{{ $data->has('BH17') ? $data['BH17'] : '' }}" name="BH17" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BI18}+{BI19})" value="{{ $data->has('BI17') ? $data['BI17'] : '' }}" name="BI17" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BJ18}+{BJ19})" value="{{ $data->has('BJ17') ? $data['BJ17'] : '' }}" name="BJ17" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BK18}+{BK19})" value="{{ $data->has('BK17') ? $data['BK17'] : '' }}" name="BK17" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BL18}+{BL19})" value="{{ $data->has('BL17') ? $data['BL17'] : '' }}" name="BL17" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BM18}+{BM19})" value="{{ $data->has('BM17') ? $data['BM17'] : '' }}" name="BM17" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BN18}+{BN19})" value="{{ $data->has('BN17') ? $data['BN17'] : '' }}" name="BN17" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BO18}+{BO19})" value="{{ $data->has('BO17') ? $data['BO17'] : '' }}" name="BO17" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BP18}+{BP19})" value="{{ $data->has('BP17') ? $data['BP17'] : '' }}" name="BP17" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BQ18}+{BQ19})" value="{{ $data->has('BQ17') ? $data['BQ17'] : '' }}" name="BQ17" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BR18}+{BR19})" value="{{ $data->has('BR17') ? $data['BR17'] : '' }}" name="BR17" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BS18}+{BS19})" value="{{ $data->has('BS17') ? $data['BS17'] : '' }}" name="BS17" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BT18}+{BT19})" value="{{ $data->has('BT17') ? $data['BT17'] : '' }}" name="BT17" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BU18}+{BU19})" value="{{ $data->has('BU17') ? $data['BU17'] : '' }}" name="BU17" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BV18}+{BV19})" value="{{ $data->has('BV17') ? $data['BV17'] : '' }}" name="BV17" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BW18}+{BW19})" value="{{ $data->has('BW17') ? $data['BW17'] : '' }}" name="BW17" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BX18}+{BX19})" value="{{ $data->has('BX17') ? $data['BX17'] : '' }}" name="BX17" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BY18}+{BY19})" value="{{ $data->has('BY17') ? $data['BY17'] : '' }}" name="BY17" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BZ18}+{BZ19})" value="{{ $data->has('BZ17') ? $data['BZ17'] : '' }}" name="BZ17" step="0.25" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинский психолог" />
        <x-table.td value="12" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF18') ? $data['BF18'] : '' }}" name="BF18" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG18') ? $data['BG18'] : '' }}" name="BG18" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH18') ? $data['BH18'] : '' }}" name="BH18" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI18') ? $data['BI18'] : '' }}" name="BI18" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ18') ? $data['BJ18'] : '' }}" name="BJ18" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK18') ? $data['BK18'] : '' }}" name="BK18" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL18') ? $data['BL18'] : '' }}" name="BL18" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM18') ? $data['BM18'] : '' }}" name="BM18" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN18') ? $data['BN18'] : '' }}" name="BN18" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO18') ? $data['BO18'] : '' }}" name="BO18" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP18') ? $data['BP18'] : '' }}" name="BP18" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ18') ? $data['BQ18'] : '' }}" name="BQ18" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR18') ? $data['BR18'] : '' }}" name="BR18" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS18') ? $data['BS18'] : '' }}" name="BS18" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT18') ? $data['BT18'] : '' }}" name="BT18" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU18') ? $data['BU18'] : '' }}" name="BU18" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV18') ? $data['BV18'] : '' }}" name="BV18" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW18') ? $data['BW18'] : '' }}" name="BW18" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX18') ? $data['BX18'] : '' }}" name="BX18" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY18') ? $data['BY18'] : '' }}" name="BY18" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ18') ? $data['BZ18'] : '' }}" name="BZ18" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="нейропсихолог" />
        <x-table.td value="13" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF19') ? $data['BF19'] : '' }}" name="BF19" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG19') ? $data['BG19'] : '' }}" name="BG19" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH19') ? $data['BH19'] : '' }}" name="BH19" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI19') ? $data['BI19'] : '' }}" name="BI19" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ19') ? $data['BJ19'] : '' }}" name="BJ19" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK19') ? $data['BK19'] : '' }}" name="BK19" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL19') ? $data['BL19'] : '' }}" name="BL19" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM19') ? $data['BM19'] : '' }}" name="BM19" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN19') ? $data['BN19'] : '' }}" name="BN19" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO19') ? $data['BO19'] : '' }}" name="BO19" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP19') ? $data['BP19'] : '' }}" name="BP19" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ19') ? $data['BQ19'] : '' }}" name="BQ19" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR19') ? $data['BR19'] : '' }}" name="BR19" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS19') ? $data['BS19'] : '' }}" name="BS19" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT19') ? $data['BT19'] : '' }}" name="BT19" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU19') ? $data['BU19'] : '' }}" name="BU19" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV19') ? $data['BV19'] : '' }}" name="BV19" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW19') ? $data['BW19'] : '' }}" name="BW19" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX19') ? $data['BX19'] : '' }}" name="BX19" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY19') ? $data['BY19'] : '' }}" name="BY19" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ19') ? $data['BZ19'] : '' }}" name="BZ19" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="средний медицинский персонал - всего, из них:" />
        <x-table.td value="14" center />
        <x-table.td type="input" formul="{this}>=({BF21}+{BF22}+{BF23}+{BF24}+{BF25}+{BF26}+{BF27})" value="{{ $data->has('BF20') ? $data['BF20'] : '' }}" name="BF20" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BG21}+{BG22}+{BG23}+{BG24}+{BG25}+{BG26}+{BG27})" value="{{ $data->has('BG20') ? $data['BG20'] : '' }}" name="BG20" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BH21}+{BH22}+{BH23}+{BH24}+{BH25}+{BH26}+{BH27})" value="{{ $data->has('BH20') ? $data['BH20'] : '' }}" name="BH20" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BI21}+{BI22}+{BI23}+{BI24}+{BI25}+{BI26}+{BI27})" value="{{ $data->has('BI20') ? $data['BI20'] : '' }}" name="BI20" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BJ21}+{BJ22}+{BJ23}+{BJ24}+{BJ25}+{BJ26}+{BJ27})" value="{{ $data->has('BJ20') ? $data['BJ20'] : '' }}" name="BJ20" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BK21}+{BK22}+{BK23}+{BK24}+{BK25}+{BK26}+{BK27})" value="{{ $data->has('BK20') ? $data['BK20'] : '' }}" name="BK20" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BL21}+{BL22}+{BL23}+{BL24}+{BL25}+{BL26}+{BL27})" value="{{ $data->has('BL20') ? $data['BL20'] : '' }}" name="BL20" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BM21}+{BM22}+{BM23}+{BM24}+{BM25}+{BM26}+{BM27})" value="{{ $data->has('BM20') ? $data['BM20'] : '' }}" name="BM20" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BN21}+{BN22}+{BN23}+{BN24}+{BN25}+{BN26}+{BN27})" value="{{ $data->has('BN20') ? $data['BN20'] : '' }}" name="BN20" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BO21}+{BO22}+{BO23}+{BO24}+{BO25}+{BO26}+{BO27})" value="{{ $data->has('BO20') ? $data['BO20'] : '' }}" name="BO20" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BP21}+{BP22}+{BP23}+{BP24}+{BP25}+{BP26}+{BP27})" value="{{ $data->has('BP20') ? $data['BP20'] : '' }}" name="BP20" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BQ21}+{BQ22}+{BQ23}+{BQ24}+{BQ25}+{BQ26}+{BQ27})" value="{{ $data->has('BQ20') ? $data['BQ20'] : '' }}" name="BQ20" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BR21}+{BR22}+{BR23}+{BR24}+{BR25}+{BR26}+{BR27})" value="{{ $data->has('BR20') ? $data['BR20'] : '' }}" name="BR20" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BS21}+{BS22}+{BS23}+{BS24}+{BS25}+{BS26}+{BS27})" value="{{ $data->has('BS20') ? $data['BS20'] : '' }}" name="BS20" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BT21}+{BT22}+{BT23}+{BT24}+{BT25}+{BT26}+{BT27})" value="{{ $data->has('BT20') ? $data['BT20'] : '' }}" name="BT20" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BU21}+{BU22}+{BU23}+{BU24}+{BU25}+{BU26}+{BU27})" value="{{ $data->has('BU20') ? $data['BU20'] : '' }}" name="BU20" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BV21}+{BV22}+{BV23}+{BV24}+{BV25}+{BV26}+{BV27})" value="{{ $data->has('BV20') ? $data['BV20'] : '' }}" name="BV20" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BW21}+{BW22}+{BW23}+{BW24}+{BW25}+{BW26}+{BW27})" value="{{ $data->has('BW20') ? $data['BW20'] : '' }}" name="BW20" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BX21}+{BX22}+{BX23}+{BX24}+{BX25}+{BX26}+{BX27})" value="{{ $data->has('BX20') ? $data['BX20'] : '' }}" name="BX20" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BY21}+{BY22}+{BY23}+{BY24}+{BY25}+{BY26}+{BY27})" value="{{ $data->has('BY20') ? $data['BY20'] : '' }}" name="BY20" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BZ21}+{BZ22}+{BZ23}+{BZ24}+{BZ25}+{BZ26}+{BZ27})" value="{{ $data->has('BZ20') ? $data['BZ20'] : '' }}" name="BZ20" step="0.25" />
    </tr>
    <tr>
        <x-table.td type="header" value="инструктор по лечебной физкультуре" />
        <x-table.td value="15" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF21') ? $data['BF21'] : '' }}" name="BF21" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG21') ? $data['BG21'] : '' }}" name="BG21" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH21') ? $data['BH21'] : '' }}" name="BH21" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI21') ? $data['BI21'] : '' }}" name="BI21" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ21') ? $data['BJ21'] : '' }}" name="BJ21" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK21') ? $data['BK21'] : '' }}" name="BK21" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL21') ? $data['BL21'] : '' }}" name="BL21" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM21') ? $data['BM21'] : '' }}" name="BM21" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN21') ? $data['BN21'] : '' }}" name="BN21" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO21') ? $data['BO21'] : '' }}" name="BO21" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP21') ? $data['BP21'] : '' }}" name="BP21" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ21') ? $data['BQ21'] : '' }}" name="BQ21" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR21') ? $data['BR21'] : '' }}" name="BR21" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS21') ? $data['BS21'] : '' }}" name="BS21" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT21') ? $data['BT21'] : '' }}" name="BT21" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU21') ? $data['BU21'] : '' }}" name="BU21" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV21') ? $data['BV21'] : '' }}" name="BV21" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW21') ? $data['BW21'] : '' }}" name="BW21" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX21') ? $data['BX21'] : '' }}" name="BX21" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY21') ? $data['BY21'] : '' }}" name="BY21" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ21') ? $data['BZ21'] : '' }}" name="BZ21" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="инструктор-методист по лечебной физкультуре" />
        <x-table.td value="16" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF22') ? $data['BF22'] : '' }}" name="BF22" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG22') ? $data['BG22'] : '' }}" name="BG22" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH22') ? $data['BH22'] : '' }}" name="BH22" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI22') ? $data['BI22'] : '' }}" name="BI22" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ22') ? $data['BJ22'] : '' }}" name="BJ22" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK22') ? $data['BK22'] : '' }}" name="BK22" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL22') ? $data['BL22'] : '' }}" name="BL22" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM22') ? $data['BM22'] : '' }}" name="BM22" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN22') ? $data['BN22'] : '' }}" name="BN22" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO22') ? $data['BO22'] : '' }}" name="BO22" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP22') ? $data['BP22'] : '' }}" name="BP22" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ22') ? $data['BQ22'] : '' }}" name="BQ22" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR22') ? $data['BR22'] : '' }}" name="BR22" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS22') ? $data['BS22'] : '' }}" name="BS22" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT22') ? $data['BT22'] : '' }}" name="BT22" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU22') ? $data['BU22'] : '' }}" name="BU22" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV22') ? $data['BV22'] : '' }}" name="BV22" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW22') ? $data['BW22'] : '' }}" name="BW22" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX22') ? $data['BX22'] : '' }}" name="BX22" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY22') ? $data['BY22'] : '' }}" name="BY22" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ22') ? $data['BZ22'] : '' }}" name="BZ22" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинская сестра по медицинской реабилитации" />
        <x-table.td value="17" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF23') ? $data['BF23'] : '' }}" name="BF23" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG23') ? $data['BG23'] : '' }}" name="BG23" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH23') ? $data['BH23'] : '' }}" name="BH23" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI23') ? $data['BI23'] : '' }}" name="BI23" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ23') ? $data['BJ23'] : '' }}" name="BJ23" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK23') ? $data['BK23'] : '' }}" name="BK23" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL23') ? $data['BL23'] : '' }}" name="BL23" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM23') ? $data['BM23'] : '' }}" name="BM23" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN23') ? $data['BN23'] : '' }}" name="BN23" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO23') ? $data['BO23'] : '' }}" name="BO23" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP23') ? $data['BP23'] : '' }}" name="BP23" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ23') ? $data['BQ23'] : '' }}" name="BQ23" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR23') ? $data['BR23'] : '' }}" name="BR23" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS23') ? $data['BS23'] : '' }}" name="BS23" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT23') ? $data['BT23'] : '' }}" name="BT23" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU23') ? $data['BU23'] : '' }}" name="BU23" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV23') ? $data['BV23'] : '' }}" name="BV23" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW23') ? $data['BW23'] : '' }}" name="BW23" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX23') ? $data['BX23'] : '' }}" name="BX23" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY23') ? $data['BY23'] : '' }}" name="BY23" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ23') ? $data['BZ23'] : '' }}" name="BZ23" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинская сестра по массажу" />
        <x-table.td value="18" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF24') ? $data['BF24'] : '' }}" name="BF24" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG24') ? $data['BG24'] : '' }}" name="BG24" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH24') ? $data['BH24'] : '' }}" name="BH24" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI24') ? $data['BI24'] : '' }}" name="BI24" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ24') ? $data['BJ24'] : '' }}" name="BJ24" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK24') ? $data['BK24'] : '' }}" name="BK24" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL24') ? $data['BL24'] : '' }}" name="BL24" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM24') ? $data['BM24'] : '' }}" name="BM24" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN24') ? $data['BN24'] : '' }}" name="BN24" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO24') ? $data['BO24'] : '' }}" name="BO24" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP24') ? $data['BP24'] : '' }}" name="BP24" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ24') ? $data['BQ24'] : '' }}" name="BQ24" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR24') ? $data['BR24'] : '' }}" name="BR24" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS24') ? $data['BS24'] : '' }}" name="BS24" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT24') ? $data['BT24'] : '' }}" name="BT24" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU24') ? $data['BU24'] : '' }}" name="BU24" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV24') ? $data['BV24'] : '' }}" name="BV24" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW24') ? $data['BW24'] : '' }}" name="BW24" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX24') ? $data['BX24'] : '' }}" name="BX24" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY24') ? $data['BY24'] : '' }}" name="BY24" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ24') ? $data['BZ24'] : '' }}" name="BZ24" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинская сестра по физиотерапии" />
        <x-table.td value="19" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF25') ? $data['BF25'] : '' }}" name="BF25" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG25') ? $data['BG25'] : '' }}" name="BG25" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH25') ? $data['BH25'] : '' }}" name="BH25" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI25') ? $data['BI25'] : '' }}" name="BI25" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ25') ? $data['BJ25'] : '' }}" name="BJ25" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK25') ? $data['BK25'] : '' }}" name="BK25" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL25') ? $data['BL25'] : '' }}" name="BL25" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM25') ? $data['BM25'] : '' }}" name="BM25" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN25') ? $data['BN25'] : '' }}" name="BN25" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO25') ? $data['BO25'] : '' }}" name="BO25" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP25') ? $data['BP25'] : '' }}" name="BP25" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ25') ? $data['BQ25'] : '' }}" name="BQ25" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR25') ? $data['BR25'] : '' }}" name="BR25" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS25') ? $data['BS25'] : '' }}" name="BS25" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT25') ? $data['BT25'] : '' }}" name="BT25" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU25') ? $data['BU25'] : '' }}" name="BU25" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV25') ? $data['BV25'] : '' }}" name="BV25" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW25') ? $data['BW25'] : '' }}" name="BW25" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX25') ? $data['BX25'] : '' }}" name="BX25" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY25') ? $data['BY25'] : '' }}" name="BY25" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ25') ? $data['BZ25'] : '' }}" name="BZ25" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="кинезиоспециалист" />
        <x-table.td value="20" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF26') ? $data['BF26'] : '' }}" name="BF26" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG26') ? $data['BG26'] : '' }}" name="BG26" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH26') ? $data['BH26'] : '' }}" name="BH26" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI26') ? $data['BI26'] : '' }}" name="BI26" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ26') ? $data['BJ26'] : '' }}" name="BJ26" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK26') ? $data['BK26'] : '' }}" name="BK26" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL26') ? $data['BL26'] : '' }}" name="BL26" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM26') ? $data['BM26'] : '' }}" name="BM26" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN26') ? $data['BN26'] : '' }}" name="BN26" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO26') ? $data['BO26'] : '' }}" name="BO26" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP26') ? $data['BP26'] : '' }}" name="BP26" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ26') ? $data['BQ26'] : '' }}" name="BQ26" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR26') ? $data['BR26'] : '' }}" name="BR26" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS26') ? $data['BS26'] : '' }}" name="BS26" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT26') ? $data['BT26'] : '' }}" name="BT26" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU26') ? $data['BU26'] : '' }}" name="BU26" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV26') ? $data['BV26'] : '' }}" name="BV26" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW26') ? $data['BW26'] : '' }}" name="BW26" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX26') ? $data['BX26'] : '' }}" name="BX26" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY26') ? $data['BY26'] : '' }}" name="BY26" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ26') ? $data['BZ26'] : '' }}" name="BZ26" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="эргоспециалист" />
        <x-table.td value="21" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF27') ? $data['BF27'] : '' }}" name="BF27" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG27') ? $data['BG27'] : '' }}" name="BG27" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH27') ? $data['BH27'] : '' }}" name="BH27" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI27') ? $data['BI27'] : '' }}" name="BI27" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ27') ? $data['BJ27'] : '' }}" name="BJ27" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK27') ? $data['BK27'] : '' }}" name="BK27" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL27') ? $data['BL27'] : '' }}" name="BL27" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM27') ? $data['BM27'] : '' }}" name="BM27" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN27') ? $data['BN27'] : '' }}" name="BN27" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO27') ? $data['BO27'] : '' }}" name="BO27" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP27') ? $data['BP27'] : '' }}" name="BP27" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ27') ? $data['BQ27'] : '' }}" name="BQ27" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR27') ? $data['BR27'] : '' }}" name="BR27" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS27') ? $data['BS27'] : '' }}" name="BS27" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT27') ? $data['BT27'] : '' }}" name="BT27" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU27') ? $data['BU27'] : '' }}" name="BU27" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV27') ? $data['BV27'] : '' }}" name="BV27" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW27') ? $data['BW27'] : '' }}" name="BW27" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX27') ? $data['BX27'] : '' }}" name="BX27" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY27') ? $data['BY27'] : '' }}" name="BY27" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ27') ? $data['BZ27'] : '' }}" name="BZ27" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="Должности специалистов в области социального обслуживания - всего, из них:" />
        <x-table.td value="22" center />
        <x-table.td type="input" formul="{this}>=({BF29}+{BF30}+{BF31}+{BF32}+{BF33}+{BF34}+{BF35}+{BF36})" value="{{ $data->has('BF28') ? $data['BF28'] : '' }}" name="BF28" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BG29}+{BG30}+{BG31}+{BG32}+{BG33}+{BG34}+{BG35}+{BG36})" value="{{ $data->has('BG28') ? $data['BG28'] : '' }}" name="BG28" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BH29}+{BH30}+{BH31}+{BH32}+{BH33}+{BH34}+{BH35}+{BH36})" value="{{ $data->has('BH28') ? $data['BH28'] : '' }}" name="BH28" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BI29}+{BI30}+{BI31}+{BI32}+{BI33}+{BI34}+{BI35}+{BI36})" value="{{ $data->has('BI28') ? $data['BI28'] : '' }}" name="BI28" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BJ29}+{BJ30}+{BJ31}+{BJ32}+{BJ33}+{BJ34}+{BJ35}+{BJ36})" value="{{ $data->has('BJ28') ? $data['BJ28'] : '' }}" name="BJ28" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BK29}+{BK30}+{BK31}+{BK32}+{BK33}+{BK34}+{BK35}+{BK36})" value="{{ $data->has('BK28') ? $data['BK28'] : '' }}" name="BK28" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BL29}+{BL30}+{BL31}+{BL32}+{BL33}+{BL34}+{BL35}+{BL36})" value="{{ $data->has('BL28') ? $data['BL28'] : '' }}" name="BL28" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BM29}+{BM30}+{BM31}+{BM32}+{BM33}+{BM34}+{BM35}+{BM36})" value="{{ $data->has('BM28') ? $data['BM28'] : '' }}" name="BM28" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BN29}+{BN30}+{BN31}+{BN32}+{BN33}+{BN34}+{BN35}+{BN36})" value="{{ $data->has('BN28') ? $data['BN28'] : '' }}" name="BN28" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BO29}+{BO30}+{BO31}+{BO32}+{BO33}+{BO34}+{BO35}+{BO36})" value="{{ $data->has('BO28') ? $data['BO28'] : '' }}" name="BO28" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BP29}+{BP30}+{BP31}+{BP32}+{BP33}+{BP34}+{BP35}+{BP36})" value="{{ $data->has('BP28') ? $data['BP28'] : '' }}" name="BP28" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BQ29}+{BQ30}+{BQ31}+{BQ32}+{BQ33}+{BQ34}+{BQ35}+{BQ36})" value="{{ $data->has('BQ28') ? $data['BQ28'] : '' }}" name="BQ28" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BR29}+{BR30}+{BR31}+{BR32}+{BR33}+{BR34}+{BR35}+{BR36})" value="{{ $data->has('BR28') ? $data['BR28'] : '' }}" name="BR28" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BS29}+{BS30}+{BS31}+{BS32}+{BS33}+{BS34}+{BS35}+{BS36})" value="{{ $data->has('BS28') ? $data['BS28'] : '' }}" name="BS28" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BT29}+{BT30}+{BT31}+{BT32}+{BT33}+{BT34}+{BT35}+{BT36})" value="{{ $data->has('BT28') ? $data['BT28'] : '' }}" name="BT28" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BU29}+{BU30}+{BU31}+{BU32}+{BU33}+{BU34}+{BU35}+{BU36})" value="{{ $data->has('BU28') ? $data['BU28'] : '' }}" name="BU28" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BV29}+{BV30}+{BV31}+{BV32}+{BV33}+{BV34}+{BV35}+{BV36})" value="{{ $data->has('BV28') ? $data['BV28'] : '' }}" name="BV28" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BW29}+{BW30}+{BW31}+{BW32}+{BW33}+{BW34}+{BW35}+{BW36})" value="{{ $data->has('BW28') ? $data['BW28'] : '' }}" name="BW28" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BX29}+{BX30}+{BX31}+{BX32}+{BX33}+{BX34}+{BX35}+{BX36})" value="{{ $data->has('BX28') ? $data['BX28'] : '' }}" name="BX28" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BY29}+{BY30}+{BY31}+{BY32}+{BY33}+{BY34}+{BY35}+{BY36})" value="{{ $data->has('BY28') ? $data['BY28'] : '' }}" name="BY28" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BZ29}+{BZ30}+{BZ31}+{BZ32}+{BZ33}+{BZ34}+{BZ35}+{BZ36})" value="{{ $data->has('BZ28') ? $data['BZ28'] : '' }}" name="BZ28" step="0.25" />
    </tr>
    <tr>
        <x-table.td type="header" value="специалист по социальной работе" />
        <x-table.td value="23" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF29') ? $data['BF29'] : '' }}" name="BF29" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG29') ? $data['BG29'] : '' }}" name="BG29" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH29') ? $data['BH29'] : '' }}" name="BH29" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI29') ? $data['BI29'] : '' }}" name="BI29" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ29') ? $data['BJ29'] : '' }}" name="BJ29" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK29') ? $data['BK29'] : '' }}" name="BK29" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL29') ? $data['BL29'] : '' }}" name="BL29" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM29') ? $data['BM29'] : '' }}" name="BM29" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN29') ? $data['BN29'] : '' }}" name="BN29" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO29') ? $data['BO29'] : '' }}" name="BO29" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP29') ? $data['BP29'] : '' }}" name="BP29" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ29') ? $data['BQ29'] : '' }}" name="BQ29" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR29') ? $data['BR29'] : '' }}" name="BR29" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS29') ? $data['BS29'] : '' }}" name="BS29" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT29') ? $data['BT29'] : '' }}" name="BT29" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU29') ? $data['BU29'] : '' }}" name="BU29" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV29') ? $data['BV29'] : '' }}" name="BV29" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW29') ? $data['BW29'] : '' }}" name="BW29" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX29') ? $data['BX29'] : '' }}" name="BX29" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY29') ? $data['BY29'] : '' }}" name="BY29" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ29') ? $data['BZ29'] : '' }}" name="BZ29" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="социальный работник" />
        <x-table.td value="24" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF30') ? $data['BF30'] : '' }}" name="BF30" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG30') ? $data['BG30'] : '' }}" name="BG30" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH30') ? $data['BH30'] : '' }}" name="BH30" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI30') ? $data['BI30'] : '' }}" name="BI30" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ30') ? $data['BJ30'] : '' }}" name="BJ30" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK30') ? $data['BK30'] : '' }}" name="BK30" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL30') ? $data['BL30'] : '' }}" name="BL30" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM30') ? $data['BM30'] : '' }}" name="BM30" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN30') ? $data['BN30'] : '' }}" name="BN30" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO30') ? $data['BO30'] : '' }}" name="BO30" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP30') ? $data['BP30'] : '' }}" name="BP30" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ30') ? $data['BQ30'] : '' }}" name="BQ30" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR30') ? $data['BR30'] : '' }}" name="BR30" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS30') ? $data['BS30'] : '' }}" name="BS30" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT30') ? $data['BT30'] : '' }}" name="BT30" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU30') ? $data['BU30'] : '' }}" name="BU30" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV30') ? $data['BV30'] : '' }}" name="BV30" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW30') ? $data['BW30'] : '' }}" name="BW30" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX30') ? $data['BX30'] : '' }}" name="BX30" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY30') ? $data['BY30'] : '' }}" name="BY30" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ30') ? $data['BZ30'] : '' }}" name="BZ30" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="специалист по реабилитационной работе в социальной сфере" />
        <x-table.td value="25" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF31') ? $data['BF31'] : '' }}" name="BF31" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG31') ? $data['BG31'] : '' }}" name="BG31" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH31') ? $data['BH31'] : '' }}" name="BH31" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI31') ? $data['BI31'] : '' }}" name="BI31" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ31') ? $data['BJ31'] : '' }}" name="BJ31" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK31') ? $data['BK31'] : '' }}" name="BK31" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL31') ? $data['BL31'] : '' }}" name="BL31" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM31') ? $data['BM31'] : '' }}" name="BM31" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN31') ? $data['BN31'] : '' }}" name="BN31" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO31') ? $data['BO31'] : '' }}" name="BO31" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP31') ? $data['BP31'] : '' }}" name="BP31" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ31') ? $data['BQ31'] : '' }}" name="BQ31" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR31') ? $data['BR31'] : '' }}" name="BR31" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS31') ? $data['BS31'] : '' }}" name="BS31" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT31') ? $data['BT31'] : '' }}" name="BT31" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU31') ? $data['BU31'] : '' }}" name="BU31" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV31') ? $data['BV31'] : '' }}" name="BV31" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW31') ? $data['BW31'] : '' }}" name="BW31" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX31') ? $data['BX31'] : '' }}" name="BX31" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY31') ? $data['BY31'] : '' }}" name="BY31" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ31') ? $data['BZ31'] : '' }}" name="BZ31" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="психолог в социальной сфере" />
        <x-table.td value="26" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF32') ? $data['BF32'] : '' }}" name="BF32" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG32') ? $data['BG32'] : '' }}" name="BG32" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH32') ? $data['BH32'] : '' }}" name="BH32" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI32') ? $data['BI32'] : '' }}" name="BI32" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ32') ? $data['BJ32'] : '' }}" name="BJ32" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK32') ? $data['BK32'] : '' }}" name="BK32" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL32') ? $data['BL32'] : '' }}" name="BL32" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM32') ? $data['BM32'] : '' }}" name="BM32" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN32') ? $data['BN32'] : '' }}" name="BN32" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO32') ? $data['BO32'] : '' }}" name="BO32" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP32') ? $data['BP32'] : '' }}" name="BP32" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ32') ? $data['BQ32'] : '' }}" name="BQ32" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR32') ? $data['BR32'] : '' }}" name="BR32" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS32') ? $data['BS32'] : '' }}" name="BS32" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT32') ? $data['BT32'] : '' }}" name="BT32" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU32') ? $data['BU32'] : '' }}" name="BU32" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV32') ? $data['BV32'] : '' }}" name="BV32" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW32') ? $data['BW32'] : '' }}" name="BW32" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX32') ? $data['BX32'] : '' }}" name="BX32" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY32') ? $data['BY32'] : '' }}" name="BY32" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ32') ? $data['BZ32'] : '' }}" name="BZ32" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="специалист по работе с семьей" />
        <x-table.td value="27" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF33') ? $data['BF33'] : '' }}" name="BF33" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG33') ? $data['BG33'] : '' }}" name="BG33" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH33') ? $data['BH33'] : '' }}" name="BH33" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI33') ? $data['BI33'] : '' }}" name="BI33" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ33') ? $data['BJ33'] : '' }}" name="BJ33" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK33') ? $data['BK33'] : '' }}" name="BK33" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL33') ? $data['BL33'] : '' }}" name="BL33" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM33') ? $data['BM33'] : '' }}" name="BM33" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN33') ? $data['BN33'] : '' }}" name="BN33" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO33') ? $data['BO33'] : '' }}" name="BO33" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP33') ? $data['BP33'] : '' }}" name="BP33" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ33') ? $data['BQ33'] : '' }}" name="BQ33" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR33') ? $data['BR33'] : '' }}" name="BR33" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS33') ? $data['BS33'] : '' }}" name="BS33" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT33') ? $data['BT33'] : '' }}" name="BT33" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU33') ? $data['BU33'] : '' }}" name="BU33" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV33') ? $data['BV33'] : '' }}" name="BV33" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW33') ? $data['BW33'] : '' }}" name="BW33" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX33') ? $data['BX33'] : '' }}" name="BX33" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY33') ? $data['BY33'] : '' }}" name="BY33" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ33') ? $data['BZ33'] : '' }}" name="BZ33" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="ассистент (помощник) по оказанию технической помощи инвалидами и лицам с ограниченными возможностями здоровья" />
        <x-table.td value="28" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF34') ? $data['BF34'] : '' }}" name="BF34" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG34') ? $data['BG34'] : '' }}" name="BG34" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH34') ? $data['BH34'] : '' }}" name="BH34" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI34') ? $data['BI34'] : '' }}" name="BI34" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ34') ? $data['BJ34'] : '' }}" name="BJ34" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK34') ? $data['BK34'] : '' }}" name="BK34" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL34') ? $data['BL34'] : '' }}" name="BL34" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM34') ? $data['BM34'] : '' }}" name="BM34" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN34') ? $data['BN34'] : '' }}" name="BN34" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO34') ? $data['BO34'] : '' }}" name="BO34" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP34') ? $data['BP34'] : '' }}" name="BP34" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ34') ? $data['BQ34'] : '' }}" name="BQ34" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR34') ? $data['BR34'] : '' }}" name="BR34" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS34') ? $data['BS34'] : '' }}" name="BS34" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT34') ? $data['BT34'] : '' }}" name="BT34" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU34') ? $data['BU34'] : '' }}" name="BU34" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV34') ? $data['BV34'] : '' }}" name="BV34" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW34') ? $data['BW34'] : '' }}" name="BW34" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX34') ? $data['BX34'] : '' }}" name="BX34" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY34') ? $data['BY34'] : '' }}" name="BY34" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ34') ? $data['BZ34'] : '' }}" name="BZ34" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="переводчик русского жестового языка" />
        <x-table.td value="29" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF35') ? $data['BF35'] : '' }}" name="BF35" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG35') ? $data['BG35'] : '' }}" name="BG35" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH35') ? $data['BH35'] : '' }}" name="BH35" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI35') ? $data['BI35'] : '' }}" name="BI35" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ35') ? $data['BJ35'] : '' }}" name="BJ35" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK35') ? $data['BK35'] : '' }}" name="BK35" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL35') ? $data['BL35'] : '' }}" name="BL35" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM35') ? $data['BM35'] : '' }}" name="BM35" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN35') ? $data['BN35'] : '' }}" name="BN35" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO35') ? $data['BO35'] : '' }}" name="BO35" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP35') ? $data['BP35'] : '' }}" name="BP35" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ35') ? $data['BQ35'] : '' }}" name="BQ35" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR35') ? $data['BR35'] : '' }}" name="BR35" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS35') ? $data['BS35'] : '' }}" name="BS35" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT35') ? $data['BT35'] : '' }}" name="BT35" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU35') ? $data['BU35'] : '' }}" name="BU35" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV35') ? $data['BV35'] : '' }}" name="BV35" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW35') ? $data['BW35'] : '' }}" name="BW35" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX35') ? $data['BX35'] : '' }}" name="BX35" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY35') ? $data['BY35'] : '' }}" name="BY35" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ35') ? $data['BZ35'] : '' }}" name="BZ35" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="тифлосурдопереводчик" />
        <x-table.td value="30" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF36') ? $data['BF36'] : '' }}" name="BF36" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG36') ? $data['BG36'] : '' }}" name="BG36" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH36') ? $data['BH36'] : '' }}" name="BH36" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI36') ? $data['BI36'] : '' }}" name="BI36" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ36') ? $data['BJ36'] : '' }}" name="BJ36" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK36') ? $data['BK36'] : '' }}" name="BK36" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL36') ? $data['BL36'] : '' }}" name="BL36" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM36') ? $data['BM36'] : '' }}" name="BM36" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN36') ? $data['BN36'] : '' }}" name="BN36" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO36') ? $data['BO36'] : '' }}" name="BO36" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP36') ? $data['BP36'] : '' }}" name="BP36" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ36') ? $data['BQ36'] : '' }}" name="BQ36" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR36') ? $data['BR36'] : '' }}" name="BR36" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS36') ? $data['BS36'] : '' }}" name="BS36" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT36') ? $data['BT36'] : '' }}" name="BT36" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU36') ? $data['BU36'] : '' }}" name="BU36" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV36') ? $data['BV36'] : '' }}" name="BV36" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW36') ? $data['BW36'] : '' }}" name="BW36" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX36') ? $data['BX36'] : '' }}" name="BX36" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY36') ? $data['BY36'] : '' }}" name="BY36" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ36') ? $data['BZ36'] : '' }}" name="BZ36" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="Должности специалистов в области физической культуры и спорта - всего, из них:" />
        <x-table.td value="31" center />
        <x-table.td type="input" formul="{this}>=({BF38}+{BF39}+{BF40})" value="{{ $data->has('BF37') ? $data['BF37'] : '' }}" name="BF37" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BG38}+{BG39}+{BG40})" value="{{ $data->has('BG37') ? $data['BG37'] : '' }}" name="BG37" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BH38}+{BH39}+{BH40})" value="{{ $data->has('BH37') ? $data['BH37'] : '' }}" name="BH37" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BI38}+{BI39}+{BI40})" value="{{ $data->has('BI37') ? $data['BI37'] : '' }}" name="BI37" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BJ38}+{BJ39}+{BJ40})" value="{{ $data->has('BJ37') ? $data['BJ37'] : '' }}" name="BJ37" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BK38}+{BK39}+{BK40})" value="{{ $data->has('BK37') ? $data['BK37'] : '' }}" name="BK37" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BL38}+{BL39}+{BL40})" value="{{ $data->has('BL37') ? $data['BL37'] : '' }}" name="BL37" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BM38}+{BM39}+{BM40})" value="{{ $data->has('BM37') ? $data['BM37'] : '' }}" name="BM37" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BN38}+{BN39}+{BN40})" value="{{ $data->has('BN37') ? $data['BN37'] : '' }}" name="BN37" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BO38}+{BO39}+{BO40})" value="{{ $data->has('BO37') ? $data['BO37'] : '' }}" name="BO37" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BP38}+{BP39}+{BP40})" value="{{ $data->has('BP37') ? $data['BP37'] : '' }}" name="BP37" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BQ38}+{BQ39}+{BQ40})" value="{{ $data->has('BQ37') ? $data['BQ37'] : '' }}" name="BQ37" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BR38}+{BR39}+{BR40})" value="{{ $data->has('BR37') ? $data['BR37'] : '' }}" name="BR37" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BS38}+{BS39}+{BS40})" value="{{ $data->has('BS37') ? $data['BS37'] : '' }}" name="BS37" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BT38}+{BT39}+{BT40})" value="{{ $data->has('BT37') ? $data['BT37'] : '' }}" name="BT37" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BU38}+{BU39}+{BU40})" value="{{ $data->has('BU37') ? $data['BU37'] : '' }}" name="BU37" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BV38}+{BV39}+{BV40})" value="{{ $data->has('BV37') ? $data['BV37'] : '' }}" name="BV37" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BW38}+{BW39}+{BW40})" value="{{ $data->has('BW37') ? $data['BW37'] : '' }}" name="BW37" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BX38}+{BX39}+{BX40})" value="{{ $data->has('BX37') ? $data['BX37'] : '' }}" name="BX37" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BY38}+{BY39}+{BY40})" value="{{ $data->has('BY37') ? $data['BY37'] : '' }}" name="BY37" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BZ38}+{BZ39}+{BZ40})" value="{{ $data->has('BZ37') ? $data['BZ37'] : '' }}" name="BZ37" step="0.25" />
    </tr>
    <tr>
        <x-table.td type="header" value="инструктор по адаптивной физической культуре" />
        <x-table.td value="32" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF38') ? $data['BF38'] : '' }}" name="BF38" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG38') ? $data['BG38'] : '' }}" name="BG38" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH38') ? $data['BH38'] : '' }}" name="BH38" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI38') ? $data['BI38'] : '' }}" name="BI38" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ38') ? $data['BJ38'] : '' }}" name="BJ38" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK38') ? $data['BK38'] : '' }}" name="BK38" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL38') ? $data['BL38'] : '' }}" name="BL38" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM38') ? $data['BM38'] : '' }}" name="BM38" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN38') ? $data['BN38'] : '' }}" name="BN38" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO38') ? $data['BO38'] : '' }}" name="BO38" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP38') ? $data['BP38'] : '' }}" name="BP38" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ38') ? $data['BQ38'] : '' }}" name="BQ38" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR38') ? $data['BR38'] : '' }}" name="BR38" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS38') ? $data['BS38'] : '' }}" name="BS38" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT38') ? $data['BT38'] : '' }}" name="BT38" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU38') ? $data['BU38'] : '' }}" name="BU38" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV38') ? $data['BV38'] : '' }}" name="BV38" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW38') ? $data['BW38'] : '' }}" name="BW38" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX38') ? $data['BX38'] : '' }}" name="BX38" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY38') ? $data['BY38'] : '' }}" name="BY38" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ38') ? $data['BZ38'] : '' }}" name="BZ38" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="инструктор-методист по адаптивной физической культуре и адаптивному спорту" />
        <x-table.td value="33" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF39') ? $data['BF39'] : '' }}" name="BF39" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG39') ? $data['BG39'] : '' }}" name="BG39" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH39') ? $data['BH39'] : '' }}" name="BH39" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI39') ? $data['BI39'] : '' }}" name="BI39" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ39') ? $data['BJ39'] : '' }}" name="BJ39" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK39') ? $data['BK39'] : '' }}" name="BK39" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL39') ? $data['BL39'] : '' }}" name="BL39" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM39') ? $data['BM39'] : '' }}" name="BM39" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN39') ? $data['BN39'] : '' }}" name="BN39" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO39') ? $data['BO39'] : '' }}" name="BO39" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP39') ? $data['BP39'] : '' }}" name="BP39" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ39') ? $data['BQ39'] : '' }}" name="BQ39" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR39') ? $data['BR39'] : '' }}" name="BR39" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS39') ? $data['BS39'] : '' }}" name="BS39" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT39') ? $data['BT39'] : '' }}" name="BT39" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU39') ? $data['BU39'] : '' }}" name="BU39" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV39') ? $data['BV39'] : '' }}" name="BV39" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW39') ? $data['BW39'] : '' }}" name="BW39" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX39') ? $data['BX39'] : '' }}" name="BX39" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY39') ? $data['BY39'] : '' }}" name="BY39" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ39') ? $data['BZ39'] : '' }}" name="BZ39" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="тренер по адаптивной физической культуре и адаптивному спорту" />
        <x-table.td value="34" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF40') ? $data['BF40'] : '' }}" name="BF40" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG40') ? $data['BG40'] : '' }}" name="BG40" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH40') ? $data['BH40'] : '' }}" name="BH40" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI40') ? $data['BI40'] : '' }}" name="BI40" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ40') ? $data['BJ40'] : '' }}" name="BJ40" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK40') ? $data['BK40'] : '' }}" name="BK40" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL40') ? $data['BL40'] : '' }}" name="BL40" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM40') ? $data['BM40'] : '' }}" name="BM40" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN40') ? $data['BN40'] : '' }}" name="BN40" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO40') ? $data['BO40'] : '' }}" name="BO40" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP40') ? $data['BP40'] : '' }}" name="BP40" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ40') ? $data['BQ40'] : '' }}" name="BQ40" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR40') ? $data['BR40'] : '' }}" name="BR40" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS40') ? $data['BS40'] : '' }}" name="BS40" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT40') ? $data['BT40'] : '' }}" name="BT40" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU40') ? $data['BU40'] : '' }}" name="BU40" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV40') ? $data['BV40'] : '' }}" name="BV40" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW40') ? $data['BW40'] : '' }}" name="BW40" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX40') ? $data['BX40'] : '' }}" name="BX40" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY40') ? $data['BY40'] : '' }}" name="BY40" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ40') ? $data['BZ40'] : '' }}" name="BZ40" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="Должности специалистов в области образования и науки - всего, из них:" />
        <x-table.td value="35" center />
        <x-table.td type="input" formul="{this}>=({BF42}+{BF43}+{BF44}+{BF45}+{BF46}+{BF47}+{BF48}+{BF49}+{BF50})" value="{{ $data->has('BF41') ? $data['BF41'] : '' }}" name="BF41" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BG42}+{BG43}+{BG44}+{BG45}+{BG46}+{BG47}+{BG48}+{BG49}+{BG50})" value="{{ $data->has('BG41') ? $data['BG41'] : '' }}" name="BG41" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BH42}+{BH43}+{BH44}+{BH45}+{BH46}+{BH47}+{BH48}+{BH49}+{BH50})" value="{{ $data->has('BH41') ? $data['BH41'] : '' }}" name="BH41" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BI42}+{BI43}+{BI44}+{BI45}+{BI46}+{BI47}+{BI48}+{BI49}+{BI50})" value="{{ $data->has('BI41') ? $data['BI41'] : '' }}" name="BI41" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BJ42}+{BJ43}+{BJ44}+{BJ45}+{BJ46}+{BJ47}+{BJ48}+{BJ49}+{BJ50})" value="{{ $data->has('BJ41') ? $data['BJ41'] : '' }}" name="BJ41" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BK42}+{BK43}+{BK44}+{BK45}+{BK46}+{BK47}+{BK48}+{BK49}+{BK50})" value="{{ $data->has('BK41') ? $data['BK41'] : '' }}" name="BK41" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BL42}+{BL43}+{BL44}+{BL45}+{BL46}+{BL47}+{BL48}+{BL49}+{BL50})" value="{{ $data->has('BL41') ? $data['BL41'] : '' }}" name="BL41" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BM42}+{BM43}+{BM44}+{BM45}+{BM46}+{BM47}+{BM48}+{BM49}+{BM50})" value="{{ $data->has('BM41') ? $data['BM41'] : '' }}" name="BM41" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BN42}+{BN43}+{BN44}+{BN45}+{BN46}+{BN47}+{BN48}+{BN49}+{BN50})" value="{{ $data->has('BN41') ? $data['BN41'] : '' }}" name="BN41" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BO42}+{BO43}+{BO44}+{BO45}+{BO46}+{BO47}+{BO48}+{BO49}+{BO50})" value="{{ $data->has('BO41') ? $data['BO41'] : '' }}" name="BO41" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BP42}+{BP43}+{BP44}+{BP45}+{BP46}+{BP47}+{BP48}+{BP49}+{BP50})" value="{{ $data->has('BP41') ? $data['BP41'] : '' }}" name="BP41" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BQ42}+{BQ43}+{BQ44}+{BQ45}+{BQ46}+{BQ47}+{BQ48}+{BQ49}+{BQ50})" value="{{ $data->has('BQ41') ? $data['BQ41'] : '' }}" name="BQ41" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BR42}+{BR43}+{BR44}+{BR45}+{BR46}+{BR47}+{BR48}+{BR49}+{BR50})" value="{{ $data->has('BR41') ? $data['BR41'] : '' }}" name="BR41" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BS42}+{BS43}+{BS44}+{BS45}+{BS46}+{BS47}+{BS48}+{BS49}+{BS50})" value="{{ $data->has('BS41') ? $data['BS41'] : '' }}" name="BS41" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BT42}+{BT43}+{BT44}+{BT45}+{BT46}+{BT47}+{BT48}+{BT49}+{BT50})" value="{{ $data->has('BT41') ? $data['BT41'] : '' }}" name="BT41" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BU42}+{BU43}+{BU44}+{BU45}+{BU46}+{BU47}+{BU48}+{BU49}+{BU50})" value="{{ $data->has('BU41') ? $data['BU41'] : '' }}" name="BU41" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BV42}+{BV43}+{BV44}+{BV45}+{BV46}+{BV47}+{BV48}+{BV49}+{BV50})" value="{{ $data->has('BV41') ? $data['BV41'] : '' }}" name="BV41" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BW42}+{BW43}+{BW44}+{BW45}+{BW46}+{BW47}+{BW48}+{BW49}+{BW50})" value="{{ $data->has('BW41') ? $data['BW41'] : '' }}" name="BW41" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BX42}+{BX43}+{BX44}+{BX45}+{BX46}+{BX47}+{BX48}+{BX49}+{BX50})" value="{{ $data->has('BX41') ? $data['BX41'] : '' }}" name="BX41" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BY42}+{BY43}+{BY44}+{BY45}+{BY46}+{BY47}+{BY48}+{BY49}+{BY50})" value="{{ $data->has('BY41') ? $data['BY41'] : '' }}" name="BY41" step="0.25" />
        <x-table.td type="input" formul="{this}>=({BZ42}+{BZ43}+{BZ44}+{BZ45}+{BZ46}+{BZ47}+{BZ48}+{BZ49}+{BZ50})" value="{{ $data->has('BZ41') ? $data['BZ41'] : '' }}" name="BZ41" step="0.25" />
    </tr>
    <tr>
        <x-table.td type="header" value="педагог-психолог (психолог в сфере образования)" />
        <x-table.td value="36" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF42') ? $data['BF42'] : '' }}" name="BF42" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG42') ? $data['BG42'] : '' }}" name="BG42" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH42') ? $data['BH42'] : '' }}" name="BH42" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI42') ? $data['BI42'] : '' }}" name="BI42" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ42') ? $data['BJ42'] : '' }}" name="BJ42" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK42') ? $data['BK42'] : '' }}" name="BK42" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL42') ? $data['BL42'] : '' }}" name="BL42" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM42') ? $data['BM42'] : '' }}" name="BM42" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN42') ? $data['BN42'] : '' }}" name="BN42" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO42') ? $data['BO42'] : '' }}" name="BO42" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP42') ? $data['BP42'] : '' }}" name="BP42" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ42') ? $data['BQ42'] : '' }}" name="BQ42" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR42') ? $data['BR42'] : '' }}" name="BR42" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS42') ? $data['BS42'] : '' }}" name="BS42" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT42') ? $data['BT42'] : '' }}" name="BT42" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU42') ? $data['BU42'] : '' }}" name="BU42" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV42') ? $data['BV42'] : '' }}" name="BV42" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW42') ? $data['BW42'] : '' }}" name="BW42" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX42') ? $data['BX42'] : '' }}" name="BX42" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY42') ? $data['BY42'] : '' }}" name="BY42" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ42') ? $data['BZ42'] : '' }}" name="BZ42" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="ассистент (помощник)" />
        <x-table.td value="37" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF43') ? $data['BF43'] : '' }}" name="BF43" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG43') ? $data['BG43'] : '' }}" name="BG43" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH43') ? $data['BH43'] : '' }}" name="BH43" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI43') ? $data['BI43'] : '' }}" name="BI43" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ43') ? $data['BJ43'] : '' }}" name="BJ43" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK43') ? $data['BK43'] : '' }}" name="BK43" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL43') ? $data['BL43'] : '' }}" name="BL43" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM43') ? $data['BM43'] : '' }}" name="BM43" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN43') ? $data['BN43'] : '' }}" name="BN43" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO43') ? $data['BO43'] : '' }}" name="BO43" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP43') ? $data['BP43'] : '' }}" name="BP43" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ43') ? $data['BQ43'] : '' }}" name="BQ43" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR43') ? $data['BR43'] : '' }}" name="BR43" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS43') ? $data['BS43'] : '' }}" name="BS43" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT43') ? $data['BT43'] : '' }}" name="BT43" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU43') ? $data['BU43'] : '' }}" name="BU43" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV43') ? $data['BV43'] : '' }}" name="BV43" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW43') ? $data['BW43'] : '' }}" name="BW43" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX43') ? $data['BX43'] : '' }}" name="BX43" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY43') ? $data['BY43'] : '' }}" name="BY43" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ43') ? $data['BZ43'] : '' }}" name="BZ43" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="тьютор" />
        <x-table.td value="38" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF44') ? $data['BF44'] : '' }}" name="BF44" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG44') ? $data['BG44'] : '' }}" name="BG44" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH44') ? $data['BH44'] : '' }}" name="BH44" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI44') ? $data['BI44'] : '' }}" name="BI44" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ44') ? $data['BJ44'] : '' }}" name="BJ44" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK44') ? $data['BK44'] : '' }}" name="BK44" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL44') ? $data['BL44'] : '' }}" name="BL44" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM44') ? $data['BM44'] : '' }}" name="BM44" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN44') ? $data['BN44'] : '' }}" name="BN44" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO44') ? $data['BO44'] : '' }}" name="BO44" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP44') ? $data['BP44'] : '' }}" name="BP44" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ44') ? $data['BQ44'] : '' }}" name="BQ44" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR44') ? $data['BR44'] : '' }}" name="BR44" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS44') ? $data['BS44'] : '' }}" name="BS44" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT44') ? $data['BT44'] : '' }}" name="BT44" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU44') ? $data['BU44'] : '' }}" name="BU44" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV44') ? $data['BV44'] : '' }}" name="BV44" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW44') ? $data['BW44'] : '' }}" name="BW44" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX44') ? $data['BX44'] : '' }}" name="BX44" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY44') ? $data['BY44'] : '' }}" name="BY44" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ44') ? $data['BZ44'] : '' }}" name="BZ44" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="логопед (в том числе учитель-логопед)" />
        <x-table.td value="39" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF45') ? $data['BF45'] : '' }}" name="BF45" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG45') ? $data['BG45'] : '' }}" name="BG45" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH45') ? $data['BH45'] : '' }}" name="BH45" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI45') ? $data['BI45'] : '' }}" name="BI45" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ45') ? $data['BJ45'] : '' }}" name="BJ45" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK45') ? $data['BK45'] : '' }}" name="BK45" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL45') ? $data['BL45'] : '' }}" name="BL45" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM45') ? $data['BM45'] : '' }}" name="BM45" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN45') ? $data['BN45'] : '' }}" name="BN45" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO45') ? $data['BO45'] : '' }}" name="BO45" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP45') ? $data['BP45'] : '' }}" name="BP45" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ45') ? $data['BQ45'] : '' }}" name="BQ45" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR45') ? $data['BR45'] : '' }}" name="BR45" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS45') ? $data['BS45'] : '' }}" name="BS45" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT45') ? $data['BT45'] : '' }}" name="BT45" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU45') ? $data['BU45'] : '' }}" name="BU45" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV45') ? $data['BV45'] : '' }}" name="BV45" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW45') ? $data['BW45'] : '' }}" name="BW45" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX45') ? $data['BX45'] : '' }}" name="BX45" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY45') ? $data['BY45'] : '' }}" name="BY45" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ45') ? $data['BZ45'] : '' }}" name="BZ45" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="дефектолог (в том числе учитель-дефектолог) - всего, в том числе:" />
        <x-table.td value="40" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF46') ? $data['BF46'] : '' }}" name="BF46" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG46') ? $data['BG46'] : '' }}" name="BG46" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH46') ? $data['BH46'] : '' }}" name="BH46" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI46') ? $data['BI46'] : '' }}" name="BI46" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ46') ? $data['BJ46'] : '' }}" name="BJ46" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK46') ? $data['BK46'] : '' }}" name="BK46" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL46') ? $data['BL46'] : '' }}" name="BL46" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM46') ? $data['BM46'] : '' }}" name="BM46" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN46') ? $data['BN46'] : '' }}" name="BN46" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO46') ? $data['BO46'] : '' }}" name="BO46" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP46') ? $data['BP46'] : '' }}" name="BP46" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ46') ? $data['BQ46'] : '' }}" name="BQ46" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR46') ? $data['BR46'] : '' }}" name="BR46" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS46') ? $data['BS46'] : '' }}" name="BS46" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT46') ? $data['BT46'] : '' }}" name="BT46" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU46') ? $data['BU46'] : '' }}" name="BU46" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV46') ? $data['BV46'] : '' }}" name="BV46" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW46') ? $data['BW46'] : '' }}" name="BW46" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX46') ? $data['BX46'] : '' }}" name="BX46" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY46') ? $data['BY46'] : '' }}" name="BY46" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ46') ? $data['BZ46'] : '' }}" name="BZ46" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="тифлопедагог" />
        <x-table.td value="41" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF47') ? $data['BF47'] : '' }}" name="BF47" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG47') ? $data['BG47'] : '' }}" name="BG47" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH47') ? $data['BH47'] : '' }}" name="BH47" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI47') ? $data['BI47'] : '' }}" name="BI47" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ47') ? $data['BJ47'] : '' }}" name="BJ47" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK47') ? $data['BK47'] : '' }}" name="BK47" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL47') ? $data['BL47'] : '' }}" name="BL47" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM47') ? $data['BM47'] : '' }}" name="BM47" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN47') ? $data['BN47'] : '' }}" name="BN47" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO47') ? $data['BO47'] : '' }}" name="BO47" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP47') ? $data['BP47'] : '' }}" name="BP47" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ47') ? $data['BQ47'] : '' }}" name="BQ47" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR47') ? $data['BR47'] : '' }}" name="BR47" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS47') ? $data['BS47'] : '' }}" name="BS47" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT47') ? $data['BT47'] : '' }}" name="BT47" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU47') ? $data['BU47'] : '' }}" name="BU47" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV47') ? $data['BV47'] : '' }}" name="BV47" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW47') ? $data['BW47'] : '' }}" name="BW47" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX47') ? $data['BX47'] : '' }}" name="BX47" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY47') ? $data['BY47'] : '' }}" name="BY47" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ47') ? $data['BZ47'] : '' }}" name="BZ47" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="сурдопедагог" />
        <x-table.td value="42" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF48') ? $data['BF48'] : '' }}" name="BF48" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG48') ? $data['BG48'] : '' }}" name="BG48" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH48') ? $data['BH48'] : '' }}" name="BH48" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI48') ? $data['BI48'] : '' }}" name="BI48" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ48') ? $data['BJ48'] : '' }}" name="BJ48" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK48') ? $data['BK48'] : '' }}" name="BK48" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL48') ? $data['BL48'] : '' }}" name="BL48" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM48') ? $data['BM48'] : '' }}" name="BM48" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN48') ? $data['BN48'] : '' }}" name="BN48" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO48') ? $data['BO48'] : '' }}" name="BO48" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP48') ? $data['BP48'] : '' }}" name="BP48" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ48') ? $data['BQ48'] : '' }}" name="BQ48" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR48') ? $data['BR48'] : '' }}" name="BR48" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS48') ? $data['BS48'] : '' }}" name="BS48" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT48') ? $data['BT48'] : '' }}" name="BT48" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU48') ? $data['BU48'] : '' }}" name="BU48" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV48') ? $data['BV48'] : '' }}" name="BV48" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW48') ? $data['BW48'] : '' }}" name="BW48" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX48') ? $data['BX48'] : '' }}" name="BX48" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY48') ? $data['BY48'] : '' }}" name="BY48" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ48') ? $data['BZ48'] : '' }}" name="BZ48" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="олигофренопедагог" />
        <x-table.td value="43" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF49') ? $data['BF49'] : '' }}" name="BF49" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG49') ? $data['BG49'] : '' }}" name="BG49" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH49') ? $data['BH49'] : '' }}" name="BH49" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI49') ? $data['BI49'] : '' }}" name="BI49" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ49') ? $data['BJ49'] : '' }}" name="BJ49" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK49') ? $data['BK49'] : '' }}" name="BK49" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL49') ? $data['BL49'] : '' }}" name="BL49" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM49') ? $data['BM49'] : '' }}" name="BM49" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN49') ? $data['BN49'] : '' }}" name="BN49" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO49') ? $data['BO49'] : '' }}" name="BO49" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP49') ? $data['BP49'] : '' }}" name="BP49" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ49') ? $data['BQ49'] : '' }}" name="BQ49" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR49') ? $data['BR49'] : '' }}" name="BR49" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS49') ? $data['BS49'] : '' }}" name="BS49" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT49') ? $data['BT49'] : '' }}" name="BT49" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU49') ? $data['BU49'] : '' }}" name="BU49" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV49') ? $data['BV49'] : '' }}" name="BV49" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW49') ? $data['BW49'] : '' }}" name="BW49" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX49') ? $data['BX49'] : '' }}" name="BX49" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY49') ? $data['BY49'] : '' }}" name="BY49" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ49') ? $data['BZ49'] : '' }}" name="BZ49" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="методист" />
        <x-table.td value="44" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF50') ? $data['BF50'] : '' }}" name="BF50" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG50') ? $data['BG50'] : '' }}" name="BG50" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH50') ? $data['BH50'] : '' }}" name="BH50" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI50') ? $data['BI50'] : '' }}" name="BI50" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ50') ? $data['BJ50'] : '' }}" name="BJ50" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK50') ? $data['BK50'] : '' }}" name="BK50" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL50') ? $data['BL50'] : '' }}" name="BL50" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM50') ? $data['BM50'] : '' }}" name="BM50" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN50') ? $data['BN50'] : '' }}" name="BN50" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO50') ? $data['BO50'] : '' }}" name="BO50" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP50') ? $data['BP50'] : '' }}" name="BP50" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ50') ? $data['BQ50'] : '' }}" name="BQ50" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR50') ? $data['BR50'] : '' }}" name="BR50" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS50') ? $data['BS50'] : '' }}" name="BS50" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT50') ? $data['BT50'] : '' }}" name="BT50" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU50') ? $data['BU50'] : '' }}" name="BU50" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV50') ? $data['BV50'] : '' }}" name="BV50" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW50') ? $data['BW50'] : '' }}" name="BW50" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX50') ? $data['BX50'] : '' }}" name="BX50" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY50') ? $data['BY50'] : '' }}" name="BY50" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ50') ? $data['BZ50'] : '' }}" name="BZ50" step='0.25' />
    </tr>
    <tr>
        <x-table.td type="header" value="Технический персонал, из них:" />
        <x-table.td value="45" center />
        <x-table.td type="input" formul="{this}>={BF52}" value="{{ $data->has('BF51') ? $data['BF51'] : '' }}" name="BF51" step="0.25" />
        <x-table.td type="input" formul="{this}>={BG52}" value="{{ $data->has('BG51') ? $data['BG51'] : '' }}" name="BG51" step="0.25" />
        <x-table.td type="input" formul="{this}>={BH52}" value="{{ $data->has('BH51') ? $data['BH51'] : '' }}" name="BH51" step="0.25" />
        <x-table.td type="input" formul="{this}>={BI52}" value="{{ $data->has('BI51') ? $data['BI51'] : '' }}" name="BI51" step="0.25" />
        <x-table.td type="input" formul="{this}>={BJ52}" value="{{ $data->has('BJ51') ? $data['BJ51'] : '' }}" name="BJ51" step="0.25" />
        <x-table.td type="input" formul="{this}>={BK52}" value="{{ $data->has('BK51') ? $data['BK51'] : '' }}" name="BK51" step="0.25" />
        <x-table.td type="input" formul="{this}>={BL52}" value="{{ $data->has('BL51') ? $data['BL51'] : '' }}" name="BL51" step="0.25" />
        <x-table.td type="input" formul="{this}>={BM52}" value="{{ $data->has('BM51') ? $data['BM51'] : '' }}" name="BM51" step="0.25" />
        <x-table.td type="input" formul="{this}>={BN52}" value="{{ $data->has('BN51') ? $data['BN51'] : '' }}" name="BN51" step="0.25" />
        <x-table.td type="input" formul="{this}>={BO52}" value="{{ $data->has('BO51') ? $data['BO51'] : '' }}" name="BO51" step="0.25" />
        <x-table.td type="input" formul="{this}>={BP52}" value="{{ $data->has('BP51') ? $data['BP51'] : '' }}" name="BP51" step="0.25" />
        <x-table.td type="input" formul="{this}>={BQ52}" value="{{ $data->has('BQ51') ? $data['BQ51'] : '' }}" name="BQ51" step="0.25" />
        <x-table.td type="input" formul="{this}>={BR52}" value="{{ $data->has('BR51') ? $data['BR51'] : '' }}" name="BR51" step="0.25" />
        <x-table.td type="input" formul="{this}>={BS52}" value="{{ $data->has('BS51') ? $data['BS51'] : '' }}" name="BS51" step="0.25" />
        <x-table.td type="input" formul="{this}>={BT52}" value="{{ $data->has('BT51') ? $data['BT51'] : '' }}" name="BT51" step="0.25" />
        <x-table.td type="input" formul="{this}>={BU52}" value="{{ $data->has('BU51') ? $data['BU51'] : '' }}" name="BU51" step="0.25" />
        <x-table.td type="input" formul="{this}>={BV52}" value="{{ $data->has('BV51') ? $data['BV51'] : '' }}" name="BV51" step="0.25" />
        <x-table.td type="input" formul="{this}>={BW52}" value="{{ $data->has('BW51') ? $data['BW51'] : '' }}" name="BW51" step="0.25" />
        <x-table.td type="input" formul="{this}>={BX52}" value="{{ $data->has('BX51') ? $data['BX51'] : '' }}" name="BX51" step="0.25" />
        <x-table.td type="input" formul="{this}>={BY52}" value="{{ $data->has('BY51') ? $data['BY51'] : '' }}" name="BY51" step="0.25" />
        <x-table.td type="input" formul="{this}>={BZ52}" value="{{ $data->has('BZ51') ? $data['BZ51'] : '' }}" name="BZ51" step="0.25" />
    </tr>
    <tr>
        <x-table.td type="header" value="протезист" />
        <x-table.td value="46" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BF52') ? $data['BF52'] : '' }}" name="BF52" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BG52') ? $data['BG52'] : '' }}" name="BG52" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BH52') ? $data['BH52'] : '' }}" name="BH52" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BI52') ? $data['BI52'] : '' }}" name="BI52" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BJ52') ? $data['BJ52'] : '' }}" name="BJ52" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BK52') ? $data['BK52'] : '' }}" name="BK52" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BL52') ? $data['BL52'] : '' }}" name="BL52" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM52') ? $data['BM52'] : '' }}" name="BM52" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN52') ? $data['BN52'] : '' }}" name="BN52" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO52') ? $data['BO52'] : '' }}" name="BO52" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP52') ? $data['BP52'] : '' }}" name="BP52" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ52') ? $data['BQ52'] : '' }}" name="BQ52" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR52') ? $data['BR52'] : '' }}" name="BR52" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS52') ? $data['BS52'] : '' }}" name="BS52" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT52') ? $data['BT52'] : '' }}" name="BT52" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BU52') ? $data['BU52'] : '' }}" name="BU52" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BV52') ? $data['BV52'] : '' }}" name="BV52" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BW52') ? $data['BW52'] : '' }}" name="BW52" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BX52') ? $data['BX52'] : '' }}" name="BX52" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BY52') ? $data['BY52'] : '' }}" name="BY52" step='0.25' />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BZ52') ? $data['BZ52'] : '' }}" name="BZ52" step='0.25' />
    </tr>
</tbody>
