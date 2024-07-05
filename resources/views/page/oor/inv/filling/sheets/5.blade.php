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
        <x-table.th value="социальной защиты населения"/>
        <x-table.th value="образования"/>
        <x-table.th value="здравоохранения"/>
        <x-table.th value="социальной защиты населения"/>
        <x-table.th value="образования"/>
        <x-table.th value="здравоохранения"/>
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header"
            value=" Количество инвалидов, которым органом исполнительной власти субъекта Российской Федерации в сфере охраны здоровья были реализованы мероприятия по реабилитации и абилитации,<br>
            предусмотренные ИПРА/ИПР инвалида и ИПРА/ИПР ребенка-инвалида, в том числе" />
        <x-table.td value="01" h='center' />
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
        <x-table.td type="header" value=" по медицинской реабилитации" />
        <x-table.td value="02" h='center' />
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
        <x-table.td type="header" value=" по оперативным вмешательствам, относящимся к реконструктивной хирургии" />
        <x-table.td value="03" h='center' />
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
        <x-table.td type="header"
            value=" Количество инвалидов, которым органом исполнительной власти субъекта Российской Федерации в сфере образования были реализованы мероприятия по реабилитации и абилитации, предусмотренные ИПРА/ИПР инвалида и ИПРА/ИПР ребенка-инвалида, в том числе" />
        <x-table.td value="04" h='center' />
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
        <x-table.td type="header" value=" по условиям организации обучения" />
        <x-table.td value="05" h='center' />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input" value="{{ $data->has('EN11') ? $data['EN11'] : '' }}" coord="EN11" />
        <x-table.td type="input" value="{{ $data->has('EO11') ? $data['EO11'] : '' }}" coord="EO11" />
        <x-table.td type="input" value="{{ $data->has('EP11') ? $data['EP11'] : '' }}" coord="EP11" />
        <x-table.td type="input" value="{{ $data->has('EQ11') ? $data['EQ11'] : '' }}" coord="EQ11" />
    </tr>
    <tr>
        <x-table.td type="header" value="по психолого-педагогической помощи" />
        <x-table.td value="06" h='center' />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input" value="{{ $data->has('EN12') ? $data['EN12'] : '' }}" coord="EN12" />
        <x-table.td type="input" value="{{ $data->has('EO12') ? $data['EO12'] : '' }}" coord="EO12" />
        <x-table.td type="input" value="{{ $data->has('EP12') ? $data['EP12'] : '' }}" coord="EP12" />
        <x-table.td type="input" value="{{ $data->has('EQ12') ? $data['EQ12'] : '' }}" coord="EQ12" />
    </tr>
    <tr>
        <x-table.td type="header"
            value=" Количество инвалидов, которым органом исполнительной власти субъекта Российской Федерации в области содействия занятости населения  были реализованы мероприятия по реабилитации и абилитации, предусмотренные ИПРА/ИПР инвалида и ИПРА/ИПР ребенка-инвалида, в том числе" />
        <x-table.td value="07" h='center' />
        <x-table.td type="input" value="{{ $data->has('EJ13') ? $data['EJ13'] : '' }}" coord="EJ13" />
        <x-table.td type="input" value="{{ $data->has('EK13') ? $data['EK13'] : '' }}" coord="EK13" />
        <x-table.td type="input" value="{{ $data->has('EL13') ? $data['EL13'] : '' }}" coord="EL13" />
        <x-table.td type="input" value="{{ $data->has('EM13') ? $data['EM13'] : '' }}" coord="EM13" />
        <x-table.td type="input" value="{{ $data->has('EN13') ? $data['EN13'] : '' }}" coord="EN13" />
        <x-table.td type="input" value="{{ $data->has('EO13') ? $data['EO13'] : '' }}" coord="EO13" />
        <x-table.td type="input" value="{{ $data->has('EP13') ? $data['EP13'] : '' }}" coord="EP13" />
        <x-table.td type="input" value="{{ $data->has('EQ13') ? $data['EQ13'] : '' }}" coord="EQ13" />
    </tr>
    <tr>
        <x-table.td type="header" value=" по обеспечению профессиональной ориентации" />
        <x-table.td value="08" h='center' />
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
        <x-table.td type="header" value=" по профессиональному обучению и/или переобучению" />
        <x-table.td value="09" h='center' />
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
        <x-table.td type="header" value=" по условиям для получения профессионального образования" />
        <x-table.td value="10" h='center' />
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
        <x-table.td type="header" value=" по содействию в трудоустройстве" />
        <x-table.td value="11" h='center' />
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
        <x-table.td type="header" value=" по обеспечению условий труда, предоставленных при трудоустройсве" />
        <x-table.td value="12" h='center' />
        <x-table.td type="input" value="{{ $data->has('EJ18') ? $data['EJ18'] : '' }}" coord="EJ18" />
        <x-table.td type="input" value="{{ $data->has('EK18') ? $data['EK18'] : '' }}" coord="EK18" />
        <x-table.td type="input" value="{{ $data->has('EL18') ? $data['EL18'] : '' }}" coord="EL18" />
        <x-table.td type="input" value="{{ $data->has('EM18') ? $data['EM18'] : '' }}" coord="EM18" />
        <x-table.td type="input" value="{{ $data->has('EN18') ? $data['EN18'] : '' }}" coord="EN18" />
        <x-table.td type="input" value="{{ $data->has('EO18') ? $data['EO18'] : '' }}" coord="EO18" />
        <x-table.td type="input" value="{{ $data->has('EP18') ? $data['EP18'] : '' }}" coord="EP18" />
        <x-table.td type="input" value="{{ $data->has('EQ18') ? $data['EQ18'] : '' }}" coord="EQ18" />
    </tr>
    <tr>
        <x-table.td type="header" value=" по производственной адаптации" />
        <x-table.td value="13" h='center' />
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
        <x-table.td type="header"
            value="по оснащению (оборудованию) специального рабочего места для трудоустройства инвалида" />
        <x-table.td value="14" h='center' />
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
        <x-table.td type="header"
            value=" Количество инвалидов, которым органом исполнительной власти субъекта Российской Федерации в сфере социальной защиты населения были реализованы мероприятия по реабилитации и абилитации, предусмотренные ИПРА/ИПР инвалида и ИПРА/ИПР ребенка-инвалида, в том числе" />
        <x-table.td value="15" h='center' />
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
        <x-table.td type="header" value=" по социально-средовой реабилитации или абилитации" />
        <x-table.td value="16" h='center' />
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
        <x-table.td type="header" value="социально-психологической реабилитации или абилитации" />
        <x-table.td value="17" h='center' />
        <x-table.td type="input" value="{{ $data->has('EJ23') ? $data['EJ23'] : '' }}" coord="EJ23" />
        <x-table.td type="input" value="{{ $data->has('EK23') ? $data['EK23'] : '' }}" coord="EK23" />
        <x-table.td type="input" value="{{ $data->has('EL23') ? $data['EL23'] : '' }}" coord="EL23" />
        <x-table.td type="input" value="{{ $data->has('EM23') ? $data['EM23'] : '' }}" coord="EM23" />
        <x-table.td type="input" value="{{ $data->has('EN23') ? $data['EN23'] : '' }}" coord="EN23" />
        <x-table.td type="input" value="{{ $data->has('EO23') ? $data['EO23'] : '' }}" coord="EO23" />
        <x-table.td type="input" value="{{ $data->has('EP23') ? $data['EP23'] : '' }}" coord="EP23" />
        <x-table.td type="input" value="{{ $data->has('EQ23') ? $data['EQ23'] : '' }}" coord="EQ23" />
    </tr>
    <tr>
        <x-table.td type="header" value="по социально-педагогической реабилитации или абилитации" />
        <x-table.td value="18" h='center' />
        <x-table.td type="input" value="{{ $data->has('EJ24') ? $data['EJ24'] : '' }}" coord="EJ24" />
        <x-table.td type="input" value="{{ $data->has('EK24') ? $data['EK24'] : '' }}" coord="EK24" />
        <x-table.td type="input" value="{{ $data->has('EL24') ? $data['EL24'] : '' }}" coord="EL24" />
        <x-table.td type="input" value="{{ $data->has('EM24') ? $data['EM24'] : '' }}" coord="EM24" />
        <x-table.td type="input" value="{{ $data->has('EN24') ? $data['EN24'] : '' }}" coord="EN24" />
        <x-table.td type="input" value="{{ $data->has('EO24') ? $data['EO24'] : '' }}" coord="EO24" />
        <x-table.td type="input" value="{{ $data->has('EP24') ? $data['EP24'] : '' }}" coord="EP24" />
        <x-table.td type="input" value="{{ $data->has('EQ24') ? $data['EQ24'] : '' }}" coord="EQ24" />
    </tr>
    <tr>
        <x-table.td type="header" value=" по социокультурной реабилитации или абилитации" />
        <x-table.td value="19" h='center' />
        <x-table.td type="input" value="{{ $data->has('EJ25') ? $data['EJ25'] : '' }}" coord="EJ25" />
        <x-table.td type="input" value="{{ $data->has('EK25') ? $data['EK25'] : '' }}" coord="EK25" />
        <x-table.td type="input" value="{{ $data->has('EL25') ? $data['EL25'] : '' }}" coord="EL25" />
        <x-table.td type="input" value="{{ $data->has('EM25') ? $data['EM25'] : '' }}" coord="EM25" />
        <x-table.td type="input" value="{{ $data->has('EN25') ? $data['EN25'] : '' }}" coord="EN25" />
        <x-table.td type="input" value="{{ $data->has('EO25') ? $data['EO25'] : '' }}" coord="EO25" />
        <x-table.td type="input" value="{{ $data->has('EP25') ? $data['EP25'] : '' }}" coord="EP25" />
        <x-table.td type="input" value="{{ $data->has('EQ25') ? $data['EQ25'] : '' }}" coord="EQ25" />
    </tr>
    <tr>
        <x-table.td type="header" value="по социально-бытовой адаптации" />
        <x-table.td value="20" h='center' />
        <x-table.td type="input" value="{{ $data->has('EJ26') ? $data['EJ26'] : '' }}" coord="EJ26" />
        <x-table.td type="input" value="{{ $data->has('EK26') ? $data['EK26'] : '' }}" coord="EK26" />
        <x-table.td type="input" value="{{ $data->has('EL26') ? $data['EL26'] : '' }}" coord="EL26" />
        <x-table.td type="input" value="{{ $data->has('EM26') ? $data['EM26'] : '' }}" coord="EM26" />
        <x-table.td type="input" value="{{ $data->has('EN26') ? $data['EN26'] : '' }}" coord="EN26" />
        <x-table.td type="input" value="{{ $data->has('EO26') ? $data['EO26'] : '' }}" coord="EO26" />
        <x-table.td type="input" value="{{ $data->has('EP26') ? $data['EP26'] : '' }}" coord="EP26" />
        <x-table.td type="input" value="{{ $data->has('EQ26') ? $data['EQ26'] : '' }}" coord="EQ26" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="Количество инвалидов, которым органом исполнительной власти субъекта Российской Федерации в сфере физической культуры и спорта были реализованы мероприятия по реабилитации и абилитации, предусмотренные ИПРА/ИПР инвалида и ИПРА/ИПР ребенка-инвалида" />
        <x-table.td value="21" h='center' />
        <x-table.td type="input" value="{{ $data->has('EJ27') ? $data['EJ27'] : '' }}" coord="EJ27" />
        <x-table.td type="input" value="{{ $data->has('EK27') ? $data['EK27'] : '' }}" coord="EK27" />
        <x-table.td type="input" value="{{ $data->has('EL27') ? $data['EL27'] : '' }}" coord="EL27" />
        <x-table.td type="input" value="{{ $data->has('EM27') ? $data['EM27'] : '' }}" coord="EM27" />
        <x-table.td type="input" value="{{ $data->has('EN27') ? $data['EN27'] : '' }}" coord="EN27" />
        <x-table.td type="input" value="{{ $data->has('EO27') ? $data['EO27'] : '' }}" coord="EO27" />
        <x-table.td type="input" value="{{ $data->has('EP27') ? $data['EP27'] : '' }}" coord="EP27" />
        <x-table.td type="input" value="{{ $data->has('EQ27') ? $data['EQ27'] : '' }}" coord="EQ27" />
    </tr>
    <tr>
        <x-table.td type="header"
            value=" Количество инвалидов, которым были реализованы мероприятия по обеспечению техническими средствами реабилитации и услугами по реабилитации, предусмотренными ИПРА/ИПР инвалида и ИПРА/ИПР ребенка-инвалида, за счет средств федерального бюджета, в том числе" />
        <x-table.td value="22" h='center' />
        <x-table.td type="input" value="{{ $data->has('EJ28') ? $data['EJ28'] : '' }}" coord="EJ28" />
        <x-table.td type="input" value="{{ $data->has('EK28') ? $data['EK28'] : '' }}" coord="EK28" />
        <x-table.td type="input" value="{{ $data->has('EL28') ? $data['EL28'] : '' }}" coord="EL28" />
        <x-table.td type="input" value="{{ $data->has('EM28') ? $data['EM28'] : '' }}" coord="EM28" />
        <x-table.td type="input" value="{{ $data->has('EN28') ? $data['EN28'] : '' }}" coord="EN28" />
        <x-table.td type="input" value="{{ $data->has('EO28') ? $data['EO28'] : '' }}" coord="EO28" />
        <x-table.td type="input" value="{{ $data->has('EP28') ? $data['EP28'] : '' }}" coord="EP28" />
        <x-table.td type="input" value="{{ $data->has('EQ28') ? $data['EQ28'] : '' }}" coord="EQ28" />
    </tr>
    <tr>
        <x-table.td type="header" value=" по протезированию " />
        <x-table.td value="23" h='center' />
        <x-table.td type="input" value="{{ $data->has('EJ29') ? $data['EJ29'] : '' }}" coord="EJ29" />
        <x-table.td type="input" value="{{ $data->has('EK29') ? $data['EK29'] : '' }}" coord="EK29" />
        <x-table.td type="input" value="{{ $data->has('EL29') ? $data['EL29'] : '' }}" coord="EL29" />
        <x-table.td type="input" value="{{ $data->has('EM29') ? $data['EM29'] : '' }}" coord="EM29" />
        <x-table.td type="input" value="{{ $data->has('EN29') ? $data['EN29'] : '' }}" coord="EN29" />
        <x-table.td type="input" value="{{ $data->has('EO29') ? $data['EO29'] : '' }}" coord="EO29" />
        <x-table.td type="input" value="{{ $data->has('EP29') ? $data['EP29'] : '' }}" coord="EP29" />
        <x-table.td type="input" value="{{ $data->has('EQ29') ? $data['EQ29'] : '' }}" coord="EQ29" />
    </tr>
    <tr>
        <x-table.td type="header" value=" по ортезированию" />
        <x-table.td value="24" h='center' />
        <x-table.td type="input" value="{{ $data->has('EJ30') ? $data['EJ30'] : '' }}" coord="EJ30" />
        <x-table.td type="input" value="{{ $data->has('EK30') ? $data['EK30'] : '' }}" coord="EK30" />
        <x-table.td type="input" value="{{ $data->has('EL30') ? $data['EL30'] : '' }}" coord="EL30" />
        <x-table.td type="input" value="{{ $data->has('EM30') ? $data['EM30'] : '' }}" coord="EM30" />
        <x-table.td type="input" value="{{ $data->has('EN30') ? $data['EN30'] : '' }}" coord="EN30" />
        <x-table.td type="input" value="{{ $data->has('EO30') ? $data['EO30'] : '' }}" coord="EO30" />
        <x-table.td type="input" value="{{ $data->has('EP30') ? $data['EP30'] : '' }}" coord="EP30" />
        <x-table.td type="input" value="{{ $data->has('EQ30') ? $data['EQ30'] : '' }}" coord="EQ30" />
    </tr>
    <tr>
        <x-table.td type="header" value=" по обеспечению кресло-колясками" />
        <x-table.td value="25" h='center' />
        <x-table.td type="input" value="{{ $data->has('EJ31') ? $data['EJ31'] : '' }}" coord="EJ31" />
        <x-table.td type="input" value="{{ $data->has('EK31') ? $data['EK31'] : '' }}" coord="EK31" />
        <x-table.td type="input" value="{{ $data->has('EL31') ? $data['EL31'] : '' }}" coord="EL31" />
        <x-table.td type="input" value="{{ $data->has('EM31') ? $data['EM31'] : '' }}" coord="EM31" />
        <x-table.td type="input" value="{{ $data->has('EN31') ? $data['EN31'] : '' }}" coord="EN31" />
        <x-table.td type="input" value="{{ $data->has('EO31') ? $data['EO31'] : '' }}" coord="EO31" />
        <x-table.td type="input" value="{{ $data->has('EP31') ? $data['EP31'] : '' }}" coord="EP31" />
        <x-table.td type="input" value="{{ $data->has('EQ31') ? $data['EQ31'] : '' }}" coord="EQ31" />
    </tr>
    <tr>
        <x-table.td type="header"
            value=" Количество инвалидов, которым были реализованы мероприятия по обеспечению техническими средствами реабилитации и услугами по реабилитации, предусмотренными ИПРА/ИПР инвалида и ИПРА/ИПР ребенка-инвалида, за счет средств бюджета субъекта Российской Федерации, в том числе" />
        <x-table.td value="26" h='center' />
        <x-table.td type="input" value="{{ $data->has('EJ32') ? $data['EJ32'] : '' }}" coord="EJ32" />
        <x-table.td type="input" value="{{ $data->has('EK32') ? $data['EK32'] : '' }}" coord="EK32" />
        <x-table.td type="input" value="{{ $data->has('EL32') ? $data['EL32'] : '' }}" coord="EL32" />
        <x-table.td type="input" value="{{ $data->has('EM32') ? $data['EM32'] : '' }}" coord="EM32" />
        <x-table.td type="input" value="{{ $data->has('EN32') ? $data['EN32'] : '' }}" coord="EN32" />
        <x-table.td type="input" value="{{ $data->has('EO32') ? $data['EO32'] : '' }}" coord="EO32" />
        <x-table.td type="input" value="{{ $data->has('EP32') ? $data['EP32'] : '' }}" coord="EP32" />
        <x-table.td type="input" value="{{ $data->has('EQ32') ? $data['EQ32'] : '' }}" coord="EQ32" />
    </tr>
    <tr>
        <x-table.td type="header" value=" по протезированию" />
        <x-table.td value="27" h='center' />
        <x-table.td type="input" value="{{ $data->has('EJ33') ? $data['EJ33'] : '' }}" coord="EJ33" />
        <x-table.td type="input" value="{{ $data->has('EK33') ? $data['EK33'] : '' }}" coord="EK33" />
        <x-table.td type="input" value="{{ $data->has('EL33') ? $data['EL33'] : '' }}" coord="EL33" />
        <x-table.td type="input" value="{{ $data->has('EM33') ? $data['EM33'] : '' }}" coord="EM33" />
        <x-table.td type="input" value="{{ $data->has('EN33') ? $data['EN33'] : '' }}" coord="EN33" />
        <x-table.td type="input" value="{{ $data->has('EO33') ? $data['EO33'] : '' }}" coord="EO33" />
        <x-table.td type="input" value="{{ $data->has('EP33') ? $data['EP33'] : '' }}" coord="EP33" />
        <x-table.td type="input" value="{{ $data->has('EQ33') ? $data['EQ33'] : '' }}" coord="EQ33" />
    </tr>
    <tr>
        <x-table.td type="header" value=" по ортезированию" />
        <x-table.td value="28" h='center' />
        <x-table.td type="input" value="{{ $data->has('EJ34') ? $data['EJ34'] : '' }}" coord="EJ34" />
        <x-table.td type="input" value="{{ $data->has('EK34') ? $data['EK34'] : '' }}" coord="EK34" />
        <x-table.td type="input" value="{{ $data->has('EL34') ? $data['EL34'] : '' }}" coord="EL34" />
        <x-table.td type="input" value="{{ $data->has('EM34') ? $data['EM34'] : '' }}" coord="EM34" />
        <x-table.td type="input" value="{{ $data->has('EN34') ? $data['EN34'] : '' }}" coord="EN34" />
        <x-table.td type="input" value="{{ $data->has('EO34') ? $data['EO34'] : '' }}" coord="EO34" />
        <x-table.td type="input" value="{{ $data->has('EP34') ? $data['EP34'] : '' }}" coord="EP34" />
        <x-table.td type="input" value="{{ $data->has('EQ34') ? $data['EQ34'] : '' }}" coord="EQ34" />
    </tr>
    <tr>
        <x-table.td type="header" value="по обеспечению кресло-колясками" />
        <x-table.td value="29" h='center' />
        <x-table.td type="input" value="{{ $data->has('EJ35') ? $data['EJ35'] : '' }}" coord="EJ35" />
        <x-table.td type="input" value="{{ $data->has('EK35') ? $data['EK35'] : '' }}" coord="EK35" />
        <x-table.td type="input" value="{{ $data->has('EL35') ? $data['EL35'] : '' }}" coord="EL35" />
        <x-table.td type="input" value="{{ $data->has('EM35') ? $data['EM35'] : '' }}" coord="EM35" />
        <x-table.td type="input" value="{{ $data->has('EN35') ? $data['EN35'] : '' }}" coord="EN35" />
        <x-table.td type="input" value="{{ $data->has('EO35') ? $data['EO35'] : '' }}" coord="EO35" />
        <x-table.td type="input" value="{{ $data->has('EP35') ? $data['EP35'] : '' }}" coord="EP35" />
        <x-table.td type="input" value="{{ $data->has('EQ35') ? $data['EQ35'] : '' }}" coord="EQ35" />
    </tr>


</tbody>
