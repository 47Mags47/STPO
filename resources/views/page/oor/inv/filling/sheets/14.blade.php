<caption>{{ $sheet->header }}</caption>
<thead>
    <tr>
        <x-table.th rowspan=3 value="Наименование показателей" header />
        <x-table.th rowspan=3 value="№ строки" />
        <x-table.th rowspan=2 colspan=2 value="Всего:" />
        <x-table.th colspan=6 value="В том числе по формам собственности:" />
    </tr>
    <tr>
        <x-table.th colspan=2 value="Региональная форма собственности" />
        <x-table.th colspan=2 value="Муниципальная форма собственности" />
        <x-table.th colspan=2 value="Другие формы собственности" />
    </tr>
    <tr>
        <x-table.th
            value="количество организаций, включённых в региональную систему комплексной реабилитации и абилитации инвалидов (сумма граф 5, 7 и 9), ед." />
        <x-table.th
            value="количество организаций, планируемых к включению в региональную систему комплексной реабилитации и абилитации инвалидов (сумма граф 6, 8 и 10), ед." />
        <x-table.th
            value="Количество организаций, включённых в региональную систему комплексной реабилитации и абилитации инвалидов, ед." />
        <x-table.th
            value="Количество организаций,  планируемых к включению в региональную систему комплексной реабилитации и абилитации инвалидов, ед." />
        <x-table.th
            value="Количество организаций, включённых в региональную систему комплексной реабилитации и абилитации инвалидов, ед." />
        <x-table.th
            value="Количество организаций,  планируемых к включению в региональную систему комплексной реабилитации и абилитации инвалидов, ед." />
        <x-table.th
            value="Количество организаций, включённых в региональную систему комплексной реабилитации и абилитации инвалидов, ед." />
        <x-table.th
            value="Количество организаций,  планируемых к включению в региональную систему комплексной реабилитации и абилитации инвалидов, ед." />
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
        <x-table.td type="header" value="Количество организаций, предоставляющих услуги (мероприятия) по реабилитации и абилитации - всего, из них:" />
        <x-table.td value="01" center />
        <x-table.td type="input" formul="({CA8}+{CA12}+{CA16}+{CA20}+{CA24}+{CA28})==({CC7}+{CE7}+{CG7})" bool-val="{CC7}+{CE7}+{CG7}" name="CA7" disabled />
        <x-table.td type="input" formul="({CB8}+{CB12}+{CB16}+{CB20}+{CB24}+{CB28})==({CD7}+{CF7}+{CH7})" bool-val="{CD7}+{CF7}+{CH7}" name="CB7" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC7') ? $data['CC7'] : '' }}" name="CC7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD7') ? $data['CD7'] : '' }}" name="CD7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE7') ? $data['CE7'] : '' }}" name="CE7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF7') ? $data['CF7'] : '' }}" name="CF7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG7') ? $data['CG7'] : '' }}" name="CG7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH7') ? $data['CH7'] : '' }}" name="CH7" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере социальной защиты населения (сумма строк 03, 04, 05)" />
        <x-table.td value="02" center />
        <x-table.td type="input" formul="{CC8}+{CE8}+{CG8}" name="CA8" disabled />
        <x-table.td type="input" formul="{CD8}+{CF8}+{CH8}" name="CB8" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" name="CC8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" name="CD8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" name="CE8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" name="CF8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG8') ? $data['CG8'] : '' }}" name="CG8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH8') ? $data['CH8'] : '' }}" name="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше" />
        <x-table.td value="03" center />
        <x-table.td type="input" formul="{CC9}+{CE9}+{CG9}" name="CA9" disabled />
        <x-table.td type="input" formul="{CD9}+{CF9}+{CH9}" name="CB9" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC9') ? $data['CC9'] : '' }}" name="CC9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD9') ? $data['CD9'] : '' }}" name="CD9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE9') ? $data['CE9'] : '' }}" name="CE9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF9') ? $data['CF9'] : '' }}" name="CF9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG9') ? $data['CG9'] : '' }}" name="CG9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH9') ? $data['CH9'] : '' }}" name="CH9" />
    </tr>
    <tr>
        <x-table.td type="header" value="детям-инвалидам" />
        <x-table.td value="04" center />
        <x-table.td type="input" formul="{CC10}+{CE10}+{CG10}" name="CA10" disabled />
        <x-table.td type="input" formul="{CD10}+{CF10}+{CH10}" name="CB10" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC10') ? $data['CC10'] : '' }}" name="CC10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD10') ? $data['CD10'] : '' }}" name="CD10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE10') ? $data['CE10'] : '' }}" name="CE10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF10') ? $data['CF10'] : '' }}" name="CF10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG10') ? $data['CG10'] : '' }}" name="CG10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH10') ? $data['CH10'] : '' }}" name="CH10" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше и детям-инвалидам (одновременно)" />
        <x-table.td value="05" center />
        <x-table.td type="input" formul="{CC11}+{CE11}+{CG11}" name="CA11" disabled />
        <x-table.td type="input" formul="{CD11}+{CF11}+{CH11}" name="CB11" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC11') ? $data['CC11'] : '' }}" name="CC11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD11') ? $data['CD11'] : '' }}" name="CD11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE11') ? $data['CE11'] : '' }}" name="CE11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF11') ? $data['CF11'] : '' }}" name="CF11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG11') ? $data['CG11'] : '' }}" name="CG11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH11') ? $data['CH11'] : '' }}" name="CH11" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере здравоохранения (сумма строк 07, 08, 09)" />
        <x-table.td value="06" center />
        <x-table.td type="input" formul="{CC12}+{CE12}+{CG12}" name="CA12" disabled />
        <x-table.td type="input" formul="{CD12}+{CF12}+{CH12}" name="CB12" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC12') ? $data['CC12'] : '' }}" name="CC12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD12') ? $data['CD12'] : '' }}" name="CD12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE12') ? $data['CE12'] : '' }}" name="CE12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF12') ? $data['CF12'] : '' }}" name="CF12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG12') ? $data['CG12'] : '' }}" name="CG12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH12') ? $data['CH12'] : '' }}" name="CH12" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше" />
        <x-table.td value="07" center />
        <x-table.td type="input" formul="{CC13}+{CE13}+{CG13}" name="CA13" disabled />
        <x-table.td type="input" formul="{CD13}+{CF13}+{CH13}" name="CB13" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC13') ? $data['CC13'] : '' }}" name="CC13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD13') ? $data['CD13'] : '' }}" name="CD13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE13') ? $data['CE13'] : '' }}" name="CE13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF13') ? $data['CF13'] : '' }}" name="CF13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG13') ? $data['CG13'] : '' }}" name="CG13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH13') ? $data['CH13'] : '' }}" name="CH13" />
    </tr>
    <tr>
        <x-table.td type="header" value="детям-инвалидам" />
        <x-table.td value="08" center />
        <x-table.td type="input" formul="{CC14}+{CE14}+{CG14}" name="CA14" disabled />
        <x-table.td type="input" formul="{CD14}+{CF14}+{CH14}" name="CB14" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC14') ? $data['CC14'] : '' }}" name="CC14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD14') ? $data['CD14'] : '' }}" name="CD14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE14') ? $data['CE14'] : '' }}" name="CE14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF14') ? $data['CF14'] : '' }}" name="CF14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG14') ? $data['CG14'] : '' }}" name="CG14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH14') ? $data['CH14'] : '' }}" name="CH14" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше и детям-инвалидам (одновременно)" />
        <x-table.td value="09" center />
        <x-table.td type="input" formul="{CC15}+{CE15}+{CG15}" name="CA15" disabled />
        <x-table.td type="input" formul="{CD15}+{CF15}+{CH15}" name="CB15" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC15') ? $data['CC15'] : '' }}" name="CC15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD15') ? $data['CD15'] : '' }}" name="CD15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE15') ? $data['CE15'] : '' }}" name="CE15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF15') ? $data['CF15'] : '' }}" name="CF15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG15') ? $data['CG15'] : '' }}" name="CG15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH15') ? $data['CH15'] : '' }}" name="CH15" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере занятости населения (сумма строк 11, 12, 13)" />
        <x-table.td value="10" center />
        <x-table.td type="input" formul="{CC16}+{CE16}+{CG16}" name="CA16" disabled />
        <x-table.td type="input" formul="{CD16}+{CF16}+{CH16}" name="CB16" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC16') ? $data['CC16'] : '' }}" name="CC16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD16') ? $data['CD16'] : '' }}" name="CD16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE16') ? $data['CE16'] : '' }}" name="CE16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF16') ? $data['CF16'] : '' }}" name="CF16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG16') ? $data['CG16'] : '' }}" name="CG16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH16') ? $data['CH16'] : '' }}" name="CH16" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше" />
        <x-table.td value="11" center />
        <x-table.td type="input" formul="{CC17}+{CE17}+{CG17}" name="CA17" disabled />
        <x-table.td type="input" formul="{CD17}+{CF17}+{CH17}" name="CB17" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC17') ? $data['CC17'] : '' }}" name="CC17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD17') ? $data['CD17'] : '' }}" name="CD17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE17') ? $data['CE17'] : '' }}" name="CE17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF17') ? $data['CF17'] : '' }}" name="CF17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG17') ? $data['CG17'] : '' }}" name="CG17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH17') ? $data['CH17'] : '' }}" name="CH17" />
    </tr>
    <tr>
        <x-table.td type="header" value="детям-инвалидам" />
        <x-table.td value="12" center />
        <x-table.td type="input" formul="{CC18}+{CE18}+{CG18}" name="CA18" disabled />
        <x-table.td type="input" formul="{CD18}+{CF18}+{CH18}" name="CB18" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC18') ? $data['CC18'] : '' }}" name="CC18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD18') ? $data['CD18'] : '' }}" name="CD18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE18') ? $data['CE18'] : '' }}" name="CE18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF18') ? $data['CF18'] : '' }}" name="CF18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG18') ? $data['CG18'] : '' }}" name="CG18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH18') ? $data['CH18'] : '' }}" name="CH18" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше и детям-инвалидам (одновременно)" />
        <x-table.td value="13" center />
        <x-table.td type="input" formul="{CC19}+{CE19}+{CG19}" name="CA19" disabled />
        <x-table.td type="input" formul="{CD19}+{CF19}+{CH19}" name="CB19" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC19') ? $data['CC19'] : '' }}" name="CC19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD19') ? $data['CD19'] : '' }}" name="CD19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE19') ? $data['CE19'] : '' }}" name="CE19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF19') ? $data['CF19'] : '' }}" name="CF19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG19') ? $data['CG19'] : '' }}" name="CG19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH19') ? $data['CH19'] : '' }}" name="CH19" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере образования (сумма строк 15, 16, 17)" />
        <x-table.td value="14" center />
        <x-table.td type="input" formul="{CC20}+{CE20}+{CG20}" name="CA20" disabled />
        <x-table.td type="input" formul="{CD20}+{CF20}+{CH20}" name="CB20" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC20') ? $data['CC20'] : '' }}" name="CC20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD20') ? $data['CD20'] : '' }}" name="CD20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE20') ? $data['CE20'] : '' }}" name="CE20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF20') ? $data['CF20'] : '' }}" name="CF20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG20') ? $data['CG20'] : '' }}" name="CG20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH20') ? $data['CH20'] : '' }}" name="CH20" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше" />
        <x-table.td value="15" center />
        <x-table.td type="input" formul="{CC21}+{CE21}+{CG21}" name="CA21" disabled />
        <x-table.td type="input" formul="{CD21}+{CF21}+{CH21}" name="CB21" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC21') ? $data['CC21'] : '' }}" name="CC21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD21') ? $data['CD21'] : '' }}" name="CD21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE21') ? $data['CE21'] : '' }}" name="CE21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF21') ? $data['CF21'] : '' }}" name="CF21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG21') ? $data['CG21'] : '' }}" name="CG21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH21') ? $data['CH21'] : '' }}" name="CH21" />
    </tr>
    <tr>
        <x-table.td type="header" value="детям-инвалидам" />
        <x-table.td value="16" center />
        <x-table.td type="input" formul="{CC22}+{CE22}+{CG22}" name="CA22" disabled />
        <x-table.td type="input" formul="{CD22}+{CF22}+{CH22}" name="CB22" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC22') ? $data['CC22'] : '' }}" name="CC22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD22') ? $data['CD22'] : '' }}" name="CD22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE22') ? $data['CE22'] : '' }}" name="CE22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF22') ? $data['CF22'] : '' }}" name="CF22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG22') ? $data['CG22'] : '' }}" name="CG22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH22') ? $data['CH22'] : '' }}" name="CH22" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше и детям-инвалидам (одновременно)" />
        <x-table.td value="17" center />
        <x-table.td type="input" formul="{CC23}+{CE23}+{CG23}" name="CA23" disabled />
        <x-table.td type="input" formul="{CD23}+{CF23}+{CH23}" name="CB23" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC23') ? $data['CC23'] : '' }}" name="CC23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD23') ? $data['CD23'] : '' }}" name="CD23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE23') ? $data['CE23'] : '' }}" name="CE23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF23') ? $data['CF23'] : '' }}" name="CF23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG23') ? $data['CG23'] : '' }}" name="CG23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH23') ? $data['CH23'] : '' }}" name="CH23" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере физической культуры и спорта (сумма строк 19, 20, 21)" />
        <x-table.td value="18" center />
        <x-table.td type="input" formul="{CC24}+{CE24}+{CG24}" name="CA24" disabled />
        <x-table.td type="input" formul="{CD24}+{CF24}+{CH24}" name="CB24" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC24') ? $data['CC24'] : '' }}" name="CC24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD24') ? $data['CD24'] : '' }}" name="CD24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE24') ? $data['CE24'] : '' }}" name="CE24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF24') ? $data['CF24'] : '' }}" name="CF24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG24') ? $data['CG24'] : '' }}" name="CG24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH24') ? $data['CH24'] : '' }}" name="CH24" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше" />
        <x-table.td value="19" center />
        <x-table.td type="input" formul="{CC25}+{CE25}+{CG25}" name="CA25" disabled />
        <x-table.td type="input" formul="{CD25}+{CF25}+{CH25}" name="CB25" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC25') ? $data['CC25'] : '' }}" name="CC25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD25') ? $data['CD25'] : '' }}" name="CD25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE25') ? $data['CE25'] : '' }}" name="CE25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF25') ? $data['CF25'] : '' }}" name="CF25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG25') ? $data['CG25'] : '' }}" name="CG25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH25') ? $data['CH25'] : '' }}" name="CH25" />
    </tr>
    <tr>
        <x-table.td type="header" value="детям-инвалидам" />
        <x-table.td value="20" center />
        <x-table.td type="input" formul="{CC26}+{CE26}+{CG26}" name="CA26" disabled />
        <x-table.td type="input" formul="{CD26}+{CF26}+{CH26}" name="CB26" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC26') ? $data['CC26'] : '' }}" name="CC26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD26') ? $data['CD26'] : '' }}" name="CD26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE26') ? $data['CE26'] : '' }}" name="CE26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF26') ? $data['CF26'] : '' }}" name="CF26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG26') ? $data['CG26'] : '' }}" name="CG26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH26') ? $data['CH26'] : '' }}" name="CH26" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше и детям-инвалидам (одновременно)" />
        <x-table.td value="21" center />
        <x-table.td type="input" formul="{CC27}+{CE27}+{CG27}" name="CA27" disabled />
        <x-table.td type="input" formul="{CD27}+{CF27}+{CH27}" name="CB27" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC27') ? $data['CC27'] : '' }}" name="CC27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD27') ? $data['CD27'] : '' }}" name="CD27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE27') ? $data['CE27'] : '' }}" name="CE27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF27') ? $data['CF27'] : '' }}" name="CF27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG27') ? $data['CG27'] : '' }}" name="CG27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH27') ? $data['CH27'] : '' }}" name="CH27" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере культуры (сумма строк 23, 24, 25)" />
        <x-table.td value="22" center />
        <x-table.td type="input" formul="{CC28}+{CE28}+{CG28}" name="CA28" disabled />
        <x-table.td type="input" formul="{CD28}+{CF28}+{CH28}" name="CB28" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC28') ? $data['CC28'] : '' }}" name="CC28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD28') ? $data['CD28'] : '' }}" name="CD28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE28') ? $data['CE28'] : '' }}" name="CE28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF28') ? $data['CF28'] : '' }}" name="CF28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG28') ? $data['CG28'] : '' }}" name="CG28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH28') ? $data['CH28'] : '' }}" name="CH28" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше" />
        <x-table.td value="23" center />
        <x-table.td type="input" formul="{CC29}+{CE29}+{CG29}" name="CA29" disabled />
        <x-table.td type="input" formul="{CD29}+{CF29}+{CH29}" name="CB29" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC29') ? $data['CC29'] : '' }}" name="CC29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD29') ? $data['CD29'] : '' }}" name="CD29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE29') ? $data['CE29'] : '' }}" name="CE29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF29') ? $data['CF29'] : '' }}" name="CF29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG29') ? $data['CG29'] : '' }}" name="CG29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH29') ? $data['CH29'] : '' }}" name="CH29" />
    </tr>
    <tr>
        <x-table.td type="header" value="детям-инвалидам" />
        <x-table.td value="24" center />
        <x-table.td type="input" formul="{CC30}+{CE30}+{CG30}" name="CA30" disabled />
        <x-table.td type="input" formul="{CD30}+{CF30}+{CH30}" name="CB30" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC30') ? $data['CC30'] : '' }}" name="CC30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD30') ? $data['CD30'] : '' }}" name="CD30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE30') ? $data['CE30'] : '' }}" name="CE30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF30') ? $data['CF30'] : '' }}" name="CF30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG30') ? $data['CG30'] : '' }}" name="CG30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH30') ? $data['CH30'] : '' }}" name="CH30" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше и детям-инвалидам (одновременно)" />
        <x-table.td value="25" center />
        <x-table.td type="input" formul="{CC31}+{CE31}+{CG31}" name="CA31" disabled />
        <x-table.td type="input" formul="{CD31}+{CF31}+{CH31}" name="CB31" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC31') ? $data['CC31'] : '' }}" name="CC31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD31') ? $data['CD31'] : '' }}" name="CD31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE31') ? $data['CE31'] : '' }}" name="CE31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF31') ? $data['CF31'] : '' }}" name="CF31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG31') ? $data['CG31'] : '' }}" name="CG31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH31') ? $data['CH31'] : '' }}" name="CH31" />
    </tr>
</tbody>
