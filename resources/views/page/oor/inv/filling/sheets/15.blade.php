<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th rowspan=2 value="Наименование показателей" />
        <x-table.th rowspan=2 value="№ строки" />
        <x-table.th rowspan=2 value="Всего, ед." />
        <x-table.th colspan=3 value="Региональные формы собственности" />
        <x-table.th colspan=3 value="Муниципальные формы собственности" />
        <x-table.th colspan=3 value="Другие формы собственности" />
    </tr>
    <tr>
        <x-table.th value="инвалидам в возрасте 18 лет и старше, ед." />
        <x-table.th value="детям-инвалидам, ед." />
        <x-table.th value="одновременно инвалидам  в возрасте 18 лет и старше и детям-инвалидам, ед." />
        <x-table.th value="инвалидам в возрасте 18 лет и старше, ед." />
        <x-table.th value="детям-инвалидам, ед." />
        <x-table.th value="одновременно инвалидам  в возрасте 18 лет и старше и детям-инвалидам, ед." />
        <x-table.th value="инвалидам в возрасте 18 лет и старше, ед." />
        <x-table.th value="детям-инвалидам, ед." />
        <x-table.th value="одновременно инвалидам  в возрасте 18 лет и старше и детям-инвалидам, ед." />
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
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header" value="Всего многопрофильных реабилитационных центров, из них:" />
        <x-table.td value="01" h='center' />
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
    </tr>
    <tr>
        <x-table.td type="header" value="Базового уровня - всего, из них:" />
        <x-table.td value="02" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
        <x-table.td type="input" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" coord="CG8" />
        <x-table.td type="input" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" coord="CH8" />
        <x-table.td type="input" value="{{ $data->has('CI8') ? $data['CI8'] : '' }}" coord="CI8" />
        <x-table.td type="input" value="{{ $data->has('CJ8') ? $data['CJ8'] : '' }}" coord="CJ8" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере социальной защиты населения" />
        <x-table.td value="03" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA9') ? $data['CA9'] : '' }}" coord="CA9" />
        <x-table.td type="input" value="{{ $data->has('CB9') ? $data['CB9'] : '' }}" coord="CB9" />
        <x-table.td type="input" value="{{ $data->has('CC9') ? $data['CC9'] : '' }}" coord="CC9" />
        <x-table.td type="input" value="{{ $data->has('CD9') ? $data['CD9'] : '' }}" coord="CD9" />
        <x-table.td type="input" value="{{ $data->has('CE9') ? $data['CE9'] : '' }}" coord="CE9" />
        <x-table.td type="input" value="{{ $data->has('CF9') ? $data['CF9'] : '' }}" coord="CF9" />
        <x-table.td type="input" value="{{ $data->has('CG9') ? $data['CG9'] : '' }}" coord="CG9" />
        <x-table.td type="input" value="{{ $data->has('CH9') ? $data['CH9'] : '' }}" coord="CH9" />
        <x-table.td type="input" value="{{ $data->has('CI9') ? $data['CI9'] : '' }}" coord="CI9" />
        <x-table.td type="input" value="{{ $data->has('CJ9') ? $data['CJ9'] : '' }}" coord="CJ9" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере образования" />
        <x-table.td value="04" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA10') ? $data['CA10'] : '' }}" coord="CA10" />
        <x-table.td type="input" value="{{ $data->has('CB10') ? $data['CB10'] : '' }}" coord="CB10" />
        <x-table.td type="input" value="{{ $data->has('CC10') ? $data['CC10'] : '' }}" coord="CC10" />
        <x-table.td type="input" value="{{ $data->has('CD10') ? $data['CD10'] : '' }}" coord="CD10" />
        <x-table.td type="input" value="{{ $data->has('CE10') ? $data['CE10'] : '' }}" coord="CE10" />
        <x-table.td type="input" value="{{ $data->has('CF10') ? $data['CF10'] : '' }}" coord="CF10" />
        <x-table.td type="input" value="{{ $data->has('CG10') ? $data['CG10'] : '' }}" coord="CG10" />
        <x-table.td type="input" value="{{ $data->has('CH10') ? $data['CH10'] : '' }}" coord="CH10" />
        <x-table.td type="input" value="{{ $data->has('CI10') ? $data['CI10'] : '' }}" coord="CI10" />
        <x-table.td type="input" value="{{ $data->has('CJ10') ? $data['CJ10'] : '' }}" coord="CJ10" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере занятости населения" />
        <x-table.td value="05" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA11') ? $data['CA11'] : '' }}" coord="CA11" />
        <x-table.td type="input" value="{{ $data->has('CB11') ? $data['CB11'] : '' }}" coord="CB11" />
        <x-table.td type="input" value="{{ $data->has('CC11') ? $data['CC11'] : '' }}" coord="CC11" />
        <x-table.td type="input" value="{{ $data->has('CD11') ? $data['CD11'] : '' }}" coord="CD11" />
        <x-table.td type="input" value="{{ $data->has('CE11') ? $data['CE11'] : '' }}" coord="CE11" />
        <x-table.td type="input" value="{{ $data->has('CF11') ? $data['CF11'] : '' }}" coord="CF11" />
        <x-table.td type="input" value="{{ $data->has('CG11') ? $data['CG11'] : '' }}" coord="CG11" />
        <x-table.td type="input" value="{{ $data->has('CH11') ? $data['CH11'] : '' }}" coord="CH11" />
        <x-table.td type="input" value="{{ $data->has('CI11') ? $data['CI11'] : '' }}" coord="CI11" />
        <x-table.td type="input" value="{{ $data->has('CJ11') ? $data['CJ11'] : '' }}" coord="CJ11" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере физической культуры и спорта" />
        <x-table.td value="06" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA12') ? $data['CA12'] : '' }}" coord="CA12" />
        <x-table.td type="input" value="{{ $data->has('CB12') ? $data['CB12'] : '' }}" coord="CB12" />
        <x-table.td type="input" value="{{ $data->has('CC12') ? $data['CC12'] : '' }}" coord="CC12" />
        <x-table.td type="input" value="{{ $data->has('CD12') ? $data['CD12'] : '' }}" coord="CD12" />
        <x-table.td type="input" value="{{ $data->has('CE12') ? $data['CE12'] : '' }}" coord="CE12" />
        <x-table.td type="input" value="{{ $data->has('CF12') ? $data['CF12'] : '' }}" coord="CF12" />
        <x-table.td type="input" value="{{ $data->has('CG12') ? $data['CG12'] : '' }}" coord="CG12" />
        <x-table.td type="input" value="{{ $data->has('CH12') ? $data['CH12'] : '' }}" coord="CH12" />
        <x-table.td type="input" value="{{ $data->has('CI12') ? $data['CI12'] : '' }}" coord="CI12" />
        <x-table.td type="input" value="{{ $data->has('CJ12') ? $data['CJ12'] : '' }}" coord="CJ12" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере культуры" />
        <x-table.td value="07" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA13') ? $data['CA13'] : '' }}" coord="CA13" />
        <x-table.td type="input" value="{{ $data->has('CB13') ? $data['CB13'] : '' }}" coord="CB13" />
        <x-table.td type="input" value="{{ $data->has('CC13') ? $data['CC13'] : '' }}" coord="CC13" />
        <x-table.td type="input" value="{{ $data->has('CD13') ? $data['CD13'] : '' }}" coord="CD13" />
        <x-table.td type="input" value="{{ $data->has('CE13') ? $data['CE13'] : '' }}" coord="CE13" />
        <x-table.td type="input" value="{{ $data->has('CF13') ? $data['CF13'] : '' }}" coord="CF13" />
        <x-table.td type="input" value="{{ $data->has('CG13') ? $data['CG13'] : '' }}" coord="CG13" />
        <x-table.td type="input" value="{{ $data->has('CH13') ? $data['CH13'] : '' }}" coord="CH13" />
        <x-table.td type="input" value="{{ $data->has('CI13') ? $data['CI13'] : '' }}" coord="CI13" />
        <x-table.td type="input" value="{{ $data->has('CJ13') ? $data['CJ13'] : '' }}" coord="CJ13" />
    </tr>
    <tr>
        <x-table.td type="header" value="Оптимального уровня - всего, из них:" />
        <x-table.td value="08" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA14') ? $data['CA14'] : '' }}" coord="CA14" />
        <x-table.td type="input" value="{{ $data->has('CB14') ? $data['CB14'] : '' }}" coord="CB14" />
        <x-table.td type="input" value="{{ $data->has('CC14') ? $data['CC14'] : '' }}" coord="CC14" />
        <x-table.td type="input" value="{{ $data->has('CD14') ? $data['CD14'] : '' }}" coord="CD14" />
        <x-table.td type="input" value="{{ $data->has('CE14') ? $data['CE14'] : '' }}" coord="CE14" />
        <x-table.td type="input" value="{{ $data->has('CF14') ? $data['CF14'] : '' }}" coord="CF14" />
        <x-table.td type="input" value="{{ $data->has('CG14') ? $data['CG14'] : '' }}" coord="CG14" />
        <x-table.td type="input" value="{{ $data->has('CH14') ? $data['CH14'] : '' }}" coord="CH14" />
        <x-table.td type="input" value="{{ $data->has('CI14') ? $data['CI14'] : '' }}" coord="CI14" />
        <x-table.td type="input" value="{{ $data->has('CJ14') ? $data['CJ14'] : '' }}" coord="CJ14" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере социальной защиты населения" />
        <x-table.td value="09" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA15') ? $data['CA15'] : '' }}" coord="CA15" />
        <x-table.td type="input" value="{{ $data->has('CB15') ? $data['CB15'] : '' }}" coord="CB15" />
        <x-table.td type="input" value="{{ $data->has('CC15') ? $data['CC15'] : '' }}" coord="CC15" />
        <x-table.td type="input" value="{{ $data->has('CD15') ? $data['CD15'] : '' }}" coord="CD15" />
        <x-table.td type="input" value="{{ $data->has('CE15') ? $data['CE15'] : '' }}" coord="CE15" />
        <x-table.td type="input" value="{{ $data->has('CF15') ? $data['CF15'] : '' }}" coord="CF15" />
        <x-table.td type="input" value="{{ $data->has('CG15') ? $data['CG15'] : '' }}" coord="CG15" />
        <x-table.td type="input" value="{{ $data->has('CH15') ? $data['CH15'] : '' }}" coord="CH15" />
        <x-table.td type="input" value="{{ $data->has('CI15') ? $data['CI15'] : '' }}" coord="CI15" />
        <x-table.td type="input" value="{{ $data->has('CJ15') ? $data['CJ15'] : '' }}" coord="CJ15" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере образования" />
        <x-table.td value="10" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA16') ? $data['CA16'] : '' }}" coord="CA16" />
        <x-table.td type="input" value="{{ $data->has('CB16') ? $data['CB16'] : '' }}" coord="CB16" />
        <x-table.td type="input" value="{{ $data->has('CC16') ? $data['CC16'] : '' }}" coord="CC16" />
        <x-table.td type="input" value="{{ $data->has('CD16') ? $data['CD16'] : '' }}" coord="CD16" />
        <x-table.td type="input" value="{{ $data->has('CE16') ? $data['CE16'] : '' }}" coord="CE16" />
        <x-table.td type="input" value="{{ $data->has('CF16') ? $data['CF16'] : '' }}" coord="CF16" />
        <x-table.td type="input" value="{{ $data->has('CG16') ? $data['CG16'] : '' }}" coord="CG16" />
        <x-table.td type="input" value="{{ $data->has('CH16') ? $data['CH16'] : '' }}" coord="CH16" />
        <x-table.td type="input" value="{{ $data->has('CI16') ? $data['CI16'] : '' }}" coord="CI16" />
        <x-table.td type="input" value="{{ $data->has('CJ16') ? $data['CJ16'] : '' }}" coord="CJ16" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере занятости населения" />
        <x-table.td value="11" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA17') ? $data['CA17'] : '' }}" coord="CA17" />
        <x-table.td type="input" value="{{ $data->has('CB17') ? $data['CB17'] : '' }}" coord="CB17" />
        <x-table.td type="input" value="{{ $data->has('CC17') ? $data['CC17'] : '' }}" coord="CC17" />
        <x-table.td type="input" value="{{ $data->has('CD17') ? $data['CD17'] : '' }}" coord="CD17" />
        <x-table.td type="input" value="{{ $data->has('CE17') ? $data['CE17'] : '' }}" coord="CE17" />
        <x-table.td type="input" value="{{ $data->has('CF17') ? $data['CF17'] : '' }}" coord="CF17" />
        <x-table.td type="input" value="{{ $data->has('CG17') ? $data['CG17'] : '' }}" coord="CG17" />
        <x-table.td type="input" value="{{ $data->has('CH17') ? $data['CH17'] : '' }}" coord="CH17" />
        <x-table.td type="input" value="{{ $data->has('CI17') ? $data['CI17'] : '' }}" coord="CI17" />
        <x-table.td type="input" value="{{ $data->has('CJ17') ? $data['CJ17'] : '' }}" coord="CJ17" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере физической культуры и спорта" />
        <x-table.td value="12" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA18') ? $data['CA18'] : '' }}" coord="CA18" />
        <x-table.td type="input" value="{{ $data->has('CB18') ? $data['CB18'] : '' }}" coord="CB18" />
        <x-table.td type="input" value="{{ $data->has('CC18') ? $data['CC18'] : '' }}" coord="CC18" />
        <x-table.td type="input" value="{{ $data->has('CD18') ? $data['CD18'] : '' }}" coord="CD18" />
        <x-table.td type="input" value="{{ $data->has('CE18') ? $data['CE18'] : '' }}" coord="CE18" />
        <x-table.td type="input" value="{{ $data->has('CF18') ? $data['CF18'] : '' }}" coord="CF18" />
        <x-table.td type="input" value="{{ $data->has('CG18') ? $data['CG18'] : '' }}" coord="CG18" />
        <x-table.td type="input" value="{{ $data->has('CH18') ? $data['CH18'] : '' }}" coord="CH18" />
        <x-table.td type="input" value="{{ $data->has('CI18') ? $data['CI18'] : '' }}" coord="CI18" />
        <x-table.td type="input" value="{{ $data->has('CJ18') ? $data['CJ18'] : '' }}" coord="CJ18" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере культуры" />
        <x-table.td value="13" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA19') ? $data['CA19'] : '' }}" coord="CA19" />
        <x-table.td type="input" value="{{ $data->has('CB19') ? $data['CB19'] : '' }}" coord="CB19" />
        <x-table.td type="input" value="{{ $data->has('CC19') ? $data['CC19'] : '' }}" coord="CC19" />
        <x-table.td type="input" value="{{ $data->has('CD19') ? $data['CD19'] : '' }}" coord="CD19" />
        <x-table.td type="input" value="{{ $data->has('CE19') ? $data['CE19'] : '' }}" coord="CE19" />
        <x-table.td type="input" value="{{ $data->has('CF19') ? $data['CF19'] : '' }}" coord="CF19" />
        <x-table.td type="input" value="{{ $data->has('CG19') ? $data['CG19'] : '' }}" coord="CG19" />
        <x-table.td type="input" value="{{ $data->has('CH19') ? $data['CH19'] : '' }}" coord="CH19" />
        <x-table.td type="input" value="{{ $data->has('CI19') ? $data['CI19'] : '' }}" coord="CI19" />
        <x-table.td type="input" value="{{ $data->has('CJ19') ? $data['CJ19'] : '' }}" coord="CJ19" />
    </tr>
    <tr>
        <x-table.td type="header" value="Расширенного уровня - всего, из них:" />
        <x-table.td value="14" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA20') ? $data['CA20'] : '' }}" coord="CA20" />
        <x-table.td type="input" value="{{ $data->has('CB20') ? $data['CB20'] : '' }}" coord="CB20" />
        <x-table.td type="input" value="{{ $data->has('CC20') ? $data['CC20'] : '' }}" coord="CC20" />
        <x-table.td type="input" value="{{ $data->has('CD20') ? $data['CD20'] : '' }}" coord="CD20" />
        <x-table.td type="input" value="{{ $data->has('CE20') ? $data['CE20'] : '' }}" coord="CE20" />
        <x-table.td type="input" value="{{ $data->has('CF20') ? $data['CF20'] : '' }}" coord="CF20" />
        <x-table.td type="input" value="{{ $data->has('CG20') ? $data['CG20'] : '' }}" coord="CG20" />
        <x-table.td type="input" value="{{ $data->has('CH20') ? $data['CH20'] : '' }}" coord="CH20" />
        <x-table.td type="input" value="{{ $data->has('CI20') ? $data['CI20'] : '' }}" coord="CI20" />
        <x-table.td type="input" value="{{ $data->has('CJ20') ? $data['CJ20'] : '' }}" coord="CJ20" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере социальной защиты населения" />
        <x-table.td value="15" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA21') ? $data['CA21'] : '' }}" coord="CA21" />
        <x-table.td type="input" value="{{ $data->has('CB21') ? $data['CB21'] : '' }}" coord="CB21" />
        <x-table.td type="input" value="{{ $data->has('CC21') ? $data['CC21'] : '' }}" coord="CC21" />
        <x-table.td type="input" value="{{ $data->has('CD21') ? $data['CD21'] : '' }}" coord="CD21" />
        <x-table.td type="input" value="{{ $data->has('CE21') ? $data['CE21'] : '' }}" coord="CE21" />
        <x-table.td type="input" value="{{ $data->has('CF21') ? $data['CF21'] : '' }}" coord="CF21" />
        <x-table.td type="input" value="{{ $data->has('CG21') ? $data['CG21'] : '' }}" coord="CG21" />
        <x-table.td type="input" value="{{ $data->has('CH21') ? $data['CH21'] : '' }}" coord="CH21" />
        <x-table.td type="input" value="{{ $data->has('CI21') ? $data['CI21'] : '' }}" coord="CI21" />
        <x-table.td type="input" value="{{ $data->has('CJ21') ? $data['CJ21'] : '' }}" coord="CJ21" />
    </tr>
    <tr>
        <x-table.td type="header" value=">в сфере образования" />
        <x-table.td value="16" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA22') ? $data['CA22'] : '' }}" coord="CA22" />
        <x-table.td type="input" value="{{ $data->has('CB22') ? $data['CB22'] : '' }}" coord="CB22" />
        <x-table.td type="input" value="{{ $data->has('CC22') ? $data['CC22'] : '' }}" coord="CC22" />
        <x-table.td type="input" value="{{ $data->has('CD22') ? $data['CD22'] : '' }}" coord="CD22" />
        <x-table.td type="input" value="{{ $data->has('CE22') ? $data['CE22'] : '' }}" coord="CE22" />
        <x-table.td type="input" value="{{ $data->has('CF22') ? $data['CF22'] : '' }}" coord="CF22" />
        <x-table.td type="input" value="{{ $data->has('CG22') ? $data['CG22'] : '' }}" coord="CG22" />
        <x-table.td type="input" value="{{ $data->has('CH22') ? $data['CH22'] : '' }}" coord="CH22" />
        <x-table.td type="input" value="{{ $data->has('CI22') ? $data['CI22'] : '' }}" coord="CI22" />
        <x-table.td type="input" value="{{ $data->has('CJ22') ? $data['CJ22'] : '' }}" coord="CJ22" />
    </tr>
    <tr>
        <x-table.td type="header" value=">в сфере занятости населения" />
        <x-table.td value="17" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA23') ? $data['CA23'] : '' }}" coord="CA23" />
        <x-table.td type="input" value="{{ $data->has('CB23') ? $data['CB23'] : '' }}" coord="CB23" />
        <x-table.td type="input" value="{{ $data->has('CC23') ? $data['CC23'] : '' }}" coord="CC23" />
        <x-table.td type="input" value="{{ $data->has('CD23') ? $data['CD23'] : '' }}" coord="CD23" />
        <x-table.td type="input" value="{{ $data->has('CE23') ? $data['CE23'] : '' }}" coord="CE23" />
        <x-table.td type="input" value="{{ $data->has('CF23') ? $data['CF23'] : '' }}" coord="CF23" />
        <x-table.td type="input" value="{{ $data->has('CG23') ? $data['CG23'] : '' }}" coord="CG23" />
        <x-table.td type="input" value="{{ $data->has('CH23') ? $data['CH23'] : '' }}" coord="CH23" />
        <x-table.td type="input" value="{{ $data->has('CI23') ? $data['CI23'] : '' }}" coord="CI23" />
        <x-table.td type="input" value="{{ $data->has('CJ23') ? $data['CJ23'] : '' }}" coord="CJ23" />
    </tr>
    <tr>
        <x-table.td type="header" value=">в сфере физической культуры и спорта" />
        <x-table.td value="18" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA24') ? $data['CA24'] : '' }}" coord="CA24" />
        <x-table.td type="input" value="{{ $data->has('CB24') ? $data['CB24'] : '' }}" coord="CB24" />
        <x-table.td type="input" value="{{ $data->has('CC24') ? $data['CC24'] : '' }}" coord="CC24" />
        <x-table.td type="input" value="{{ $data->has('CD24') ? $data['CD24'] : '' }}" coord="CD24" />
        <x-table.td type="input" value="{{ $data->has('CE24') ? $data['CE24'] : '' }}" coord="CE24" />
        <x-table.td type="input" value="{{ $data->has('CF24') ? $data['CF24'] : '' }}" coord="CF24" />
        <x-table.td type="input" value="{{ $data->has('CG24') ? $data['CG24'] : '' }}" coord="CG24" />
        <x-table.td type="input" value="{{ $data->has('CH24') ? $data['CH24'] : '' }}" coord="CH24" />
        <x-table.td type="input" value="{{ $data->has('CI24') ? $data['CI24'] : '' }}" coord="CI24" />
        <x-table.td type="input" value="{{ $data->has('CJ24') ? $data['CJ24'] : '' }}" coord="CJ24" />
    </tr>
    <tr>
        <x-table.td type="header" value=">в сфере культуры" />
        <x-table.td value="19" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA25') ? $data['CA25'] : '' }}" coord="CA25" />
        <x-table.td type="input" value="{{ $data->has('CB25') ? $data['CB25'] : '' }}" coord="CB25" />
        <x-table.td type="input" value="{{ $data->has('CC25') ? $data['CC25'] : '' }}" coord="CC25" />
        <x-table.td type="input" value="{{ $data->has('CD25') ? $data['CD25'] : '' }}" coord="CD25" />
        <x-table.td type="input" value="{{ $data->has('CE25') ? $data['CE25'] : '' }}" coord="CE25" />
        <x-table.td type="input" value="{{ $data->has('CF25') ? $data['CF25'] : '' }}" coord="CF25" />
        <x-table.td type="input" value="{{ $data->has('CG25') ? $data['CG25'] : '' }}" coord="CG25" />
        <x-table.td type="input" value="{{ $data->has('CH25') ? $data['CH25'] : '' }}" coord="CH25" />
        <x-table.td type="input" value="{{ $data->has('CI25') ? $data['CI25'] : '' }}" coord="CI25" />
        <x-table.td type="input" value="{{ $data->has('CJ25') ? $data['CJ25'] : '' }}" coord="CJ25" />
    </tr>
    <tr>
        <x-table.td type="header" value=">Комплексного уровня - всего, из них:" />
        <x-table.td value="20" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA26') ? $data['CA26'] : '' }}" coord="CA26" />
        <x-table.td type="input" value="{{ $data->has('CB26') ? $data['CB26'] : '' }}" coord="CB26" />
        <x-table.td type="input" value="{{ $data->has('CC26') ? $data['CC26'] : '' }}" coord="CC26" />
        <x-table.td type="input" value="{{ $data->has('CD26') ? $data['CD26'] : '' }}" coord="CD26" />
        <x-table.td type="input" value="{{ $data->has('CE26') ? $data['CE26'] : '' }}" coord="CE26" />
        <x-table.td type="input" value="{{ $data->has('CF26') ? $data['CF26'] : '' }}" coord="CF26" />
        <x-table.td type="input" value="{{ $data->has('CG26') ? $data['CG26'] : '' }}" coord="CG26" />
        <x-table.td type="input" value="{{ $data->has('CH26') ? $data['CH26'] : '' }}" coord="CH26" />
        <x-table.td type="input" value="{{ $data->has('CI26') ? $data['CI26'] : '' }}" coord="CI26" />
        <x-table.td type="input" value="{{ $data->has('CJ26') ? $data['CJ26'] : '' }}" coord="CJ26" />
    </tr>
    <tr>
        <x-table.td type="header" value=">в сфере социальной защиты населения" />
        <x-table.td value="21" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA27') ? $data['CA27'] : '' }}" coord="CA27" />
        <x-table.td type="input" value="{{ $data->has('CB27') ? $data['CB27'] : '' }}" coord="CB27" />
        <x-table.td type="input" value="{{ $data->has('CC27') ? $data['CC27'] : '' }}" coord="CC27" />
        <x-table.td type="input" value="{{ $data->has('CD27') ? $data['CD27'] : '' }}" coord="CD27" />
        <x-table.td type="input" value="{{ $data->has('CE27') ? $data['CE27'] : '' }}" coord="CE27" />
        <x-table.td type="input" value="{{ $data->has('CF27') ? $data['CF27'] : '' }}" coord="CF27" />
        <x-table.td type="input" value="{{ $data->has('CG27') ? $data['CG27'] : '' }}" coord="CG27" />
        <x-table.td type="input" value="{{ $data->has('CH27') ? $data['CH27'] : '' }}" coord="CH27" />
        <x-table.td type="input" value="{{ $data->has('CI27') ? $data['CI27'] : '' }}" coord="CI27" />
        <x-table.td type="input" value="{{ $data->has('CJ27') ? $data['CJ27'] : '' }}" coord="CJ27" />
    </tr>
    <tr>
        <x-table.td type="header" value=">в сфере образования" />
        <x-table.td value="22" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA28') ? $data['CA28'] : '' }}" coord="CA28" />
        <x-table.td type="input" value="{{ $data->has('CB28') ? $data['CB28'] : '' }}" coord="CB28" />
        <x-table.td type="input" value="{{ $data->has('CC28') ? $data['CC28'] : '' }}" coord="CC28" />
        <x-table.td type="input" value="{{ $data->has('CD28') ? $data['CD28'] : '' }}" coord="CD28" />
        <x-table.td type="input" value="{{ $data->has('CE28') ? $data['CE28'] : '' }}" coord="CE28" />
        <x-table.td type="input" value="{{ $data->has('CF28') ? $data['CF28'] : '' }}" coord="CF28" />
        <x-table.td type="input" value="{{ $data->has('CG28') ? $data['CG28'] : '' }}" coord="CG28" />
        <x-table.td type="input" value="{{ $data->has('CH28') ? $data['CH28'] : '' }}" coord="CH28" />
        <x-table.td type="input" value="{{ $data->has('CI28') ? $data['CI28'] : '' }}" coord="CI28" />
        <x-table.td type="input" value="{{ $data->has('CJ28') ? $data['CJ28'] : '' }}" coord="CJ28" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере занятости населения" />
        <x-table.td value="23" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA29') ? $data['CA29'] : '' }}" coord="CA29" />
        <x-table.td type="input" value="{{ $data->has('CB29') ? $data['CB29'] : '' }}" coord="CB29" />
        <x-table.td type="input" value="{{ $data->has('CC29') ? $data['CC29'] : '' }}" coord="CC29" />
        <x-table.td type="input" value="{{ $data->has('CD29') ? $data['CD29'] : '' }}" coord="CD29" />
        <x-table.td type="input" value="{{ $data->has('CE29') ? $data['CE29'] : '' }}" coord="CE29" />
        <x-table.td type="input" value="{{ $data->has('CF29') ? $data['CF29'] : '' }}" coord="CF29" />
        <x-table.td type="input" value="{{ $data->has('CG29') ? $data['CG29'] : '' }}" coord="CG29" />
        <x-table.td type="input" value="{{ $data->has('CH29') ? $data['CH29'] : '' }}" coord="CH29" />
        <x-table.td type="input" value="{{ $data->has('CI29') ? $data['CI29'] : '' }}" coord="CI29" />
        <x-table.td type="input" value="{{ $data->has('CJ29') ? $data['CJ29'] : '' }}" coord="CJ29" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере физической культуры и спорта" />
        <x-table.td value="24" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA30') ? $data['CA30'] : '' }}" coord="CA30" />
        <x-table.td type="input" value="{{ $data->has('CB30') ? $data['CB30'] : '' }}" coord="CB30" />
        <x-table.td type="input" value="{{ $data->has('CC30') ? $data['CC30'] : '' }}" coord="CC30" />
        <x-table.td type="input" value="{{ $data->has('CD30') ? $data['CD30'] : '' }}" coord="CD30" />
        <x-table.td type="input" value="{{ $data->has('CE30') ? $data['CE30'] : '' }}" coord="CE30" />
        <x-table.td type="input" value="{{ $data->has('CF30') ? $data['CF30'] : '' }}" coord="CF30" />
        <x-table.td type="input" value="{{ $data->has('CG30') ? $data['CG30'] : '' }}" coord="CG30" />
        <x-table.td type="input" value="{{ $data->has('CH30') ? $data['CH30'] : '' }}" coord="CH30" />
        <x-table.td type="input" value="{{ $data->has('CI30') ? $data['CI30'] : '' }}" coord="CI30" />
        <x-table.td type="input" value="{{ $data->has('CJ30') ? $data['CJ30'] : '' }}" coord="CJ30" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере культуры" />
        <x-table.td value="25" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA31') ? $data['CA31'] : '' }}" coord="CA31" />
        <x-table.td type="input" value="{{ $data->has('CB31') ? $data['CB31'] : '' }}" coord="CB31" />
        <x-table.td type="input" value="{{ $data->has('CC31') ? $data['CC31'] : '' }}" coord="CC31" />
        <x-table.td type="input" value="{{ $data->has('CD31') ? $data['CD31'] : '' }}" coord="CD31" />
        <x-table.td type="input" value="{{ $data->has('CE31') ? $data['CE31'] : '' }}" coord="CE31" />
        <x-table.td type="input" value="{{ $data->has('CF31') ? $data['CF31'] : '' }}" coord="CF31" />
        <x-table.td type="input" value="{{ $data->has('CG31') ? $data['CG31'] : '' }}" coord="CG31" />
        <x-table.td type="input" value="{{ $data->has('CH31') ? $data['CH31'] : '' }}" coord="CH31" />
        <x-table.td type="input" value="{{ $data->has('CI31') ? $data['CI31'] : '' }}" coord="CI31" />
        <x-table.td type="input" value="{{ $data->has('CJ31') ? $data['CJ31'] : '' }}" coord="CJ31" />
    </tr>
</tbody>
