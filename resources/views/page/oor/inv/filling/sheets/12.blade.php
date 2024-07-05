<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th rowspan=2 value="Наименование показателей" />
        <x-table.th rowspan=2 value="№ строки" />
        <x-table.th rowspan=2 value="Количество выписок, ед." />
        <x-table.th rowspan=2 value="Всего, чел." />
        <x-table.th colspan=2 value="из них:" />
    </tr>
    <tr>
        <x-table.th rowspan=2 value="Всего, ед." />
        <x-table.th colspan=5 value="в том числе:" />
    </tr>
    <tr>
        <x-table.th value="расположенных в сельской местности, ед." />
        <x-table.th value="федеральной формы собственности, ед." />
        <x-table.th value="региональной формы собственности, ед." />
        <x-table.th value="муниципальной формы собственности, ед." />
        <x-table.th value="другой формы собственности, ед." />
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
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header" value="Организации, предоставляющие услуги (мероприятия) по реабилитации и абилитации инвалидам в возрасте 18 лет и старше и детям-инвалидам, расположенные на территории субъекта Российской Федерации - всего, в том числе имеющих подведомственность:" />
        <x-table.td value="01" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA7') ? $data['CA7'] : '' }}" coord="CA7" />
        <x-table.td type="input" value="{{ $data->has('CB7') ? $data['CB7'] : '' }}" coord="CB7" />
        <x-table.td type="input" value="{{ $data->has('CC7') ? $data['CC7'] : '' }}" coord="CC7" />
        <x-table.td type="input" value="{{ $data->has('CD7') ? $data['CD7'] : '' }}" coord="CD7" />
        <x-table.td type="input" value="{{ $data->has('CE7') ? $data['CE7'] : '' }}" coord="CE7" />
        <x-table.td type="input" value="{{ $data->has('CF7') ? $data['CF7'] : '' }}" coord="CF7" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере социальной защиты населения" />
        <x-table.td value="02" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input" value="{{ $data->has('CF8') ? $data['CF8'] : '' }}" coord="CF8" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше" />
        <x-table.td value="03" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA9') ? $data['CA9'] : '' }}" coord="CA9" />
        <x-table.td type="input" value="{{ $data->has('CB9') ? $data['CB9'] : '' }}" coord="CB9" />
        <x-table.td type="input" value="{{ $data->has('CC9') ? $data['CC9'] : '' }}" coord="CC9" />
        <x-table.td type="input" value="{{ $data->has('CD9') ? $data['CD9'] : '' }}" coord="CD9" />
        <x-table.td type="input" value="{{ $data->has('CE9') ? $data['CE9'] : '' }}" coord="CE9" />
        <x-table.td type="input" value="{{ $data->has('CF9') ? $data['CF9'] : '' }}" coord="CF9" />
    </tr>
    <tr>
        <x-table.td type="header" value="детям-инвалидам" />
        <x-table.td value="04" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA10') ? $data['CA10'] : '' }}" coord="CA10" />
        <x-table.td type="input" value="{{ $data->has('CB10') ? $data['CB10'] : '' }}" coord="CB10" />
        <x-table.td type="input" value="{{ $data->has('CC10') ? $data['CC10'] : '' }}" coord="CC10" />
        <x-table.td type="input" value="{{ $data->has('CD10') ? $data['CD10'] : '' }}" coord="CD10" />
        <x-table.td type="input" value="{{ $data->has('CE10') ? $data['CE10'] : '' }}" coord="CE10" />
        <x-table.td type="input" value="{{ $data->has('CF10') ? $data['CF10'] : '' }}" coord="CF10" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше и детям-инвалидам (одновременно)" />
        <x-table.td value="05" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA11') ? $data['CA11'] : '' }}" coord="CA11" />
        <x-table.td type="input" value="{{ $data->has('CB11') ? $data['CB11'] : '' }}" coord="CB11" />
        <x-table.td type="input" value="{{ $data->has('CC11') ? $data['CC11'] : '' }}" coord="CC11" />
        <x-table.td type="input" value="{{ $data->has('CD11') ? $data['CD11'] : '' }}" coord="CD11" />
        <x-table.td type="input" value="{{ $data->has('CE11') ? $data['CE11'] : '' }}" coord="CE11" />
        <x-table.td type="input" value="{{ $data->has('CF11') ? $data['CF11'] : '' }}" coord="CF11" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере здравоохранения" />
        <x-table.td value="06" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA12') ? $data['CA12'] : '' }}" coord="CA12" />
        <x-table.td type="input" value="{{ $data->has('CB12') ? $data['CB12'] : '' }}" coord="CB12" />
        <x-table.td type="input" value="{{ $data->has('CC12') ? $data['CC12'] : '' }}" coord="CC12" />
        <x-table.td type="input" value="{{ $data->has('CD12') ? $data['CD12'] : '' }}" coord="CD12" />
        <x-table.td type="input" value="{{ $data->has('CE12') ? $data['CE12'] : '' }}" coord="CE12" />
        <x-table.td type="input" value="{{ $data->has('CF12') ? $data['CF12'] : '' }}" coord="CF12" />

    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше" />
        <x-table.td value="07" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA13') ? $data['CA13'] : '' }}" coord="CA13" />
        <x-table.td type="input" value="{{ $data->has('CB13') ? $data['CB13'] : '' }}" coord="CB13" />
        <x-table.td type="input" value="{{ $data->has('CC13') ? $data['CC13'] : '' }}" coord="CC13" />
        <x-table.td type="input" value="{{ $data->has('CD13') ? $data['CD13'] : '' }}" coord="CD13" />
        <x-table.td type="input" value="{{ $data->has('CE13') ? $data['CE13'] : '' }}" coord="CE13" />
        <x-table.td type="input" value="{{ $data->has('CF13') ? $data['CF13'] : '' }}" coord="CF13" />
    </tr>
    <tr>
        <x-table.td type="header" value="детям-инвалидам" />
        <x-table.td value="08" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA14') ? $data['CA14'] : '' }}" coord="CA14" />
        <x-table.td type="input" value="{{ $data->has('CB14') ? $data['CB14'] : '' }}" coord="CB14" />
        <x-table.td type="input" value="{{ $data->has('CC14') ? $data['CC14'] : '' }}" coord="CC14" />
        <x-table.td type="input" value="{{ $data->has('CD14') ? $data['CD14'] : '' }}" coord="CD14" />
        <x-table.td type="input" value="{{ $data->has('CE14') ? $data['CE14'] : '' }}" coord="CE14" />
        <x-table.td type="input" value="{{ $data->has('CF14') ? $data['CF14'] : '' }}" coord="CF14" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше и детям-инвалидам (одновременно)" />
        <x-table.td value="09" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA15') ? $data['CA15'] : '' }}" coord="CA15" />
        <x-table.td type="input" value="{{ $data->has('CB15') ? $data['CB15'] : '' }}" coord="CB15" />
        <x-table.td type="input" value="{{ $data->has('CC15') ? $data['CC15'] : '' }}" coord="CC15" />
        <x-table.td type="input" value="{{ $data->has('CD15') ? $data['CD15'] : '' }}" coord="CD15" />
        <x-table.td type="input" value="{{ $data->has('CE15') ? $data['CE15'] : '' }}" coord="CE15" />
        <x-table.td type="input" value="{{ $data->has('CF15') ? $data['CF15'] : '' }}" coord="CF15" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере занятости населения" />
        <x-table.td value="10" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA16') ? $data['CA16'] : '' }}" coord="CA16" />
        <x-table.td type="input" value="{{ $data->has('CB16') ? $data['CB16'] : '' }}" coord="CB16" />
        <x-table.td type="input" value="{{ $data->has('CC16') ? $data['CC16'] : '' }}" coord="CC16" />
        <x-table.td type="input" value="{{ $data->has('CD16') ? $data['CD16'] : '' }}" coord="CD16" />
        <x-table.td type="input" value="{{ $data->has('CE16') ? $data['CE16'] : '' }}" coord="CE16" />
        <x-table.td type="input" value="{{ $data->has('CF16') ? $data['CF16'] : '' }}" coord="CF16" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше" />
        <x-table.td value="11" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA17') ? $data['CA17'] : '' }}" coord="CA17" />
        <x-table.td type="input" value="{{ $data->has('CB17') ? $data['CB17'] : '' }}" coord="CB17" />
        <x-table.td type="input" value="{{ $data->has('CC17') ? $data['CC17'] : '' }}" coord="CC17" />
        <x-table.td type="input" value="{{ $data->has('CD17') ? $data['CD17'] : '' }}" coord="CD17" />
        <x-table.td type="input" value="{{ $data->has('CE17') ? $data['CE17'] : '' }}" coord="CE17" />
        <x-table.td type="input" value="{{ $data->has('CF17') ? $data['CF17'] : '' }}" coord="CF17" />
    </tr>
    <tr>
        <x-table.td type="header" value="детям-инвалидам" />
        <x-table.td value="12" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA18') ? $data['CA18'] : '' }}" coord="CA18" />
        <x-table.td type="input" value="{{ $data->has('CB18') ? $data['CB18'] : '' }}" coord="CB18" />
        <x-table.td type="input" value="{{ $data->has('CC18') ? $data['CC18'] : '' }}" coord="CC18" />
        <x-table.td type="input" value="{{ $data->has('CD18') ? $data['CD18'] : '' }}" coord="CD18" />
        <x-table.td type="input" value="{{ $data->has('CE18') ? $data['CE18'] : '' }}" coord="CE18" />
        <x-table.td type="input" value="{{ $data->has('CF18') ? $data['CF18'] : '' }}" coord="CF18" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше и детям-инвалидам (одновременно)" />
        <x-table.td value="13" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA19') ? $data['CA19'] : '' }}" coord="CA19" />
        <x-table.td type="input" value="{{ $data->has('CB19') ? $data['CB19'] : '' }}" coord="CB19" />
        <x-table.td type="input" value="{{ $data->has('CC19') ? $data['CC19'] : '' }}" coord="CC19" />
        <x-table.td type="input" value="{{ $data->has('CD19') ? $data['CD19'] : '' }}" coord="CD19" />
        <x-table.td type="input" value="{{ $data->has('CE19') ? $data['CE19'] : '' }}" coord="CE19" />
        <x-table.td type="input" value="{{ $data->has('CF19') ? $data['CF19'] : '' }}" coord="CF19" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере образования" />
        <x-table.td value="14" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA20') ? $data['CA20'] : '' }}" coord="CA20" />
        <x-table.td type="input" value="{{ $data->has('CB20') ? $data['CB20'] : '' }}" coord="CB20" />
        <x-table.td type="input" value="{{ $data->has('CC20') ? $data['CC20'] : '' }}" coord="CC20" />
        <x-table.td type="input" value="{{ $data->has('CD20') ? $data['CD20'] : '' }}" coord="CD20" />
        <x-table.td type="input" value="{{ $data->has('CE20') ? $data['CE20'] : '' }}" coord="CE20" />
        <x-table.td type="input" value="{{ $data->has('CF20') ? $data['CF20'] : '' }}" coord="CF20" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше" />
        <x-table.td value="15" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA21') ? $data['CA21'] : '' }}" coord="CA21" />
        <x-table.td type="input" value="{{ $data->has('CB21') ? $data['CB21'] : '' }}" coord="CB21" />
        <x-table.td type="input" value="{{ $data->has('CC21') ? $data['CC21'] : '' }}" coord="CC21" />
        <x-table.td type="input" value="{{ $data->has('CD21') ? $data['CD21'] : '' }}" coord="CD21" />
        <x-table.td type="input" value="{{ $data->has('CE21') ? $data['CE21'] : '' }}" coord="CE21" />
        <x-table.td type="input" value="{{ $data->has('CF21') ? $data['CF21'] : '' }}" coord="CF21" />
    </tr>
    <tr>
        <x-table.td type="header" value="детям-инвалидам" />
        <x-table.td value="16" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA22') ? $data['CA22'] : '' }}" coord="CA22" />
        <x-table.td type="input" value="{{ $data->has('CB22') ? $data['CB22'] : '' }}" coord="CB22" />
        <x-table.td type="input" value="{{ $data->has('CC22') ? $data['CC22'] : '' }}" coord="CC22" />
        <x-table.td type="input" value="{{ $data->has('CD22') ? $data['CD22'] : '' }}" coord="CD22" />
        <x-table.td type="input" value="{{ $data->has('CE22') ? $data['CE22'] : '' }}" coord="CE22" />
        <x-table.td type="input" value="{{ $data->has('CF22') ? $data['CF22'] : '' }}" coord="CF22" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше и детям-инвалидам (одновременно)" />
        <x-table.td value="17" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA23') ? $data['CA23'] : '' }}" coord="CA23" />
        <x-table.td type="input" value="{{ $data->has('CB23') ? $data['CB23'] : '' }}" coord="CB23" />
        <x-table.td type="input" value="{{ $data->has('CC23') ? $data['CC23'] : '' }}" coord="CC23" />
        <x-table.td type="input" value="{{ $data->has('CD23') ? $data['CD23'] : '' }}" coord="CD23" />
        <x-table.td type="input" value="{{ $data->has('CE23') ? $data['CE23'] : '' }}" coord="CE23" />
        <x-table.td type="input" value="{{ $data->has('CF23') ? $data['CF23'] : '' }}" coord="CF23" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере физической культуры и спорта" />
        <x-table.td value="18" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA24') ? $data['CA24'] : '' }}" coord="CA24" />
        <x-table.td type="input" value="{{ $data->has('CB24') ? $data['CB24'] : '' }}" coord="CB24" />
        <x-table.td type="input" value="{{ $data->has('CC24') ? $data['CC24'] : '' }}" coord="CC24" />
        <x-table.td type="input" value="{{ $data->has('CD24') ? $data['CD24'] : '' }}" coord="CD24" />
        <x-table.td type="input" value="{{ $data->has('CE24') ? $data['CE24'] : '' }}" coord="CE24" />
        <x-table.td type="input" value="{{ $data->has('CF24') ? $data['CF24'] : '' }}" coord="CF24" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше" />
        <x-table.td value="19" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA25') ? $data['CA25'] : '' }}" coord="CA25" />
        <x-table.td type="input" value="{{ $data->has('CB25') ? $data['CB25'] : '' }}" coord="CB25" />
        <x-table.td type="input" value="{{ $data->has('CC25') ? $data['CC25'] : '' }}" coord="CC25" />
        <x-table.td type="input" value="{{ $data->has('CD25') ? $data['CD25'] : '' }}" coord="CD25" />
        <x-table.td type="input" value="{{ $data->has('CE25') ? $data['CE25'] : '' }}" coord="CE25" />
        <x-table.td type="input" value="{{ $data->has('CF25') ? $data['CF25'] : '' }}" coord="CF25" />
    </tr>
    <tr>
        <x-table.td type="header" value="детям-инвалидам" />
        <x-table.td value="20" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA26') ? $data['CA26'] : '' }}" coord="CA26" />
        <x-table.td type="input" value="{{ $data->has('CB26') ? $data['CB26'] : '' }}" coord="CB26" />
        <x-table.td type="input" value="{{ $data->has('CC26') ? $data['CC26'] : '' }}" coord="CC26" />
        <x-table.td type="input" value="{{ $data->has('CD26') ? $data['CD26'] : '' }}" coord="CD26" />
        <x-table.td type="input" value="{{ $data->has('CE26') ? $data['CE26'] : '' }}" coord="CE26" />
        <x-table.td type="input" value="{{ $data->has('CF26') ? $data['CF26'] : '' }}" coord="CF26" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше и детям-инвалидам (одновременно)" />
        <x-table.td value="21" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA27') ? $data['CA27'] : '' }}" coord="CA27" />
        <x-table.td type="input" value="{{ $data->has('CB27') ? $data['CB27'] : '' }}" coord="CB27" />
        <x-table.td type="input" value="{{ $data->has('CC27') ? $data['CC27'] : '' }}" coord="CC27" />
        <x-table.td type="input" value="{{ $data->has('CD27') ? $data['CD27'] : '' }}" coord="CD27" />
        <x-table.td type="input" value="{{ $data->has('CE27') ? $data['CE27'] : '' }}" coord="CE27" />
        <x-table.td type="input" value="{{ $data->has('CF27') ? $data['CF27'] : '' }}" coord="CF27" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере культуры" />
        <x-table.td value="22" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA28') ? $data['CA28'] : '' }}" coord="CA28" />
        <x-table.td type="input" value="{{ $data->has('CB28') ? $data['CB28'] : '' }}" coord="CB28" />
        <x-table.td type="input" value="{{ $data->has('CC28') ? $data['CC28'] : '' }}" coord="CC28" />
        <x-table.td type="input" value="{{ $data->has('CD28') ? $data['CD28'] : '' }}" coord="CD28" />
        <x-table.td type="input" value="{{ $data->has('CE28') ? $data['CE28'] : '' }}" coord="CE28" />
        <x-table.td type="input" value="{{ $data->has('CF28') ? $data['CF28'] : '' }}" coord="CF28" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше" />
        <x-table.td value="23" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA29') ? $data['CA29'] : '' }}" coord="CA29" />
        <x-table.td type="input" value="{{ $data->has('CB29') ? $data['CB29'] : '' }}" coord="CB29" />
        <x-table.td type="input" value="{{ $data->has('CC29') ? $data['CC29'] : '' }}" coord="CC29" />
        <x-table.td type="input" value="{{ $data->has('CD29') ? $data['CD29'] : '' }}" coord="CD29" />
        <x-table.td type="input" value="{{ $data->has('CE29') ? $data['CE29'] : '' }}" coord="CE29" />
        <x-table.td type="input" value="{{ $data->has('CF29') ? $data['CF29'] : '' }}" coord="CF29" />
    </tr>
    <tr>
        <x-table.td type="header" value="детям-инвалидам" />
        <x-table.td value="24" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA30') ? $data['CA30'] : '' }}" coord="CA30" />
        <x-table.td type="input" value="{{ $data->has('CB30') ? $data['CB30'] : '' }}" coord="CB30" />
        <x-table.td type="input" value="{{ $data->has('CC30') ? $data['CC30'] : '' }}" coord="CC30" />
        <x-table.td type="input" value="{{ $data->has('CD30') ? $data['CD30'] : '' }}" coord="CD30" />
        <x-table.td type="input" value="{{ $data->has('CE30') ? $data['CE30'] : '' }}" coord="CE30" />
        <x-table.td type="input" value="{{ $data->has('CF30') ? $data['CF30'] : '' }}" coord="CF30" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидам в возрасте 18 лет и старше и детям-инвалидам (одновременно)" />
        <x-table.td value="25" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA31') ? $data['CA31'] : '' }}" coord="CA31" />
        <x-table.td type="input" value="{{ $data->has('CB31') ? $data['CB31'] : '' }}" coord="CB31" />
        <x-table.td type="input" value="{{ $data->has('CC31') ? $data['CC31'] : '' }}" coord="CC31" />
        <x-table.td type="input" value="{{ $data->has('CD31') ? $data['CD31'] : '' }}" coord="CD31" />
        <x-table.td type="input" value="{{ $data->has('CE31') ? $data['CE31'] : '' }}" coord="CE31" />
        <x-table.td type="input" value="{{ $data->has('CF31') ? $data['CF31'] : '' }}" coord="CF31" />
    </tr>
</tbody>
