<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th rowspan=2 value="Медицинские организации" header />
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
        <x-table.td type="header" value="Всего медицинских организаций, в том числе:" />
        <x-table.td value="01" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM6') ? $data['BM6'] : '' }}" name="BM6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN6') ? $data['BN6'] : '' }}" name="BN6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO6') ? $data['BO6'] : '' }}" name="BO6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP6') ? $data['BP6'] : '' }}" name="BP6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ6') ? $data['BQ6'] : '' }}" name="BQ6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR6') ? $data['BR6'] : '' }}" name="BR6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS6') ? $data['BS6'] : '' }}" name="BS6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT6') ? $data['BT6'] : '' }}" name="BT6" />
    </tr>
    <tr>
        <x-table.td type="header" value="Больница" />
        <x-table.td value="02" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM7') ? $data['BM7'] : '' }}" name="BM7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN7') ? $data['BN7'] : '' }}" name="BN7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO7') ? $data['BO7'] : '' }}" name="BO7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP7') ? $data['BP7'] : '' }}" name="BP7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ7') ? $data['BQ7'] : '' }}" name="BQ7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR7') ? $data['BR7'] : '' }}" name="BR7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS7') ? $data['BS7'] : '' }}" name="BS7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT7') ? $data['BT7'] : '' }}" name="BT7" />
    </tr>
    <tr>
        <x-table.td type="header" value="Детская больница" />
        <x-table.td value="03" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM8') ? $data['BM8'] : '' }}" name="BM8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN8') ? $data['BN8'] : '' }}" name="BN8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO8') ? $data['BO8'] : '' }}" name="BO8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP8') ? $data['BP8'] : '' }}" name="BP8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ8') ? $data['BQ8'] : '' }}" name="BQ8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR8') ? $data['BR8'] : '' }}" name="BR8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS8') ? $data['BS8'] : '' }}" name="BS8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT8') ? $data['BT8'] : '' }}" name="BT8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Участковая больница" />
        <x-table.td value="04" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM9') ? $data['BM9'] : '' }}" name="BM9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN9') ? $data['BN9'] : '' }}" name="BN9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO9') ? $data['BO9'] : '' }}" name="BO9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP9') ? $data['BP9'] : '' }}" name="BP9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ9') ? $data['BQ9'] : '' }}" name="BQ9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR9') ? $data['BR9'] : '' }}" name="BR9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS9') ? $data['BS9'] : '' }}" name="BS9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT9') ? $data['BT9'] : '' }}" name="BT9" />
    </tr>
    <tr>
        <x-table.td type="header" value="Госпиталь" />
        <x-table.td value="05" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM10') ? $data['BM10'] : '' }}" name="BM10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN10') ? $data['BN10'] : '' }}" name="BN10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO10') ? $data['BO10'] : '' }}" name="BO10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP10') ? $data['BP10'] : '' }}" name="BP10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ10') ? $data['BQ10'] : '' }}" name="BQ10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR10') ? $data['BR10'] : '' }}" name="BR10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS10') ? $data['BS10'] : '' }}" name="BS10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT10') ? $data['BT10'] : '' }}" name="BT10" />
    </tr>
    <tr>
        <x-table.td type="header" value="Медико-санитарная часть, в том числе центральная" />
        <x-table.td value="06" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM11') ? $data['BM11'] : '' }}" name="BM11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN11') ? $data['BN11'] : '' }}" name="BN11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO11') ? $data['BO11'] : '' }}" name="BO11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP11') ? $data['BP11'] : '' }}" name="BP11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ11') ? $data['BQ11'] : '' }}" name="BQ11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR11') ? $data['BR11'] : '' }}" name="BR11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS11') ? $data['BS11'] : '' }}" name="BS11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT11') ? $data['BT11'] : '' }}" name="BT11" />
    </tr>
    <tr>
        <x-table.td type="header" value="Диспансер" />
        <x-table.td value="07" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM12') ? $data['BM12'] : '' }}" name="BM12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN12') ? $data['BN12'] : '' }}" name="BN12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO12') ? $data['BO12'] : '' }}" name="BO12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP12') ? $data['BP12'] : '' }}" name="BP12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ12') ? $data['BQ12'] : '' }}" name="BQ12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR12') ? $data['BR12'] : '' }}" name="BR12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS12') ? $data['BS12'] : '' }}" name="BS12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT12') ? $data['BT12'] : '' }}" name="BT12" />
    </tr>
    <tr>
        <x-table.td type="header" value="Амбулатория, в том числе врачебная" />
        <x-table.td value="08" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM13') ? $data['BM13'] : '' }}" name="BM13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN13') ? $data['BN13'] : '' }}" name="BN13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO13') ? $data['BO13'] : '' }}" name="BO13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP13') ? $data['BP13'] : '' }}" name="BP13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ13') ? $data['BQ13'] : '' }}" name="BQ13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR13') ? $data['BR13'] : '' }}" name="BR13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS13') ? $data['BS13'] : '' }}" name="BS13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT13') ? $data['BT13'] : '' }}" name="BT13" />
    </tr>
    <tr>
        <x-table.td type="header" value="Поликлиника" />
        <x-table.td value="09" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM14') ? $data['BM14'] : '' }}" name="BM14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN14') ? $data['BN14'] : '' }}" name="BN14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO14') ? $data['BO14'] : '' }}" name="BO14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP14') ? $data['BP14'] : '' }}" name="BP14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ14') ? $data['BQ14'] : '' }}" name="BQ14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR14') ? $data['BR14'] : '' }}" name="BR14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS14') ? $data['BS14'] : '' }}" name="BS14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT14') ? $data['BT14'] : '' }}" name="BT14" />
    </tr>
    <tr>
        <x-table.td type="header" value="Детская поликлиника" />
        <x-table.td value="10" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM15') ? $data['BM15'] : '' }}" name="BM15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN15') ? $data['BN15'] : '' }}" name="BN15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO15') ? $data['BO15'] : '' }}" name="BO15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP15') ? $data['BP15'] : '' }}" name="BP15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ15') ? $data['BQ15'] : '' }}" name="BQ15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR15') ? $data['BR15'] : '' }}" name="BR15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS15') ? $data['BS15'] : '' }}" name="BS15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT15') ? $data['BT15'] : '' }}" name="BT15" />
    </tr>
    <tr>
        <x-table.td type="header" value="Дом ребенка, в том числе специализированный" />
        <x-table.td value="11" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM16') ? $data['BM16'] : '' }}" name="BM16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN16') ? $data['BN16'] : '' }}" name="BN16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO16') ? $data['BO16'] : '' }}" name="BO16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP16') ? $data['BP16'] : '' }}" name="BP16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ16') ? $data['BQ16'] : '' }}" name="BQ16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR16') ? $data['BR16'] : '' }}" name="BR16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS16') ? $data['BS16'] : '' }}" name="BS16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT16') ? $data['BT16'] : '' }}" name="BT16" />
    </tr>
    <tr>
        <x-table.td type="header" value="Центры - всего, в том числе:" />
        <x-table.td value="12" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM17') ? $data['BM17'] : '' }}" name="BM17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN17') ? $data['BN17'] : '' }}" name="BN17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO17') ? $data['BO17'] : '' }}" name="BO17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP17') ? $data['BP17'] : '' }}" name="BP17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ17') ? $data['BQ17'] : '' }}" name="BQ17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR17') ? $data['BR17'] : '' }}" name="BR17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS17') ? $data['BS17'] : '' }}" name="BS17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT17') ? $data['BT17'] : '' }}" name="BT17" />
    </tr>
    <tr>
        <x-table.td type="header" value="лечебно-реабилитационный" />
        <x-table.td value="13" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM18') ? $data['BM18'] : '' }}" name="BM18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN18') ? $data['BN18'] : '' }}" name="BN18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO18') ? $data['BO18'] : '' }}" name="BO18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP18') ? $data['BP18'] : '' }}" name="BP18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ18') ? $data['BQ18'] : '' }}" name="BQ18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR18') ? $data['BR18'] : '' }}" name="BR18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS18') ? $data['BS18'] : '' }}" name="BS18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT18') ? $data['BT18'] : '' }}" name="BT18" />
    </tr>
    <tr>
        <x-table.td type="header" value="лечебной физкультуры и спортивной медицины" />
        <x-table.td value="14" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM19') ? $data['BM19'] : '' }}" name="BM19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN19') ? $data['BN19'] : '' }}" name="BN19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO19') ? $data['BO19'] : '' }}" name="BO19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP19') ? $data['BP19'] : '' }}" name="BP19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ19') ? $data['BQ19'] : '' }}" name="BQ19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR19') ? $data['BR19'] : '' }}" name="BR19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS19') ? $data['BS19'] : '' }}" name="BS19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT19') ? $data['BT19'] : '' }}" name="BT19" />
    </tr>
    <tr>
        <x-table.td type="header" value="мануальной терапии" />
        <x-table.td value="15" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM20') ? $data['BM20'] : '' }}" name="BM20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN20') ? $data['BN20'] : '' }}" name="BN20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO20') ? $data['BO20'] : '' }}" name="BO20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP20') ? $data['BP20'] : '' }}" name="BP20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ20') ? $data['BQ20'] : '' }}" name="BQ20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR20') ? $data['BR20'] : '' }}" name="BR20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS20') ? $data['BS20'] : '' }}" name="BS20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT20') ? $data['BT20'] : '' }}" name="BT20" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинской реабилитации для воинов-интернационалистов" />
        <x-table.td value="16" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM21') ? $data['BM21'] : '' }}" name="BM21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN21') ? $data['BN21'] : '' }}" name="BN21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO21') ? $data['BO21'] : '' }}" name="BO21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP21') ? $data['BP21'] : '' }}" name="BP21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ21') ? $data['BQ21'] : '' }}" name="BQ21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR21') ? $data['BR21'] : '' }}" name="BR21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS21') ? $data['BS21'] : '' }}" name="BS21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT21') ? $data['BT21'] : '' }}" name="BT21" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинской реабилитации, в том числе детский" />
        <x-table.td value="17" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM22') ? $data['BM22'] : '' }}" name="BM22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN22') ? $data['BN22'] : '' }}" name="BN22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO22') ? $data['BO22'] : '' }}" name="BO22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP22') ? $data['BP22'] : '' }}" name="BP22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ22') ? $data['BQ22'] : '' }}" name="BQ22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR22') ? $data['BR22'] : '' }}" name="BR22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS22') ? $data['BS22'] : '' }}" name="BS22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT22') ? $data['BT22'] : '' }}" name="BT22" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинской реабилитации для инвалидов и детей-инвалидов с последствиями детского церебрального паралича" />
        <x-table.td value="18" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM23') ? $data['BM23'] : '' }}" name="BM23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN23') ? $data['BN23'] : '' }}" name="BN23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO23') ? $data['BO23'] : '' }}" name="BO23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP23') ? $data['BP23'] : '' }}" name="BP23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ23') ? $data['BQ23'] : '' }}" name="BQ23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR23') ? $data['BR23'] : '' }}" name="BR23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS23') ? $data['BS23'] : '' }}" name="BS23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT23') ? $data['BT23'] : '' }}" name="BT23" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинской и социальной реабилитации, в том числе с отделением постоянного проживания инвалидов и детей-инвалидов с тяжелыми формами детского церебрального паралича, самостоятельно не передвигающихся и себя не обслуживающих" />
        <x-table.td value="19" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM24') ? $data['BM24'] : '' }}" name="BM24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN24') ? $data['BN24'] : '' }}" name="BN24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO24') ? $data['BO24'] : '' }}" name="BO24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP24') ? $data['BP24'] : '' }}" name="BP24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ24') ? $data['BQ24'] : '' }}" name="BQ24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR24') ? $data['BR24'] : '' }}" name="BR24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS24') ? $data['BS24'] : '' }}" name="BS24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT24') ? $data['BT24'] : '' }}" name="BT24" />
    </tr>
    <tr>
        <x-table.td type="header" value="реабилитации слуха" />
        <x-table.td value="20" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM25') ? $data['BM25'] : '' }}" name="BM25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN25') ? $data['BN25'] : '' }}" name="BN25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO25') ? $data['BO25'] : '' }}" name="BO25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP25') ? $data['BP25'] : '' }}" name="BP25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ25') ? $data['BQ25'] : '' }}" name="BQ25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR25') ? $data['BR25'] : '' }}" name="BR25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS25') ? $data['BS25'] : '' }}" name="BS25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT25') ? $data['BT25'] : '' }}" name="BT25" />
    </tr>
    <tr>
        <x-table.td type="header" value="реабилитационный" />
        <x-table.td value="21" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM26') ? $data['BM26'] : '' }}" name="BM26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN26') ? $data['BN26'] : '' }}" name="BN26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO26') ? $data['BO26'] : '' }}" name="BO26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP26') ? $data['BP26'] : '' }}" name="BP26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ26') ? $data['BQ26'] : '' }}" name="BQ26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR26') ? $data['BR26'] : '' }}" name="BR26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS26') ? $data['BS26'] : '' }}" name="BS26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT26') ? $data['BT26'] : '' }}" name="BT26" />
    </tr>
    <tr>
        <x-table.td type="header" value="Санаторно-курортная организация - всего, в том числе:" />
        <x-table.td value="22" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM27') ? $data['BM27'] : '' }}" name="BM27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN27') ? $data['BN27'] : '' }}" name="BN27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO27') ? $data['BO27'] : '' }}" name="BO27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP27') ? $data['BP27'] : '' }}" name="BP27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ27') ? $data['BQ27'] : '' }}" name="BQ27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR27') ? $data['BR27'] : '' }}" name="BR27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS27') ? $data['BS27'] : '' }}" name="BS27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT27') ? $data['BT27'] : '' }}" name="BT27" />
    </tr>
    <tr>
        <x-table.td type="header" value="бальнеологическая лечебница" />
        <x-table.td value="23" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM28') ? $data['BM28'] : '' }}" name="BM28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN28') ? $data['BN28'] : '' }}" name="BN28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO28') ? $data['BO28'] : '' }}" name="BO28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP28') ? $data['BP28'] : '' }}" name="BP28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ28') ? $data['BQ28'] : '' }}" name="BQ28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR28') ? $data['BR28'] : '' }}" name="BR28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS28') ? $data['BS28'] : '' }}" name="BS28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT28') ? $data['BT28'] : '' }}" name="BT28" />
    </tr>
    <tr>
        <x-table.td type="header" value="грязелечебница" />
        <x-table.td value="24" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM29') ? $data['BM29'] : '' }}" name="BM29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN29') ? $data['BN29'] : '' }}" name="BN29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO29') ? $data['BO29'] : '' }}" name="BO29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP29') ? $data['BP29'] : '' }}" name="BP29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ29') ? $data['BQ29'] : '' }}" name="BQ29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR29') ? $data['BR29'] : '' }}" name="BR29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS29') ? $data['BS29'] : '' }}" name="BS29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT29') ? $data['BT29'] : '' }}" name="BT29" />
    </tr>
    <tr>
        <x-table.td type="header" value="курортная поликлиника" />
        <x-table.td value="25" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM30') ? $data['BM30'] : '' }}" name="BM30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN30') ? $data['BN30'] : '' }}" name="BN30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO30') ? $data['BO30'] : '' }}" name="BO30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP30') ? $data['BP30'] : '' }}" name="BP30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ30') ? $data['BQ30'] : '' }}" name="BQ30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR30') ? $data['BR30'] : '' }}" name="BR30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS30') ? $data['BS30'] : '' }}" name="BS30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT30') ? $data['BT30'] : '' }}" name="BT30" />
    </tr>
    <tr>
        <x-table.td type="header" value="санаторий" />
        <x-table.td value="26" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM31') ? $data['BM31'] : '' }}" name="BM31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN31') ? $data['BN31'] : '' }}" name="BN31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO31') ? $data['BO31'] : '' }}" name="BO31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP31') ? $data['BP31'] : '' }}" name="BP31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ31') ? $data['BQ31'] : '' }}" name="BQ31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR31') ? $data['BR31'] : '' }}" name="BR31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS31') ? $data['BS31'] : '' }}" name="BS31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT31') ? $data['BT31'] : '' }}" name="BT31" />
    </tr>
    <tr>
        <x-table.td type="header" value="санатории для детей, в том числе для детей с родителями" />
        <x-table.td value="27" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM32') ? $data['BM32'] : '' }}" name="BM32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN32') ? $data['BN32'] : '' }}" name="BN32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO32') ? $data['BO32'] : '' }}" name="BO32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP32') ? $data['BP32'] : '' }}" name="BP32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ32') ? $data['BQ32'] : '' }}" name="BQ32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR32') ? $data['BR32'] : '' }}" name="BR32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS32') ? $data['BS32'] : '' }}" name="BS32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT32') ? $data['BT32'] : '' }}" name="BT32" />
    </tr>
    <tr>
        <x-table.td type="header" value="санаторий-профилакторий" />
        <x-table.td value="28" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM33') ? $data['BM33'] : '' }}" name="BM33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN33') ? $data['BN33'] : '' }}" name="BN33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO33') ? $data['BO33'] : '' }}" name="BO33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP33') ? $data['BP33'] : '' }}" name="BP33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ33') ? $data['BQ33'] : '' }}" name="BQ33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR33') ? $data['BR33'] : '' }}" name="BR33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS33') ? $data['BS33'] : '' }}" name="BS33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT33') ? $data['BT33'] : '' }}" name="BT33" />
    </tr>
    <tr>
        <x-table.td type="header" value="санаторный оздоровительный лагерь круглогодичного действия" />
        <x-table.td value="29" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BM34') ? $data['BM34'] : '' }}" name="BM34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BN34') ? $data['BN34'] : '' }}" name="BN34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BO34') ? $data['BO34'] : '' }}" name="BO34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BP34') ? $data['BP34'] : '' }}" name="BP34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BQ34') ? $data['BQ34'] : '' }}" name="BQ34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BR34') ? $data['BR34'] : '' }}" name="BR34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BS34') ? $data['BS34'] : '' }}" name="BS34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('BT34') ? $data['BT34'] : '' }}" name="BT34" />
    </tr>
</tbody>
