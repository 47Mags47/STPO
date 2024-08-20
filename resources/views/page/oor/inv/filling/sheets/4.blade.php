<caption>{{ $sheet->header }}</caption>
<thead>
    <tr>
        <x-table.th header value="Наименование <br> показателей" rowspan=3 />
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
        <x-table.th header value="1" />
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
        <x-table.td value="01" center />
        <x-table.td type="input" formul="{EJ8}+{EJ9}+{EJ10}" name="EJ7" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK7') ? $data['EK7'] : '' }}" name="EK7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL7') ? $data['EL7'] : '' }}" name="EL7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM7') ? $data['EM7'] : '' }}" name="EM7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN7') ? $data['EN7'] : '' }}" name="EN7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO7') ? $data['EO7'] : '' }}" name="EO7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP7') ? $data['EP7'] : '' }}" name="EP7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ7') ? $data['EQ7'] : '' }}" name="EQ7" />
    </tr>
    <tr>
        <x-table.td type="header" value="по медицинской реабилитации" />
        <x-table.td value="02" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ8') ? $data['EJ8'] : '' }}" name="EJ8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK8') ? $data['EK8'] : '' }}" name="EK8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL8') ? $data['EL8'] : '' }}" name="EL8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM8') ? $data['EM8'] : '' }}" name="EM8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN8') ? $data['EN8'] : '' }}" name="EN8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO8') ? $data['EO8'] : '' }}" name="EO8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP8') ? $data['EP8'] : '' }}" name="EP8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ8') ? $data['EQ8'] : '' }}" name="EQ8" />
    </tr>
    <tr>
        <x-table.td type="header" value="по реконструктивной хирургии" />
        <x-table.td value="03" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ9') ? $data['EJ9'] : '' }}" name="EJ9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK9') ? $data['EK9'] : '' }}" name="EK9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL9') ? $data['EL9'] : '' }}" name="EL9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM9') ? $data['EM9'] : '' }}" name="EM9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN9') ? $data['EN9'] : '' }}" name="EN9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO9') ? $data['EO9'] : '' }}" name="EO9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP9') ? $data['EP9'] : '' }}" name="EP9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ9') ? $data['EQ9'] : '' }}" name="EQ9" />
    </tr>
    <tr>
        <x-table.td type="header" value="по протезированию и ортезированию" />
        <x-table.td value="04" center/>
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ10') ? $data['EJ10'] : '' }}" name="EJ10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK10') ? $data['EK10'] : '' }}" name="EK10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL10') ? $data['EL10'] : '' }}" name="EL10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM10') ? $data['EM10'] : '' }}" name="EM10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN10') ? $data['EN10'] : '' }}" name="EN10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO10') ? $data['EO10'] : '' }}" name="EO10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP10') ? $data['EP10'] : '' }}" name="EP10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ10') ? $data['EQ10'] : '' }}" name="EQ10" />
    </tr>
    <tr>
        <x-table.td type="header" value="по санаторно-курортному лечению " />
        <x-table.td value="05" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ11') ? $data['EJ11'] : '' }}" name="EJ11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK11') ? $data['EK11'] : '' }}" name="EK11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL11') ? $data['EL11'] : '' }}" name="EL11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM11') ? $data['EM11'] : '' }}" name="EM11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN11') ? $data['EN11'] : '' }}" name="EN11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO11') ? $data['EO11'] : '' }}" name="EO11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP11') ? $data['EP11'] : '' }}" name="EP11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ11') ? $data['EQ11'] : '' }}" name="EQ11" />
    </tr>
    <tr>
        <x-table.td type="header" value="по профессиональной ориентации " />
        <x-table.td value="06" center/>
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ12') ? $data['EJ12'] : '' }}" name="EJ12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK12') ? $data['EK12'] : '' }}" name="EK12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL12') ? $data['EL12'] : '' }}" name="EL12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM12') ? $data['EM12'] : '' }}" name="EM12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN12') ? $data['EN12'] : '' }}" name="EN12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO12') ? $data['EO12'] : '' }}" name="EO12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP12') ? $data['EP12'] : '' }}" name="EP12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ12') ? $data['EQ12'] : '' }}" name="EQ12" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="по общему и профессиональному образованию (рекомендации по условиям организации обучения) " />
        <x-table.td value="07" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ13') ? $data['EJ13'] : '' }}" name="EJ13" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN13') ? $data['EN13'] : '' }}" name="EN13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO13') ? $data['EO13'] : '' }}" name="EO13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP13') ? $data['EP13'] : '' }}" name="EP13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ13') ? $data['EQ13'] : '' }}" name="EQ13" />
    </tr>
    <tr>
        <x-table.td type="header" value="по профессиональному обучению " />
        <x-table.td value="08" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ14') ? $data['EJ14'] : '' }}" name="EJ14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK14') ? $data['EK14'] : '' }}" name="EK14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL14') ? $data['EL14'] : '' }}" name="EL14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM14') ? $data['EM14'] : '' }}" name="EM14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN14') ? $data['EN14'] : '' }}" name="EN14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO14') ? $data['EO14'] : '' }}" name="EO14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP14') ? $data['EP14'] : '' }}" name="EP14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ14') ? $data['EQ14'] : '' }}" name="EQ14" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="по содействию в трудоустройстве (в том числе на специальных рабочих местах)" />
        <x-table.td value="09" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ15') ? $data['EJ15'] : '' }}" name="EJ15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK15') ? $data['EK15'] : '' }}" name="EK15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL15') ? $data['EL15'] : '' }}" name="EL15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM15') ? $data['EM15'] : '' }}" name="EM15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN15') ? $data['EN15'] : '' }}" name="EN15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO15') ? $data['EO15'] : '' }}" name="EO15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP15') ? $data['EP15'] : '' }}" name="EP15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ15') ? $data['EQ15'] : '' }}" name="EQ15" />
    </tr>
    <tr>
        <x-table.td type="header" value="по производственной адаптации" />
        <x-table.td value="10" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ16') ? $data['EJ16'] : '' }}" name="EJ16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK16') ? $data['EK16'] : '' }}" name="EK16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL16') ? $data['EL16'] : '' }}" name="EL16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM16') ? $data['EM16'] : '' }}" name="EM16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN16') ? $data['EN16'] : '' }}" name="EN16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO16') ? $data['EO16'] : '' }}" name="EO16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP16') ? $data['EP16'] : '' }}" name="EP16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ16') ? $data['EQ16'] : '' }}" name="EQ16" />
    </tr>
    <tr>
        <x-table.td type="header" value="по социально-средовой реабилитации и абилитации" />
        <x-table.td value="11" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ17') ? $data['EJ17'] : '' }}" name="EJ17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK17') ? $data['EK17'] : '' }}" name="EK17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL17') ? $data['EL17'] : '' }}" name="EL17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM17') ? $data['EM17'] : '' }}" name="EM17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN17') ? $data['EN17'] : '' }}" name="EN17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO17') ? $data['EO17'] : '' }}" name="EO17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP17') ? $data['EP17'] : '' }}" name="EP17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ17') ? $data['EQ17'] : '' }}" name="EQ17" />
    </tr>

    <tr>
        <x-table.td type="header"
            value="по психолого-педагогической реабилитации и абилитации (рекомендации по условиям организации обучения)" />
        <x-table.td value="12" center />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN18') ? $data['EN18'] : '' }}" name="EN18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO18') ? $data['EO18'] : '' }}" name="EO18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP18') ? $data['EP18'] : '' }}" name="EP18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ18') ? $data['EQ18'] : '' }}" name="EQ18" />
    </tr>
    <tr>
        <x-table.td type="header" value="по социально-психологической реабилитации и абилитации" />
        <x-table.td value="13" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ19') ? $data['EJ19'] : '' }}" name="EJ19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK19') ? $data['EK19'] : '' }}" name="EK19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL19') ? $data['EL19'] : '' }}" name="EL19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM19') ? $data['EM19'] : '' }}" name="EM19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN19') ? $data['EN19'] : '' }}" name="EN19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO19') ? $data['EO19'] : '' }}" name="EO19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP19') ? $data['EP19'] : '' }}" name="EP19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ19') ? $data['EQ19'] : '' }}" name="EQ19" />
    </tr>
    <tr>
        <x-table.td type="header" value="по социокультурной реабилитации и абилитации" />
        <x-table.td value="14" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ20') ? $data['EJ20'] : '' }}" name="EJ20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK20') ? $data['EK20'] : '' }}" name="EK20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL20') ? $data['EL20'] : '' }}" name="EL20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM20') ? $data['EM20'] : '' }}" name="EM20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN20') ? $data['EN20'] : '' }}" name="EN20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO20') ? $data['EO20'] : '' }}" name="EO20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP20') ? $data['EP20'] : '' }}" name="EP20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ20') ? $data['EQ20'] : '' }}" name="EQ20" />
    </tr>
    <tr>
        <x-table.td type="header" value="по социально-бытовой адаптации" />
        <x-table.td value="15" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ21') ? $data['EJ21'] : '' }}" name="EJ21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK21') ? $data['EK21'] : '' }}" name="EK21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL21') ? $data['EL21'] : '' }}" name="EL21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM21') ? $data['EM21'] : '' }}" name="EM21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN21') ? $data['EN21'] : '' }}" name="EN21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO21') ? $data['EO21'] : '' }}" name="EO21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP21') ? $data['EP21'] : '' }}" name="EP21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ21') ? $data['EQ21'] : '' }}" name="EQ21" />
    </tr>
    <tr>
        <x-table.td type="header" value="по физкультурно-оздоровительным мероприятиям, спорту" />
        <x-table.td value="16" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ22') ? $data['EJ22'] : '' }}" name="EJ22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK22') ? $data['EK22'] : '' }}" name="EK22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL22') ? $data['EL22'] : '' }}" name="EL22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM22') ? $data['EM22'] : '' }}" name="EM22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN22') ? $data['EN22'] : '' }}" name="EN22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO22') ? $data['EO22'] : '' }}" name="EO22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP22') ? $data['EP22'] : '' }}" name="EP22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ22') ? $data['EQ22'] : '' }}" name="EQ22" />
    </tr>
    <tr>
        <x-table.td type="header" value="по обеспечению техническими средствами реабилитации" />
        <x-table.td value="17" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ23') ? $data['EJ23'] : '' }}" name="EJ23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK23') ? $data['EK23'] : '' }}" name="EK23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL23') ? $data['EL23'] : '' }}" name="EL23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM23') ? $data['EM23'] : '' }}" name="EM23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN23') ? $data['EN23'] : '' }}" name="EN23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO23') ? $data['EO23'] : '' }}" name="EO23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP23') ? $data['EP23'] : '' }}" name="EP23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ23') ? $data['EQ23'] : '' }}" name="EQ23" />
    </tr>

</tbody>
