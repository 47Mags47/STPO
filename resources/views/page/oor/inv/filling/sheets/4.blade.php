<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th value="Наименование <br> показателей" rowspan=3 />
        <x-table.th value="№ строки" rowspan=3 />
        <x-table.th value="Инвалиды в возрасте 18 лет и старше, имеющие рекомендации в ИПРА/ ИПР, чел." colspan=4 />
        <x-table.th value="Дети-инвалиды, имеющие рекомендации в ИПРА /ИПР, чел." colspan=4 />
    </tr>
    <tr>
        <x-table.th value="всего" rowspan=2 />
        <x-table.th value="из них, проживающие в стационарных организациях:" colspan=3 />
        <x-table.th value="всего" rowspan=2 />
        <x-table.th value="из них, проживающие в стационарных организациях:" colspan=3 />
    </tr>
    <tr>
        <x-table.th value="социальной защиты населения" />
        <x-table.th value="образования" />
        <x-table.th value="здравоохранения" />
        <x-table.th value="социальной защиты населения" />
        <x-table.th value="образования" />
        <x-table.th value="здравоохранения" />
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
            value=" Численность инвалидов в возрасте 18 лет и старше и детей-инвалидов, <br>
                        имеющих рекомендации в ИПРА/ ИПР по направлениям реабилитации и абилитации" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('EJ7') ? $data['EJ7'] : '' }}" coord="EJ7" />
        <x-table.td type="input" value="{{ $data->has('EK7') ? $data['EK7'] : '' }}" coord="EK7" />
        <x-table.td type="input" value="{{ $data->has('EL7') ? $data['EL7'] : '' }}" coord="EL7" />
        <x-table.td type="input" value="{{ $data->has('EM7') ? $data['EM7'] : '' }}" coord="EM7" />
        <x-table.td type="input" value="{{ $data->has('EN7') ? $data['EN7'] : '' }}" coord="EN7" />
        <x-table.td type="input" value="{{ $data->has('EO7') ? $data['EO7'] : '' }}" coord="EO7" />
        <x-table.td type="input" value="{{ $data->has('EP7') ? $data['EP7'] : '' }}" coord="EP7" />
        <x-table.td type="input" value="{{ $data->has('EQ7') ? $data['EQ7'] : '' }}" coord="EQ7" />
    </tr>
    <tr>
        <x-table.td type="header" value="по медицинской реабилитации" />
        <x-table.td type="header" value="02" />
        <x-table.td type="input" value="{{ $data->has('EJ8') ? $data['EJ8'] : '' }}" coord="EJ8" />
        <x-table.td type="input" value="{{ $data->has('EK8') ? $data['EK8'] : '' }}" coord="EK8" />
        <x-table.td type="input" value="{{ $data->has('EL8') ? $data['EL8'] : '' }}" coord="EL8" />
        <x-table.td type="input" value="{{ $data->has('EM8') ? $data['EM8'] : '' }}" coord="EM8" />
        <x-table.td type="input" value="{{ $data->has('EN8') ? $data['EN8'] : '' }}" coord="EN8" />
        <x-table.td type="input" value="{{ $data->has('EO8') ? $data['EO8'] : '' }}" coord="EO8" />
        <x-table.td type="input" value="{{ $data->has('EP8') ? $data['EP8'] : '' }}" coord="EP8" />
        <x-table.td type="input" value="{{ $data->has('EQ8') ? $data['EQ8'] : '' }}" coord="EQ8" />
    </tr>
    <tr>
        <x-table.td type="header" value="по реконструктивной хирургии" />
        <x-table.td type="header" value="03" />
        <x-table.td type="input" value="{{ $data->has('EJ9') ? $data['EJ9'] : '' }}" coord="EJ9" />
        <x-table.td type="input" value="{{ $data->has('EK9') ? $data['EK9'] : '' }}" coord="EK9" />
        <x-table.td type="input" value="{{ $data->has('EL9') ? $data['EL9'] : '' }}" coord="EL9" />
        <x-table.td type="input" value="{{ $data->has('EM9') ? $data['EM9'] : '' }}" coord="EM9" />
        <x-table.td type="input" value="{{ $data->has('EN9') ? $data['EN9'] : '' }}" coord="EN9" />
        <x-table.td type="input" value="{{ $data->has('EO9') ? $data['EO9'] : '' }}" coord="EO9" />
        <x-table.td type="input" value="{{ $data->has('EP9') ? $data['EP9'] : '' }}" coord="EP9" />
        <x-table.td type="input" value="{{ $data->has('EQ9') ? $data['EQ9'] : '' }}" coord="EQ9" />
    </tr>
    <tr>
        <x-table.td type="header" value="по протезированию и ортезированию" />
        <x-table.td type="header" value="04" />
        <x-table.td type="input" value="{{ $data->has('EJ10') ? $data['EJ10'] : '' }}" coord="EJ10" />
        <x-table.td type="input" value="{{ $data->has('EK10') ? $data['EK10'] : '' }}" coord="EK10" />
        <x-table.td type="input" value="{{ $data->has('EL10') ? $data['EL10'] : '' }}" coord="EL10" />
        <x-table.td type="input" value="{{ $data->has('EM10') ? $data['EM10'] : '' }}" coord="EM10" />
        <x-table.td type="input" value="{{ $data->has('EN10') ? $data['EN10'] : '' }}" coord="EN10" />
        <x-table.td type="input" value="{{ $data->has('EO10') ? $data['EO10'] : '' }}" coord="EO10" />
        <x-table.td type="input" value="{{ $data->has('EP10') ? $data['EP10'] : '' }}" coord="EP10" />
        <x-table.td type="input" value="{{ $data->has('EQ10') ? $data['EQ10'] : '' }}" coord="EQ10" />
    </tr>
    <tr>
        <x-table.td type="header" value="по санаторно-курортному лечению " />
        <x-table.td type="header" value="05" />
        <x-table.td type="input" value="{{ $data->has('EJ11') ? $data['EJ11'] : '' }}" coord="EJ11" />
        <x-table.td type="input" value="{{ $data->has('EK11') ? $data['EK11'] : '' }}" coord="EK11" />
        <x-table.td type="input" value="{{ $data->has('EL11') ? $data['EL11'] : '' }}" coord="EL11" />
        <x-table.td type="input" value="{{ $data->has('EM11') ? $data['EM11'] : '' }}" coord="EM11" />
        <x-table.td type="input" value="{{ $data->has('EN11') ? $data['EN11'] : '' }}" coord="EN11" />
        <x-table.td type="input" value="{{ $data->has('EO11') ? $data['EO11'] : '' }}" coord="EO11" />
        <x-table.td type="input" value="{{ $data->has('EP11') ? $data['EP11'] : '' }}" coord="EP11" />
        <x-table.td type="input" value="{{ $data->has('EQ11') ? $data['EQ11'] : '' }}" coord="EQ11" />
    </tr>
    <tr>
        <x-table.td type="header" value="по профессиональной ориентации " />
        <x-table.td type="header" value="06" />
        <x-table.td type="input" value="{{ $data->has('EJ12') ? $data['EJ12'] : '' }}" coord="EJ12" />
        <x-table.td type="input" value="{{ $data->has('EK12') ? $data['EK12'] : '' }}" coord="EK12" />
        <x-table.td type="input" value="{{ $data->has('EL12') ? $data['EL12'] : '' }}" coord="EL12" />
        <x-table.td type="input" value="{{ $data->has('EM12') ? $data['EM12'] : '' }}" coord="EM12" />
        <x-table.td type="input" value="{{ $data->has('EN12') ? $data['EN12'] : '' }}" coord="EN12" />
        <x-table.td type="input" value="{{ $data->has('EO12') ? $data['EO12'] : '' }}" coord="EO12" />
        <x-table.td type="input" value="{{ $data->has('EP12') ? $data['EP12'] : '' }}" coord="EP12" />
        <x-table.td type="input" value="{{ $data->has('EQ12') ? $data['EQ12'] : '' }}" coord="EQ12" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="по общему и профессиональному образованию (рекомендации по условиям организации обучения) " />
        <x-table.td type="header" value="07" />
        <x-table.td type="input" value="{{ $data->has('EJ13') ? $data['EJ13'] : '' }}" coord="EJ13" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input" value="{{ $data->has('EN13') ? $data['EN13'] : '' }}" coord="EN13" />
        <x-table.td type="input" value="{{ $data->has('EO13') ? $data['EO13'] : '' }}" coord="EO13" />
        <x-table.td type="input" value="{{ $data->has('EP13') ? $data['EP13'] : '' }}" coord="EP13" />
        <x-table.td type="input" value="{{ $data->has('EQ13') ? $data['EQ13'] : '' }}" coord="EQ13" />
    </tr>
    <tr>
        <x-table.td type="header" value="по профессиональному обучению " />
        <x-table.td type="header" value="08" />
        <x-table.td type="input" value="{{ $data->has('EJ14') ? $data['EJ14'] : '' }}" coord="EJ14" />
        <x-table.td type="input" value="{{ $data->has('EK14') ? $data['EK14'] : '' }}" coord="EK14" />
        <x-table.td type="input" value="{{ $data->has('EL14') ? $data['EL14'] : '' }}" coord="EL14" />
        <x-table.td type="input" value="{{ $data->has('EM14') ? $data['EM14'] : '' }}" coord="EM14" />
        <x-table.td type="input" value="{{ $data->has('EN14') ? $data['EN14'] : '' }}" coord="EN14" />
        <x-table.td type="input" value="{{ $data->has('EO14') ? $data['EO14'] : '' }}" coord="EO14" />
        <x-table.td type="input" value="{{ $data->has('EP14') ? $data['EP14'] : '' }}" coord="EP14" />
        <x-table.td type="input" value="{{ $data->has('EQ14') ? $data['EQ14'] : '' }}" coord="EQ14" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="по содействию в трудоустройстве (в том числе на специальных рабочих местах)" />
        <x-table.td type="header" value="09" />
        <x-table.td type="input" value="{{ $data->has('EJ15') ? $data['EJ15'] : '' }}" coord="EJ15" />
        <x-table.td type="input" value="{{ $data->has('EK15') ? $data['EK15'] : '' }}" coord="EK15" />
        <x-table.td type="input" value="{{ $data->has('EL15') ? $data['EL15'] : '' }}" coord="EL15" />
        <x-table.td type="input" value="{{ $data->has('EM15') ? $data['EM15'] : '' }}" coord="EM15" />
        <x-table.td type="input" value="{{ $data->has('EN15') ? $data['EN15'] : '' }}" coord="EN15" />
        <x-table.td type="input" value="{{ $data->has('EO15') ? $data['EO15'] : '' }}" coord="EO15" />
        <x-table.td type="input" value="{{ $data->has('EP15') ? $data['EP15'] : '' }}" coord="EP15" />
        <x-table.td type="input" value="{{ $data->has('EQ15') ? $data['EQ15'] : '' }}" coord="EQ15" />
    </tr>
    <tr>
        <x-table.td type="header" value="по производственной адаптации" />
        <x-table.td type="header" value="10" />
        <x-table.td type="input" value="{{ $data->has('EJ16') ? $data['EJ16'] : '' }}" coord="EJ16" />
        <x-table.td type="input" value="{{ $data->has('EK16') ? $data['EK16'] : '' }}" coord="EK16" />
        <x-table.td type="input" value="{{ $data->has('EL16') ? $data['EL16'] : '' }}" coord="EL16" />
        <x-table.td type="input" value="{{ $data->has('EM16') ? $data['EM16'] : '' }}" coord="EM16" />
        <x-table.td type="input" value="{{ $data->has('EN16') ? $data['EN16'] : '' }}" coord="EN16" />
        <x-table.td type="input" value="{{ $data->has('EO16') ? $data['EO16'] : '' }}" coord="EO16" />
        <x-table.td type="input" value="{{ $data->has('EP16') ? $data['EP16'] : '' }}" coord="EP16" />
        <x-table.td type="input" value="{{ $data->has('EQ16') ? $data['EQ16'] : '' }}" coord="EQ16" />
    </tr>
    <tr>
        <x-table.td type="header" value="по социально-средовой реабилитации и абилитации" />
        <x-table.td type="header" value="11" />
        <x-table.td type="input" value="{{ $data->has('EJ17') ? $data['EJ17'] : '' }}" coord="EJ17" />
        <x-table.td type="input" value="{{ $data->has('EK17') ? $data['EK17'] : '' }}" coord="EK17" />
        <x-table.td type="input" value="{{ $data->has('EL17') ? $data['EL17'] : '' }}" coord="EL17" />
        <x-table.td type="input" value="{{ $data->has('EM17') ? $data['EM17'] : '' }}" coord="EM17" />
        <x-table.td type="input" value="{{ $data->has('EN17') ? $data['EN17'] : '' }}" coord="EN17" />
        <x-table.td type="input" value="{{ $data->has('EO17') ? $data['EO17'] : '' }}" coord="EO17" />
        <x-table.td type="input" value="{{ $data->has('EP17') ? $data['EP17'] : '' }}" coord="EP17" />
        <x-table.td type="input" value="{{ $data->has('EQ17') ? $data['EQ17'] : '' }}" coord="EQ17" />
    </tr>

    <tr>
        <x-table.td type="header"
            value="по психолого-педагогической реабилитации и абилитации (рекомендации по условиям организации обучения)" />
        <x-table.td type="header" value="12" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input" value="{{ $data->has('EN18') ? $data['EN18'] : '' }}" coord="EN18" />
        <x-table.td type="input" value="{{ $data->has('EO18') ? $data['EO18'] : '' }}" coord="EO18" />
        <x-table.td type="input" value="{{ $data->has('EP18') ? $data['EP18'] : '' }}" coord="EP18" />
        <x-table.td type="input" value="{{ $data->has('EQ18') ? $data['EQ18'] : '' }}" coord="EQ18" />
    </tr>
    <tr>
        <x-table.td type="header" value="по социально-психологической реабилитации и абилитации" />
        <x-table.td type="header" value="13" />
        <x-table.td type="input" value="{{ $data->has('EJ19') ? $data['EJ19'] : '' }}" coord="EJ19" />
        <x-table.td type="input" value="{{ $data->has('EK19') ? $data['EK19'] : '' }}" coord="EK19" />
        <x-table.td type="input" value="{{ $data->has('EL19') ? $data['EL19'] : '' }}" coord="EL19" />
        <x-table.td type="input" value="{{ $data->has('EM19') ? $data['EM19'] : '' }}" coord="EM19" />
        <x-table.td type="input" value="{{ $data->has('EN19') ? $data['EN19'] : '' }}" coord="EN19" />
        <x-table.td type="input" value="{{ $data->has('EO19') ? $data['EO19'] : '' }}" coord="EO19" />
        <x-table.td type="input" value="{{ $data->has('EP19') ? $data['EP19'] : '' }}" coord="EP19" />
        <x-table.td type="input" value="{{ $data->has('EQ19') ? $data['EQ19'] : '' }}" coord="EQ19" />
    </tr>
    <tr>
        <x-table.td type="header" value="по социокультурной реабилитации и абилитации" />
        <x-table.td type="header" value="14" />
        <x-table.td type="input" value="{{ $data->has('EJ20') ? $data['EJ20'] : '' }}" coord="EJ20" />
        <x-table.td type="input" value="{{ $data->has('EK20') ? $data['EK20'] : '' }}" coord="EK20" />
        <x-table.td type="input" value="{{ $data->has('EL20') ? $data['EL20'] : '' }}" coord="EL20" />
        <x-table.td type="input" value="{{ $data->has('EM20') ? $data['EM20'] : '' }}" coord="EM20" />
        <x-table.td type="input" value="{{ $data->has('EN20') ? $data['EN20'] : '' }}" coord="EN20" />
        <x-table.td type="input" value="{{ $data->has('EO20') ? $data['EO20'] : '' }}" coord="EO20" />
        <x-table.td type="input" value="{{ $data->has('EP20') ? $data['EP20'] : '' }}" coord="EP20" />
        <x-table.td type="input" value="{{ $data->has('EQ20') ? $data['EQ20'] : '' }}" coord="EQ20" />
    </tr>
    <tr>
        <x-table.td type="header" value="по социокультурной реабилитации и абилитации" />
        <x-table.td type="header" value="15" />
        <x-table.td type="input" value="{{ $data->has('EJ21') ? $data['EJ21'] : '' }}" coord="EJ21" />
        <x-table.td type="input" value="{{ $data->has('EK21') ? $data['EK21'] : '' }}" coord="EK21" />
        <x-table.td type="input" value="{{ $data->has('EL21') ? $data['EL21'] : '' }}" coord="EL21" />
        <x-table.td type="input" value="{{ $data->has('EM21') ? $data['EM21'] : '' }}" coord="EM21" />
        <x-table.td type="input" value="{{ $data->has('EN21') ? $data['EN21'] : '' }}" coord="EN21" />
        <x-table.td type="input" value="{{ $data->has('EO21') ? $data['EO21'] : '' }}" coord="EO21" />
        <x-table.td type="input" value="{{ $data->has('EP21') ? $data['EP21'] : '' }}" coord="EP21" />
        <x-table.td type="input" value="{{ $data->has('EQ21') ? $data['EQ21'] : '' }}" coord="EQ21" />
    </tr>
    <tr>
        <x-table.td type="header" value="по физкультурно-оздоровительным мероприятиям, спорту" />
        <x-table.td type="header" value="16" />
        <x-table.td type="input" value="{{ $data->has('EJ22') ? $data['EJ22'] : '' }}" coord="EJ22" />
        <x-table.td type="input" value="{{ $data->has('EK22') ? $data['EK22'] : '' }}" coord="EK22" />
        <x-table.td type="input" value="{{ $data->has('EL22') ? $data['EL22'] : '' }}" coord="EL22" />
        <x-table.td type="input" value="{{ $data->has('EM22') ? $data['EM22'] : '' }}" coord="EM22" />
        <x-table.td type="input" value="{{ $data->has('EN22') ? $data['EN22'] : '' }}" coord="EN22" />
        <x-table.td type="input" value="{{ $data->has('EO22') ? $data['EO22'] : '' }}" coord="EO22" />
        <x-table.td type="input" value="{{ $data->has('EP22') ? $data['EP22'] : '' }}" coord="EP22" />
        <x-table.td type="input" value="{{ $data->has('EQ22') ? $data['EQ22'] : '' }}" coord="EQ22" />
    </tr>
    <tr>
        <x-table.td type="header" value="по обеспечению техническими средствами реабилитации" />
        <x-table.td type="header" value="17" />
        <x-table.td type="input" value="{{ $data->has('EJ23') ? $data['EJ23'] : '' }}" coord="EJ23" />
        <x-table.td type="input" value="{{ $data->has('EK23') ? $data['EK23'] : '' }}" coord="EK23" />
        <x-table.td type="input" value="{{ $data->has('EL23') ? $data['EL23'] : '' }}" coord="EL23" />
        <x-table.td type="input" value="{{ $data->has('EM23') ? $data['EM23'] : '' }}" coord="EM23" />
        <x-table.td type="input" value="{{ $data->has('EN23') ? $data['EN23'] : '' }}" coord="EN23" />
        <x-table.td type="input" value="{{ $data->has('EO23') ? $data['EO23'] : '' }}" coord="EO23" />
        <x-table.td type="input" value="{{ $data->has('EP23') ? $data['EP23'] : '' }}" coord="EP23" />
        <x-table.td type="input" value="{{ $data->has('EQ23') ? $data['EQ23'] : '' }}" coord="EQ23" />
    </tr>

</tbody>
