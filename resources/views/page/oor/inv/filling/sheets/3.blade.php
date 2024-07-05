<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th value="Наименование <br> показателей" rowspan=3 />
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
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header" value="Общая численность населения субъекта Российской Федерации, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('CA7') ? $data['CA7'] : '' }}" coord="CA7" />
        <x-table.td type="input" value="{{ $data->has('CB7') ? $data['CB7'] : '' }}" coord="CB7" />
        <x-table.td type="input" value="{{ $data->has('CC7') ? $data['CC7'] : '' }}" coord="CC7" />
        <x-table.td type="input" value="{{ $data->has('CD7') ? $data['CD7'] : '' }}" coord="CD7" />
        <x-table.td type="input" value="{{ $data->has('CE7') ? $data['CE7'] : '' }}" coord="CE7" />
        <x-table.td type="input" value="{{ $data->has('CF7') ? $data['CF7'] : '' }}" coord="CF7" />
        <x-table.td type="input" value="{{ $data->has('CG7') ? $data['CG7'] : '' }}" coord="CG7" />
        <x-table.td type="input" value="{{ $data->has('CH7') ? $data['CH7'] : '' }}" coord="CH7" />
        <x-table.td type="input" value="{{ $data->has('CI7') ? $data['CI7'] : '' }}" coord="CI7" />
        <x-table.td type="input" value="{{ $data->has('CJ7') ? $data['CJ7'] : '' }}" coord="CJ7" />
        <x-table.td type="input" value="{{ $data->has('CK7') ? $data['CK7'] : '' }}" coord="CK7" />
        <x-table.td type="input" value="{{ $data->has('CL7') ? $data['CL7'] : '' }}" coord="CL7" />
        <x-table.td type="input" value="{{ $data->has('CM7') ? $data['CM7'] : '' }}" coord="CM7" />
        <x-table.td type="input" value="{{ $data->has('CN7') ? $data['CN7'] : '' }}" coord="CN7" />
    </tr>
    <tr>
        <x-table.td type="header" value="Численность инвалидов в возрасте 18 лет и старше" />
        <x-table.td type="header" value="02" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
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
        <x-table.td type="header" value="03" />
        <x-table.td type="input" value="{{ $data->has('CA9') ? $data['CA9'] : '' }}" coord="CA9" />
        <x-table.td type="input" value="{{ $data->has('CB9') ? $data['CB9'] : '' }}" coord="CB9" />
        <x-table.td type="input" value="{{ $data->has('CC9') ? $data['CC9'] : '' }}" coord="CC9" />
        <x-table.td type="input" value="{{ $data->has('CD9') ? $data['CD9'] : '' }}" coord="CD9" />
        <x-table.td type="input" value="{{ $data->has('CE9') ? $data['CE9'] : '' }}" coord="CE9" />
        <x-table.td type="input" value="{{ $data->has('CF9') ? $data['CF9'] : '' }}" coord="CF9" />
        <x-table.td type="input" value="{{ $data->has('CG9') ? $data['CG9'] : '' }}" coord="CG9" />
        <x-table.td type="input" value="{{ $data->has('CH9') ? $data['CH9'] : '' }}" coord="CH9" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
    </tr>
    <tr>
        <x-table.td type="header" value="Численность детей-инвалидов" />
        <x-table.td type="header" value="04" />
        <x-table.td type="input" value="{{ $data->has('CA10') ? $data['CA10'] : '' }}" coord="CA10" />
        <x-table.td type="input" value="{{ $data->has('CB10') ? $data['CB10'] : '' }}" coord="CB10" />
        <x-table.td type="input" value="{{ $data->has('CC10') ? $data['CC10'] : '' }}" coord="CC10" />
        <x-table.td type="input" value="{{ $data->has('CD10') ? $data['CD10'] : '' }}" coord="CD10" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input" value="{{ $data->has('CI10') ? $data['CI10'] : '' }}" coord="CI10" />
        <x-table.td type="input" value="{{ $data->has('CJ10') ? $data['CJ10'] : '' }}" coord="CJ10" />
        <x-table.td type="input" value="{{ $data->has('CK10') ? $data['CK10'] : '' }}" coord="CK10" />
        <x-table.td type="input" value="{{ $data->has('CL10') ? $data['CL10'] : '' }}" coord="CL10" />
        <x-table.td type="input" value="{{ $data->has('C<10') ? $data['CM10'] : '' }}" coord="CM10" />
        <x-table.td type="input" value="{{ $data->has('CN10') ? $data['CN10'] : '' }}" coord="CN10" />

    </tr>
    <tr>
        <x-table.td type="header"
            value="из них имеют индивидуальную программу реабилитации или абилитации ребенка-инвалида (ИПРА
        ребенка-инвалида) / индивидуальную программу реабилитации ребенка-инвалида (ИПР ребенка-инвалида)" />
        <x-table.td type="header" value="05" />
        <x-table.td type="input" value="{{ $data->has('CA11') ? $data['CA11'] : '' }}" coord="CA11" />
        <x-table.td type="input" value="{{ $data->has('CB11') ? $data['CB11'] : '' }}" coord="CB11" />
        <x-table.td type="input" value="{{ $data->has('CC11') ? $data['CC11'] : '' }}" coord="CC11" />
        <x-table.td type="input" value="{{ $data->has('CD11') ? $data['CD11'] : '' }}" coord="CD10" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input" value="{{ $data->has('CI11') ? $data['CI11'] : '' }}" coord="CI11" />
        <x-table.td type="input" value="{{ $data->has('CJ11') ? $data['CJ11'] : '' }}" coord="CJ11" />
        <x-table.td type="input" value="{{ $data->has('CK11') ? $data['CK11'] : '' }}" coord="CK11" />
        <x-table.td type="input" value="{{ $data->has('CL11') ? $data['CL11'] : '' }}" coord="CL11" />
        <x-table.td type="input" value="{{ $data->has('CM11') ? $data['CM11'] : '' }}" coord="CM11" />
        <x-table.td type="input" value="{{ $data->has('CN11') ? $data['CN11'] : '' }}" coord="CN11" />
    </tr>


    </tr>
</tbody>
