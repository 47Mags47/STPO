<caption>{{ $sheet->header }}</caption>
<thead>
    <tr>
        <x-table.th header value="Наименование <br> показателей" rowspan=3 />
        <x-table.th value="№ строки" rowspan=3 />
        <x-table.th value="Всего, чел." rowspan=3 />
        <x-table.th value="из них, проживающих в стационарных организациях:" rowspan=2 colspan=3 />
        <x-table.th value="в том числе" colspan=10 />
    </tr>
    <tr>
        <x-table.th value="Женщины" colspan=2 />
        <x-table.th value="Мужчины" colspan=2 />
        <x-table.th value="в возрасте от 0 до 3 лет" colspan=2 />
        <x-table.th value="в возрасте от 4 до 7 лет" colspan=2 />
        <x-table.th value="в возрасте от 8 до 17 лет" colspan=2 />
    </tr>
    <tr>
        <x-table.th value="социальной защиты населения" />
        <x-table.th value="образования" />
        <x-table.th value="здравоохранения" />
        <x-table.th value="всего" />
        <x-table.th value="от 18 до 59 лет" />
        <x-table.th value="всего" />
        <x-table.th value="от 18 до 64 лет" />
        <x-table.th value="мальчики" />
        <x-table.th value="девочки" />
        <x-table.th value="мальчики" />
        <x-table.th value="девочки" />
        <x-table.th value="мальчики" />
        <x-table.th value="девочки" />
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
        <x-table.th value="11" />
        <x-table.th value="12" />
        <x-table.th value="13" />
        <x-table.th value="14" />
        <x-table.th value="15" />
        <x-table.th value="16" />
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header" value="Общая численность инвалидов в возрасте 18 лет и старше и детей-инвалидов, в том числе:" />
        <x-table.td value="01" center />
        <x-table.td type="input" formul="({CA8}+{CA10})==({CE7}+{CG7}+{CI7}+{CJ7}+{CK7}+{CL7}+{CM7}+{CN7})" bool-val="{CA8}+{CA10}" name="CA7" disabled />
        <x-table.td type="input" formul="{CB8}+{CB10}" name="CB7" disabled />
        <x-table.td type="input" formul="{CC8}+{CC10}" name="CC7" disabled />
        <x-table.td type="input" formul="{CD8}+{CD10}" name="CD7" disabled />
        <x-table.td type="input" formul="{CE8}" name="CE7" disabled />
        <x-table.td type="input" formul="{CF8}" name="CF7" disabled />
        <x-table.td type="input" formul="{CG8}" name="CG7" disabled />
        <x-table.td type="input" formul="{CH8}" name="CH7" disabled />
        <x-table.td type="input" formul="{CI10}" name="CI7" disabled />
        <x-table.td type="input" formul="{CJ10}" name="CJ7" disabled />
        <x-table.td type="input" formul="{CK10}" name="CK7" disabled />
        <x-table.td type="input" formul="{CL10}" name="CL7" disabled />
        <x-table.td type="input" formul="{CM10}" name="CM7" disabled />
        <x-table.td type="input" formul="{CN10}" name="CN7" disabled />
    </tr>
    <tr>
        <x-table.td type="header" value="Численность инвалидов в возрасте 18 лет и старше" />
        <x-table.td value="02" center />
        <x-table.td type="input" formul="({CE8}+{CG8})>=({CB8}>={CB9})" bool-val="{CE8}+{CG8}" name="CA8" disabled/>
        <x-table.td type="input" formul="{this}>={CB9}" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" name="CB8" />
        <x-table.td type="input" formul="{this}>={CC9}" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" name="CC8" />
        <x-table.td type="input" formul="{this}>={CD9}" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" name="CD8" />
        <x-table.td type="input" formul="{this}>={CE9}" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" name="CE8" />
        <x-table.td type="input" formul="{this}>={CF9}" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" name="CF8" />
        <x-table.td type="input" formul="{this}>={CG9}" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" name="CG8" />
        <x-table.td type="input" formul="{this}>={CH9}" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" name="CH8" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="из них имеют индивидуальную программу реабилитации или абилитации инвалида (ИПРА инвалида) /
        индивидуальную программу реабилитации инвалида (ИПР инвалида)" />
        <x-table.td value="03" center />
        <x-table.td type="input" formul="({CE9}+{CG9})<=({CE8}+{CG8})" bool-val="{CE9}+{CG9}" name="CA9" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB9') ? $data['CB9'] : '' }}" name="CB9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC9') ? $data['CC9'] : '' }}" name="CC9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD9') ? $data['CD9'] : '' }}" name="CD9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE9') ? $data['CE9'] : '' }}" name="CE9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF9') ? $data['CF9'] : '' }}" name="CF9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG9') ? $data['CG9'] : '' }}" name="CG9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH9') ? $data['CH9'] : '' }}" name="CH9" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
    </tr>
    <tr>
        <x-table.td type="header" value="Численность детей-инвалидов" />
        <x-table.td value="04" center />
        <x-table.td type="input" formul="{CI10}+{CJ10}+{CK10}+{CL10}+{CM10}+{CN10}" name="CA10" disabled />
        <x-table.td type="input" formul="{this}>={CB11}" value="{{ $data->has('CB10') ? $data['CB10'] : '' }}" name="CB10" />
        <x-table.td type="input" formul="{this}>={CC11}" value="{{ $data->has('CC10') ? $data['CC10'] : '' }}" name="CC10" />
        <x-table.td type="input" formul="{this}>={CD11}" value="{{ $data->has('CD10') ? $data['CD10'] : '' }}" name="CD10" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input" formul="{this}>={CI11}" value="{{ $data->has('CI10') ? $data['CI10'] : '' }}" name="CI10" />
        <x-table.td type="input" formul="{this}>={CJ11}" value="{{ $data->has('CJ10') ? $data['CJ10'] : '' }}" name="CJ10" />
        <x-table.td type="input" formul="{this}>={CK11}" value="{{ $data->has('CK10') ? $data['CK10'] : '' }}" name="CK10" />
        <x-table.td type="input" formul="{this}>={CL11}" value="{{ $data->has('CL10') ? $data['CL10'] : '' }}" name="CL10" />
        <x-table.td type="input" formul="{this}>={CM11}" value="{{ $data->has('CM10') ? $data['CM10'] : '' }}" name="CM10" />
        <x-table.td type="input" formul="{this}>={CN11}" value="{{ $data->has('CN10') ? $data['CN10'] : '' }}" name="CN10" />

    </tr>
    <tr>
        <x-table.td type="header"
            value="из них имеют индивидуальную программу реабилитации или абилитации ребенка-инвалида (ИПРА
        ребенка-инвалида) / индивидуальную программу реабилитации ребенка-инвалида (ИПР ребенка-инвалида)" />
        <x-table.td value="05" center />
        <x-table.td type="input"  formul="({CI11}+{CJ11}+{CK11}+{CL11}+{CM11}+{CN11})<=({CI10}+{CJ10}+{CK10}+{CL10}+{CM10}+{CN10})" bool-val="{CI11}+{CJ11}+{CK11}+{CL11}+{CM11}+{CN11}" name="CA11" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB11') ? $data['CB11'] : '' }}" name="CB11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC11') ? $data['CC11'] : '' }}" name="CC11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD11') ? $data['CD11'] : '' }}" name="CD11" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CI11') ? $data['CI11'] : '' }}" name="CI11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CJ11') ? $data['CJ11'] : '' }}" name="CJ11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CK11') ? $data['CK11'] : '' }}" name="CK11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CL11') ? $data['CL11'] : '' }}" name="CL11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CM11') ? $data['CM11'] : '' }}" name="CM11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CN11') ? $data['CN11'] : '' }}" name="CN11" />
    </tr>


    </tr>
</tbody>
