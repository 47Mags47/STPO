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
        <x-table.th value="социальной защиты населения"/>
        <x-table.th value="образования"/>
        <x-table.th value="здравоохранения"/>
        <x-table.th value="социальной защиты населения"/>
        <x-table.th value="образования"/>
        <x-table.th value="здравоохранения"/>
    </tr>
    <tr>
        <x-table.th header value="1"/>
        <x-table.th value="2"/>
        <x-table.th value="3"/>
        <x-table.th value="4"/>
        <x-table.th value="5"/>
        <x-table.th value="6"/>
        <x-table.th value="7"/>
        <x-table.th value="8"/>
        <x-table.th value="9"/>
        <x-table.th value="10"/>
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header"
            value=" Количество инвалидов, которым органом исполнительной власти субъекта Российской Федерации в сфере охраны здоровья были реализованы мероприятия по реабилитации и абилитации,<br>
            предусмотренные ИПРА/ИПР инвалида и ИПРА/ИПР ребенка-инвалида, в том числе" />
        <x-table.td value="01" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ7') ? $data['EJ7'] : '' }}" name="EJ7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK7') ? $data['EK7'] : '' }}" name="EK7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL7') ? $data['EL7'] : '' }}" name="EL7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM7') ? $data['EM7'] : '' }}" name="EM7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN7') ? $data['EN7'] : '' }}" name="EN7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO7') ? $data['EO7'] : '' }}" name="EO7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP7') ? $data['EP7'] : '' }}" name="EP7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ7') ? $data['EQ7'] : '' }}" name="EQ7" />
    </tr>
    <tr>
        <x-table.td type="header" value=" по медицинской реабилитации" />
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
        <x-table.td type="header" value=" по оперативным вмешательствам, относящимся к реконструктивной хирургии" />
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
        <x-table.td type="header"
            value=" Количество инвалидов, которым органом исполнительной власти субъекта Российской Федерации в сфере образования были реализованы мероприятия по реабилитации и абилитации, предусмотренные ИПРА/ИПР инвалида и ИПРА/ИПР ребенка-инвалида, в том числе" />
        <x-table.td value="04" center />
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
        <x-table.td type="header" value=" по условиям организации обучения" />
        <x-table.td value="05" center />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN11') ? $data['EN11'] : '' }}" name="EN11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO11') ? $data['EO11'] : '' }}" name="EO11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP11') ? $data['EP11'] : '' }}" name="EP11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ11') ? $data['EQ11'] : '' }}" name="EQ11" />
    </tr>
    <tr>
        <x-table.td type="header" value="по психолого-педагогической помощи" />
        <x-table.td value="06" center />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN12') ? $data['EN12'] : '' }}" name="EN12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO12') ? $data['EO12'] : '' }}" name="EO12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP12') ? $data['EP12'] : '' }}" name="EP12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ12') ? $data['EQ12'] : '' }}" name="EQ12" />
    </tr>
    <tr>
        <x-table.td type="header"
            value=" Количество инвалидов, которым органом исполнительной власти субъекта Российской Федерации в области содействия занятости населения  были реализованы мероприятия по реабилитации и абилитации, предусмотренные ИПРА/ИПР инвалида и ИПРА/ИПР ребенка-инвалида, в том числе" />
        <x-table.td value="07" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ13') ? $data['EJ13'] : '' }}" name="EJ13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK13') ? $data['EK13'] : '' }}" name="EK13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL13') ? $data['EL13'] : '' }}" name="EL13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM13') ? $data['EM13'] : '' }}" name="EM13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN13') ? $data['EN13'] : '' }}" name="EN13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO13') ? $data['EO13'] : '' }}" name="EO13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP13') ? $data['EP13'] : '' }}" name="EP13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ13') ? $data['EQ13'] : '' }}" name="EQ13" />
    </tr>
    <tr>
        <x-table.td type="header" value=" по обеспечению профессиональной ориентации" />
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
        <x-table.td type="header" value=" по профессиональному обучению и/или переобучению" />
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
        <x-table.td type="header" value=" по условиям для получения профессионального образования" />
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
        <x-table.td type="header" value=" по содействию в трудоустройстве" />
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
        <x-table.td type="header" value=" по обеспечению условий труда, предоставленных при трудоустройсве" />
        <x-table.td value="12" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ18') ? $data['EJ18'] : '' }}" name="EJ18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK18') ? $data['EK18'] : '' }}" name="EK18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL18') ? $data['EL18'] : '' }}" name="EL18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM18') ? $data['EM18'] : '' }}" name="EM18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN18') ? $data['EN18'] : '' }}" name="EN18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO18') ? $data['EO18'] : '' }}" name="EO18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP18') ? $data['EP18'] : '' }}" name="EP18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ18') ? $data['EQ18'] : '' }}" name="EQ18" />
    </tr>
    <tr>
        <x-table.td type="header" value=" по производственной адаптации" />
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
        <x-table.td type="header"
            value="по оснащению (оборудованию) специального рабочего места для трудоустройства инвалида" />
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
        <x-table.td type="header"
            value=" Количество инвалидов, которым органом исполнительной власти субъекта Российской Федерации в сфере социальной защиты населения были реализованы мероприятия по реабилитации и абилитации, предусмотренные ИПРА/ИПР инвалида и ИПРА/ИПР ребенка-инвалида, в том числе" />
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
        <x-table.td type="header" value=" по социально-средовой реабилитации или абилитации" />
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
        <x-table.td type="header" value="социально-психологической реабилитации или абилитации" />
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
    <tr>
        <x-table.td type="header" value="по социально-педагогической реабилитации или абилитации" />
        <x-table.td value="18" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ24') ? $data['EJ24'] : '' }}" name="EJ24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK24') ? $data['EK24'] : '' }}" name="EK24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL24') ? $data['EL24'] : '' }}" name="EL24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM24') ? $data['EM24'] : '' }}" name="EM24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN24') ? $data['EN24'] : '' }}" name="EN24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO24') ? $data['EO24'] : '' }}" name="EO24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP24') ? $data['EP24'] : '' }}" name="EP24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ24') ? $data['EQ24'] : '' }}" name="EQ24" />
    </tr>
    <tr>
        <x-table.td type="header" value=" по социокультурной реабилитации или абилитации" />
        <x-table.td value="19" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ25') ? $data['EJ25'] : '' }}" name="EJ25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK25') ? $data['EK25'] : '' }}" name="EK25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL25') ? $data['EL25'] : '' }}" name="EL25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM25') ? $data['EM25'] : '' }}" name="EM25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN25') ? $data['EN25'] : '' }}" name="EN25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO25') ? $data['EO25'] : '' }}" name="EO25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP25') ? $data['EP25'] : '' }}" name="EP25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ25') ? $data['EQ25'] : '' }}" name="EQ25" />
    </tr>
    <tr>
        <x-table.td type="header" value="по социально-бытовой адаптации" />
        <x-table.td value="20" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ26') ? $data['EJ26'] : '' }}" name="EJ26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK26') ? $data['EK26'] : '' }}" name="EK26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL26') ? $data['EL26'] : '' }}" name="EL26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM26') ? $data['EM26'] : '' }}" name="EM26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN26') ? $data['EN26'] : '' }}" name="EN26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO26') ? $data['EO26'] : '' }}" name="EO26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP26') ? $data['EP26'] : '' }}" name="EP26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ26') ? $data['EQ26'] : '' }}" name="EQ26" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="Количество инвалидов, которым органом исполнительной власти субъекта Российской Федерации в сфере физической культуры и спорта были реализованы мероприятия по реабилитации и абилитации, предусмотренные ИПРА/ИПР инвалида и ИПРА/ИПР ребенка-инвалида" />
        <x-table.td value="21" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ27') ? $data['EJ27'] : '' }}" name="EJ27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK27') ? $data['EK27'] : '' }}" name="EK27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL27') ? $data['EL27'] : '' }}" name="EL27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM27') ? $data['EM27'] : '' }}" name="EM27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN27') ? $data['EN27'] : '' }}" name="EN27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO27') ? $data['EO27'] : '' }}" name="EO27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP27') ? $data['EP27'] : '' }}" name="EP27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ27') ? $data['EQ27'] : '' }}" name="EQ27" />
    </tr>
    <tr>
        <x-table.td type="header"
            value=" Количество инвалидов, которым были реализованы мероприятия по обеспечению техническими средствами реабилитации и услугами по реабилитации, предусмотренными ИПРА/ИПР инвалида и ИПРА/ИПР ребенка-инвалида, за счет средств федерального бюджета, в том числе" />
        <x-table.td value="22" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ28') ? $data['EJ28'] : '' }}" name="EJ28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK28') ? $data['EK28'] : '' }}" name="EK28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL28') ? $data['EL28'] : '' }}" name="EL28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM28') ? $data['EM28'] : '' }}" name="EM28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN28') ? $data['EN28'] : '' }}" name="EN28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO28') ? $data['EO28'] : '' }}" name="EO28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP28') ? $data['EP28'] : '' }}" name="EP28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ28') ? $data['EQ28'] : '' }}" name="EQ28" />
    </tr>
    <tr>
        <x-table.td type="header" value=" по протезированию " />
        <x-table.td value="23" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ29') ? $data['EJ29'] : '' }}" name="EJ29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK29') ? $data['EK29'] : '' }}" name="EK29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL29') ? $data['EL29'] : '' }}" name="EL29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM29') ? $data['EM29'] : '' }}" name="EM29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN29') ? $data['EN29'] : '' }}" name="EN29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO29') ? $data['EO29'] : '' }}" name="EO29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP29') ? $data['EP29'] : '' }}" name="EP29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ29') ? $data['EQ29'] : '' }}" name="EQ29" />
    </tr>
    <tr>
        <x-table.td type="header" value=" по ортезированию" />
        <x-table.td value="24" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ30') ? $data['EJ30'] : '' }}" name="EJ30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK30') ? $data['EK30'] : '' }}" name="EK30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL30') ? $data['EL30'] : '' }}" name="EL30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM30') ? $data['EM30'] : '' }}" name="EM30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN30') ? $data['EN30'] : '' }}" name="EN30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO30') ? $data['EO30'] : '' }}" name="EO30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP30') ? $data['EP30'] : '' }}" name="EP30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ30') ? $data['EQ30'] : '' }}" name="EQ30" />
    </tr>
    <tr>
        <x-table.td type="header" value=" по обеспечению кресло-колясками" />
        <x-table.td value="25" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ31') ? $data['EJ31'] : '' }}" name="EJ31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK31') ? $data['EK31'] : '' }}" name="EK31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL31') ? $data['EL31'] : '' }}" name="EL31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM31') ? $data['EM31'] : '' }}" name="EM31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN31') ? $data['EN31'] : '' }}" name="EN31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO31') ? $data['EO31'] : '' }}" name="EO31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP31') ? $data['EP31'] : '' }}" name="EP31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ31') ? $data['EQ31'] : '' }}" name="EQ31" />
    </tr>
    <tr>
        <x-table.td type="header"
            value=" Количество инвалидов, которым были реализованы мероприятия по обеспечению техническими средствами реабилитации и услугами по реабилитации, предусмотренными ИПРА/ИПР инвалида и ИПРА/ИПР ребенка-инвалида, за счет средств бюджета субъекта Российской Федерации, в том числе" />
        <x-table.td value="26" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ32') ? $data['EJ32'] : '' }}" name="EJ32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK32') ? $data['EK32'] : '' }}" name="EK32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL32') ? $data['EL32'] : '' }}" name="EL32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM32') ? $data['EM32'] : '' }}" name="EM32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN32') ? $data['EN32'] : '' }}" name="EN32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO32') ? $data['EO32'] : '' }}" name="EO32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP32') ? $data['EP32'] : '' }}" name="EP32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ32') ? $data['EQ32'] : '' }}" name="EQ32" />
    </tr>
    <tr>
        <x-table.td type="header" value=" по протезированию" />
        <x-table.td value="27" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ33') ? $data['EJ33'] : '' }}" name="EJ33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK33') ? $data['EK33'] : '' }}" name="EK33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL33') ? $data['EL33'] : '' }}" name="EL33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM33') ? $data['EM33'] : '' }}" name="EM33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN33') ? $data['EN33'] : '' }}" name="EN33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO33') ? $data['EO33'] : '' }}" name="EO33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP33') ? $data['EP33'] : '' }}" name="EP33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ33') ? $data['EQ33'] : '' }}" name="EQ33" />
    </tr>
    <tr>
        <x-table.td type="header" value=" по ортезированию" />
        <x-table.td value="28" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ34') ? $data['EJ34'] : '' }}" name="EJ34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK34') ? $data['EK34'] : '' }}" name="EK34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL34') ? $data['EL34'] : '' }}" name="EL34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM34') ? $data['EM34'] : '' }}" name="EM34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN34') ? $data['EN34'] : '' }}" name="EN34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO34') ? $data['EO34'] : '' }}" name="EO34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP34') ? $data['EP34'] : '' }}" name="EP34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ34') ? $data['EQ34'] : '' }}" name="EQ34" />
    </tr>
    <tr>
        <x-table.td type="header" value="по обеспечению кресло-колясками" />
        <x-table.td value="29" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EJ35') ? $data['EJ35'] : '' }}" name="EJ35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EK35') ? $data['EK35'] : '' }}" name="EK35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EL35') ? $data['EL35'] : '' }}" name="EL35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EM35') ? $data['EM35'] : '' }}" name="EM35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EN35') ? $data['EN35'] : '' }}" name="EN35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EO35') ? $data['EO35'] : '' }}" name="EO35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EP35') ? $data['EP35'] : '' }}" name="EP35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('EQ35') ? $data['EQ35'] : '' }}" name="EQ35" />
    </tr>


</tbody>
