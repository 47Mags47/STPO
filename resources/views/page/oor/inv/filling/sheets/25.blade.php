<caption>{{ $sheet->header }}</caption>
<thead>
    <tr>
        <x-table.th rowspan=2 value="Наименование <br> показателей" header />
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
        <x-table.td type="header" value="Всего должностей специалистов, из них:" />
        <x-table.td value="01" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA6') ? $data['CA6'] : '' }}" name="CA6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB6') ? $data['CB6'] : '' }}" name="CB6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC6') ? $data['CC6'] : '' }}" name="CC6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD6') ? $data['CD6'] : '' }}" name="CD6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE6') ? $data['CE6'] : '' }}" name="CE6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF6') ? $data['CF6'] : '' }}" name="CF6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG6') ? $data['CG6'] : '' }}" name="CG6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH6') ? $data['CH6'] : '' }}" name="CH6" />
    </tr>
    <tr>
        <x-table.td type="header" value="Должности медицинских работников - всего, из них:" />
        <x-table.td value="02" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA7') ? $data['CA7'] : '' }}" name="CA7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB7') ? $data['CB7'] : '' }}" name="CB7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC7') ? $data['CC7'] : '' }}" name="CC7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD7') ? $data['CD7'] : '' }}" name="CD7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE7') ? $data['CE7'] : '' }}" name="CE7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF7') ? $data['CF7'] : '' }}" name="CF7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG7') ? $data['CG7'] : '' }}" name="CG7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH7') ? $data['CH7'] : '' }}" name="CH7" />
    </tr>
    <tr>
        <x-table.td type="header" value="врачи - специалисты по профилю оказания медицинской помощи, всего, из них:" />
        <x-table.td value="03" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" name="CA8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" name="CB8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" name="CC8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" name="CD8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" name="CE8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" name="CF8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" name="CG8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" name="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач по медицинской реабилитации" />
        <x-table.td value="04" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA9') ? $data['CA9'] : '' }}" name="CA9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB9') ? $data['CB9'] : '' }}" name="CB9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC9') ? $data['CC9'] : '' }}" name="CC9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD9') ? $data['CD9'] : '' }}" name="CD9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE9') ? $data['CE9'] : '' }}" name="CE9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF9') ? $data['CF9'] : '' }}" name="CF9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG9') ? $data['CG9'] : '' }}" name="CG9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH9') ? $data['CH9'] : '' }}" name="CH9" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач по лечебной физкультуре" />
        <x-table.td value="05" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA10') ? $data['CA10'] : '' }}" name="CA10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB10') ? $data['CB10'] : '' }}" name="CB10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC10') ? $data['CC10'] : '' }}" name="CC10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD10') ? $data['CD10'] : '' }}" name="CD10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE10') ? $data['CE10'] : '' }}" name="CE10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF10') ? $data['CF10'] : '' }}" name="CF10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG10') ? $data['CG10'] : '' }}" name="CG10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH10') ? $data['CH10'] : '' }}" name="CH10" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач физиотерапевт" />
        <x-table.td value="06" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA11') ? $data['CA11'] : '' }}" name="CA11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB11') ? $data['CB11'] : '' }}" name="CB11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC11') ? $data['CC11'] : '' }}" name="CC11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD11') ? $data['CD11'] : '' }}" name="CD11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE11') ? $data['CE11'] : '' }}" name="CE11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF11') ? $data['CF11'] : '' }}" name="CF11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG11') ? $data['CG11'] : '' }}" name="CG11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH11') ? $data['CH11'] : '' }}" name="CH11" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач-диетолог" />
        <x-table.td value="07" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA12') ? $data['CA12'] : '' }}" name="CA12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB12') ? $data['CB12'] : '' }}" name="CB12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC12') ? $data['CC12'] : '' }}" name="CC12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD12') ? $data['CD12'] : '' }}" name="CD12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE12') ? $data['CE12'] : '' }}" name="CE12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF12') ? $data['CF12'] : '' }}" name="CF12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG12') ? $data['CG12'] : '' }}" name="CG12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH12') ? $data['CH12'] : '' }}" name="CH12" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач мануальной терапии" />
        <x-table.td value="08" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA13') ? $data['CA13'] : '' }}" name="CA13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB13') ? $data['CB13'] : '' }}" name="CB13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC13') ? $data['CC13'] : '' }}" name="CC13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD13') ? $data['CD13'] : '' }}" name="CD13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE13') ? $data['CE13'] : '' }}" name="CE13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF13') ? $data['CF13'] : '' }}" name="CF13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG13') ? $data['CG13'] : '' }}" name="CG13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH13') ? $data['CH13'] : '' }}" name="CH13" />
    </tr>
    <tr>
        <x-table.td type="header" value="рефлексотерапевт" />
        <x-table.td value="09" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA14') ? $data['CA14'] : '' }}" name="CA14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB14') ? $data['CB14'] : '' }}" name="CB14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC14') ? $data['CC14'] : '' }}" name="CC14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD14') ? $data['CD14'] : '' }}" name="CD14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE14') ? $data['CE14'] : '' }}" name="CE14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF14') ? $data['CF14'] : '' }}" name="CF14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG14') ? $data['CG14'] : '' }}" name="CG14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH14') ? $data['CH14'] : '' }}" name="CH14" />
    </tr>
    <tr>
        <x-table.td type="header" value="психотерапевт" />
        <x-table.td value="10" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA15') ? $data['CA15'] : '' }}" name="CA15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB15') ? $data['CB15'] : '' }}" name="CB15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC15') ? $data['CC15'] : '' }}" name="CC15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD15') ? $data['CD15'] : '' }}" name="CD15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE15') ? $data['CE15'] : '' }}" name="CE15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF15') ? $data['CF15'] : '' }}" name="CF15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG15') ? $data['CG15'] : '' }}" name="CG15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH15') ? $data['CH15'] : '' }}" name="CH15" />
    </tr>
    <tr>
        <x-table.td type="header" value="специалисты с высшим немедицинским образованием - всего, в том числе:" />
        <x-table.td value="11" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA16') ? $data['CA16'] : '' }}" name="CA16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB16') ? $data['CB16'] : '' }}" name="CB16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC16') ? $data['CC16'] : '' }}" name="CC16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD16') ? $data['CD16'] : '' }}" name="CD16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE16') ? $data['CE16'] : '' }}" name="CE16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF16') ? $data['CF16'] : '' }}" name="CF16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG16') ? $data['CG16'] : '' }}" name="CG16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH16') ? $data['CH16'] : '' }}" name="CH16" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинский психолог" />
        <x-table.td value="12" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA17') ? $data['CA17'] : '' }}" name="CA17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB17') ? $data['CB17'] : '' }}" name="CB17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC17') ? $data['CC17'] : '' }}" name="CC17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD17') ? $data['CD17'] : '' }}" name="CD17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE17') ? $data['CE17'] : '' }}" name="CE17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF17') ? $data['CF17'] : '' }}" name="CF17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG17') ? $data['CG17'] : '' }}" name="CG17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH17') ? $data['CH17'] : '' }}" name="CH17" />
    </tr>
    <tr>
        <x-table.td type="header" value="нейропсихолог" />
        <x-table.td value="13" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA18') ? $data['CA18'] : '' }}" name="CA18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB18') ? $data['CB18'] : '' }}" name="CB18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC18') ? $data['CC18'] : '' }}" name="CC18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD18') ? $data['CD18'] : '' }}" name="CD18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE18') ? $data['CE18'] : '' }}" name="CE18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF18') ? $data['CF18'] : '' }}" name="CF18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG18') ? $data['CG18'] : '' }}" name="CG18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH18') ? $data['CH18'] : '' }}" name="CH18" />
    </tr>
    <tr>
        <x-table.td type="header" value="средний медицинский персонал - всего, из них:" />
        <x-table.td value="14" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA19') ? $data['CA19'] : '' }}" name="CA19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB19') ? $data['CB19'] : '' }}" name="CB19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC19') ? $data['CC19'] : '' }}" name="CC19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD19') ? $data['CD19'] : '' }}" name="CD19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE19') ? $data['CE19'] : '' }}" name="CE19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF19') ? $data['CF19'] : '' }}" name="CF19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG19') ? $data['CG19'] : '' }}" name="CG19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH19') ? $data['CH19'] : '' }}" name="CH19" />
    </tr>
    <tr>
        <x-table.td type="header" value="инструктор по лечебной физкультуре" />
        <x-table.td value="15" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA20') ? $data['CA20'] : '' }}" name="CA20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB20') ? $data['CB20'] : '' }}" name="CB20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC20') ? $data['CC20'] : '' }}" name="CC20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD20') ? $data['CD20'] : '' }}" name="CD20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE20') ? $data['CE20'] : '' }}" name="CE20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF20') ? $data['CF20'] : '' }}" name="CF20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG20') ? $data['CG20'] : '' }}" name="CG20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH20') ? $data['CH20'] : '' }}" name="CH20" />
    </tr>
    <tr>
        <x-table.td type="header" value="инструктор-методист по лечебной физкультуре" />
        <x-table.td value="16" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA21') ? $data['CA21'] : '' }}" name="CA21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB21') ? $data['CB21'] : '' }}" name="CB21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC21') ? $data['CC21'] : '' }}" name="CC21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD21') ? $data['CD21'] : '' }}" name="CD21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE21') ? $data['CE21'] : '' }}" name="CE21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF21') ? $data['CF21'] : '' }}" name="CF21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG21') ? $data['CG21'] : '' }}" name="CG21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH21') ? $data['CH21'] : '' }}" name="CH21" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинская сестра по медицинской реабилитации" />
        <x-table.td value="17" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA22') ? $data['CA22'] : '' }}" name="CA22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB22') ? $data['CB22'] : '' }}" name="CB22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC22') ? $data['CC22'] : '' }}" name="CC22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD22') ? $data['CD22'] : '' }}" name="CD22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE22') ? $data['CE22'] : '' }}" name="CE22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF22') ? $data['CF22'] : '' }}" name="CF22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG22') ? $data['CG22'] : '' }}" name="CG22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH22') ? $data['CH22'] : '' }}" name="CH22" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинская сестра по массажу" />
        <x-table.td value="18" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA23') ? $data['CA23'] : '' }}" name="CA23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB23') ? $data['CB23'] : '' }}" name="CB23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC23') ? $data['CC23'] : '' }}" name="CC23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD23') ? $data['CD23'] : '' }}" name="CD23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE23') ? $data['CE23'] : '' }}" name="CE23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF23') ? $data['CF23'] : '' }}" name="CF23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG23') ? $data['CG23'] : '' }}" name="CG23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH23') ? $data['CH23'] : '' }}" name="CH23" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинская сестра по физиотерапии" />
        <x-table.td value="19" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA24') ? $data['CA24'] : '' }}" name="CA24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB24') ? $data['CB24'] : '' }}" name="CB24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC24') ? $data['CC24'] : '' }}" name="CC24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD24') ? $data['CD24'] : '' }}" name="CD24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE24') ? $data['CE24'] : '' }}" name="CE24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF24') ? $data['CF24'] : '' }}" name="CF24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG24') ? $data['CG24'] : '' }}" name="CG24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH24') ? $data['CH24'] : '' }}" name="CH24" />
    </tr>
    <tr>
        <x-table.td type="header" value="кинезиоспециалист" />
        <x-table.td value="20" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA25') ? $data['CA25'] : '' }}" name="CA25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB25') ? $data['CB25'] : '' }}" name="CB25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC25') ? $data['CC25'] : '' }}" name="CC25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD25') ? $data['CD25'] : '' }}" name="CD25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE25') ? $data['CE25'] : '' }}" name="CE25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF25') ? $data['CF25'] : '' }}" name="CF25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG25') ? $data['CG25'] : '' }}" name="CG25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH25') ? $data['CH25'] : '' }}" name="CH25" />
    </tr>
    <tr>
        <x-table.td type="header" value="эргоспециалист" />
        <x-table.td value="21" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA26') ? $data['CA26'] : '' }}" name="CA26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB26') ? $data['CB26'] : '' }}" name="CB26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC26') ? $data['CC26'] : '' }}" name="CC26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD26') ? $data['CD26'] : '' }}" name="CD26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE26') ? $data['CE26'] : '' }}" name="CE26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF26') ? $data['CF26'] : '' }}" name="CF26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG26') ? $data['CG26'] : '' }}" name="CG26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH26') ? $data['CH26'] : '' }}" name="CH26" />
    </tr>
    <tr>
        <x-table.td type="header" value="Должности специалистов в области социального обслуживания - всего, из них:" />
        <x-table.td value="22" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA27') ? $data['CA27'] : '' }}" name="CA27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB27') ? $data['CB27'] : '' }}" name="CB27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC27') ? $data['CC27'] : '' }}" name="CC27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD27') ? $data['CD27'] : '' }}" name="CD27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE27') ? $data['CE27'] : '' }}" name="CE27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF27') ? $data['CF27'] : '' }}" name="CF27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG27') ? $data['CG27'] : '' }}" name="CG27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH27') ? $data['CH27'] : '' }}" name="CH27" />
    </tr>
    <tr>
        <x-table.td type="header" value="специалист по социальной работе" />
        <x-table.td value="23" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA28') ? $data['CA28'] : '' }}" name="CA28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB28') ? $data['CB28'] : '' }}" name="CB28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC28') ? $data['CC28'] : '' }}" name="CC28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD28') ? $data['CD28'] : '' }}" name="CD28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE28') ? $data['CE28'] : '' }}" name="CE28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF28') ? $data['CF28'] : '' }}" name="CF28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG28') ? $data['CG28'] : '' }}" name="CG28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH28') ? $data['CH28'] : '' }}" name="CH28" />
    </tr>
    <tr>
        <x-table.td type="header" value="социальный работник" />
        <x-table.td value="24" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA29') ? $data['CA29'] : '' }}" name="CA29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB29') ? $data['CB29'] : '' }}" name="CB29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC29') ? $data['CC29'] : '' }}" name="CC29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD29') ? $data['CD29'] : '' }}" name="CD29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE29') ? $data['CE29'] : '' }}" name="CE29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF29') ? $data['CF29'] : '' }}" name="CF29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG29') ? $data['CG29'] : '' }}" name="CG29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH29') ? $data['CH29'] : '' }}" name="CH29" />
    </tr>
    <tr>
        <x-table.td type="header" value="специалист по реабилитационной работе в социальной сфере" />
        <x-table.td value="25" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA30') ? $data['CA30'] : '' }}" name="CA30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB30') ? $data['CB30'] : '' }}" name="CB30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC30') ? $data['CC30'] : '' }}" name="CC30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD30') ? $data['CD30'] : '' }}" name="CD30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE30') ? $data['CE30'] : '' }}" name="CE30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF30') ? $data['CF30'] : '' }}" name="CF30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG30') ? $data['CG30'] : '' }}" name="CG30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH30') ? $data['CH30'] : '' }}" name="CH30" />
    </tr>
    <tr>
        <x-table.td type="header" value="психолог в социальной сфере" />
        <x-table.td value="26" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA31') ? $data['CA31'] : '' }}" name="CA31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB31') ? $data['CB31'] : '' }}" name="CB31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC31') ? $data['CC31'] : '' }}" name="CC31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD31') ? $data['CD31'] : '' }}" name="CD31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE31') ? $data['CE31'] : '' }}" name="CE31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF31') ? $data['CF31'] : '' }}" name="CF31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG31') ? $data['CG31'] : '' }}" name="CG31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH31') ? $data['CH31'] : '' }}" name="CH31" />
    </tr>
    <tr>
        <x-table.td type="header" value="специалист по работе с семьей" />
        <x-table.td value="27" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA32') ? $data['CA32'] : '' }}" name="CA32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB32') ? $data['CB32'] : '' }}" name="CB32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC32') ? $data['CC32'] : '' }}" name="CC32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD32') ? $data['CD32'] : '' }}" name="CD32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE32') ? $data['CE32'] : '' }}" name="CE32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF32') ? $data['CF32'] : '' }}" name="CF32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG32') ? $data['CG32'] : '' }}" name="CG32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH32') ? $data['CH32'] : '' }}" name="CH32" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="ассистент (помощник) по оказанию технической помощи инвалидами и лицам с ограниченными возможностями здоровья" />
        <x-table.td value="28" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA33') ? $data['CA33'] : '' }}" name="CA33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB33') ? $data['CB33'] : '' }}" name="CB33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC33') ? $data['CC33'] : '' }}" name="CC33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD33') ? $data['CD33'] : '' }}" name="CD33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE33') ? $data['CE33'] : '' }}" name="CE33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF33') ? $data['CF33'] : '' }}" name="CF33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG33') ? $data['CG33'] : '' }}" name="CG33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH33') ? $data['CH33'] : '' }}" name="CH33" />
    </tr>
    <tr>
        <x-table.td type="header" value="переводчик русского жестового языка" />
        <x-table.td value="29" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA34') ? $data['CA34'] : '' }}" name="CA34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB34') ? $data['CB34'] : '' }}" name="CB34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC34') ? $data['CC34'] : '' }}" name="CC34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD34') ? $data['CD34'] : '' }}" name="CD34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE34') ? $data['CE34'] : '' }}" name="CE34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF34') ? $data['CF34'] : '' }}" name="CF34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG34') ? $data['CG34'] : '' }}" name="CG34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH34') ? $data['CH34'] : '' }}" name="CH34" />
    </tr>
    <tr>
        <x-table.td type="header" value="тифлосурдопереводчик" />
        <x-table.td value="30" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA35') ? $data['CA35'] : '' }}" name="CA35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB35') ? $data['CB35'] : '' }}" name="CB35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC35') ? $data['CC35'] : '' }}" name="CC35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD35') ? $data['CD35'] : '' }}" name="CD35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE35') ? $data['CE35'] : '' }}" name="CE35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF35') ? $data['CF35'] : '' }}" name="CF35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG35') ? $data['CG35'] : '' }}" name="CG35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH35') ? $data['CH35'] : '' }}" name="CH35" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="Должности специалистов в области физической культуры и спорта - всего, из них:" />
        <x-table.td value="31" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA36') ? $data['CA36'] : '' }}" name="CA36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB36') ? $data['CB36'] : '' }}" name="CB36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC36') ? $data['CC36'] : '' }}" name="CC36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD36') ? $data['CD36'] : '' }}" name="CD36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE36') ? $data['CE36'] : '' }}" name="CE36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF36') ? $data['CF36'] : '' }}" name="CF36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG36') ? $data['CG36'] : '' }}" name="CG36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH36') ? $data['CH36'] : '' }}" name="CH36" />
    </tr>
    <tr>
        <x-table.td type="header" value="инструктор по адаптивной физической культуре" />
        <x-table.td value="32" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA37') ? $data['CA37'] : '' }}" name="CA37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB37') ? $data['CB37'] : '' }}" name="CB37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC37') ? $data['CC37'] : '' }}" name="CC37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD37') ? $data['CD37'] : '' }}" name="CD37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE37') ? $data['CE37'] : '' }}" name="CE37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF37') ? $data['CF37'] : '' }}" name="CF37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG37') ? $data['CG37'] : '' }}" name="CG37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH37') ? $data['CH37'] : '' }}" name="CH37" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="инструктор-методист по адаптивной физической культуре и адаптивному спорту" />
        <x-table.td value="33" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA38') ? $data['CA38'] : '' }}" name="CA38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB38') ? $data['CB38'] : '' }}" name="CB38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC38') ? $data['CC38'] : '' }}" name="CC38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD38') ? $data['CD38'] : '' }}" name="CD38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE38') ? $data['CE38'] : '' }}" name="CE38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF38') ? $data['CF38'] : '' }}" name="CF38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG38') ? $data['CG38'] : '' }}" name="CG38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH38') ? $data['CH38'] : '' }}" name="CH38" />
    </tr>
    <tr>
        <x-table.td type="header" value="тренер по адаптивной физической культуре и адаптивному спорту" />
        <x-table.td value="34" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA39') ? $data['CA39'] : '' }}" name="CA39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB39') ? $data['CB39'] : '' }}" name="CB39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC39') ? $data['CC39'] : '' }}" name="CC39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD39') ? $data['CD39'] : '' }}" name="CD39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE39') ? $data['CE39'] : '' }}" name="CE39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF39') ? $data['CF39'] : '' }}" name="CF39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG39') ? $data['CG39'] : '' }}" name="CG39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH39') ? $data['CH39'] : '' }}" name="CH39" />
    </tr>
    <tr>
        <x-table.td type="header" value="Должности специалистов в области образования и науки - всего, из них:" />
        <x-table.td value="35" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA40') ? $data['CA40'] : '' }}" name="CA40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB40') ? $data['CB40'] : '' }}" name="CB40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC40') ? $data['CC40'] : '' }}" name="CC40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD40') ? $data['CD40'] : '' }}" name="CD40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE40') ? $data['CE40'] : '' }}" name="CE40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF40') ? $data['CF40'] : '' }}" name="CF40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG40') ? $data['CG40'] : '' }}" name="CG40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH40') ? $data['CH40'] : '' }}" name="CH40" />
    </tr>
    <tr>
        <x-table.td type="header" value="педагог-психолог (психолог в сфере образования)" />
        <x-table.td value="36" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA41') ? $data['CA41'] : '' }}" name="CA41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB41') ? $data['CB41'] : '' }}" name="CB41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC41') ? $data['CC41'] : '' }}" name="CC41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD41') ? $data['CD41'] : '' }}" name="CD41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE41') ? $data['CE41'] : '' }}" name="CE41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF41') ? $data['CF41'] : '' }}" name="CF41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG41') ? $data['CG41'] : '' }}" name="CG41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH41') ? $data['CH41'] : '' }}" name="CH41" />
    </tr>
    <tr>
        <x-table.td type="header" value="ассистент (помощник)" />
        <x-table.td value="37" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA42') ? $data['CA42'] : '' }}" name="CA42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB42') ? $data['CB42'] : '' }}" name="CB42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC42') ? $data['CC42'] : '' }}" name="CC42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD42') ? $data['CD42'] : '' }}" name="CD42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE42') ? $data['CE42'] : '' }}" name="CE42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF42') ? $data['CF42'] : '' }}" name="CF42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG42') ? $data['CG42'] : '' }}" name="CG42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH42') ? $data['CH42'] : '' }}" name="CH42" />
    </tr>
    <tr>
        <x-table.td type="header" value="тьютор" />
        <x-table.td value="38" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA43') ? $data['CA43'] : '' }}" name="CA43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB43') ? $data['CB43'] : '' }}" name="CB43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC43') ? $data['CC43'] : '' }}" name="CC43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD43') ? $data['CD43'] : '' }}" name="CD43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE43') ? $data['CE43'] : '' }}" name="CE43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF43') ? $data['CF43'] : '' }}" name="CF43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG43') ? $data['CG43'] : '' }}" name="CG43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH43') ? $data['CH43'] : '' }}" name="CH43" />
    </tr>
    <tr>
        <x-table.td type="header" value="логопед (в том числе учитель-логопед)" />
        <x-table.td value="39" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA44') ? $data['CA44'] : '' }}" name="CA44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB44') ? $data['CB44'] : '' }}" name="CB44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC44') ? $data['CC44'] : '' }}" name="CC44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD44') ? $data['CD44'] : '' }}" name="CD44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE44') ? $data['CE44'] : '' }}" name="CE44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF44') ? $data['CF44'] : '' }}" name="CF44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG44') ? $data['CG44'] : '' }}" name="CG44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH44') ? $data['CH44'] : '' }}" name="CH44" />
    </tr>
    <tr>
        <x-table.td type="header" value="дефектолог (в том числе учитель-дефектолог) - всего, в том числе:" />
        <x-table.td value="40" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA45') ? $data['CA45'] : '' }}" name="CA45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB45') ? $data['CB45'] : '' }}" name="CB45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC45') ? $data['CC45'] : '' }}" name="CC45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD45') ? $data['CD45'] : '' }}" name="CD45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE45') ? $data['CE45'] : '' }}" name="CE45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF45') ? $data['CF45'] : '' }}" name="CF45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG45') ? $data['CG45'] : '' }}" name="CG45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH45') ? $data['CH45'] : '' }}" name="CH45" />
    </tr>
    <tr>
        <x-table.td type="header" value="тифлопедагог" />
        <x-table.td value="41" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA46') ? $data['CA46'] : '' }}" name="CA46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB46') ? $data['CB46'] : '' }}" name="CB46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC46') ? $data['CC46'] : '' }}" name="CC46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD46') ? $data['CD46'] : '' }}" name="CD46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE46') ? $data['CE46'] : '' }}" name="CE46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF46') ? $data['CF46'] : '' }}" name="CF46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG46') ? $data['CG46'] : '' }}" name="CG46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH46') ? $data['CH46'] : '' }}" name="CH46" />
    </tr>
    <tr>
        <x-table.td type="header" value="сурдопедагог" />
        <x-table.td value="42" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA47') ? $data['CA47'] : '' }}" name="CA47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB47') ? $data['CB47'] : '' }}" name="CB47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC47') ? $data['CC47'] : '' }}" name="CC47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD47') ? $data['CD47'] : '' }}" name="CD47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE47') ? $data['CE47'] : '' }}" name="CE47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF47') ? $data['CF47'] : '' }}" name="CF47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG47') ? $data['CG47'] : '' }}" name="CG47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH47') ? $data['CH47'] : '' }}" name="CH47" />
    </tr>
    <tr>
        <x-table.td type="header" value="сурдопедаолигофренопедагоггог" />
        <x-table.td value="43" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA48') ? $data['CA48'] : '' }}" name="CA48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB48') ? $data['CB48'] : '' }}" name="CB48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC48') ? $data['CC48'] : '' }}" name="CC48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD48') ? $data['CD48'] : '' }}" name="CD48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE48') ? $data['CE48'] : '' }}" name="CE48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF48') ? $data['CF48'] : '' }}" name="CF48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG48') ? $data['CG48'] : '' }}" name="CG48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH48') ? $data['CH48'] : '' }}" name="CH48" />
    </tr>
    <tr>
        <x-table.td type="header" value="методист" />
        <x-table.td value="44" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA49') ? $data['CA49'] : '' }}" name="CA49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB49') ? $data['CB49'] : '' }}" name="CB49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC49') ? $data['CC49'] : '' }}" name="CC49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD49') ? $data['CD49'] : '' }}" name="CD49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE49') ? $data['CE49'] : '' }}" name="CE49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF49') ? $data['CF49'] : '' }}" name="CF49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG49') ? $data['CG49'] : '' }}" name="CG49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH49') ? $data['CH49'] : '' }}" name="CH49" />
    </tr>
    <tr>
        <x-table.td type="header" value="Технический персонал, из них:" />
        <x-table.td value="45" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA50') ? $data['CA50'] : '' }}" name="CA50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB50') ? $data['CB50'] : '' }}" name="CB50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC50') ? $data['CC50'] : '' }}" name="CC50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD50') ? $data['CD50'] : '' }}" name="CD50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE50') ? $data['CE50'] : '' }}" name="CE50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF50') ? $data['CF50'] : '' }}" name="CF50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG50') ? $data['CG50'] : '' }}" name="CG50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH50') ? $data['CH50'] : '' }}" name="CH50" />
    </tr>
    <tr>
        <x-table.td type="header" value="протезист" />
        <x-table.td value="46" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA51') ? $data['CA51'] : '' }}" name="CA51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB51') ? $data['CB51'] : '' }}" name="CB51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC51') ? $data['CC51'] : '' }}" name="CC51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD51') ? $data['CD51'] : '' }}" name="CD51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE51') ? $data['CE51'] : '' }}" name="CE51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF51') ? $data['CF51'] : '' }}" name="CF51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG51') ? $data['CG51'] : '' }}" name="CG51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH51') ? $data['CH51'] : '' }}" name="CH51" />
    </tr>
</tbody>
