<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th rowspan=2 value="Наименование <br> показателей" />
        <x-table.th rowspan=2 value="№ строки" />
        <x-table.th rowspan=2 value="Всего, чел." />
        <x-table.th rowspan=2 value="Всего в многопрофильных реабилитационных центрах*, чел." />
        <x-table.th colspan=2
            value="в организациях, предоставляющих услуги (мероприятия) по реабилитации и абилитации инвалидам в возрасте 18 лет и старше" />
        <x-table.th colspan=2
            value="в организациях, предоставляющих услуги (мероприятия) по реабилитации и абилитации детям-инвалидам" />
        <x-table.th colspan=2
            value="в организациях, предоставляющих услуги (мероприятия) по реабилитации и абилитации одновременно инвалидам в возрасте 18 лет и старше и детям-инвалидам" />

    <tr>
        <x-table.th value="фактическая потребность, чел." />
        <x-table.th value="в том числе, в многопрофильных реабилитационных центрах*, чел." />
        <x-table.th value="фактическая потребность, чел." />
        <x-table.th value="в том числе, в многопрофильных реабилитационных центрах*, чел." />
        <x-table.th value="фактическая потребность, чел." />
        <x-table.th value="в том числе, в многопрофильных реабилитационных центрах*, чел." />
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
        <x-table.td type="header" value="Всего должностей специалистов, из них:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('CA6') ? $data['CA6'] : '' }}" coord="CA6" />
        <x-table.td type="input" value="{{ $data->has('CB6') ? $data['CB6'] : '' }}" coord="CB6" />
        <x-table.td type="input" value="{{ $data->has('CC6') ? $data['CC6'] : '' }}" coord="CC6" />
        <x-table.td type="input" value="{{ $data->has('CD6') ? $data['CD6'] : '' }}" coord="CD6" />
        <x-table.td type="input" value="{{ $data->has('CE6') ? $data['CE6'] : '' }}" coord="CE6" />
        <x-table.td type="input" value="{{ $data->has('CF6') ? $data['CF6'] : '' }}" coord="CF6" />
        <x-table.td type="input" value="{{ $data->has('CG6') ? $data['CG6'] : '' }}" coord="CG6" />
        <x-table.td type="input" value="{{ $data->has('CH6') ? $data['CH6'] : '' }}" coord="CH6" />
    </tr>
    <tr>
        <x-table.td type="header" value="Должности медицинских работников - всего, из них:" />
        <x-table.td type="header" value="02" />
        <x-table.td type="input" value="{{ $data->has('CA7') ? $data['CA7'] : '' }}" coord="CA7" />
        <x-table.td type="input" value="{{ $data->has('CB7') ? $data['CB7'] : '' }}" coord="CB7" />
        <x-table.td type="input" value="{{ $data->has('CC7') ? $data['CC7'] : '' }}" coord="CC7" />
        <x-table.td type="input" value="{{ $data->has('CD7') ? $data['CD7'] : '' }}" coord="CD7" />
        <x-table.td type="input" value="{{ $data->has('CE7') ? $data['CE7'] : '' }}" coord="CE7" />
        <x-table.td type="input" value="{{ $data->has('CF7') ? $data['CF7'] : '' }}" coord="CF7" />
        <x-table.td type="input" value="{{ $data->has('CG7') ? $data['CG7'] : '' }}" coord="CG7" />
        <x-table.td type="input" value="{{ $data->has('CH7') ? $data['CH7'] : '' }}" coord="CH7" />
    </tr>
    <tr>
        <x-table.td type="header" value="врачи - специалисты по профилю оказания медицинской помощи, всего, из них:" />
        <x-table.td type="header" value="03" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач по медицинской реабилитации" />
        <x-table.td type="header" value="04" />
        <x-table.td type="input" value="{{ $data->has('CA9') ? $data['CA9'] : '' }}" coord="CA9" />
        <x-table.td type="input" value="{{ $data->has('CB9') ? $data['CB9'] : '' }}" coord="CB9" />
        <x-table.td type="input" value="{{ $data->has('CC9') ? $data['CC9'] : '' }}" coord="CC9" />
        <x-table.td type="input" value="{{ $data->has('CD9') ? $data['CD9'] : '' }}" coord="CD9" />
        <x-table.td type="input" value="{{ $data->has('CE9') ? $data['CE9'] : '' }}" coord="CE9" />
        <x-table.td type="input" value="{{ $data->has('CF9') ? $data['CF9'] : '' }}" coord="CF9" />
        <x-table.td type="input" value="{{ $data->has('CG9') ? $data['CG9'] : '' }}" coord="CG9" />
        <x-table.td type="input" value="{{ $data->has('CH9') ? $data['CH9'] : '' }}" coord="CH9" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач по лечебной физкультуре" />
        <x-table.td type="header" value="05" />
        <x-table.td type="input" value="{{ $data->has('CA10') ? $data['CA10'] : '' }}" coord="CA10" />
        <x-table.td type="input" value="{{ $data->has('CB10') ? $data['CB10'] : '' }}" coord="CB10" />
        <x-table.td type="input" value="{{ $data->has('CC10') ? $data['CC10'] : '' }}" coord="CC10" />
        <x-table.td type="input" value="{{ $data->has('CD10') ? $data['CD10'] : '' }}" coord="CD10" />
        <x-table.td type="input" value="{{ $data->has('CE10') ? $data['CE10'] : '' }}" coord="CE10" />
        <x-table.td type="input" value="{{ $data->has('CF10') ? $data['CF10'] : '' }}" coord="CF10" />
        <x-table.td type="input" value="{{ $data->has('CG10') ? $data['CG10'] : '' }}" coord="CG10" />
        <x-table.td type="input" value="{{ $data->has('CH10') ? $data['CH10'] : '' }}" coord="CH10" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач физиотерапевт" />
        <x-table.td type="header" value="06" />
        <x-table.td type="input" value="{{ $data->has('CA11') ? $data['CA11'] : '' }}" coord="CA11" />
        <x-table.td type="input" value="{{ $data->has('CB11') ? $data['CB11'] : '' }}" coord="CB11" />
        <x-table.td type="input" value="{{ $data->has('CC11') ? $data['CC11'] : '' }}" coord="CC11" />
        <x-table.td type="input" value="{{ $data->has('CD11') ? $data['CD11'] : '' }}" coord="CD11" />
        <x-table.td type="input" value="{{ $data->has('CE11') ? $data['CE11'] : '' }}" coord="CE11" />
        <x-table.td type="input" value="{{ $data->has('CF11') ? $data['CF11'] : '' }}" coord="CF11" />
        <x-table.td type="input" value="{{ $data->has('CG11') ? $data['CG11'] : '' }}" coord="CG11" />
        <x-table.td type="input" value="{{ $data->has('CH11') ? $data['CH11'] : '' }}" coord="CH11" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач-диетолог" />
        <x-table.td type="header" value="07" />
        <x-table.td type="input" value="{{ $data->has('CA12') ? $data['CA12'] : '' }}" coord="CA12" />
        <x-table.td type="input" value="{{ $data->has('CB12') ? $data['CB12'] : '' }}" coord="CB12" />
        <x-table.td type="input" value="{{ $data->has('CC12') ? $data['CC12'] : '' }}" coord="CC12" />
        <x-table.td type="input" value="{{ $data->has('CD12') ? $data['CD12'] : '' }}" coord="CD12" />
        <x-table.td type="input" value="{{ $data->has('CE12') ? $data['CE12'] : '' }}" coord="CE12" />
        <x-table.td type="input" value="{{ $data->has('CF12') ? $data['CF12'] : '' }}" coord="CF12" />
        <x-table.td type="input" value="{{ $data->has('CG12') ? $data['CG12'] : '' }}" coord="CG12" />
        <x-table.td type="input" value="{{ $data->has('CH12') ? $data['CH12'] : '' }}" coord="CH12" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач мануальной терапии" />
        <x-table.td type="header" value="08" />
        <x-table.td type="input" value="{{ $data->has('CA13') ? $data['CA13'] : '' }}" coord="CA13" />
        <x-table.td type="input" value="{{ $data->has('CB13') ? $data['CB13'] : '' }}" coord="CB13" />
        <x-table.td type="input" value="{{ $data->has('CC13') ? $data['CC13'] : '' }}" coord="CC13" />
        <x-table.td type="input" value="{{ $data->has('CD13') ? $data['CD13'] : '' }}" coord="CD13" />
        <x-table.td type="input" value="{{ $data->has('CE13') ? $data['CE13'] : '' }}" coord="CE13" />
        <x-table.td type="input" value="{{ $data->has('CF13') ? $data['CF13'] : '' }}" coord="CF13" />
        <x-table.td type="input" value="{{ $data->has('CG13') ? $data['CG13'] : '' }}" coord="CG13" />
        <x-table.td type="input" value="{{ $data->has('CH13') ? $data['CH13'] : '' }}" coord="CH13" />
    </tr>
    <tr>
        <x-table.td type="header" value="рефлексотерапевт" />
        <x-table.td type="header" value="09" />
        <x-table.td type="input" value="{{ $data->has('CA14') ? $data['CA14'] : '' }}" coord="CA14" />
        <x-table.td type="input" value="{{ $data->has('CB14') ? $data['CB14'] : '' }}" coord="CB14" />
        <x-table.td type="input" value="{{ $data->has('CC14') ? $data['CC14'] : '' }}" coord="CC14" />
        <x-table.td type="input" value="{{ $data->has('CD14') ? $data['CD14'] : '' }}" coord="CD14" />
        <x-table.td type="input" value="{{ $data->has('CE14') ? $data['CE14'] : '' }}" coord="CE14" />
        <x-table.td type="input" value="{{ $data->has('CF14') ? $data['CF14'] : '' }}" coord="CF14" />
        <x-table.td type="input" value="{{ $data->has('CG14') ? $data['CG14'] : '' }}" coord="CG14" />
        <x-table.td type="input" value="{{ $data->has('CH14') ? $data['CH14'] : '' }}" coord="CH14" />
    </tr>
    <tr>
        <x-table.td type="header" value="психотерапевт" />
        <x-table.td type="header" value="10" />
        <x-table.td type="input" value="{{ $data->has('CA15') ? $data['CA15'] : '' }}" coord="CA15" />
        <x-table.td type="input" value="{{ $data->has('CB15') ? $data['CB15'] : '' }}" coord="CB15" />
        <x-table.td type="input" value="{{ $data->has('CC15') ? $data['CC15'] : '' }}" coord="CC15" />
        <x-table.td type="input" value="{{ $data->has('CD15') ? $data['CD15'] : '' }}" coord="CD15" />
        <x-table.td type="input" value="{{ $data->has('CE15') ? $data['CE15'] : '' }}" coord="CE15" />
        <x-table.td type="input" value="{{ $data->has('CF15') ? $data['CF15'] : '' }}" coord="CF15" />
        <x-table.td type="input" value="{{ $data->has('CG15') ? $data['CG15'] : '' }}" coord="CG15" />
        <x-table.td type="input" value="{{ $data->has('CH15') ? $data['CH15'] : '' }}" coord="CH15" />
    </tr>
    <tr>
        <x-table.td type="header" value="специалисты с высшим немедицинским образованием - всего, в том числе:" />
        <x-table.td type="header" value="11" />
        <x-table.td type="input" value="{{ $data->has('CA16') ? $data['CA16'] : '' }}" coord="CA16" />
        <x-table.td type="input" value="{{ $data->has('CB16') ? $data['CB16'] : '' }}" coord="CB16" />
        <x-table.td type="input" value="{{ $data->has('CC16') ? $data['CC16'] : '' }}" coord="CC16" />
        <x-table.td type="input" value="{{ $data->has('CD16') ? $data['CD16'] : '' }}" coord="CD16" />
        <x-table.td type="input" value="{{ $data->has('CE16') ? $data['CE16'] : '' }}" coord="CE16" />
        <x-table.td type="input" value="{{ $data->has('CF16') ? $data['CF16'] : '' }}" coord="CF16" />
        <x-table.td type="input" value="{{ $data->has('CG16') ? $data['CG16'] : '' }}" coord="CG16" />
        <x-table.td type="input" value="{{ $data->has('CH16') ? $data['CH16'] : '' }}" coord="CH16" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинский психолог" />
        <x-table.td type="header" value="12" />
        <x-table.td type="input" value="{{ $data->has('CA17') ? $data['CA17'] : '' }}" coord="CA17" />
        <x-table.td type="input" value="{{ $data->has('CB17') ? $data['CB17'] : '' }}" coord="CB17" />
        <x-table.td type="input" value="{{ $data->has('CC17') ? $data['CC17'] : '' }}" coord="CC17" />
        <x-table.td type="input" value="{{ $data->has('CD17') ? $data['CD17'] : '' }}" coord="CD17" />
        <x-table.td type="input" value="{{ $data->has('CE17') ? $data['CE17'] : '' }}" coord="CE17" />
        <x-table.td type="input" value="{{ $data->has('CF17') ? $data['CF17'] : '' }}" coord="CF17" />
        <x-table.td type="input" value="{{ $data->has('CG17') ? $data['CG17'] : '' }}" coord="CG17" />
        <x-table.td type="input" value="{{ $data->has('CH17') ? $data['CH17'] : '' }}" coord="CH17" />
    </tr>
    <tr>
        <x-table.td type="header" value="нейропсихолог" />
        <x-table.td type="header" value="13" />
        <x-table.td type="input" value="{{ $data->has('CA18') ? $data['CA18'] : '' }}" coord="CA18" />
        <x-table.td type="input" value="{{ $data->has('CB18') ? $data['CB18'] : '' }}" coord="CB18" />
        <x-table.td type="input" value="{{ $data->has('CC18') ? $data['CC18'] : '' }}" coord="CC18" />
        <x-table.td type="input" value="{{ $data->has('CD18') ? $data['CD18'] : '' }}" coord="CD18" />
        <x-table.td type="input" value="{{ $data->has('CE18') ? $data['CE18'] : '' }}" coord="CE18" />
        <x-table.td type="input" value="{{ $data->has('CF18') ? $data['CF18'] : '' }}" coord="CF18" />
        <x-table.td type="input" value="{{ $data->has('CG18') ? $data['CG18'] : '' }}" coord="CG18" />
        <x-table.td type="input" value="{{ $data->has('CH18') ? $data['CH18'] : '' }}" coord="CH18" />
    </tr>
    <tr>
        <x-table.td type="header" value="средний медицинский персонал - всего, из них:" />
        <x-table.td type="header" value="14" />
        <x-table.td type="input" value="{{ $data->has('CA19') ? $data['CA19'] : '' }}" coord="CA19" />
        <x-table.td type="input" value="{{ $data->has('CB19') ? $data['CB19'] : '' }}" coord="CB19" />
        <x-table.td type="input" value="{{ $data->has('CC19') ? $data['CC19'] : '' }}" coord="CC19" />
        <x-table.td type="input" value="{{ $data->has('CD19') ? $data['CD19'] : '' }}" coord="CD19" />
        <x-table.td type="input" value="{{ $data->has('CE19') ? $data['CE19'] : '' }}" coord="CE19" />
        <x-table.td type="input" value="{{ $data->has('CF19') ? $data['CF19'] : '' }}" coord="CF19" />
        <x-table.td type="input" value="{{ $data->has('CG19') ? $data['CG19'] : '' }}" coord="CG19" />
        <x-table.td type="input" value="{{ $data->has('CH19') ? $data['CH19'] : '' }}" coord="CH19" />
    </tr>
    <tr>
        <x-table.td type="header" value="инструктор по лечебной физкультуре" />
        <x-table.td type="header" value="15" />
        <x-table.td type="input" value="{{ $data->has('CA20') ? $data['CA20'] : '' }}" coord="CA20" />
        <x-table.td type="input" value="{{ $data->has('CB20') ? $data['CB20'] : '' }}" coord="CB20" />
        <x-table.td type="input" value="{{ $data->has('CC20') ? $data['CC20'] : '' }}" coord="CC20" />
        <x-table.td type="input" value="{{ $data->has('CD20') ? $data['CD20'] : '' }}" coord="CD20" />
        <x-table.td type="input" value="{{ $data->has('CE20') ? $data['CE20'] : '' }}" coord="CE20" />
        <x-table.td type="input" value="{{ $data->has('CF20') ? $data['CF20'] : '' }}" coord="CF20" />
        <x-table.td type="input" value="{{ $data->has('CG20') ? $data['CG20'] : '' }}" coord="CG20" />
        <x-table.td type="input" value="{{ $data->has('CH20') ? $data['CH20'] : '' }}" coord="CH20" />
    </tr>
    <tr>
        <x-table.td type="header" value="инструктор-методист по лечебной физкультуре" />
        <x-table.td type="header" value="16" />
        <x-table.td type="input" value="{{ $data->has('CA21') ? $data['CA21'] : '' }}" coord="CA21" />
        <x-table.td type="input" value="{{ $data->has('CB21') ? $data['CB21'] : '' }}" coord="CB21" />
        <x-table.td type="input" value="{{ $data->has('CC21') ? $data['CC21'] : '' }}" coord="CC21" />
        <x-table.td type="input" value="{{ $data->has('CD21') ? $data['CD21'] : '' }}" coord="CD21" />
        <x-table.td type="input" value="{{ $data->has('CE21') ? $data['CE21'] : '' }}" coord="CE21" />
        <x-table.td type="input" value="{{ $data->has('CF21') ? $data['CF21'] : '' }}" coord="CF21" />
        <x-table.td type="input" value="{{ $data->has('CG21') ? $data['CG21'] : '' }}" coord="CG21" />
        <x-table.td type="input" value="{{ $data->has('CH21') ? $data['CH21'] : '' }}" coord="CH21" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинская сестра по медицинской реабилитации" />
        <x-table.td type="header" value="17" />
        <x-table.td type="input" value="{{ $data->has('CA22') ? $data['CA22'] : '' }}" coord="CA22" />
        <x-table.td type="input" value="{{ $data->has('CB22') ? $data['CB22'] : '' }}" coord="CB22" />
        <x-table.td type="input" value="{{ $data->has('CC22') ? $data['CC22'] : '' }}" coord="CC22" />
        <x-table.td type="input" value="{{ $data->has('CD22') ? $data['CD22'] : '' }}" coord="CD22" />
        <x-table.td type="input" value="{{ $data->has('CE22') ? $data['CE22'] : '' }}" coord="CE22" />
        <x-table.td type="input" value="{{ $data->has('CF22') ? $data['CF22'] : '' }}" coord="CF22" />
        <x-table.td type="input" value="{{ $data->has('CG22') ? $data['CG22'] : '' }}" coord="CG22" />
        <x-table.td type="input" value="{{ $data->has('CH22') ? $data['CH22'] : '' }}" coord="CH22" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинская сестра по массажу" />
        <x-table.td type="header" value="18" />
        <x-table.td type="input" value="{{ $data->has('CA23') ? $data['CA23'] : '' }}" coord="CA23" />
        <x-table.td type="input" value="{{ $data->has('CB23') ? $data['CB23'] : '' }}" coord="CB23" />
        <x-table.td type="input" value="{{ $data->has('CC23') ? $data['CC23'] : '' }}" coord="CC23" />
        <x-table.td type="input" value="{{ $data->has('CD23') ? $data['CD23'] : '' }}" coord="CD23" />
        <x-table.td type="input" value="{{ $data->has('CE23') ? $data['CE23'] : '' }}" coord="CE23" />
        <x-table.td type="input" value="{{ $data->has('CF23') ? $data['CF23'] : '' }}" coord="CF23" />
        <x-table.td type="input" value="{{ $data->has('CG23') ? $data['CG23'] : '' }}" coord="CG23" />
        <x-table.td type="input" value="{{ $data->has('CH23') ? $data['CH23'] : '' }}" coord="CH23" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинская сестра по физиотерапии" />
        <x-table.td type="header" value="19" />
        <x-table.td type="input" value="{{ $data->has('CA24') ? $data['CA24'] : '' }}" coord="CA24" />
        <x-table.td type="input" value="{{ $data->has('CB24') ? $data['CB24'] : '' }}" coord="CB24" />
        <x-table.td type="input" value="{{ $data->has('CC24') ? $data['CC24'] : '' }}" coord="CC24" />
        <x-table.td type="input" value="{{ $data->has('CD24') ? $data['CD24'] : '' }}" coord="CD24" />
        <x-table.td type="input" value="{{ $data->has('CE24') ? $data['CE24'] : '' }}" coord="CE24" />
        <x-table.td type="input" value="{{ $data->has('CF24') ? $data['CF24'] : '' }}" coord="CF24" />
        <x-table.td type="input" value="{{ $data->has('CG24') ? $data['CG24'] : '' }}" coord="CG24" />
        <x-table.td type="input" value="{{ $data->has('CH24') ? $data['CH24'] : '' }}" coord="CH24" />
    </tr>
    <tr>
        <x-table.td type="header" value="кинезиоспециалист" />
        <x-table.td type="header" value="20" />
        <x-table.td type="input" value="{{ $data->has('CA25') ? $data['CA25'] : '' }}" coord="CA25" />
        <x-table.td type="input" value="{{ $data->has('CB25') ? $data['CB25'] : '' }}" coord="CB25" />
        <x-table.td type="input" value="{{ $data->has('CC25') ? $data['CC25'] : '' }}" coord="CC25" />
        <x-table.td type="input" value="{{ $data->has('CD25') ? $data['CD25'] : '' }}" coord="CD25" />
        <x-table.td type="input" value="{{ $data->has('CE25') ? $data['CE25'] : '' }}" coord="CE25" />
        <x-table.td type="input" value="{{ $data->has('CF25') ? $data['CF25'] : '' }}" coord="CF25" />
        <x-table.td type="input" value="{{ $data->has('CG25') ? $data['CG25'] : '' }}" coord="CG25" />
        <x-table.td type="input" value="{{ $data->has('CH25') ? $data['CH25'] : '' }}" coord="CH25" />
    </tr>
    <tr>
        <x-table.td type="header" value="эргоспециалист" />
        <x-table.td type="header" value="21" />
        <x-table.td type="input" value="{{ $data->has('CA26') ? $data['CA26'] : '' }}" coord="CA26" />
        <x-table.td type="input" value="{{ $data->has('CB26') ? $data['CB26'] : '' }}" coord="CB26" />
        <x-table.td type="input" value="{{ $data->has('CC26') ? $data['CC26'] : '' }}" coord="CC26" />
        <x-table.td type="input" value="{{ $data->has('CD26') ? $data['CD26'] : '' }}" coord="CD26" />
        <x-table.td type="input" value="{{ $data->has('CE26') ? $data['CE26'] : '' }}" coord="CE26" />
        <x-table.td type="input" value="{{ $data->has('CF26') ? $data['CF26'] : '' }}" coord="CF26" />
        <x-table.td type="input" value="{{ $data->has('CG26') ? $data['CG26'] : '' }}" coord="CG26" />
        <x-table.td type="input" value="{{ $data->has('CH26') ? $data['CH26'] : '' }}" coord="CH26" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="Должности специалистов в области социального обслуживания - всего, из них:" />
        <x-table.td type="header" value="22" />
        <x-table.td type="input" value="{{ $data->has('CA27') ? $data['CA27'] : '' }}" coord="CA27" />
        <x-table.td type="input" value="{{ $data->has('CB27') ? $data['CB27'] : '' }}" coord="CB27" />
        <x-table.td type="input" value="{{ $data->has('CC27') ? $data['CC27'] : '' }}" coord="CC27" />
        <x-table.td type="input" value="{{ $data->has('CD27') ? $data['CD27'] : '' }}" coord="CD27" />
        <x-table.td type="input" value="{{ $data->has('CE27') ? $data['CE27'] : '' }}" coord="CE27" />
        <x-table.td type="input" value="{{ $data->has('CF27') ? $data['CF27'] : '' }}" coord="CF27" />
        <x-table.td type="input" value="{{ $data->has('CG27') ? $data['CG27'] : '' }}" coord="CG27" />
        <x-table.td type="input" value="{{ $data->has('CH27') ? $data['CH27'] : '' }}" coord="CH27" />
    </tr>
    <tr>
        <x-table.td type="header" value="специалист по социальной работе" />
        <x-table.td type="header" value="23" />
        <x-table.td type="input" value="{{ $data->has('CA28') ? $data['CA28'] : '' }}" coord="CA28" />
        <x-table.td type="input" value="{{ $data->has('CB28') ? $data['CB28'] : '' }}" coord="CB28" />
        <x-table.td type="input" value="{{ $data->has('CC28') ? $data['CC28'] : '' }}" coord="CC28" />
        <x-table.td type="input" value="{{ $data->has('CD28') ? $data['CD28'] : '' }}" coord="CD28" />
        <x-table.td type="input" value="{{ $data->has('CE28') ? $data['CE28'] : '' }}" coord="CE28" />
        <x-table.td type="input" value="{{ $data->has('CF28') ? $data['CF28'] : '' }}" coord="CF28" />
        <x-table.td type="input" value="{{ $data->has('CG28') ? $data['CG28'] : '' }}" coord="CG28" />
        <x-table.td type="input" value="{{ $data->has('CH28') ? $data['CH28'] : '' }}" coord="CH28" />
    </tr>
    <tr>
        <x-table.td type="header" value="социальный работник" />
        <x-table.td type="header" value="24" />
        <x-table.td type="input" value="{{ $data->has('CA29') ? $data['CA29'] : '' }}" coord="CA29" />
        <x-table.td type="input" value="{{ $data->has('CB29') ? $data['CB29'] : '' }}" coord="CB29" />
        <x-table.td type="input" value="{{ $data->has('CC29') ? $data['CC29'] : '' }}" coord="CC29" />
        <x-table.td type="input" value="{{ $data->has('CD29') ? $data['CD29'] : '' }}" coord="CD29" />
        <x-table.td type="input" value="{{ $data->has('CE29') ? $data['CE29'] : '' }}" coord="CE29" />
        <x-table.td type="input" value="{{ $data->has('CF29') ? $data['CF29'] : '' }}" coord="CF29" />
        <x-table.td type="input" value="{{ $data->has('CG29') ? $data['CG29'] : '' }}" coord="CG29" />
        <x-table.td type="input" value="{{ $data->has('CH29') ? $data['CH29'] : '' }}" coord="CH29" />
    </tr>
    <tr>
        <x-table.td type="header" value="специалист по реабилитационной работе в социальной сфере" />
        <x-table.td type="header" value="25" />
        <x-table.td type="input" value="{{ $data->has('CA30') ? $data['CA30'] : '' }}" coord="CA30" />
        <x-table.td type="input" value="{{ $data->has('CB30') ? $data['CB30'] : '' }}" coord="CB30" />
        <x-table.td type="input" value="{{ $data->has('CC30') ? $data['CC30'] : '' }}" coord="CC30" />
        <x-table.td type="input" value="{{ $data->has('CD30') ? $data['CD30'] : '' }}" coord="CD30" />
        <x-table.td type="input" value="{{ $data->has('CE30') ? $data['CE30'] : '' }}" coord="CE30" />
        <x-table.td type="input" value="{{ $data->has('CF30') ? $data['CF30'] : '' }}" coord="CF30" />
        <x-table.td type="input" value="{{ $data->has('CG30') ? $data['CG30'] : '' }}" coord="CG30" />
        <x-table.td type="input" value="{{ $data->has('CH30') ? $data['CH30'] : '' }}" coord="CH30" />
    </tr>
    <tr>
        <x-table.td type="header" value="психолог в социальной сфере" />
        <x-table.td type="header" value="26" />
        <x-table.td type="input" value="{{ $data->has('CA31') ? $data['CA31'] : '' }}" coord="CA31" />
        <x-table.td type="input" value="{{ $data->has('CB31') ? $data['CB31'] : '' }}" coord="CB31" />
        <x-table.td type="input" value="{{ $data->has('CC31') ? $data['CC31'] : '' }}" coord="CC31" />
        <x-table.td type="input" value="{{ $data->has('CD31') ? $data['CD31'] : '' }}" coord="CD31" />
        <x-table.td type="input" value="{{ $data->has('CE31') ? $data['CE31'] : '' }}" coord="CE31" />
        <x-table.td type="input" value="{{ $data->has('CF31') ? $data['CF31'] : '' }}" coord="CF31" />
        <x-table.td type="input" value="{{ $data->has('CG31') ? $data['CG31'] : '' }}" coord="CG31" />
        <x-table.td type="input" value="{{ $data->has('CH31') ? $data['CH31'] : '' }}" coord="CH31" />
    </tr>
    <tr>
        <x-table.td type="header" value="специалист по работе с семьей" />
        <x-table.td type="header" value="27" />
        <x-table.td type="input" value="{{ $data->has('CA32') ? $data['CA32'] : '' }}" coord="CA32" />
        <x-table.td type="input" value="{{ $data->has('CB32') ? $data['CB32'] : '' }}" coord="CB32" />
        <x-table.td type="input" value="{{ $data->has('CC32') ? $data['CC32'] : '' }}" coord="CC32" />
        <x-table.td type="input" value="{{ $data->has('CD32') ? $data['CD32'] : '' }}" coord="CD32" />
        <x-table.td type="input" value="{{ $data->has('CE32') ? $data['CE32'] : '' }}" coord="CE32" />
        <x-table.td type="input" value="{{ $data->has('CF32') ? $data['CF32'] : '' }}" coord="CF32" />
        <x-table.td type="input" value="{{ $data->has('CG32') ? $data['CG32'] : '' }}" coord="CG32" />
        <x-table.td type="input" value="{{ $data->has('CH32') ? $data['CH32'] : '' }}" coord="CH32" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="ассистент (помощник) по оказанию технической помощи инвалидами и лицам с ограниченными возможностями здоровья" />
        <x-table.td type="header" value="28" />
        <x-table.td type="input" value="{{ $data->has('CA33') ? $data['CA33'] : '' }}" coord="CA33" />
        <x-table.td type="input" value="{{ $data->has('CB33') ? $data['CB33'] : '' }}" coord="CB33" />
        <x-table.td type="input" value="{{ $data->has('CC33') ? $data['CC33'] : '' }}" coord="CC33" />
        <x-table.td type="input" value="{{ $data->has('CD33') ? $data['CD33'] : '' }}" coord="CD33" />
        <x-table.td type="input" value="{{ $data->has('CE33') ? $data['CE33'] : '' }}" coord="CE33" />
        <x-table.td type="input" value="{{ $data->has('CF33') ? $data['CF33'] : '' }}" coord="CF33" />
        <x-table.td type="input" value="{{ $data->has('CG33') ? $data['CG33'] : '' }}" coord="CG33" />
        <x-table.td type="input" value="{{ $data->has('CH33') ? $data['CH33'] : '' }}" coord="CH33" />
    </tr>
    <tr>
        <x-table.td type="header" value="переводчик русского жестового языка" />
        <x-table.td type="header" value="29" />
        <x-table.td type="input" value="{{ $data->has('CA34') ? $data['CA34'] : '' }}" coord="CA34" />
        <x-table.td type="input" value="{{ $data->has('CB34') ? $data['CB34'] : '' }}" coord="CB34" />
        <x-table.td type="input" value="{{ $data->has('CC34') ? $data['CC34'] : '' }}" coord="CC34" />
        <x-table.td type="input" value="{{ $data->has('CD34') ? $data['CD34'] : '' }}" coord="CD34" />
        <x-table.td type="input" value="{{ $data->has('CE34') ? $data['CE34'] : '' }}" coord="CE34" />
        <x-table.td type="input" value="{{ $data->has('CF34') ? $data['CF34'] : '' }}" coord="CF34" />
        <x-table.td type="input" value="{{ $data->has('CG34') ? $data['CG34'] : '' }}" coord="CG34" />
        <x-table.td type="input" value="{{ $data->has('CH34') ? $data['CH34'] : '' }}" coord="CH34" />
    </tr>
    <tr>
        <x-table.td type="header" value="тифлосурдопереводчик" />
        <x-table.td type="header" value="30" />
        <x-table.td type="input" value="{{ $data->has('CA35') ? $data['CA35'] : '' }}" coord="CA35" />
        <x-table.td type="input" value="{{ $data->has('CB35') ? $data['CB35'] : '' }}" coord="CB35" />
        <x-table.td type="input" value="{{ $data->has('CC35') ? $data['CC35'] : '' }}" coord="CC35" />
        <x-table.td type="input" value="{{ $data->has('CD35') ? $data['CD35'] : '' }}" coord="CD35" />
        <x-table.td type="input" value="{{ $data->has('CE35') ? $data['CE35'] : '' }}" coord="CE35" />
        <x-table.td type="input" value="{{ $data->has('CF35') ? $data['CF35'] : '' }}" coord="CF35" />
        <x-table.td type="input" value="{{ $data->has('CG35') ? $data['CG35'] : '' }}" coord="CG35" />
        <x-table.td type="input" value="{{ $data->has('CH35') ? $data['CH35'] : '' }}" coord="CH35" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="Должности специалистов в области физической культуры и спорта - всего, из них:" />
        <x-table.td type="header" value="31" />
        <x-table.td type="input" value="{{ $data->has('CA36') ? $data['CA36'] : '' }}" coord="CA36" />
        <x-table.td type="input" value="{{ $data->has('CB36') ? $data['CB36'] : '' }}" coord="CB36" />
        <x-table.td type="input" value="{{ $data->has('CC36') ? $data['CC36'] : '' }}" coord="CC36" />
        <x-table.td type="input" value="{{ $data->has('CD36') ? $data['CD36'] : '' }}" coord="CD36" />
        <x-table.td type="input" value="{{ $data->has('CE36') ? $data['CE36'] : '' }}" coord="CE36" />
        <x-table.td type="input" value="{{ $data->has('CF36') ? $data['CF36'] : '' }}" coord="CF36" />
        <x-table.td type="input" value="{{ $data->has('CG36') ? $data['CG36'] : '' }}" coord="CG36" />
        <x-table.td type="input" value="{{ $data->has('CH36') ? $data['CH36'] : '' }}" coord="CH36" />
    </tr>
    <tr>
        <x-table.td type="header" value="инструктор по адаптивной физической культуре" />
        <x-table.td type="header" value="32" />
        <x-table.td type="input" value="{{ $data->has('CA37') ? $data['CA37'] : '' }}" coord="CA37" />
        <x-table.td type="input" value="{{ $data->has('CB37') ? $data['CB37'] : '' }}" coord="CB37" />
        <x-table.td type="input" value="{{ $data->has('CC37') ? $data['CC37'] : '' }}" coord="CC37" />
        <x-table.td type="input" value="{{ $data->has('CD37') ? $data['CD37'] : '' }}" coord="CD37" />
        <x-table.td type="input" value="{{ $data->has('CE37') ? $data['CE37'] : '' }}" coord="CE37" />
        <x-table.td type="input" value="{{ $data->has('CF37') ? $data['CF37'] : '' }}" coord="CF37" />
        <x-table.td type="input" value="{{ $data->has('CG37') ? $data['CG37'] : '' }}" coord="CG37" />
        <x-table.td type="input" value="{{ $data->has('CH37') ? $data['CH37'] : '' }}" coord="CH37" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="инструктор-методист по адаптивной физической культуре и адаптивному спорту" />
        <x-table.td type="header" value="33" />
        <x-table.td type="input" value="{{ $data->has('CA38') ? $data['CA38'] : '' }}" coord="CA38" />
        <x-table.td type="input" value="{{ $data->has('CB38') ? $data['CB38'] : '' }}" coord="CB38" />
        <x-table.td type="input" value="{{ $data->has('CC38') ? $data['CC38'] : '' }}" coord="CC38" />
        <x-table.td type="input" value="{{ $data->has('CD38') ? $data['CD38'] : '' }}" coord="CD38" />
        <x-table.td type="input" value="{{ $data->has('CE38') ? $data['CE38'] : '' }}" coord="CE38" />
        <x-table.td type="input" value="{{ $data->has('CF38') ? $data['CF38'] : '' }}" coord="CF38" />
        <x-table.td type="input" value="{{ $data->has('CG38') ? $data['CG38'] : '' }}" coord="CG38" />
        <x-table.td type="input" value="{{ $data->has('CH38') ? $data['CH38'] : '' }}" coord="CH38" />
    </tr>
    <tr>
        <x-table.td type="header" value="тренер по адаптивной физической культуре и адаптивному спорту" />
        <x-table.td type="header" value="34" />
        <x-table.td type="input" value="{{ $data->has('CA39') ? $data['CA39'] : '' }}" coord="CA39" />
        <x-table.td type="input" value="{{ $data->has('CB39') ? $data['CB39'] : '' }}" coord="CB39" />
        <x-table.td type="input" value="{{ $data->has('CC39') ? $data['CC39'] : '' }}" coord="CC39" />
        <x-table.td type="input" value="{{ $data->has('CD39') ? $data['CD39'] : '' }}" coord="CD39" />
        <x-table.td type="input" value="{{ $data->has('CE39') ? $data['CE39'] : '' }}" coord="CE39" />
        <x-table.td type="input" value="{{ $data->has('CF39') ? $data['CF39'] : '' }}" coord="CF39" />
        <x-table.td type="input" value="{{ $data->has('CG39') ? $data['CG39'] : '' }}" coord="CG39" />
        <x-table.td type="input" value="{{ $data->has('CH39') ? $data['CH39'] : '' }}" coord="CH39" />
    </tr>
    <tr>
        <x-table.td type="header" value="Должности специалистов в области образования и науки - всего, из них:" />
        <x-table.td type="header" value="35" />
        <x-table.td type="input" value="{{ $data->has('CA40') ? $data['CA40'] : '' }}" coord="CA40" />
        <x-table.td type="input" value="{{ $data->has('CB40') ? $data['CB40'] : '' }}" coord="CB40" />
        <x-table.td type="input" value="{{ $data->has('CC40') ? $data['CC40'] : '' }}" coord="CC40" />
        <x-table.td type="input" value="{{ $data->has('CD40') ? $data['CD40'] : '' }}" coord="CD40" />
        <x-table.td type="input" value="{{ $data->has('CE40') ? $data['CE40'] : '' }}" coord="CE40" />
        <x-table.td type="input" value="{{ $data->has('CF40') ? $data['CF40'] : '' }}" coord="CF40" />
        <x-table.td type="input" value="{{ $data->has('CG40') ? $data['CG40'] : '' }}" coord="CG40" />
        <x-table.td type="input" value="{{ $data->has('CH40') ? $data['CH40'] : '' }}" coord="CH40" />
    </tr>
    <tr>
        <x-table.td type="header" value="педагог-психолог (психолог в сфере образования)" />
        <x-table.td type="header" value="36" />
        <x-table.td type="input" value="{{ $data->has('CA41') ? $data['CA41'] : '' }}" coord="CA41" />
        <x-table.td type="input" value="{{ $data->has('CB41') ? $data['CB41'] : '' }}" coord="CB41" />
        <x-table.td type="input" value="{{ $data->has('CC41') ? $data['CC41'] : '' }}" coord="CC41" />
        <x-table.td type="input" value="{{ $data->has('CD41') ? $data['CD41'] : '' }}" coord="CD41" />
        <x-table.td type="input" value="{{ $data->has('CE41') ? $data['CE41'] : '' }}" coord="CE41" />
        <x-table.td type="input" value="{{ $data->has('CF41') ? $data['CF41'] : '' }}" coord="CF41" />
        <x-table.td type="input" value="{{ $data->has('CG41') ? $data['CG41'] : '' }}" coord="CG41" />
        <x-table.td type="input" value="{{ $data->has('CH41') ? $data['CH41'] : '' }}" coord="CH41" />
    </tr>
    <tr>
        <x-table.td type="header" value="ассистент (помощник)" />
        <x-table.td type="header" value="37" />
        <x-table.td type="input" value="{{ $data->has('CA42') ? $data['CA42'] : '' }}" coord="CA42" />
        <x-table.td type="input" value="{{ $data->has('CB42') ? $data['CB42'] : '' }}" coord="CB42" />
        <x-table.td type="input" value="{{ $data->has('CC42') ? $data['CC42'] : '' }}" coord="CC42" />
        <x-table.td type="input" value="{{ $data->has('CD42') ? $data['CD42'] : '' }}" coord="CD42" />
        <x-table.td type="input" value="{{ $data->has('CE42') ? $data['CE42'] : '' }}" coord="CE42" />
        <x-table.td type="input" value="{{ $data->has('CF42') ? $data['CF42'] : '' }}" coord="CF42" />
        <x-table.td type="input" value="{{ $data->has('CG42') ? $data['CG42'] : '' }}" coord="CG42" />
        <x-table.td type="input" value="{{ $data->has('CH42') ? $data['CH42'] : '' }}" coord="CH42" />
    </tr>
    <tr>
        <x-table.td type="header" value="тьютор" />
        <x-table.td type="header" value="38" />
        <x-table.td type="input" value="{{ $data->has('CA43') ? $data['CA43'] : '' }}" coord="CA43" />
        <x-table.td type="input" value="{{ $data->has('CB43') ? $data['CB43'] : '' }}" coord="CB43" />
        <x-table.td type="input" value="{{ $data->has('CC43') ? $data['CC43'] : '' }}" coord="CC43" />
        <x-table.td type="input" value="{{ $data->has('CD43') ? $data['CD43'] : '' }}" coord="CD43" />
        <x-table.td type="input" value="{{ $data->has('CE43') ? $data['CE43'] : '' }}" coord="CE43" />
        <x-table.td type="input" value="{{ $data->has('CF43') ? $data['CF43'] : '' }}" coord="CF43" />
        <x-table.td type="input" value="{{ $data->has('CG43') ? $data['CG43'] : '' }}" coord="CG43" />
        <x-table.td type="input" value="{{ $data->has('CH43') ? $data['CH43'] : '' }}" coord="CH43" />
    </tr>
    <tr>
        <x-table.td type="header" value="логопед (в том числе учитель-логопед)" />
        <x-table.td type="header" value="39" />
        <x-table.td type="input" value="{{ $data->has('CA44') ? $data['CA44'] : '' }}" coord="CA44" />
        <x-table.td type="input" value="{{ $data->has('CB44') ? $data['CB44'] : '' }}" coord="CB44" />
        <x-table.td type="input" value="{{ $data->has('CC44') ? $data['CC44'] : '' }}" coord="CC44" />
        <x-table.td type="input" value="{{ $data->has('CD44') ? $data['CD44'] : '' }}" coord="CD44" />
        <x-table.td type="input" value="{{ $data->has('CE44') ? $data['CE44'] : '' }}" coord="CE44" />
        <x-table.td type="input" value="{{ $data->has('CF44') ? $data['CF44'] : '' }}" coord="CF44" />
        <x-table.td type="input" value="{{ $data->has('CG44') ? $data['CG44'] : '' }}" coord="CG44" />
        <x-table.td type="input" value="{{ $data->has('CH44') ? $data['CH44'] : '' }}" coord="CH44" />
    </tr>
    <tr>
        <x-table.td type="header" value="дефектолог (в том числе учитель-дефектолог) - всего, в том числе:" />
        <x-table.td type="header" value="40" />
        <x-table.td type="input" value="{{ $data->has('CA45') ? $data['CA45'] : '' }}" coord="CA45" />
        <x-table.td type="input" value="{{ $data->has('CB45') ? $data['CB45'] : '' }}" coord="CB45" />
        <x-table.td type="input" value="{{ $data->has('CC45') ? $data['CC45'] : '' }}" coord="CC45" />
        <x-table.td type="input" value="{{ $data->has('CD45') ? $data['CD45'] : '' }}" coord="CD45" />
        <x-table.td type="input" value="{{ $data->has('CE45') ? $data['CE45'] : '' }}" coord="CE45" />
        <x-table.td type="input" value="{{ $data->has('CF45') ? $data['CF45'] : '' }}" coord="CF45" />
        <x-table.td type="input" value="{{ $data->has('CG45') ? $data['CG45'] : '' }}" coord="CG45" />
        <x-table.td type="input" value="{{ $data->has('CH45') ? $data['CH45'] : '' }}" coord="CH45" />
    </tr>
    <tr>
        <x-table.td type="header" value="тифлопедагог" />
        <x-table.td type="header" value="41" />
        <x-table.td type="input" value="{{ $data->has('CA46') ? $data['CA46'] : '' }}" coord="CA46" />
        <x-table.td type="input" value="{{ $data->has('CB46') ? $data['CB46'] : '' }}" coord="CB46" />
        <x-table.td type="input" value="{{ $data->has('CC46') ? $data['CC46'] : '' }}" coord="CC46" />
        <x-table.td type="input" value="{{ $data->has('CD46') ? $data['CD46'] : '' }}" coord="CD46" />
        <x-table.td type="input" value="{{ $data->has('CE46') ? $data['CE46'] : '' }}" coord="CE46" />
        <x-table.td type="input" value="{{ $data->has('CF46') ? $data['CF46'] : '' }}" coord="CF46" />
        <x-table.td type="input" value="{{ $data->has('CG46') ? $data['CG46'] : '' }}" coord="CG46" />
        <x-table.td type="input" value="{{ $data->has('CH46') ? $data['CH46'] : '' }}" coord="CH46" />
    </tr>
    <tr>
        <x-table.td type="header" value="сурдопедагог" />
        <x-table.td type="header" value="42" />
        <x-table.td type="input" value="{{ $data->has('CA47') ? $data['CA47'] : '' }}" coord="CA47" />
        <x-table.td type="input" value="{{ $data->has('CB47') ? $data['CB47'] : '' }}" coord="CB47" />
        <x-table.td type="input" value="{{ $data->has('CC47') ? $data['CC47'] : '' }}" coord="CC47" />
        <x-table.td type="input" value="{{ $data->has('CD47') ? $data['CD47'] : '' }}" coord="CD47" />
        <x-table.td type="input" value="{{ $data->has('CE47') ? $data['CE47'] : '' }}" coord="CE47" />
        <x-table.td type="input" value="{{ $data->has('CF47') ? $data['CF47'] : '' }}" coord="CF47" />
        <x-table.td type="input" value="{{ $data->has('CG47') ? $data['CG47'] : '' }}" coord="CG47" />
        <x-table.td type="input" value="{{ $data->has('CH47') ? $data['CH47'] : '' }}" coord="CH47" />
    </tr>
    <tr>
        <x-table.td type="header" value="сурдопедаолигофренопедагоггог" />
        <x-table.td type="header" value="43" />
        <x-table.td type="input" value="{{ $data->has('CA48') ? $data['CA48'] : '' }}" coord="CA48" />
        <x-table.td type="input" value="{{ $data->has('CB48') ? $data['CB48'] : '' }}" coord="CB48" />
        <x-table.td type="input" value="{{ $data->has('CC48') ? $data['CC48'] : '' }}" coord="CC48" />
        <x-table.td type="input" value="{{ $data->has('CD48') ? $data['CD48'] : '' }}" coord="CD48" />
        <x-table.td type="input" value="{{ $data->has('CE48') ? $data['CE48'] : '' }}" coord="CE48" />
        <x-table.td type="input" value="{{ $data->has('CF48') ? $data['CF48'] : '' }}" coord="CF48" />
        <x-table.td type="input" value="{{ $data->has('CG48') ? $data['CG48'] : '' }}" coord="CG48" />
        <x-table.td type="input" value="{{ $data->has('CH48') ? $data['CH48'] : '' }}" coord="CH48" />
    </tr>
    <tr>
        <x-table.td type="header" value="методист" />
        <x-table.td type="header" value="44" />
        <x-table.td type="input" value="{{ $data->has('CA49') ? $data['CA49'] : '' }}" coord="CA49" />
        <x-table.td type="input" value="{{ $data->has('CB49') ? $data['CB49'] : '' }}" coord="CB49" />
        <x-table.td type="input" value="{{ $data->has('CC49') ? $data['CC49'] : '' }}" coord="CC49" />
        <x-table.td type="input" value="{{ $data->has('CD49') ? $data['CD49'] : '' }}" coord="CD49" />
        <x-table.td type="input" value="{{ $data->has('CE49') ? $data['CE49'] : '' }}" coord="CE49" />
        <x-table.td type="input" value="{{ $data->has('CF49') ? $data['CF49'] : '' }}" coord="CF49" />
        <x-table.td type="input" value="{{ $data->has('CG49') ? $data['CG49'] : '' }}" coord="CG49" />
        <x-table.td type="input" value="{{ $data->has('CH49') ? $data['CH49'] : '' }}" coord="CH49" />
    </tr>
    <tr>
        <x-table.td type="header" value="Технический персонал, из них:" />
        <x-table.td type="header" value="45" />
        <x-table.td type="input" value="{{ $data->has('CA50') ? $data['CA50'] : '' }}" coord="CA50" />
        <x-table.td type="input" value="{{ $data->has('CB50') ? $data['CB50'] : '' }}" coord="CB50" />
        <x-table.td type="input" value="{{ $data->has('CC50') ? $data['CC50'] : '' }}" coord="CC50" />
        <x-table.td type="input" value="{{ $data->has('CD50') ? $data['CD50'] : '' }}" coord="CD50" />
        <x-table.td type="input" value="{{ $data->has('CE50') ? $data['CE50'] : '' }}" coord="CE50" />
        <x-table.td type="input" value="{{ $data->has('CF50') ? $data['CF50'] : '' }}" coord="CF50" />
        <x-table.td type="input" value="{{ $data->has('CG50') ? $data['CG50'] : '' }}" coord="CG50" />
        <x-table.td type="input" value="{{ $data->has('CH50') ? $data['CH50'] : '' }}" coord="CH50" />
    </tr>
    <tr>
        <x-table.td type="header" value="протезист" />
        <x-table.td type="header" value="46" />
        <x-table.td type="input" value="{{ $data->has('CA51') ? $data['CA51'] : '' }}" coord="CA51" />
        <x-table.td type="input" value="{{ $data->has('CB51') ? $data['CB51'] : '' }}" coord="CB51" />
        <x-table.td type="input" value="{{ $data->has('CC51') ? $data['CC51'] : '' }}" coord="CC51" />
        <x-table.td type="input" value="{{ $data->has('CD51') ? $data['CD51'] : '' }}" coord="CD51" />
        <x-table.td type="input" value="{{ $data->has('CE51') ? $data['CE51'] : '' }}" coord="CE51" />
        <x-table.td type="input" value="{{ $data->has('CF51') ? $data['CF51'] : '' }}" coord="CF51" />
        <x-table.td type="input" value="{{ $data->has('CG51') ? $data['CG51'] : '' }}" coord="CG51" />
        <x-table.td type="input" value="{{ $data->has('CH51') ? $data['CH51'] : '' }}" coord="CH51" />
    </tr>
</tbody>
