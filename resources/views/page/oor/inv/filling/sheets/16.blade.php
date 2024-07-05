<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th rowspan=2 value="Медицинские организации" />
        <x-table.th rowspan=2 value="№ строки" />
        <x-table.th rowspan=2 value="Количество организаций, ед." />
        <x-table.th rowspan=2
            value="Наличие организаций, оказывающих медицинскую помощь по медицинской реабилитации в рамках территориальной программы государственной гарантий (да -1; нет - 0)" />
        <x-table.th colspan=3
            value="Число коек, фактически развернутых по оказанию медицинской помощи по медицинской реабилитации в условиях дневного стационара (ΙΙΙ этап), ед." />
        <x-table.th colspan=3
            value="Число коек, фактически развернутых по оказанию медицинской помощи по медицинской реабилитации в условиях круглосуточного стационара (ΙΙ этап), ед." />
    </tr>
    <tr>
        <x-table.th value="реабилитационные соматические" />
        <x-table.th value="реабилитационные для больных с заболеваниями центральной нервной системы и органов чувств" />
        <x-table.th
            value="реабилитационные для больных с заболеваниями опорно-двигательного аппарата и периферической нервной системы" />
        <x-table.th value="реабилитационные соматические" />
        <x-table.th value="реабилитационные для больных с заболеваниями центральной нервной системы и органов чувств" />
        <x-table.th
            value="реабилитационные для больных с заболеваниями опорно-двигательного аппарата и периферической нервной системы" />
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
        <x-table.td type="header" value="Всего медицинских организаций, в том числе:" />
        <x-table.td value="01" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM6') ? $data['BM6'] : '' }}" coord="BM6" />
        <x-table.td type="input" value="{{ $data->has('BN6') ? $data['BN6'] : '' }}" coord="BN6" />
        <x-table.td type="input" value="{{ $data->has('BO6') ? $data['BO6'] : '' }}" coord="BO6" />
        <x-table.td type="input" value="{{ $data->has('BP6') ? $data['BP6'] : '' }}" coord="BP6" />
        <x-table.td type="input" value="{{ $data->has('BQ6') ? $data['BQ6'] : '' }}" coord="BQ6" />
        <x-table.td type="input" value="{{ $data->has('BR6') ? $data['BR6'] : '' }}" coord="BR6" />
        <x-table.td type="input" value="{{ $data->has('BS6') ? $data['BS6'] : '' }}" coord="BS6" />
        <x-table.td type="input" value="{{ $data->has('BT6') ? $data['BT6'] : '' }}" coord="BT6" />
    </tr>
    <tr>
        <x-table.td type="header" value="Больница" />
        <x-table.td value="02" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM7') ? $data['BM7'] : '' }}" coord="BM7" />
        <x-table.td type="input" value="{{ $data->has('BN7') ? $data['BN7'] : '' }}" coord="BN7" />
        <x-table.td type="input" value="{{ $data->has('BO7') ? $data['BO7'] : '' }}" coord="BO7" />
        <x-table.td type="input" value="{{ $data->has('BP7') ? $data['BP7'] : '' }}" coord="BP7" />
        <x-table.td type="input" value="{{ $data->has('BQ7') ? $data['BQ7'] : '' }}" coord="BQ7" />
        <x-table.td type="input" value="{{ $data->has('BR7') ? $data['BR7'] : '' }}" coord="BR7" />
        <x-table.td type="input" value="{{ $data->has('BS7') ? $data['BS7'] : '' }}" coord="BS7" />
        <x-table.td type="input" value="{{ $data->has('BT7') ? $data['BT7'] : '' }}" coord="BT7" />
    </tr>
    <tr>
        <x-table.td type="header" value="Детская больница" />
        <x-table.td value="03" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM8') ? $data['BM8'] : '' }}" coord="BM8" />
        <x-table.td type="input" value="{{ $data->has('BN8') ? $data['BN8'] : '' }}" coord="BN8" />
        <x-table.td type="input" value="{{ $data->has('BO8') ? $data['BO8'] : '' }}" coord="BO8" />
        <x-table.td type="input" value="{{ $data->has('BP8') ? $data['BP8'] : '' }}" coord="BP8" />
        <x-table.td type="input" value="{{ $data->has('BQ8') ? $data['BQ8'] : '' }}" coord="BQ8" />
        <x-table.td type="input" value="{{ $data->has('BR8') ? $data['BR8'] : '' }}" coord="BR8" />
        <x-table.td type="input" value="{{ $data->has('BS8') ? $data['BS8'] : '' }}" coord="BS8" />
        <x-table.td type="input" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" coord="BT8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Участковая больница" />
        <x-table.td value="04" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM9') ? $data['BM9'] : '' }}" coord="BM9" />
        <x-table.td type="input" value="{{ $data->has('BN9') ? $data['BN9'] : '' }}" coord="BN9" />
        <x-table.td type="input" value="{{ $data->has('BO9') ? $data['BO9'] : '' }}" coord="BO9" />
        <x-table.td type="input" value="{{ $data->has('BP9') ? $data['BP9'] : '' }}" coord="BP9" />
        <x-table.td type="input" value="{{ $data->has('BQ9') ? $data['BQ9'] : '' }}" coord="BQ9" />
        <x-table.td type="input" value="{{ $data->has('BR9') ? $data['BR9'] : '' }}" coord="BR9" />
        <x-table.td type="input" value="{{ $data->has('BS9') ? $data['BS9'] : '' }}" coord="BS9" />
        <x-table.td type="input" value="{{ $data->has('BT9') ? $data['BT9'] : '' }}" coord="BT9" />
    </tr>
    <tr>
        <x-table.td type="header" value="Госпиталь" />
        <x-table.td value="05" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM10') ? $data['BM10'] : '' }}" coord="BM10" />
        <x-table.td type="input" value="{{ $data->has('BN10') ? $data['BN10'] : '' }}" coord="BN10" />
        <x-table.td type="input" value="{{ $data->has('BO10') ? $data['BO10'] : '' }}" coord="BO10" />
        <x-table.td type="input" value="{{ $data->has('BP10') ? $data['BP10'] : '' }}" coord="BP10" />
        <x-table.td type="input" value="{{ $data->has('BQ10') ? $data['BQ10'] : '' }}" coord="BQ10" />
        <x-table.td type="input" value="{{ $data->has('BR10') ? $data['BR10'] : '' }}" coord="BR10" />
        <x-table.td type="input" value="{{ $data->has('BS10') ? $data['BS10'] : '' }}" coord="BS10" />
        <x-table.td type="input" value="{{ $data->has('BT10') ? $data['BT10'] : '' }}" coord="BT10" />
    </tr>
    <tr>
        <x-table.td type="header" value="Медико-санитарная часть, в том числе центральная" />
        <x-table.td value="06" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM11') ? $data['BM11'] : '' }}" coord="BM11" />
        <x-table.td type="input" value="{{ $data->has('BN11') ? $data['BN11'] : '' }}" coord="BN11" />
        <x-table.td type="input" value="{{ $data->has('BO11') ? $data['BO11'] : '' }}" coord="BO11" />
        <x-table.td type="input" value="{{ $data->has('BP11') ? $data['BP11'] : '' }}" coord="BP11" />
        <x-table.td type="input" value="{{ $data->has('BQ11') ? $data['BQ11'] : '' }}" coord="BQ11" />
        <x-table.td type="input" value="{{ $data->has('BR11') ? $data['BR11'] : '' }}" coord="BR11" />
        <x-table.td type="input" value="{{ $data->has('BS11') ? $data['BS11'] : '' }}" coord="BS11" />
        <x-table.td type="input" value="{{ $data->has('BT11') ? $data['BT11'] : '' }}" coord="BT11" />
    </tr>
    <tr>
        <x-table.td type="header" value="Диспансер" />
        <x-table.td value="07" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM12') ? $data['BM12'] : '' }}" coord="BM12" />
        <x-table.td type="input" value="{{ $data->has('BN12') ? $data['BN12'] : '' }}" coord="BN12" />
        <x-table.td type="input" value="{{ $data->has('BO12') ? $data['BO12'] : '' }}" coord="BO12" />
        <x-table.td type="input" value="{{ $data->has('BP12') ? $data['BP12'] : '' }}" coord="BP12" />
        <x-table.td type="input" value="{{ $data->has('BQ12') ? $data['BQ12'] : '' }}" coord="BQ12" />
        <x-table.td type="input" value="{{ $data->has('BR12') ? $data['BR12'] : '' }}" coord="BR12" />
        <x-table.td type="input" value="{{ $data->has('BS12') ? $data['BS12'] : '' }}" coord="BS12" />
        <x-table.td type="input" value="{{ $data->has('BT12') ? $data['BT12'] : '' }}" coord="BT12" />
    </tr>
    <tr>
        <x-table.td type="header" value="Амбулатория, в том числе врачебная" />
        <x-table.td value="08" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM13') ? $data['BM13'] : '' }}" coord="BM13" />
        <x-table.td type="input" value="{{ $data->has('BN13') ? $data['BN13'] : '' }}" coord="BN13" />
        <x-table.td type="input" value="{{ $data->has('BO13') ? $data['BO13'] : '' }}" coord="BO13" />
        <x-table.td type="input" value="{{ $data->has('BP13') ? $data['BP13'] : '' }}" coord="BP13" />
        <x-table.td type="input" value="{{ $data->has('BQ13') ? $data['BQ13'] : '' }}" coord="BQ13" />
        <x-table.td type="input" value="{{ $data->has('BR13') ? $data['BR13'] : '' }}" coord="BR13" />
        <x-table.td type="input" value="{{ $data->has('BS13') ? $data['BS13'] : '' }}" coord="BS13" />
        <x-table.td type="input" value="{{ $data->has('BT13') ? $data['BT13'] : '' }}" coord="BT13" />
    </tr>
    <tr>
        <x-table.td type="header" value="Поликлиника" />
        <x-table.td value="09" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM14') ? $data['BM14'] : '' }}" coord="BM14" />
        <x-table.td type="input" value="{{ $data->has('BN14') ? $data['BN14'] : '' }}" coord="BN14" />
        <x-table.td type="input" value="{{ $data->has('BO14') ? $data['BO14'] : '' }}" coord="BO14" />
        <x-table.td type="input" value="{{ $data->has('BP14') ? $data['BP14'] : '' }}" coord="BP14" />
        <x-table.td type="input" value="{{ $data->has('BQ14') ? $data['BQ14'] : '' }}" coord="BQ14" />
        <x-table.td type="input" value="{{ $data->has('BR14') ? $data['BR14'] : '' }}" coord="BR14" />
        <x-table.td type="input" value="{{ $data->has('BS14') ? $data['BS14'] : '' }}" coord="BS14" />
        <x-table.td type="input" value="{{ $data->has('BT14') ? $data['BT14'] : '' }}" coord="BT14" />
    </tr>
    <tr>
        <x-table.td type="header" value="Детская поликлиника" />
        <x-table.td value="10" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM15') ? $data['BM15'] : '' }}" coord="BM15" />
        <x-table.td type="input" value="{{ $data->has('BN15') ? $data['BN15'] : '' }}" coord="BN15" />
        <x-table.td type="input" value="{{ $data->has('BO15') ? $data['BO15'] : '' }}" coord="BO15" />
        <x-table.td type="input" value="{{ $data->has('BP15') ? $data['BP15'] : '' }}" coord="BP15" />
        <x-table.td type="input" value="{{ $data->has('BQ15') ? $data['BQ15'] : '' }}" coord="BQ15" />
        <x-table.td type="input" value="{{ $data->has('BR15') ? $data['BR15'] : '' }}" coord="BR15" />
        <x-table.td type="input" value="{{ $data->has('BS15') ? $data['BS15'] : '' }}" coord="BS15" />
        <x-table.td type="input" value="{{ $data->has('BT15') ? $data['BT15'] : '' }}" coord="BT15" />
    </tr>
    <tr>
        <x-table.td type="header" value="Дом ребенка, в том числе специализированный" />
        <x-table.td value="11" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM16') ? $data['BM16'] : '' }}" coord="BM16" />
        <x-table.td type="input" value="{{ $data->has('BN16') ? $data['BN16'] : '' }}" coord="BN16" />
        <x-table.td type="input" value="{{ $data->has('BO16') ? $data['BO16'] : '' }}" coord="BO16" />
        <x-table.td type="input" value="{{ $data->has('BP16') ? $data['BP16'] : '' }}" coord="BP16" />
        <x-table.td type="input" value="{{ $data->has('BQ16') ? $data['BQ16'] : '' }}" coord="BQ16" />
        <x-table.td type="input" value="{{ $data->has('BR16') ? $data['BR16'] : '' }}" coord="BR16" />
        <x-table.td type="input" value="{{ $data->has('BS16') ? $data['BS16'] : '' }}" coord="BS16" />
        <x-table.td type="input" value="{{ $data->has('BT16') ? $data['BT16'] : '' }}" coord="BT16" />
    </tr>
    <tr>
        <x-table.td type="header" value="Центры - всего, в том числе:" />
        <x-table.td value="12" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM17') ? $data['BM17'] : '' }}" coord="BM17" />
        <x-table.td type="input" value="{{ $data->has('BN17') ? $data['BN17'] : '' }}" coord="BN17" />
        <x-table.td type="input" value="{{ $data->has('BO17') ? $data['BO17'] : '' }}" coord="BO17" />
        <x-table.td type="input" value="{{ $data->has('BP17') ? $data['BP17'] : '' }}" coord="BP17" />
        <x-table.td type="input" value="{{ $data->has('BQ17') ? $data['BQ17'] : '' }}" coord="BQ17" />
        <x-table.td type="input" value="{{ $data->has('BR17') ? $data['BR17'] : '' }}" coord="BR17" />
        <x-table.td type="input" value="{{ $data->has('BS17') ? $data['BS17'] : '' }}" coord="BS17" />
        <x-table.td type="input" value="{{ $data->has('BT17') ? $data['BT17'] : '' }}" coord="BT17" />
    </tr>
    <tr>
        <x-table.td type="header" value="лечебно-реабилитационный" />
        <x-table.td value="13" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM18') ? $data['BM18'] : '' }}" coord="BM18" />
        <x-table.td type="input" value="{{ $data->has('BN18') ? $data['BN18'] : '' }}" coord="BN18" />
        <x-table.td type="input" value="{{ $data->has('BO18') ? $data['BO18'] : '' }}" coord="BO18" />
        <x-table.td type="input" value="{{ $data->has('BP18') ? $data['BP18'] : '' }}" coord="BP18" />
        <x-table.td type="input" value="{{ $data->has('BQ18') ? $data['BQ18'] : '' }}" coord="BQ18" />
        <x-table.td type="input" value="{{ $data->has('BR18') ? $data['BR18'] : '' }}" coord="BR18" />
        <x-table.td type="input" value="{{ $data->has('BS18') ? $data['BS18'] : '' }}" coord="BS18" />
        <x-table.td type="input" value="{{ $data->has('BT18') ? $data['BT18'] : '' }}" coord="BT18" />
    </tr>
    <tr>
        <x-table.td type="header" value="лечебной физкультуры и спортивной медицины" />
        <x-table.td value="14" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM19') ? $data['BM19'] : '' }}" coord="BM19" />
        <x-table.td type="input" value="{{ $data->has('BN19') ? $data['BN19'] : '' }}" coord="BN19" />
        <x-table.td type="input" value="{{ $data->has('BO19') ? $data['BO19'] : '' }}" coord="BO19" />
        <x-table.td type="input" value="{{ $data->has('BP19') ? $data['BP19'] : '' }}" coord="BP19" />
        <x-table.td type="input" value="{{ $data->has('BQ19') ? $data['BQ19'] : '' }}" coord="BQ19" />
        <x-table.td type="input" value="{{ $data->has('BR19') ? $data['BR19'] : '' }}" coord="BR19" />
        <x-table.td type="input" value="{{ $data->has('BS19') ? $data['BS19'] : '' }}" coord="BS19" />
        <x-table.td type="input" value="{{ $data->has('BT19') ? $data['BT19'] : '' }}" coord="BT19" />
    </tr>
    <tr>
        <x-table.td type="header" value="мануальной терапии" />
        <x-table.td value="15" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM20') ? $data['BM20'] : '' }}" coord="BM20" />
        <x-table.td type="input" value="{{ $data->has('BN20') ? $data['BN20'] : '' }}" coord="BN20" />
        <x-table.td type="input" value="{{ $data->has('BO20') ? $data['BO20'] : '' }}" coord="BO20" />
        <x-table.td type="input" value="{{ $data->has('BP20') ? $data['BP20'] : '' }}" coord="BP20" />
        <x-table.td type="input" value="{{ $data->has('BQ20') ? $data['BQ20'] : '' }}" coord="BQ20" />
        <x-table.td type="input" value="{{ $data->has('BR20') ? $data['BR20'] : '' }}" coord="BR20" />
        <x-table.td type="input" value="{{ $data->has('BS20') ? $data['BS20'] : '' }}" coord="BS20" />
        <x-table.td type="input" value="{{ $data->has('BT20') ? $data['BT20'] : '' }}" coord="BT20" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинской реабилитации для воинов-интернационалистов" />
        <x-table.td value="16" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM21') ? $data['BM21'] : '' }}" coord="BM21" />
        <x-table.td type="input" value="{{ $data->has('BN21') ? $data['BN21'] : '' }}" coord="BN21" />
        <x-table.td type="input" value="{{ $data->has('BO21') ? $data['BO21'] : '' }}" coord="BO21" />
        <x-table.td type="input" value="{{ $data->has('BP21') ? $data['BP21'] : '' }}" coord="BP21" />
        <x-table.td type="input" value="{{ $data->has('BQ21') ? $data['BQ21'] : '' }}" coord="BQ21" />
        <x-table.td type="input" value="{{ $data->has('BR21') ? $data['BR21'] : '' }}" coord="BR21" />
        <x-table.td type="input" value="{{ $data->has('BS21') ? $data['BS21'] : '' }}" coord="BS21" />
        <x-table.td type="input" value="{{ $data->has('BT21') ? $data['BT21'] : '' }}" coord="BT21" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинской реабилитации, в том числе детский" />
        <x-table.td value="17" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM22') ? $data['BM22'] : '' }}" coord="BM22" />
        <x-table.td type="input" value="{{ $data->has('BN22') ? $data['BN22'] : '' }}" coord="BN22" />
        <x-table.td type="input" value="{{ $data->has('BO22') ? $data['BO22'] : '' }}" coord="BO22" />
        <x-table.td type="input" value="{{ $data->has('BP22') ? $data['BP22'] : '' }}" coord="BP22" />
        <x-table.td type="input" value="{{ $data->has('BQ22') ? $data['BQ22'] : '' }}" coord="BQ22" />
        <x-table.td type="input" value="{{ $data->has('BR22') ? $data['BR22'] : '' }}" coord="BR22" />
        <x-table.td type="input" value="{{ $data->has('BS22') ? $data['BS22'] : '' }}" coord="BS22" />
        <x-table.td type="input" value="{{ $data->has('BT22') ? $data['BT22'] : '' }}" coord="BT22" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинской реабилитации для инвалидов и детей-инвалидов с последствиями детского церебрального паралича" />
        <x-table.td value="18" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM23') ? $data['BM23'] : '' }}" coord="BM23" />
        <x-table.td type="input" value="{{ $data->has('BN23') ? $data['BN23'] : '' }}" coord="BN23" />
        <x-table.td type="input" value="{{ $data->has('BO23') ? $data['BO23'] : '' }}" coord="BO23" />
        <x-table.td type="input" value="{{ $data->has('BP23') ? $data['BP23'] : '' }}" coord="BP23" />
        <x-table.td type="input" value="{{ $data->has('BQ23') ? $data['BQ23'] : '' }}" coord="BQ23" />
        <x-table.td type="input" value="{{ $data->has('BR23') ? $data['BR23'] : '' }}" coord="BR23" />
        <x-table.td type="input" value="{{ $data->has('BS23') ? $data['BS23'] : '' }}" coord="BS23" />
        <x-table.td type="input" value="{{ $data->has('BT23') ? $data['BT23'] : '' }}" coord="BT23" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинской и социальной реабилитации, в том числе с отделением постоянного проживания инвалидов и детей-инвалидов с тяжелыми формами детского церебрального паралича, самостоятельно не передвигающихся и себя не обслуживающих" />
        <x-table.td value="19" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM24') ? $data['BM24'] : '' }}" coord="BM24" />
        <x-table.td type="input" value="{{ $data->has('BN24') ? $data['BN24'] : '' }}" coord="BN24" />
        <x-table.td type="input" value="{{ $data->has('BO24') ? $data['BO24'] : '' }}" coord="BO24" />
        <x-table.td type="input" value="{{ $data->has('BP24') ? $data['BP24'] : '' }}" coord="BP24" />
        <x-table.td type="input" value="{{ $data->has('BQ24') ? $data['BQ24'] : '' }}" coord="BQ24" />
        <x-table.td type="input" value="{{ $data->has('BR24') ? $data['BR24'] : '' }}" coord="BR24" />
        <x-table.td type="input" value="{{ $data->has('BS24') ? $data['BS24'] : '' }}" coord="BS24" />
        <x-table.td type="input" value="{{ $data->has('BT24') ? $data['BT24'] : '' }}" coord="BT24" />
    </tr>
    <tr>
        <x-table.td type="header" value="реабилитации слуха" />
        <x-table.td value="20" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM25') ? $data['BM25'] : '' }}" coord="BM25" />
        <x-table.td type="input" value="{{ $data->has('BN25') ? $data['BN25'] : '' }}" coord="BN25" />
        <x-table.td type="input" value="{{ $data->has('BO25') ? $data['BO25'] : '' }}" coord="BO25" />
        <x-table.td type="input" value="{{ $data->has('BP25') ? $data['BP25'] : '' }}" coord="BP25" />
        <x-table.td type="input" value="{{ $data->has('BQ25') ? $data['BQ25'] : '' }}" coord="BQ25" />
        <x-table.td type="input" value="{{ $data->has('BR25') ? $data['BR25'] : '' }}" coord="BR25" />
        <x-table.td type="input" value="{{ $data->has('BS25') ? $data['BS25'] : '' }}" coord="BS25" />
        <x-table.td type="input" value="{{ $data->has('BT25') ? $data['BT25'] : '' }}" coord="BT25" />
    </tr>
    <tr>
        <x-table.td type="header" value="реабилитационный" />
        <x-table.td value="21" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM26') ? $data['BM26'] : '' }}" coord="BM26" />
        <x-table.td type="input" value="{{ $data->has('BN26') ? $data['BN26'] : '' }}" coord="BN26" />
        <x-table.td type="input" value="{{ $data->has('BO26') ? $data['BO26'] : '' }}" coord="BO26" />
        <x-table.td type="input" value="{{ $data->has('BP26') ? $data['BP26'] : '' }}" coord="BP26" />
        <x-table.td type="input" value="{{ $data->has('BQ26') ? $data['BQ26'] : '' }}" coord="BQ26" />
        <x-table.td type="input" value="{{ $data->has('BR26') ? $data['BR26'] : '' }}" coord="BR26" />
        <x-table.td type="input" value="{{ $data->has('BS26') ? $data['BS26'] : '' }}" coord="BS26" />
        <x-table.td type="input" value="{{ $data->has('BT26') ? $data['BT26'] : '' }}" coord="BT26" />
    </tr>
    <tr>
        <x-table.td type="header" value="Санаторно-курортная организация - всего, в том числе:" />
        <x-table.td value="22" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM27') ? $data['BM27'] : '' }}" coord="BM27" />
        <x-table.td type="input" value="{{ $data->has('BN27') ? $data['BN27'] : '' }}" coord="BN27" />
        <x-table.td type="input" value="{{ $data->has('BO27') ? $data['BO27'] : '' }}" coord="BO27" />
        <x-table.td type="input" value="{{ $data->has('BP27') ? $data['BP27'] : '' }}" coord="BP27" />
        <x-table.td type="input" value="{{ $data->has('BQ27') ? $data['BQ27'] : '' }}" coord="BQ27" />
        <x-table.td type="input" value="{{ $data->has('BR27') ? $data['BR27'] : '' }}" coord="BR27" />
        <x-table.td type="input" value="{{ $data->has('BS27') ? $data['BS27'] : '' }}" coord="BS27" />
        <x-table.td type="input" value="{{ $data->has('BT27') ? $data['BT27'] : '' }}" coord="BT27" />
    </tr>
    <tr>
        <x-table.td type="header" value="бальнеологическая лечебница" />
        <x-table.td value="23" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM28') ? $data['BM28'] : '' }}" coord="BM28" />
        <x-table.td type="input" value="{{ $data->has('BN28') ? $data['BN28'] : '' }}" coord="BN28" />
        <x-table.td type="input" value="{{ $data->has('BO28') ? $data['BO28'] : '' }}" coord="BO28" />
        <x-table.td type="input" value="{{ $data->has('BP28') ? $data['BP28'] : '' }}" coord="BP28" />
        <x-table.td type="input" value="{{ $data->has('BQ28') ? $data['BQ28'] : '' }}" coord="BQ28" />
        <x-table.td type="input" value="{{ $data->has('BR28') ? $data['BR28'] : '' }}" coord="BR28" />
        <x-table.td type="input" value="{{ $data->has('BS28') ? $data['BS28'] : '' }}" coord="BS28" />
        <x-table.td type="input" value="{{ $data->has('BT28') ? $data['BT28'] : '' }}" coord="BT28" />
    </tr>
    <tr>
        <x-table.td type="header" value="грязелечебница" />
        <x-table.td value="24" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM29') ? $data['BM29'] : '' }}" coord="BM29" />
        <x-table.td type="input" value="{{ $data->has('BN29') ? $data['BN29'] : '' }}" coord="BN29" />
        <x-table.td type="input" value="{{ $data->has('BO29') ? $data['BO29'] : '' }}" coord="BO29" />
        <x-table.td type="input" value="{{ $data->has('BP29') ? $data['BP29'] : '' }}" coord="BP29" />
        <x-table.td type="input" value="{{ $data->has('BQ29') ? $data['BQ29'] : '' }}" coord="BQ29" />
        <x-table.td type="input" value="{{ $data->has('BR29') ? $data['BR29'] : '' }}" coord="BR29" />
        <x-table.td type="input" value="{{ $data->has('BS29') ? $data['BS29'] : '' }}" coord="BS29" />
        <x-table.td type="input" value="{{ $data->has('BT29') ? $data['BT29'] : '' }}" coord="BT29" />
    </tr>
    <tr>
        <x-table.td type="header" value="курортная поликлиника" />
        <x-table.td value="25" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM30') ? $data['BM30'] : '' }}" coord="BM30" />
        <x-table.td type="input" value="{{ $data->has('BN30') ? $data['BN30'] : '' }}" coord="BN30" />
        <x-table.td type="input" value="{{ $data->has('BO30') ? $data['BO30'] : '' }}" coord="BO30" />
        <x-table.td type="input" value="{{ $data->has('BP30') ? $data['BP30'] : '' }}" coord="BP30" />
        <x-table.td type="input" value="{{ $data->has('BQ30') ? $data['BQ30'] : '' }}" coord="BQ30" />
        <x-table.td type="input" value="{{ $data->has('BR30') ? $data['BR30'] : '' }}" coord="BR30" />
        <x-table.td type="input" value="{{ $data->has('BS30') ? $data['BS30'] : '' }}" coord="BS30" />
        <x-table.td type="input" value="{{ $data->has('BT30') ? $data['BT30'] : '' }}" coord="BT30" />
    </tr>
    <tr>
        <x-table.td type="header" value="санаторий" />
        <x-table.td value="26" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM31') ? $data['BM31'] : '' }}" coord="BM31" />
        <x-table.td type="input" value="{{ $data->has('BN31') ? $data['BN31'] : '' }}" coord="BN31" />
        <x-table.td type="input" value="{{ $data->has('BO31') ? $data['BO31'] : '' }}" coord="BO31" />
        <x-table.td type="input" value="{{ $data->has('BP31') ? $data['BP31'] : '' }}" coord="BP31" />
        <x-table.td type="input" value="{{ $data->has('BQ31') ? $data['BQ31'] : '' }}" coord="BQ31" />
        <x-table.td type="input" value="{{ $data->has('BR31') ? $data['BR31'] : '' }}" coord="BR31" />
        <x-table.td type="input" value="{{ $data->has('BS31') ? $data['BS31'] : '' }}" coord="BS31" />
        <x-table.td type="input" value="{{ $data->has('BT31') ? $data['BT31'] : '' }}" coord="BT31" />
    </tr>
    <tr>
        <x-table.td type="header" value="санатории для детей, в том числе для детей с родителями" />
        <x-table.td value="27" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM32') ? $data['BM32'] : '' }}" coord="BM32" />
        <x-table.td type="input" value="{{ $data->has('BN32') ? $data['BN32'] : '' }}" coord="BN32" />
        <x-table.td type="input" value="{{ $data->has('BO32') ? $data['BO32'] : '' }}" coord="BO32" />
        <x-table.td type="input" value="{{ $data->has('BP32') ? $data['BP32'] : '' }}" coord="BP32" />
        <x-table.td type="input" value="{{ $data->has('BQ32') ? $data['BQ32'] : '' }}" coord="BQ32" />
        <x-table.td type="input" value="{{ $data->has('BR32') ? $data['BR32'] : '' }}" coord="BR32" />
        <x-table.td type="input" value="{{ $data->has('BS32') ? $data['BS32'] : '' }}" coord="BS32" />
        <x-table.td type="input" value="{{ $data->has('BT32') ? $data['BT32'] : '' }}" coord="BT32" />
    </tr>
    <tr>
        <x-table.td type="header" value="санаторий-профилакторий" />
        <x-table.td value="28" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM33') ? $data['BM33'] : '' }}" coord="BM33" />
        <x-table.td type="input" value="{{ $data->has('BN33') ? $data['BN33'] : '' }}" coord="BN33" />
        <x-table.td type="input" value="{{ $data->has('BO33') ? $data['BO33'] : '' }}" coord="BO33" />
        <x-table.td type="input" value="{{ $data->has('BP33') ? $data['BP33'] : '' }}" coord="BP33" />
        <x-table.td type="input" value="{{ $data->has('BQ33') ? $data['BQ33'] : '' }}" coord="BQ33" />
        <x-table.td type="input" value="{{ $data->has('BR33') ? $data['BR33'] : '' }}" coord="BR33" />
        <x-table.td type="input" value="{{ $data->has('BS33') ? $data['BS33'] : '' }}" coord="BS33" />
        <x-table.td type="input" value="{{ $data->has('BT33') ? $data['BT33'] : '' }}" coord="BT33" />
    </tr>
    <tr>
        <x-table.td type="header" value="санаторный оздоровительный лагерь круглогодичного действия" />
        <x-table.td value="29" h='center' />
        <x-table.td type="input" value="{{ $data->has('BM34') ? $data['BM34'] : '' }}" coord="BM34" />
        <x-table.td type="input" value="{{ $data->has('BN34') ? $data['BN34'] : '' }}" coord="BN34" />
        <x-table.td type="input" value="{{ $data->has('BO34') ? $data['BO34'] : '' }}" coord="BO34" />
        <x-table.td type="input" value="{{ $data->has('BP34') ? $data['BP34'] : '' }}" coord="BP34" />
        <x-table.td type="input" value="{{ $data->has('BQ34') ? $data['BQ34'] : '' }}" coord="BQ34" />
        <x-table.td type="input" value="{{ $data->has('BR34') ? $data['BR34'] : '' }}" coord="BR34" />
        <x-table.td type="input" value="{{ $data->has('BS34') ? $data['BS34'] : '' }}" coord="BS34" />
        <x-table.td type="input" value="{{ $data->has('BT34') ? $data['BT34'] : '' }}" coord="BT34" />
    </tr>
</tbody>
