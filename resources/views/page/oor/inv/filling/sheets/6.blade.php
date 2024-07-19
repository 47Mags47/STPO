<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th value="Наименование <br> показателей" rowspan=3 header />
        <x-table.th value="№ строки" rowspan=3 />
        <x-table.th value="Всего (сумма гр. 4 и 6), чел." rowspan=3 />
        <x-table.th value="из них:" colspan=4 />
    </tr>
    <tr>
        <x-table.th value="инвалидов в возрасте 18 лет и старше" colspan=2 />
        <x-table.th value="детей-инвалидов" colspan=2 />
    </tr>
    <tr>
        <x-table.th value="Всего, чел." />
        <x-table.th value="из них в многопрофильных реабилитационных центрах*, чел" />
        <x-table.th value="Всего, чел." />
        <x-table.th value="из них в многопрофильных реабилитационных центрах*, чел" />
    </tr>
    <tr>
        <x-table.th value="1" header />
        <x-table.th value="2" />
        <x-table.th value="3" />
        <x-table.th value="4" />
        <x-table.th value="5" />
        <x-table.th value="6" />
        <x-table.th value="7" />
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header"
            value="Сведения о численности инвалидов в возрасте 18 лет и старше и детей-инвалидов, получивших услуги по реабилитации и абилитации - всего, в том числе" />
        <x-table.td value="01" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" name="CA8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" name="CB8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" name="CC8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" name="CD8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" name="CE8" />

    </tr>
    <tr>
        <x-table.td type="header" value="в сфере социальной защиты населения - всего  (сумма строк 03-18), из них" />
        <x-table.td value="02" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA9') ? $data['CA9'] : '' }}" name="CA9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB9') ? $data['CB9'] : '' }}" name="CB9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC9') ? $data['CC9'] : '' }}" name="CC9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD9') ? $data['CD9'] : '' }}" name="CD9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE9') ? $data['CE9'] : '' }}" name="CE9" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением функций зрения" />
        <x-table.td value="03" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA10') ? $data['CA10'] : '' }}" name="CA10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB10') ? $data['CB10'] : '' }}" name="CB10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC10') ? $data['CC10'] : '' }}" name="CC10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD10') ? $data['CD10'] : '' }}" name="CD10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE10') ? $data['CE10'] : '' }}" name="CE10" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением функций слуха" />
        <x-table.td value="04" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA11') ? $data['CA11'] : '' }}" name="CA11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB11') ? $data['CB11'] : '' }}" name="CB11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC11') ? $data['CC11'] : '' }}" name="CC11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD11') ? $data['CD11'] : '' }}" name="CD11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE11') ? $data['CE11'] : '' }}" name="CE11" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением одновременно функций зрения и слуха (слепоглухота)" />
        <x-table.td value="05" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA12') ? $data['CA12'] : '' }}" name="CA12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB12') ? $data['CB12'] : '' }}" name="CB12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC12') ? $data['CC12'] : '' }}" name="CC12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD12') ? $data['CD12'] : '' }}" name="CD12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE12') ? $data['CE12'] : '' }}" name="CE12" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением функций верхних конечностей" />
        <x-table.td value="06" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA13') ? $data['CA13'] : '' }}" name="CA13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB13') ? $data['CB13'] : '' }}" name="CB13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC13') ? $data['CC13'] : '' }}" name="CC13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD13') ? $data['CD13'] : '' }}" name="CD13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE13') ? $data['CE13'] : '' }}" name="CE13" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением функций нижних конечностей" />
        <x-table.td value="07" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA14') ? $data['CA14'] : '' }}" name="CA14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB14') ? $data['CB14'] : '' }}" name="CB14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC14') ? $data['CC14'] : '' }}" name="CC14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD14') ? $data['CD14'] : '' }}" name="CD14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE14') ? $data['CE14'] : '' }}" name="CE14" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="с нарушением функций опорно-двигательного аппарата, вызывающее необходимость использования кресла-коляски" />
        <x-table.td value="08" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA15') ? $data['CA15'] : '' }}" name="CA15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB15') ? $data['CB15'] : '' }}" name="CB15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC15') ? $data['CC15'] : '' }}" name="CC15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD15') ? $data['CD15'] : '' }}" name="CD15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE15') ? $data['CE15'] : '' }}" name="CE15" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением интеллекта" />
        <x-table.td value="09" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA16') ? $data['CA16'] : '' }}" name="CA16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB16') ? $data['CB16'] : '' }}" name="CB16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC16') ? $data['CC16'] : '' }}" name="CC16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD16') ? $data['CD16'] : '' }}" name="CD16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE16') ? $data['CE16'] : '' }}" name="CE16" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением языковых и речевых функций" />
        <x-table.td value="10" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA17') ? $data['CA17'] : '' }}" name="CA17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB17') ? $data['CB17'] : '' }}" name="CB17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC17') ? $data['CC17'] : '' }}" name="CC17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD17') ? $data['CD17'] : '' }}" name="CD17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE17') ? $data['CE17'] : '' }}" name="CE17" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением функций сердечно-сосудистой системы" />
        <x-table.td value="11" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA18') ? $data['CA18'] : '' }}" name="CA18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB18') ? $data['CB18'] : '' }}" name="CB18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC18') ? $data['CC18'] : '' }}" name="CC18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD18') ? $data['CD18'] : '' }}" name="CD18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE18') ? $data['CE18'] : '' }}" name="CE18" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением функций дыхательной системы" />
        <x-table.td value="12" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA19') ? $data['CA19'] : '' }}" name="CA19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB19') ? $data['CB19'] : '' }}" name="CB19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC19') ? $data['CC19'] : '' }}" name="CC19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD19') ? $data['CD19'] : '' }}" name="CD19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE19') ? $data['CE19'] : '' }}" name="CE19" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением функций пищеварительной системы" />
        <x-table.td value="13" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA20') ? $data['CA20'] : '' }}" name="CA20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB20') ? $data['CB20'] : '' }}" name="CB20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC20') ? $data['CC20'] : '' }}" name="CC20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD20') ? $data['CD20'] : '' }}" name="CD20" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE20') ? $data['CE20'] : '' }}" name="CE20" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением функций эндокринной системы и метаболизма" />
        <x-table.td value="14" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA21') ? $data['CA21'] : '' }}" name="CA21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB21') ? $data['CB21'] : '' }}" name="CB21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC21') ? $data['CC21'] : '' }}" name="CC21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD21') ? $data['CD21'] : '' }}" name="CD21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE21') ? $data['CE21'] : '' }}" name="CE21" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением функций системы крови и имунной системы" />
        <x-table.td value="15" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA22') ? $data['CA22'] : '' }}" name="CA22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB22') ? $data['CB22'] : '' }}" name="CB22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC22') ? $data['CC22'] : '' }}" name="CC22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD22') ? $data['CD22'] : '' }}" name="CD22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE22') ? $data['CE22'] : '' }}" name="CE22" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением мочевыводительной функции" />
        <x-table.td value="16" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA23') ? $data['CA23'] : '' }}" name="CA23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB23') ? $data['CB23'] : '' }}" name="CB23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC23') ? $data['CC23'] : '' }}" name="CC23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD23') ? $data['CD23'] : '' }}" name="CD23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE23') ? $data['CE23'] : '' }}" name="CE23" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением функций кожи и связаннях с ней систем" />
        <x-table.td value="17" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA24') ? $data['CA24'] : '' }}" name="CA24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB24') ? $data['CB24'] : '' }}" name="CB24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC24') ? $data['CC24'] : '' }}" name="CC24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD24') ? $data['CD24'] : '' }}" name="CD24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE24') ? $data['CE24'] : '' }}" name="CE24" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением, обусловленным внешним уродством" />
        <x-table.td value="18" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA25') ? $data['CA25'] : '' }}" name="CA25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB25') ? $data['CB25'] : '' }}" name="CB25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC25') ? $data['CC25'] : '' }}" name="CC25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD25') ? $data['CD25'] : '' }}" name="CD25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE25') ? $data['CE25'] : '' }}" name="CE25" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере образования - всего (сумма строк 20-29), из них" />
        <x-table.td value="19" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA26') ? $data['CA26'] : '' }}" name="CA26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB26') ? $data['CB26'] : '' }}" name="CB26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC26') ? $data['CC26'] : '' }}" name="CC26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD26') ? $data['CD26'] : '' }}" name="CD26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE26') ? $data['CE26'] : '' }}" name="CE26" />
    </tr>
    <tr>
        <x-table.td type="header" value="глухие" />
        <x-table.td value="20" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA27') ? $data['CA27'] : '' }}" name="CA27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB27') ? $data['CB27'] : '' }}" name="CB27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC27') ? $data['CC27'] : '' }}" name="CC27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD27') ? $data['CD27'] : '' }}" name="CD27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE27') ? $data['CE27'] : '' }}" name="CE27" />
    </tr>
    <tr>
        <x-table.td type="header" value="слабослышащие" />
        <x-table.td value="21" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA28') ? $data['CA28'] : '' }}" name="CA28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB28') ? $data['CB28'] : '' }}" name="CB28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC28') ? $data['CC28'] : '' }}" name="CC28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD28') ? $data['CD28'] : '' }}" name="CD28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE28') ? $data['CE28'] : '' }}" name="CE28" />
    </tr>
    <tr>
        <x-table.td type="header" value="слепые" />
        <x-table.td value="22" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA29') ? $data['CA29'] : '' }}" name="CA29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB29') ? $data['CB29'] : '' }}" name="CB29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC29') ? $data['CC29'] : '' }}" name="CC29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD29') ? $data['CD29'] : '' }}" name="CD29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE29') ? $data['CE29'] : '' }}" name="CE29" />
    </tr>
    <tr>
        <x-table.td type="header" value="слабовидящие" />
        <x-table.td value="23" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA30') ? $data['CA30'] : '' }}" name="CA30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB30') ? $data['CB30'] : '' }}" name="CB30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC30') ? $data['CC30'] : '' }}" name="CC30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD30') ? $data['CD30'] : '' }}" name="CD30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE30') ? $data['CE30'] : '' }}" name="CE30" />
    </tr>
    <tr>
        <x-table.td type="header" value="с тяжелыми нарушениями речи" />
        <x-table.td value="24" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA31') ? $data['CA31'] : '' }}" name="CA31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB31') ? $data['CB31'] : '' }}" name="CB31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC31') ? $data['CC31'] : '' }}" name="CC31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD31') ? $data['CD31'] : '' }}" name="CD31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE31') ? $data['CE31'] : '' }}" name="CE31" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушениями опорно-двигательного аппарата" />
        <x-table.td value="25" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA32') ? $data['CA32'] : '' }}" name="CA32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB32') ? $data['CB32'] : '' }}" name="CB32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC32') ? $data['CC32'] : '' }}" name="CC32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD32') ? $data['CD32'] : '' }}" name="CD32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE32') ? $data['CE32'] : '' }}" name="CE32" />
    </tr>
    <tr>
        <x-table.td type="header" value="с задержкой психического развития" />
        <x-table.td value="26" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA33') ? $data['CA33'] : '' }}" name="CA33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB33') ? $data['CB33'] : '' }}" name="CB33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC33') ? $data['CC33'] : '' }}" name="CC33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD33') ? $data['CD33'] : '' }}" name="CD33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE33') ? $data['CE33'] : '' }}" name="CE33" />
    </tr>
    <tr>
        <x-table.td type="header" value="с умственной отсталостью" />
        <x-table.td value="27" center center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA34') ? $data['CA34'] : '' }}" name="CA34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB34') ? $data['CB34'] : '' }}" name="CB34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC34') ? $data['CC34'] : '' }}" name="CC34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD34') ? $data['CD34'] : '' }}" name="CD34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE34') ? $data['CE34'] : '' }}" name="CE34" />
    </tr>
    <tr>
        <x-table.td type="header" value="с расстройствами аутистического спектра" />
        <x-table.td value="28" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA35') ? $data['CA35'] : '' }}" name="CA35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB35') ? $data['CB35'] : '' }}" name="CB35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC35') ? $data['CC35'] : '' }}" name="CC35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD35') ? $data['CD35'] : '' }}" name="CD35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE35') ? $data['CE35'] : '' }}" name="CE35" />
    </tr>
    <tr>
        <x-table.td type="header" value="с тяжелыми множественными нарушениями развития" />
        <x-table.td value="29" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA36') ? $data['CA36'] : '' }}" name="CA36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB36') ? $data['CB36'] : '' }}" name="CB36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC36') ? $data['CC36'] : '' }}" name="CC36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD36') ? $data['CD36'] : '' }}" name="CD36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE36') ? $data['CE36'] : '' }}" name="CE36" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере занятости населения - всего (сумма строк 31-34), из них" />
        <x-table.td value="30" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA37') ? $data['CA37'] : '' }}" name="CA37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB37') ? $data['CB37'] : '' }}" name="CB37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC37') ? $data['CC37'] : '' }}" name="CC37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD37') ? $data['CD37'] : '' }}" name="CD37" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE37') ? $data['CE37'] : '' }}" name="CE37" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением слуха (глухие и слабослышащие)" />
        <x-table.td value="31" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA38') ? $data['CA38'] : '' }}" name="CA38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB38') ? $data['CB38'] : '' }}" name="CB38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC38') ? $data['CC38'] : '' }}" name="CC38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD38') ? $data['CD38'] : '' }}" name="CD38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE38') ? $data['CE38'] : '' }}" name="CE38" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением зрения (слепые и слабовидящие)" />
        <x-table.td value="32" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA39') ? $data['CA39'] : '' }}" name="CA39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB39') ? $data['CB39'] : '' }}" name="CB39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC39') ? $data['CC39'] : '' }}" name="CC39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD39') ? $data['CD39'] : '' }}" name="CD39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE39') ? $data['CE39'] : '' }}" name="CE39" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушениями опорно-двигательного аппарата" />
        <x-table.td value="33" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA40') ? $data['CA40'] : '' }}" name="CA40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB40') ? $data['CB40'] : '' }}" name="CB40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC40') ? $data['CC40'] : '' }}" name="CC40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD40') ? $data['CD40'] : '' }}" name="CD40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE40') ? $data['CE40'] : '' }}" name="CE40" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушениями интеллекта" />
        <x-table.td value="34" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA41') ? $data['CA41'] : '' }}" name="CA41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB41') ? $data['CB41'] : '' }}" name="CB41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC41') ? $data['CC41'] : '' }}" name="CC41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD41') ? $data['CD41'] : '' }}" name="CD41" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE41') ? $data['CE41'] : '' }}" name="CE41" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере физической культуры и спорта - всего (сумма строк 36-39), из них" />
        <x-table.td value="35" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA42') ? $data['CA42'] : '' }}" name="CA42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB42') ? $data['CB42'] : '' }}" name="CB42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC42') ? $data['CC42'] : '' }}" name="CC42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD42') ? $data['CD42'] : '' }}" name="CD42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE42') ? $data['CE42'] : '' }}" name="CE42" />
    </tr>
    <tr>
        <x-table.td type="header" value="глухие" />
        <x-table.td value="36" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA43') ? $data['CA43'] : '' }}" name="CA43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB43') ? $data['CB43'] : '' }}" name="CB43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC43') ? $data['CC43'] : '' }}" name="CC43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD43') ? $data['CD43'] : '' }}" name="CD43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE43') ? $data['CE43'] : '' }}" name="CE43" />
    </tr>
    <tr>
        <x-table.td type="header" value="слепые" />
        <x-table.td value="37" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA44') ? $data['CA44'] : '' }}" name="CA44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB44') ? $data['CB44'] : '' }}" name="CB44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC44') ? $data['CC44'] : '' }}" name="CC44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD44') ? $data['CD44'] : '' }}" name="CD44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE44') ? $data['CE44'] : '' }}" name="CE44" />
    </tr>
    <tr>
        <x-table.td type="header" value="с интеллектуальными нарушениями" />
        <x-table.td value="38" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA45') ? $data['CA45'] : '' }}" name="CA45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB45') ? $data['CB45'] : '' }}" name="CB45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC45') ? $data['CC45'] : '' }}" name="CC45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD45') ? $data['CD45'] : '' }}" name="CD45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE45') ? $data['CE45'] : '' }}" name="CE45" />
    <tr>
        <x-table.td type="header" value="с поражениями опорно-двигательного аппарата" />
        <x-table.td value="39" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA46') ? $data['CA46'] : '' }}" name="CA46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB46') ? $data['CB46'] : '' }}" name="CB46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC46') ? $data['CC46'] : '' }}" name="CC46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD46') ? $data['CD46'] : '' }}" name="CD46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE46') ? $data['CE46'] : '' }}" name="CE46" />
    </tr>
    </tr>



</tbody>
