<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th value="Наименование <br> показателей" rowspan=3 />
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
        <x-table.th value="1" />
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
        <x-table.td value="01" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />

    </tr>
    <tr>
        <x-table.td type="header" value="в сфере социальной защиты населения - всего  (сумма строк 03-18), из них" />
        <x-table.td value="02" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA9') ? $data['CA9'] : '' }}" coord="CA9" />
        <x-table.td type="input" value="{{ $data->has('CB9') ? $data['CB9'] : '' }}" coord="CB9" />
        <x-table.td type="input" value="{{ $data->has('CC9') ? $data['CC9'] : '' }}" coord="CC9" />
        <x-table.td type="input" value="{{ $data->has('CD9') ? $data['CD9'] : '' }}" coord="CD9" />
        <x-table.td type="input" value="{{ $data->has('CE9') ? $data['CE9'] : '' }}" coord="CE9" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением функций зрения" />
        <x-table.td value="03" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA10') ? $data['CA10'] : '' }}" coord="CA10" />
        <x-table.td type="input" value="{{ $data->has('CB10') ? $data['CB10'] : '' }}" coord="CB10" />
        <x-table.td type="input" value="{{ $data->has('CC10') ? $data['CC10'] : '' }}" coord="CC10" />
        <x-table.td type="input" value="{{ $data->has('CD10') ? $data['CD10'] : '' }}" coord="CD10" />
        <x-table.td type="input" value="{{ $data->has('CE10') ? $data['CE10'] : '' }}" coord="CE10" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением функций слуха" />
        <x-table.td value="04" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA11') ? $data['CA11'] : '' }}" coord="CA11" />
        <x-table.td type="input" value="{{ $data->has('CB11') ? $data['CB11'] : '' }}" coord="CB11" />
        <x-table.td type="input" value="{{ $data->has('CC11') ? $data['CC11'] : '' }}" coord="CC11" />
        <x-table.td type="input" value="{{ $data->has('CD11') ? $data['CD11'] : '' }}" coord="CD11" />
        <x-table.td type="input" value="{{ $data->has('CE11') ? $data['CE11'] : '' }}" coord="CE11" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением одновременно функций зрения и слуха (слепоглухота)" />
        <x-table.td value="05" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA12') ? $data['CA12'] : '' }}" coord="CA12" />
        <x-table.td type="input" value="{{ $data->has('CB12') ? $data['CB12'] : '' }}" coord="CB12" />
        <x-table.td type="input" value="{{ $data->has('CC12') ? $data['CC12'] : '' }}" coord="CC12" />
        <x-table.td type="input" value="{{ $data->has('CD12') ? $data['CD12'] : '' }}" coord="CD12" />
        <x-table.td type="input" value="{{ $data->has('CE12') ? $data['CE12'] : '' }}" coord="CE12" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением функций верхних конечностей" />
        <x-table.td value="06" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA13') ? $data['CA13'] : '' }}" coord="CA13" />
        <x-table.td type="input" value="{{ $data->has('CB13') ? $data['CB13'] : '' }}" coord="CB13" />
        <x-table.td type="input" value="{{ $data->has('CC13') ? $data['CC13'] : '' }}" coord="CC13" />
        <x-table.td type="input" value="{{ $data->has('CD13') ? $data['CD13'] : '' }}" coord="CD13" />
        <x-table.td type="input" value="{{ $data->has('CE13') ? $data['CE13'] : '' }}" coord="CE13" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением функций нижних конечностей" />
        <x-table.td value="07" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA14') ? $data['CA14'] : '' }}" coord="CA14" />
        <x-table.td type="input" value="{{ $data->has('CB14') ? $data['CB14'] : '' }}" coord="CB14" />
        <x-table.td type="input" value="{{ $data->has('CC14') ? $data['CC14'] : '' }}" coord="CC14" />
        <x-table.td type="input" value="{{ $data->has('CD14') ? $data['CD14'] : '' }}" coord="CD14" />
        <x-table.td type="input" value="{{ $data->has('CE14') ? $data['CE14'] : '' }}" coord="CE14" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="с нарушением функций опорно-двигательного аппарата, вызывающее необходимость использования кресла-коляски" />
        <x-table.td value="08" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA15') ? $data['CA15'] : '' }}" coord="CA15" />
        <x-table.td type="input" value="{{ $data->has('CB15') ? $data['CB15'] : '' }}" coord="CB15" />
        <x-table.td type="input" value="{{ $data->has('CC15') ? $data['CC15'] : '' }}" coord="CC15" />
        <x-table.td type="input" value="{{ $data->has('CD15') ? $data['CD15'] : '' }}" coord="CD15" />
        <x-table.td type="input" value="{{ $data->has('CE15') ? $data['CE15'] : '' }}" coord="CE15" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением интеллекта" />
        <x-table.td value="09" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA16') ? $data['CA16'] : '' }}" coord="CA16" />
        <x-table.td type="input" value="{{ $data->has('CB16') ? $data['CB16'] : '' }}" coord="CB16" />
        <x-table.td type="input" value="{{ $data->has('CC16') ? $data['CC16'] : '' }}" coord="CC16" />
        <x-table.td type="input" value="{{ $data->has('CD16') ? $data['CD16'] : '' }}" coord="CD16" />
        <x-table.td type="input" value="{{ $data->has('CE16') ? $data['CE16'] : '' }}" coord="CE16" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением языковых и речевых функций" />
        <x-table.td value="10" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA17') ? $data['CA17'] : '' }}" coord="CA17" />
        <x-table.td type="input" value="{{ $data->has('CB17') ? $data['CB17'] : '' }}" coord="CB17" />
        <x-table.td type="input" value="{{ $data->has('CC17') ? $data['CC17'] : '' }}" coord="CC17" />
        <x-table.td type="input" value="{{ $data->has('CD17') ? $data['CD17'] : '' }}" coord="CD17" />
        <x-table.td type="input" value="{{ $data->has('CE17') ? $data['CE17'] : '' }}" coord="CE17" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением функций сердечно-сосудистой системы" />
        <x-table.td value="11" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA18') ? $data['CA18'] : '' }}" coord="CA18" />
        <x-table.td type="input" value="{{ $data->has('CB18') ? $data['CB18'] : '' }}" coord="CB18" />
        <x-table.td type="input" value="{{ $data->has('CC18') ? $data['CC18'] : '' }}" coord="CC18" />
        <x-table.td type="input" value="{{ $data->has('CD18') ? $data['CD18'] : '' }}" coord="CD18" />
        <x-table.td type="input" value="{{ $data->has('CE18') ? $data['CE18'] : '' }}" coord="CE18" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением функций дыхательной системы" />
        <x-table.td value="12" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA19') ? $data['CA19'] : '' }}" coord="CA19" />
        <x-table.td type="input" value="{{ $data->has('CB19') ? $data['CB19'] : '' }}" coord="CB19" />
        <x-table.td type="input" value="{{ $data->has('CC19') ? $data['CC19'] : '' }}" coord="CC19" />
        <x-table.td type="input" value="{{ $data->has('CD19') ? $data['CD19'] : '' }}" coord="CD19" />
        <x-table.td type="input" value="{{ $data->has('CE19') ? $data['CE19'] : '' }}" coord="CE19" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением функций пищеварительной системы" />
        <x-table.td value="13" h='center' />
        <x-table.td type="input" value="{{ $data->has('C20') ? $data['CA20'] : '' }}" coord="CA20" />
        <x-table.td type="input" value="{{ $data->has('CB20') ? $data['CB20'] : '' }}" coord="CB20" />
        <x-table.td type="input" value="{{ $data->has('CC20') ? $data['CC20'] : '' }}" coord="CC20" />
        <x-table.td type="input" value="{{ $data->has('CD20') ? $data['CD20'] : '' }}" coord="CD20" />
        <x-table.td type="input" value="{{ $data->has('CE20') ? $data['CE20'] : '' }}" coord="CE20" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением функций эндокринной системы и метаболизма" />
        <x-table.td value="14" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA9') ? $data['CA9'] : '' }}" coord="CA9" />
        <x-table.td type="input" value="{{ $data->has('CB9') ? $data['CB9'] : '' }}" coord="CB9" />
        <x-table.td type="input" value="{{ $data->has('CC9') ? $data['CC9'] : '' }}" coord="CC9" />
        <x-table.td type="input" value="{{ $data->has('CD9') ? $data['CD9'] : '' }}" coord="CD9" />
        <x-table.td type="input" value="{{ $data->has('CE9') ? $data['CE9'] : '' }}" coord="CE9" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением функций эндокринной системы и метаболизма" />
        <x-table.td value="15" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA22') ? $data['CA22'] : '' }}" coord="CA22" />
        <x-table.td type="input" value="{{ $data->has('CB22') ? $data['CB22'] : '' }}" coord="CB22" />
        <x-table.td type="input" value="{{ $data->has('CC22') ? $data['CC22'] : '' }}" coord="CC22" />
        <x-table.td type="input" value="{{ $data->has('CD22') ? $data['CD22'] : '' }}" coord="CD22" />
        <x-table.td type="input" value="{{ $data->has('CE22') ? $data['CE22'] : '' }}" coord="CE22" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением мочевыводительной функции" />
        <x-table.td value="16" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA23') ? $data['CA23'] : '' }}" coord="CA23" />
        <x-table.td type="input" value="{{ $data->has('CB23') ? $data['CB23'] : '' }}" coord="CB23" />
        <x-table.td type="input" value="{{ $data->has('CC23') ? $data['CC23'] : '' }}" coord="CC23" />
        <x-table.td type="input" value="{{ $data->has('CD23') ? $data['CD23'] : '' }}" coord="CD23" />
        <x-table.td type="input" value="{{ $data->has('CE23') ? $data['CE23'] : '' }}" coord="CE23" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением функций кожи и связаннях с ней систем" />
        <x-table.td value="17" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA24') ? $data['CA24'] : '' }}" coord="CA24" />
        <x-table.td type="input" value="{{ $data->has('CB24') ? $data['CB24'] : '' }}" coord="CB24" />
        <x-table.td type="input" value="{{ $data->has('CC24') ? $data['CC24'] : '' }}" coord="CC24" />
        <x-table.td type="input" value="{{ $data->has('CD24') ? $data['CD24'] : '' }}" coord="CD24" />
        <x-table.td type="input" value="{{ $data->has('CE24') ? $data['CE24'] : '' }}" coord="CE24" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением, обусловленным внешним уродством" />
        <x-table.td value="18" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA25') ? $data['CA25'] : '' }}" coord="CA25" />
        <x-table.td type="input" value="{{ $data->has('CB25') ? $data['CB25'] : '' }}" coord="CB25" />
        <x-table.td type="input" value="{{ $data->has('CC25') ? $data['CC25'] : '' }}" coord="CC25" />
        <x-table.td type="input" value="{{ $data->has('CD25') ? $data['CD25'] : '' }}" coord="CD25" />
        <x-table.td type="input" value="{{ $data->has('CE25') ? $data['CE25'] : '' }}" coord="CE25" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере образования - всего (сумма строк 20-29), из них" />
        <x-table.td value="19" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA26') ? $data['CA26'] : '' }}" coord="CA26" />
        <x-table.td type="input" value="{{ $data->has('CB26') ? $data['CB26'] : '' }}" coord="CB26" />
        <x-table.td type="input" value="{{ $data->has('CC26') ? $data['CC26'] : '' }}" coord="CC26" />
        <x-table.td type="input" value="{{ $data->has('CD26') ? $data['CD26'] : '' }}" coord="CD26" />
        <x-table.td type="input" value="{{ $data->has('CE26') ? $data['CE26'] : '' }}" coord="CE26" />
    </tr>
    <tr>
        <x-table.td type="header" value="глухие" />
        <x-table.td value="20" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA27') ? $data['CA27'] : '' }}" coord="CA27" />
        <x-table.td type="input" value="{{ $data->has('CB27') ? $data['CB27'] : '' }}" coord="CB27" />
        <x-table.td type="input" value="{{ $data->has('CC27') ? $data['CC27'] : '' }}" coord="CC27" />
        <x-table.td type="input" value="{{ $data->has('CD27') ? $data['CD27'] : '' }}" coord="CD27" />
        <x-table.td type="input" value="{{ $data->has('CE27') ? $data['CE27'] : '' }}" coord="CE27" />
    </tr>
    <tr>
        <x-table.td type="header" value="слабослышащие" />
        <x-table.td value="21" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA28') ? $data['CA28'] : '' }}" coord="CA28" />
        <x-table.td type="input" value="{{ $data->has('CB28') ? $data['CB28'] : '' }}" coord="CB28" />
        <x-table.td type="input" value="{{ $data->has('CC28') ? $data['CC28'] : '' }}" coord="CC28" />
        <x-table.td type="input" value="{{ $data->has('CD28') ? $data['CD28'] : '' }}" coord="CD28" />
        <x-table.td type="input" value="{{ $data->has('CE28') ? $data['CE28'] : '' }}" coord="CE28" />
    </tr>
    <tr>
        <x-table.td type="header" value="слепые" />
        <x-table.td value="22" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA29') ? $data['CA29'] : '' }}" coord="CA29" />
        <x-table.td type="input" value="{{ $data->has('CB29') ? $data['CB29'] : '' }}" coord="CB29" />
        <x-table.td type="input" value="{{ $data->has('CC29') ? $data['CC29'] : '' }}" coord="CC29" />
        <x-table.td type="input" value="{{ $data->has('CD29') ? $data['CD29'] : '' }}" coord="CD29" />
        <x-table.td type="input" value="{{ $data->has('CE29') ? $data['CE29'] : '' }}" coord="CE29" />
    </tr>
    <tr>
        <x-table.td type="header" value="слабовидящие" />
        <x-table.td value="23" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA30') ? $data['CA30'] : '' }}" coord="CA30" />
        <x-table.td type="input" value="{{ $data->has('CB30') ? $data['CB30'] : '' }}" coord="CB30" />
        <x-table.td type="input" value="{{ $data->has('CC30') ? $data['CC30'] : '' }}" coord="CC30" />
        <x-table.td type="input" value="{{ $data->has('CD30') ? $data['CD30'] : '' }}" coord="CD30" />
        <x-table.td type="input" value="{{ $data->has('CE30') ? $data['CE30'] : '' }}" coord="CE30" />
    </tr>
    <tr>
        <x-table.td type="header" value="с тяжелыми нарушениями речи" />
        <x-table.td value="24" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA31') ? $data['CA31'] : '' }}" coord="CA31" />
        <x-table.td type="input" value="{{ $data->has('CB31') ? $data['CB31'] : '' }}" coord="CB31" />
        <x-table.td type="input" value="{{ $data->has('CC31') ? $data['CC31'] : '' }}" coord="CC31" />
        <x-table.td type="input" value="{{ $data->has('CD31') ? $data['CD31'] : '' }}" coord="CD31" />
        <x-table.td type="input" value="{{ $data->has('CE31') ? $data['CE31'] : '' }}" coord="CE31" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушениями опорно-двигательного аппарата" />
        <x-table.td value="25" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA32') ? $data['CA32'] : '' }}" coord="CA32" />
        <x-table.td type="input" value="{{ $data->has('CB32') ? $data['CB32'] : '' }}" coord="CB32" />
        <x-table.td type="input" value="{{ $data->has('CC32') ? $data['CC32'] : '' }}" coord="CC32" />
        <x-table.td type="input" value="{{ $data->has('CD32') ? $data['CD32'] : '' }}" coord="CD32" />
        <x-table.td type="input" value="{{ $data->has('CE32') ? $data['CE32'] : '' }}" coord="CE32" />
    </tr>
    <tr>
        <x-table.td type="header" value="с задержкой психического развития" />
        <x-table.td value="26" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA33') ? $data['CA33'] : '' }}" coord="CA33" />
        <x-table.td type="input" value="{{ $data->has('CB33') ? $data['CB33'] : '' }}" coord="CB33" />
        <x-table.td type="input" value="{{ $data->has('CC33') ? $data['CC33'] : '' }}" coord="CC33" />
        <x-table.td type="input" value="{{ $data->has('CD33') ? $data['CD33'] : '' }}" coord="CD33" />
        <x-table.td type="input" value="{{ $data->has('CE33') ? $data['CE33'] : '' }}" coord="CE33" />
    </tr>
    <tr>
        <x-table.td type="header" value="с умственной отсталостью" />
        <x-table.td value="27" h='center' h='center' />
        <x-table.td type="input" value="{{ $data->has('CA34') ? $data['CA34'] : '' }}" coord="CA34" />
        <x-table.td type="input" value="{{ $data->has('CB34') ? $data['CB34'] : '' }}" coord="CB34" />
        <x-table.td type="input" value="{{ $data->has('CC34') ? $data['CC34'] : '' }}" coord="CC34" />
        <x-table.td type="input" value="{{ $data->has('CD34') ? $data['CD34'] : '' }}" coord="CD34" />
        <x-table.td type="input" value="{{ $data->has('CE34') ? $data['CE34'] : '' }}" coord="CE34" />
    </tr>
    <tr>
        <x-table.td type="header" value="с расстройствами аутистического спектра" />
        <x-table.td value="28" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA35') ? $data['CA35'] : '' }}" coord="CA35" />
        <x-table.td type="input" value="{{ $data->has('CB35') ? $data['CB35'] : '' }}" coord="CB35" />
        <x-table.td type="input" value="{{ $data->has('CC35') ? $data['CC35'] : '' }}" coord="CC35" />
        <x-table.td type="input" value="{{ $data->has('CD35') ? $data['CD35'] : '' }}" coord="CD35" />
        <x-table.td type="input" value="{{ $data->has('CE35') ? $data['CE35'] : '' }}" coord="CE35" />
    </tr>
    <tr>
        <x-table.td type="header" value="с тяжелыми множественными нарушениями развития" />
        <x-table.td value="29" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA36') ? $data['CA36'] : '' }}" coord="CA36" />
        <x-table.td type="input" value="{{ $data->has('CB36') ? $data['CB36'] : '' }}" coord="CB36" />
        <x-table.td type="input" value="{{ $data->has('CC36') ? $data['CC36'] : '' }}" coord="CC36" />
        <x-table.td type="input" value="{{ $data->has('CD36') ? $data['CD36'] : '' }}" coord="CD36" />
        <x-table.td type="input" value="{{ $data->has('CE36') ? $data['CE36'] : '' }}" coord="CE36" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере занятости населения - всего (сумма строк 31-34), из них" />
        <x-table.td value="30" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA37') ? $data['CA37'] : '' }}" coord="CA37" />
        <x-table.td type="input" value="{{ $data->has('CB37') ? $data['CB37'] : '' }}" coord="CB37" />
        <x-table.td type="input" value="{{ $data->has('CC37') ? $data['CC37'] : '' }}" coord="CC37" />
        <x-table.td type="input" value="{{ $data->has('CD37') ? $data['CD37'] : '' }}" coord="CD37" />
        <x-table.td type="input" value="{{ $data->has('CE37') ? $data['CE37'] : '' }}" coord="CE37" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением слуха (глухие и слабослышащие)" />
        <x-table.td value="31" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA38') ? $data['CA38'] : '' }}" coord="CA38" />
        <x-table.td type="input" value="{{ $data->has('CB38') ? $data['CB38'] : '' }}" coord="CB38" />
        <x-table.td type="input" value="{{ $data->has('CC38') ? $data['CC38'] : '' }}" coord="CC38" />
        <x-table.td type="input" value="{{ $data->has('CD38') ? $data['CD38'] : '' }}" coord="CD38" />
        <x-table.td type="input" value="{{ $data->has('CE38') ? $data['CE38'] : '' }}" coord="CE38" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушением зрения (слепые и слабовидящие)" />
        <x-table.td value="32" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA39') ? $data['CA39'] : '' }}" coord="CA39" />
        <x-table.td type="input" value="{{ $data->has('CB39') ? $data['CB39'] : '' }}" coord="CB39" />
        <x-table.td type="input" value="{{ $data->has('CC39') ? $data['CC39'] : '' }}" coord="CC39" />
        <x-table.td type="input" value="{{ $data->has('CD39') ? $data['CD39'] : '' }}" coord="CD39" />
        <x-table.td type="input" value="{{ $data->has('CE39') ? $data['CE39'] : '' }}" coord="CE39" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушениями опорно-двигательного аппарата" />
        <x-table.td value="33" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA40') ? $data['CA40'] : '' }}" coord="CA40" />
        <x-table.td type="input" value="{{ $data->has('CB40') ? $data['CB40'] : '' }}" coord="CB40" />
        <x-table.td type="input" value="{{ $data->has('CC40') ? $data['CC40'] : '' }}" coord="CC40" />
        <x-table.td type="input" value="{{ $data->has('CD40') ? $data['CD40'] : '' }}" coord="CD40" />
        <x-table.td type="input" value="{{ $data->has('CE40') ? $data['CE40'] : '' }}" coord="CE40" />
    </tr>
    <tr>
        <x-table.td type="header" value="с нарушениями интеллекта" />
        <x-table.td value="34" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA41') ? $data['CA41'] : '' }}" coord="CA41" />
        <x-table.td type="input" value="{{ $data->has('CB41') ? $data['CB41'] : '' }}" coord="CB41" />
        <x-table.td type="input" value="{{ $data->has('CC41') ? $data['CC41'] : '' }}" coord="CC41" />
        <x-table.td type="input" value="{{ $data->has('CD41') ? $data['CD41'] : '' }}" coord="CD41" />
        <x-table.td type="input" value="{{ $data->has('CE41') ? $data['CE41'] : '' }}" coord="CE41" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере физической культуры и спорта - всего (сумма строк 36-39), из них" />
        <x-table.td value="35" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA42') ? $data['CA42'] : '' }}" coord="CA42" />
        <x-table.td type="input" value="{{ $data->has('CB42') ? $data['CB42'] : '' }}" coord="CB42" />
        <x-table.td type="input" value="{{ $data->has('CC42') ? $data['CC42'] : '' }}" coord="CC42" />
        <x-table.td type="input" value="{{ $data->has('CD42') ? $data['CD42'] : '' }}" coord="CD42" />
        <x-table.td type="input" value="{{ $data->has('CE42') ? $data['CE42'] : '' }}" coord="CE42" />
    </tr>
    <tr>
        <x-table.td type="header" value="глухие" />
        <x-table.td value="36" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA43') ? $data['CA43'] : '' }}" coord="CA43" />
        <x-table.td type="input" value="{{ $data->has('CB43') ? $data['CB43'] : '' }}" coord="CB43" />
        <x-table.td type="input" value="{{ $data->has('CC43') ? $data['CC43'] : '' }}" coord="CC43" />
        <x-table.td type="input" value="{{ $data->has('CD43') ? $data['CD43'] : '' }}" coord="CD43" />
        <x-table.td type="input" value="{{ $data->has('CE43') ? $data['CE43'] : '' }}" coord="CE43" />
    </tr>
    <tr>
        <x-table.td type="header" value="слепые" />
        <x-table.td value="37" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA44') ? $data['CA44'] : '' }}" coord="CA44" />
        <x-table.td type="input" value="{{ $data->has('CB44') ? $data['CB44'] : '' }}" coord="CB44" />
        <x-table.td type="input" value="{{ $data->has('CC44') ? $data['CC44'] : '' }}" coord="CC44" />
        <x-table.td type="input" value="{{ $data->has('CD44') ? $data['CD44'] : '' }}" coord="CD44" />
        <x-table.td type="input" value="{{ $data->has('CE44') ? $data['CE44'] : '' }}" coord="CE44" />
    </tr>
    <tr>
        <x-table.td type="header" value="с интеллектуальными нарушениями" />
        <x-table.td value="38" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA45') ? $data['CA45'] : '' }}" coord="CA45" />
        <x-table.td type="input" value="{{ $data->has('CB45') ? $data['CB45'] : '' }}" coord="CB45" />
        <x-table.td type="input" value="{{ $data->has('CC45') ? $data['CC45'] : '' }}" coord="CC45" />
        <x-table.td type="input" value="{{ $data->has('CD45') ? $data['CD45'] : '' }}" coord="CD45" />
        <x-table.td type="input" value="{{ $data->has('CE45') ? $data['CE45'] : '' }}" coord="CE45" />
    <tr>
        <x-table.td type="header" value="с поражениями опорно-двигательного аппарата" />
        <x-table.td value="39" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA46') ? $data['CA46'] : '' }}" coord="CA46" />
        <x-table.td type="input" value="{{ $data->has('CB46') ? $data['CB46'] : '' }}" coord="CB46" />
        <x-table.td type="input" value="{{ $data->has('CC46') ? $data['CC46'] : '' }}" coord="CC46" />
        <x-table.td type="input" value="{{ $data->has('CD46') ? $data['CD46'] : '' }}" coord="CD46" />
        <x-table.td type="input" value="{{ $data->has('CE46') ? $data['CE46'] : '' }}" coord="CE46" />
    </tr>
    </tr>



</tbody>
