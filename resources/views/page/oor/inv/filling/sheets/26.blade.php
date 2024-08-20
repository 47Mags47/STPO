<caption>{{ $sheet->header }}</caption>
<thead>
    <tr>
        <x-table.th rowspan=3 value="Наименование <br> показателей" />
        <x-table.th rowspan=3 value="№ строки" />
        <x-table.th rowspan=3 value="Общее количество специалистов, прошедших обучение, чел." />
        <x-table.th rowspan=3
            value="Общее количество специалистов в многопрофильных реабилитационных центрах, прошедших обучение*, чел." />
        <x-table.th colspan=4 value="из них, прошедших обучение" />
    </tr>
    <tr>
        <x-table.th colspan=2 value="по программам повышения квалификации" />
        <x-table.th colspan=2 value="по программам профессиональной переподготовки" />
    </tr>
    <tr>
        <x-table.th value="Всего, чел." />
        <x-table.th value="в том числе, в многопрофильных реабилитационных центрах*, чел." />
        <x-table.th value="Всего, чел." />
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
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header" value="Всего должностей специалистов, из них:" />
        <x-table.td value="01" center />
        <x-table.td type="input" formul="{CA8}+{CA28}+{CA37}+{CA41}+{CA51}" name="CA7" disabled />
        <x-table.td type="input" formul="{CB8}+{CB28}+{CB37}+{CB41}+{CB51}" name="CB7" disabled />
        <x-table.td type="input" formul="{CC8}+{CC28}+{CC37}+{CC41}+{CC51}" name="CC7" disabled />
        <x-table.td type="input" formul="{CD8}+{CD28}+{CD37}+{CD41}+{CD51}" name="CD7" disabled />
        <x-table.td type="input" formul="{CE8}+{CE28}+{CE37}+{CE41}+{CE51}" name="CE7" disabled />
        <x-table.td type="input" formul="{CF8}+{CF28}+{CF37}+{CF41}+{CF51}" name="CF7" disabled />
    </tr>
    <tr>
        <x-table.td type="header" value="Должности медицинских работников - всего, из них:" />
        <x-table.td value="02" center />
        <x-table.td type="input" formul="{CA9}+{CA17}+{CA20}" name="CA8" disabled />
        <x-table.td type="input" formul="{CB9}+{CA17}+{CA20}" name="CB8" disabled />
        <x-table.td type="input" formul="{CC9}+{CC17}+{CC20}" name="CC8" disabled />
        <x-table.td type="input" formul="{CD9}+{CD17}+{CD20}" name="CD8" disabled />
        <x-table.td type="input" formul="{CE9}+{CE17}+{CE20}" name="CE8" disabled />
        <x-table.td type="input" formul="{CF9}+{CF17}+{CF20}" name="CF8" disabled />
    </tr>
    <tr>
        <x-table.td type="header" value="врачи - специалисты по профилю оказания медицинской помощи, всего, из них:" />
        <x-table.td value="03" center />
        <x-table.td type="input" formul="({CC9}+{CE9})>=({CA10}+{CA11}+{CA12}+{CA13}+{CA14}+{CA15}+{CA16})" bool-val="{CC9}+{CE9}" name="CA9" disabled />
        <x-table.td type="input" formul="({CD9}+{CF9})>=({CB10}+{CB11}+{CB12}+{CB13}+{CB14}+{CB15}+{CB16})" bool-val="{CD9}+{CF9}" name="CB9" disabled />
        <x-table.td type="input" formul="{this}>=({CC10}+{CC11}+{CC12}+{CC13}+{CC14}+{CC15}+{CC16})" value="{{ $data->has('CC9') ? $data['CC9'] : '' }}" name="CC9" />
        <x-table.td type="input" formul="{this}>=({CD10}+{CD11}+{CD12}+{CD13}+{CD14}+{CD15}+{CD16})" value="{{ $data->has('CD9') ? $data['CD9'] : '' }}" name="CD9" />
        <x-table.td type="input" formul="{this}>=({CE10}+{CE11}+{CE12}+{CE13}+{CE14}+{CE15}+{CE16})" value="{{ $data->has('CE9') ? $data['CE9'] : '' }}" name="CE9" />
        <x-table.td type="input" formul="{this}>=({CF10}+{CF11}+{CF12}+{CF13}+{CF14}+{CF15}+{CF16})" value="{{ $data->has('CF9') ? $data['CF9'] : '' }}" name="CF9" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач по медицинской реабилитации" />
        <x-table.td value="04" center />
        <x-table.td type="input" formul="{CC10}+{CE10}" name="CA10" disabled />
        <x-table.td type="input" formul="{CD10}+{CF10}" name="CB10" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC10') ? $data['CC10'] : '' }}" name="CC10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD10') ? $data['CD10'] : '' }}" name="CD10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE10') ? $data['CE10'] : '' }}" name="CE10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF10') ? $data['CF10'] : '' }}" name="CF10" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач по лечебной физкультуре" />
        <x-table.td value="05" center />
        <x-table.td type="input" formul="{CC11}+{CE11}" name="CA11" disabled />
        <x-table.td type="input" formul="{CD11}+{CF11}" name="CB11" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC11') ? $data['CC11'] : '' }}" name="CC11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD11') ? $data['CD11'] : '' }}" name="CD11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE11') ? $data['CE11'] : '' }}" name="CE11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF11') ? $data['CF11'] : '' }}" name="CF11" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач физиотерапевт" />
        <x-table.td value="06" center />
        <x-table.td type="input" formul="{CC12}+{CE12}" name="CA12" disabled />
        <x-table.td type="input" formul="{CD12}+{CF12}" name="CB12" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC12') ? $data['CC12'] : '' }}" name="CC12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD12') ? $data['CD12'] : '' }}" name="CD12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE12') ? $data['CE12'] : '' }}" name="CE12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF12') ? $data['CF12'] : '' }}" name="CF12" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач-диетолог" />
        <x-table.td value="07" center />
        <x-table.td type="input" formul="{CC13}+{CE13}" name="CA13" disabled />
        <x-table.td type="input" formul="{CD13}+{CF13}" name="CB13" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC13') ? $data['CC13'] : '' }}" name="CC13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD13') ? $data['CD13'] : '' }}" name="CD13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE13') ? $data['CE13'] : '' }}" name="CE13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF13') ? $data['CF13'] : '' }}" name="CF13" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач мануальной терапии" />
        <x-table.td value="08" center />
        <x-table.td type="input" formul="{CC14}+{CE14}" name="CA14" disabled />
        <x-table.td type="input" formul="{CD14}+{CF14}" name="CB14" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC14') ? $data['CC14'] : '' }}" name="CC14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD14') ? $data['CD14'] : '' }}" name="CD14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE14') ? $data['CE14'] : '' }}" name="CE14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF14') ? $data['CF14'] : '' }}" name="CF14" />
    </tr>
    <tr>
        <x-table.td type="header" value="рефлексотерапевт" />
        <x-table.td value="09" center />
        <x-table.td type="input" formul="{CC15}+{CE15}" name="CA15" disabled />
        <x-table.td type="input" formul="{CD15}+{CF15}" name="CB15" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC15') ? $data['CC15'] : '' }}" name="CC15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD15') ? $data['CD15'] : '' }}" name="CD15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE15') ? $data['CE15'] : '' }}" name="CE15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF15') ? $data['CF15'] : '' }}" name="CF15" />
    </tr>
    <tr>
        <x-table.td type="header" value="психотерапевт" />
        <x-table.td value="10" center />
        <x-table.td type="input" formul="{CC16}+{CE16}" name="CA16" disabled />
        <x-table.td type="input" formul="{CD16}+{CF16}" name="CB16" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC16') ? $data['CC16'] : '' }}" name="CC16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD16') ? $data['CD16'] : '' }}" name="CD16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE16') ? $data['CE16'] : '' }}" name="CE16" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF16') ? $data['CF16'] : '' }}" name="CF16" />
    </tr>
    <tr>
        <x-table.td type="header" value="специалисты с высшим немедицинским образованием - всего, в том числе:" />
        <x-table.td value="11" center />
        <x-table.td type="input" formul="({CC17}+{CE17})>=({CA18}+{CA19})" bool-val="{CC17}+{CE17}" name="CA17" disabled />
        <x-table.td type="input" formul="({CD17}+{CF17})>=({CB18}+{CB19})" bool-val="{CD17}+{CF17}" name="CB17" disabled />
        <x-table.td type="input" formul="{this}>=({CC19}+{CC19})" value="{{ $data->has('CC17') ? $data['CC17'] : '' }}" name="CC17" />
        <x-table.td type="input" formul="{this}>=({CD19}+{CD19})" value="{{ $data->has('CD17') ? $data['CD17'] : '' }}" name="CD17" />
        <x-table.td type="input" formul="{this}>=({CE19}+{CE19})" value="{{ $data->has('CE17') ? $data['CE17'] : '' }}" name="CE17" />
        <x-table.td type="input" formul="{this}>=({CF19}+{CF19})" value="{{ $data->has('CF17') ? $data['CF17'] : '' }}" name="CF17" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинский психолог" />
        <x-table.td value="12" center />
        <x-table.td type="input" formul="{CC18}+{CE18}" name="CA18" disabled />
        <x-table.td type="input" formul="{CD18}+{CF18}" name="CB18" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC18') ? $data['CC18'] : '' }}" name="CC18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD18') ? $data['CD18'] : '' }}" name="CD18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE18') ? $data['CE18'] : '' }}" name="CE18" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF18') ? $data['CF18'] : '' }}" name="CF18" />
    </tr>
    <tr>
        <x-table.td type="header" value="нейропсихолог" />
        <x-table.td value="13" center />
        <x-table.td type="input" formul="{CC19}+{CE19}" name="CA19" disabled />
        <x-table.td type="input" formul="{CD19}+{CF19}" name="CB19" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC19') ? $data['CC19'] : '' }}" name="CC19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD19') ? $data['CD19'] : '' }}" name="CD19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE19') ? $data['CE19'] : '' }}" name="CE19" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF19') ? $data['CF19'] : '' }}" name="CF19" />
    </tr>
    <tr>
        <x-table.td type="header" value="средний медицинский персонал - всего, из них:" />
        <x-table.td value="14" center />
        <x-table.td type="input" formul="({CC20}+{CE20})>=({CA21}+{CA22}+{CA23}+{CA24}+{CA25}+{CA26}+{CA27})" bool-val="{CC20}+{CE20}" name="CA20" disabled />
        <x-table.td type="input" formul="({CD20}+{CF20})>=({CB21}+{CB22}+{CB23}+{CB24}+{CB25}+{CB26}+{CB27})" bool-val="{CD20}+{CF20}" name="CB20" disabled />
        <x-table.td type="input" formul="{this}>=({CC21}+{CC22}+{CC23}+{CC24}+{CC25}+{CC26}+{CC27})" value="{{ $data->has('CC20') ? $data['CC20'] : '' }}" name="CC20" />
        <x-table.td type="input" formul="{this}>=({CD21}+{CD22}+{CD23}+{CD24}+{CD25}+{CD26}+{CD27})" value="{{ $data->has('CD20') ? $data['CD20'] : '' }}" name="CD20" />
        <x-table.td type="input" formul="{this}>=({CE21}+{CE22}+{CE23}+{CE24}+{CE25}+{CE26}+{CE27})" value="{{ $data->has('CE20') ? $data['CE20'] : '' }}" name="CE20" />
        <x-table.td type="input" formul="{this}>=({CF21}+{CF22}+{CF23}+{CF24}+{CF25}+{CF26}+{CF27})" value="{{ $data->has('CF20') ? $data['CF20'] : '' }}" name="CF20" />
    </tr>
    <tr>
        <x-table.td type="header" value="инструктор по лечебной физкультуре" />
        <x-table.td value="15" center />
        <x-table.td type="input" formul="{CC21}+{CE21}" name="CA21" disabled />
        <x-table.td type="input" formul="{CD21}+{CF21}" name="CB21" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC21') ? $data['CC21'] : '' }}" name="CC21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD21') ? $data['CD21'] : '' }}" name="CD21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE21') ? $data['CE21'] : '' }}" name="CE21" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF21') ? $data['CF21'] : '' }}" name="CF21" />
    </tr>
    <tr>
        <x-table.td type="header" value="инструктор-методист по лечебной физкультуре" />
        <x-table.td value="16" center />
        <x-table.td type="input" formul="{CC22}+{CE22}" name="CA22" disabled />
        <x-table.td type="input" formul="{CD22}+{CF22}" name="CB22" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC22') ? $data['CC22'] : '' }}" name="CC22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD22') ? $data['CD22'] : '' }}" name="CD22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE22') ? $data['CE22'] : '' }}" name="CE22" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF22') ? $data['CF22'] : '' }}" name="CF22" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинская сестра по медицинской реабилитации" />
        <x-table.td value="17" center />
        <x-table.td type="input" formul="{CC23}+{CE23}" name="CA23" disabled />
        <x-table.td type="input" formul="{CD23}+{CF23}" name="CB23" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC23') ? $data['CC23'] : '' }}" name="CC23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD23') ? $data['CD23'] : '' }}" name="CD23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE23') ? $data['CE23'] : '' }}" name="CE23" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF23') ? $data['CF23'] : '' }}" name="CF23" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинская сестра по массажу" />
        <x-table.td value="18" center />
        <x-table.td type="input" formul="{CC24}+{CE24}" name="CA24" disabled />
        <x-table.td type="input" formul="{CD24}+{CF24}" name="CB24" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC24') ? $data['CC24'] : '' }}" name="CC24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD24') ? $data['CD24'] : '' }}" name="CD24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE24') ? $data['CE24'] : '' }}" name="CE24" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF24') ? $data['CF24'] : '' }}" name="CF24" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинская сестра по физиотерапии" />
        <x-table.td value="19" center />
        <x-table.td type="input" formul="{CC25}+{CE25}" name="CA25" disabled />
        <x-table.td type="input" formul="{CD25}+{CF25}" name="CB25" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC25') ? $data['CC25'] : '' }}" name="CC25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD25') ? $data['CD25'] : '' }}" name="CD25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE25') ? $data['CE25'] : '' }}" name="CE25" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF25') ? $data['CF25'] : '' }}" name="CF25" />
    </tr>
    <tr>
        <x-table.td type="header" value="кинезиоспециалист" />
        <x-table.td value="20" center />
        <x-table.td type="input" formul="{CC26}+{CE26}" name="CA26" disabled />
        <x-table.td type="input" formul="{CD26}+{CF26}" name="CB26" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC26') ? $data['CC26'] : '' }}" name="CC26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD26') ? $data['CD26'] : '' }}" name="CD26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE26') ? $data['CE26'] : '' }}" name="CE26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF26') ? $data['CF26'] : '' }}" name="CF26" />
    </tr>
    <tr>
        <x-table.td type="header" value="эргоспециалист" />
        <x-table.td value="21" center />
        <x-table.td type="input" formul="{CC27}+{CE27}" name="CA27" disabled />
        <x-table.td type="input" formul="{CD27}+{CF27}" name="CB27" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC27') ? $data['CC27'] : '' }}" name="CC27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD27') ? $data['CD27'] : '' }}" name="CD27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE27') ? $data['CE27'] : '' }}" name="CE27" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF27') ? $data['CF27'] : '' }}" name="CF27" />
    </tr>
    <tr>
        <x-table.td type="header" value="Должности специалистов в области социального обслуживания - всего, из них:" />
        <x-table.td value="22" center />
        <x-table.td type="input" formul="({CC28}+{CE28})>=({CA29}+{CA30}+{CA31}+{CA32}+{CA33}+{CA34}+{CA35}+{CA36})" bool-val="{CC28}+{CE28}" name="CA28" disabled />
        <x-table.td type="input" formul="({CD28}+{CF28})>=({CB29}+{CB30}+{CB31}+{CB32}+{CB33}+{CB34}+{CB35}+{CB36})" bool-val="{CD28}+{CF28}" name="CB28" disabled />
        <x-table.td type="input" formul="{this}>=({CC29}+{CC30}+{CC31}+{CC32}+{CC33}+{CC34}+{CC35}+{CC36})" value="{{ $data->has('CC28') ? $data['CC28'] : '' }}" name="CC28" />
        <x-table.td type="input" formul="{this}>=({CD29}+{CD30}+{CD31}+{CD32}+{CD33}+{CD34}+{CD35}+{CD36})" value="{{ $data->has('CD28') ? $data['CD28'] : '' }}" name="CD28" />
        <x-table.td type="input" formul="{this}>=({CE29}+{CE30}+{CE31}+{CE32}+{CE33}+{CE34}+{CE35}+{CE36})" value="{{ $data->has('CE28') ? $data['CE28'] : '' }}" name="CE28" />
        <x-table.td type="input" formul="{this}>=({CF29}+{CF30}+{CF31}+{CF32}+{CF33}+{CF34}+{CF35}+{CF36})" value="{{ $data->has('CF28') ? $data['CF28'] : '' }}" name="CF28" />
    </tr>
    <tr>
        <x-table.td type="header" value="специалист по социальной работе" />
        <x-table.td value="23" center />
        <x-table.td type="input" formul="{CC29}+{CE29}" name="CA29" disabled />
        <x-table.td type="input" formul="{CD29}+{CF29}" name="CB29" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC29') ? $data['CC29'] : '' }}" name="CC29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD29') ? $data['CD29'] : '' }}" name="CD29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE29') ? $data['CE29'] : '' }}" name="CE29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF29') ? $data['CF29'] : '' }}" name="CF29" />
    </tr>
    <tr>
        <x-table.td type="header" value="социальный работник" />
        <x-table.td value="24" center />
        <x-table.td type="input" formul="{CC30}+{CE30}" name="CA30" disabled />
        <x-table.td type="input" formul="{CD30}+{CF30}" name="CB30" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC30') ? $data['CC30'] : '' }}" name="CC30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD30') ? $data['CD30'] : '' }}" name="CD30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE30') ? $data['CE30'] : '' }}" name="CE30" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF30') ? $data['CF30'] : '' }}" name="CF30" />
    </tr>
    <tr>
        <x-table.td type="header" value="специалист по реабилитационной работе в социальной сфере" />
        <x-table.td value="25" center />
        <x-table.td type="input" formul="{CC31}+{CE31}" name="CA31" disabled />
        <x-table.td type="input" formul="{CD31}+{CF31}" name="CB31" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC31') ? $data['CC31'] : '' }}" name="CC31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD31') ? $data['CD31'] : '' }}" name="CD31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE31') ? $data['CE31'] : '' }}" name="CE31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF31') ? $data['CF31'] : '' }}" name="CF31" />
    </tr>
    <tr>
        <x-table.td type="header" value="психолог в социальной сфере" />
        <x-table.td value="26" center />
        <x-table.td type="input" formul="{CC32}+{CE32}" name="CA32" disabled />
        <x-table.td type="input" formul="{CD32}+{CF32}" name="CB32" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC32') ? $data['CC32'] : '' }}" name="CC32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD32') ? $data['CD32'] : '' }}" name="CD32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE32') ? $data['CE32'] : '' }}" name="CE32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF32') ? $data['CF32'] : '' }}" name="CF32" />
    </tr>
    <tr>
        <x-table.td type="header" value="специалист по работе с семьей" />
        <x-table.td value="27" center />
        <x-table.td type="input" formul="{CC33}+{CE33}" name="CA33" disabled />
        <x-table.td type="input" formul="{CD33}+{CF33}" name="CB33" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC33') ? $data['CC33'] : '' }}" name="CC33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD33') ? $data['CD33'] : '' }}" name="CD33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE33') ? $data['CE33'] : '' }}" name="CE33" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF33') ? $data['CF33'] : '' }}" name="CF33" />
    </tr>
    <tr>
        <x-table.td type="header" value="ассистент (помощник) по оказанию технической помощи инвалидами и лицам с ограниченными возможностями здоровья" />
        <x-table.td value="28" center />
        <x-table.td type="input" formul="{CC34}+{CE34}" name="CA34" disabled />
        <x-table.td type="input" formul="{CD34}+{CF34}" name="CB34" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC34') ? $data['CC34'] : '' }}" name="CC34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD34') ? $data['CD34'] : '' }}" name="CD34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE34') ? $data['CE34'] : '' }}" name="CE34" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF34') ? $data['CF34'] : '' }}" name="CF34" />
    </tr>
    <tr>
        <x-table.td type="header" value="переводчик русского жестового языка" />
        <x-table.td value="29" center />
        <x-table.td type="input" formul="{CC35}+{CE35}" name="CA35" disabled />
        <x-table.td type="input" formul="{CD35}+{CF35}" name="CB35" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC35') ? $data['CC35'] : '' }}" name="CC35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD35') ? $data['CD35'] : '' }}" name="CD35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE35') ? $data['CE35'] : '' }}" name="CE35" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF35') ? $data['CF35'] : '' }}" name="CF35" />
    </tr>
    <tr>
        <x-table.td type="header" value="тифлосурдопереводчик" />
        <x-table.td value="30" center />
        <x-table.td type="input" formul="{CC36}+{CE36}" name="CA36" disabled />
        <x-table.td type="input" formul="{CD36}+{CF36}" name="CB36" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC36') ? $data['CC36'] : '' }}" name="CC36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD36') ? $data['CD36'] : '' }}" name="CD36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE36') ? $data['CE36'] : '' }}" name="CE36" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF36') ? $data['CF36'] : '' }}" name="CF36" />
    </tr>
    <tr>
        <x-table.td type="header" value="Должности специалистов в области физической культуры и спорта - всего, из них:" />
        <x-table.td value="31" center />
        <x-table.td type="input" formul="({CC37}+{CE37})>=({CA38}+{CA39}+{CA40})" bool-val="{CC37}+{CE37}" name="CA37" disabled />
        <x-table.td type="input" formul="({CD37}+{CF37})>=({CB38}+{CB39}+{CB40})" bool-val="{CD37}+{CF37}" name="CB37" disabled />
        <x-table.td type="input" formul="{this}>=({CC38}+{CC39}+{CC40})" value="{{ $data->has('CC37') ? $data['CC37'] : '' }}" name="CC37" />
        <x-table.td type="input" formul="{this}>=({CD38}+{CD39}+{CD40})" value="{{ $data->has('CD37') ? $data['CD37'] : '' }}" name="CD37" />
        <x-table.td type="input" formul="{this}>=({CE38}+{CE39}+{CE40})" value="{{ $data->has('CE37') ? $data['CE37'] : '' }}" name="CE37" />
        <x-table.td type="input" formul="{this}>=({CF38}+{CF39}+{CF40})" value="{{ $data->has('CF37') ? $data['CF37'] : '' }}" name="CF37" />
    </tr>
    <tr>
        <x-table.td type="header" value="инструктор по адаптивной физической культуре" />
        <x-table.td value="32" center />
        <x-table.td type="input" formul="{CC38}+{CE38}" name="CA38" disabled />
        <x-table.td type="input" formul="{CD38}+{CF38}" name="CB38" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC38') ? $data['CC38'] : '' }}" name="CC38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD38') ? $data['CD38'] : '' }}" name="CD38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE38') ? $data['CE38'] : '' }}" name="CE38" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF38') ? $data['CF38'] : '' }}" name="CF38" />
    </tr>
    <tr>
        <x-table.td type="header" value="инструктор-методист по адаптивной физической культуре и адаптивному спорту" />
        <x-table.td value="33" center />
        <x-table.td type="input" formul="{CC39}+{CE39}" name="CA39" disabled />
        <x-table.td type="input" formul="{CD39}+{CF39}" name="CB39" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC39') ? $data['CC39'] : '' }}" name="CC39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD39') ? $data['CD39'] : '' }}" name="CD39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE39') ? $data['CE39'] : '' }}" name="CE39" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF39') ? $data['CF39'] : '' }}" name="CF39" />
    </tr>
    <tr>
        <x-table.td type="header" value="тренер по адаптивной физической культуре и адаптивному спорту" />
        <x-table.td value="34" center />
        <x-table.td type="input" formul="{CC40}+{CE40}" name="CA40" disabled />
        <x-table.td type="input" formul="{CD40}+{CF40}" name="CB40" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC40') ? $data['CC40'] : '' }}" name="CC40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD40') ? $data['CD40'] : '' }}" name="CD40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE40') ? $data['CE40'] : '' }}" name="CE40" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF40') ? $data['CF40'] : '' }}" name="CF40" />
    </tr>
    <tr>
        <x-table.td type="header" value="Должности специалистов в области образования и науки - всего, из них:" />
        <x-table.td value="35" center />
        <x-table.td type="input" formul="({CC41}+{CE41})>=({CA42}+{CA43}+{CA44}+{CA45}+{CA46}+{CA50})" bool-val="{CC41}+{CE41}" name="CA41" disabled />
        <x-table.td type="input" formul="({CD41}+{CF41})>=({CB42}+{CB43}+{CB44}+{CB45}+{CB46}+{CB50})" bool-val="{CD41}+{CF41}" name="CB41" disabled />
        <x-table.td type="input" formul="{this}>=({CC42}+{CC43}+{CC44}+{CC45}+{CC46}+{CC50})" value="{{ $data->has('CC41') ? $data['CC41'] : '' }}" name="CC41" />
        <x-table.td type="input" formul="{this}>=({CD42}+{CD43}+{CD44}+{CD45}+{CD46}+{CD50})" value="{{ $data->has('CD41') ? $data['CD41'] : '' }}" name="CD41" />
        <x-table.td type="input" formul="{this}>=({CE42}+{CE43}+{CE44}+{CE45}+{CE46}+{CE50})" value="{{ $data->has('CE41') ? $data['CE41'] : '' }}" name="CE41" />
        <x-table.td type="input" formul="{this}>=({CF42}+{CF43}+{CF44}+{CF45}+{CF46}+{CF50})" value="{{ $data->has('CF41') ? $data['CF41'] : '' }}" name="CF41" />
    </tr>
    <tr>
        <x-table.td type="header" value="педагог-психолог (психолог в сфере образования)" />
        <x-table.td value="36" center />
        <x-table.td type="input" formul="{CC42}+{CE42}" name="CA42" disabled />
        <x-table.td type="input" formul="{CD42}+{CF42}" name="CB42" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC42') ? $data['CC42'] : '' }}" name="CC42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD42') ? $data['CD42'] : '' }}" name="CD42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE42') ? $data['CE42'] : '' }}" name="CE42" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF42') ? $data['CF42'] : '' }}" name="CF42" />
    </tr>
    <tr>
        <x-table.td type="header" value="ассистент (помощник)" />
        <x-table.td value="37" center />
        <x-table.td type="input" formul="{CC43}+{CE43}" name="CA43" disabled />
        <x-table.td type="input" formul="{CD43}+{CF43}" name="CB43" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC43') ? $data['CC43'] : '' }}" name="CC43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD43') ? $data['CD43'] : '' }}" name="CD43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE43') ? $data['CE43'] : '' }}" name="CE43" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF43') ? $data['CF43'] : '' }}" name="CF43" />
    </tr>
    <tr>
        <x-table.td type="header" value="тьютор" />
        <x-table.td value="38" center />
        <x-table.td type="input" formul="{CC44}+{CE44}" name="CA44" disabled />
        <x-table.td type="input" formul="{CD44}+{CF44}" name="CB44" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC44') ? $data['CC44'] : '' }}" name="CC44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD44') ? $data['CD44'] : '' }}" name="CD44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE44') ? $data['CE44'] : '' }}" name="CE44" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF44') ? $data['CF44'] : '' }}" name="CF44" />
    </tr>
    <tr>
        <x-table.td type="header" value="логопед (в том числе учитель-логопед)" />
        <x-table.td value="39" center />
        <x-table.td type="input" formul="{CC45}+{CE45}" name="CA45" disabled />
        <x-table.td type="input" formul="{CD45}+{CF45}" name="CB45" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC45') ? $data['CC45'] : '' }}" name="CC45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD45') ? $data['CD45'] : '' }}" name="CD45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE45') ? $data['CE45'] : '' }}" name="CE45" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF45') ? $data['CF45'] : '' }}" name="CF45" />
    </tr>
    <tr>
        <x-table.td type="header" value="дефектолог (в том числе учитель-дефектолог) - всего, в том числе:" />
        <x-table.td value="40" center />
        <x-table.td type="input" formul="{CC46}+{CE46}" name="CA46" disabled />
        <x-table.td type="input" formul="{CD46}+{CF46}" name="CB46" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC46') ? $data['CC46'] : '' }}" name="CC46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD46') ? $data['CD46'] : '' }}" name="CD46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE46') ? $data['CE46'] : '' }}" name="CE46" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF46') ? $data['CF46'] : '' }}" name="CF46" />
    </tr>
    <tr>
        <x-table.td type="header" value="тифлопедагог" />
        <x-table.td value="41" center />
        <x-table.td type="input" formul="{CC47}+{CE47}" name="CA47" disabled />
        <x-table.td type="input" formul="{CD47}+{CF47}" name="CB47" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC47') ? $data['CC47'] : '' }}" name="CC47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD47') ? $data['CD47'] : '' }}" name="CD47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE47') ? $data['CE47'] : '' }}" name="CE47" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF47') ? $data['CF47'] : '' }}" name="CF47" />
    </tr>
    <tr>
        <x-table.td type="header" value="сурдопедагог" />
        <x-table.td value="42" center />
        <x-table.td type="input" formul="{CC48}+{CE48}" name="CA48" disabled />
        <x-table.td type="input" formul="{CD48}+{CF48}" name="CB48" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC48') ? $data['CC48'] : '' }}" name="CC48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD48') ? $data['CD48'] : '' }}" name="CD48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE48') ? $data['CE48'] : '' }}" name="CE48" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF48') ? $data['CF48'] : '' }}" name="CF48" />
    </tr>
    <tr>
        <x-table.td type="header" value="сурдопедаолигофренопедагоггог" />
        <x-table.td value="43" center />
        <x-table.td type="input" formul="{CC49}+{CE49}" name="CA49" disabled />
        <x-table.td type="input" formul="{CD49}+{CF49}" name="CB49" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC49') ? $data['CC49'] : '' }}" name="CC49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD49') ? $data['CD49'] : '' }}" name="CD49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE49') ? $data['CE49'] : '' }}" name="CE49" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF49') ? $data['CF49'] : '' }}" name="CF49" />
    </tr>
    <tr>
        <x-table.td type="header" value="методист" />
        <x-table.td value="44" center />
        <x-table.td type="input" formul="{CC50}+{CE50}" name="CA50" disabled />
        <x-table.td type="input" formul="{CD50}+{CF50}" name="CB50" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC50') ? $data['CC50'] : '' }}" name="CC50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD50') ? $data['CD50'] : '' }}" name="CD50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE50') ? $data['CE50'] : '' }}" name="CE50" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF50') ? $data['CF50'] : '' }}" name="CF50" />
    </tr>
    <tr>
        <x-table.td type="header" value="Технический персонал, из них:" />
        <x-table.td value="45" center />
        <x-table.td type="input" formul="({CC51}+{CE51})>=({CA52})" bool-val="{CC51}+{CE51}" name="CA51" disabled />
        <x-table.td type="input" formul="({CD51}+{CF51})>=({CB52})" bool-val="{CD51}+{CF51}" name="CB51" disabled />
        <x-table.td type="input" formul="{this}>=({CC52})" value="{{ $data->has('CC51') ? $data['CC51'] : '' }}" name="CC51" />
        <x-table.td type="input" formul="{this}>=({CD52})" value="{{ $data->has('CD51') ? $data['CD51'] : '' }}" name="CD51" />
        <x-table.td type="input" formul="{this}>=({CE52})" value="{{ $data->has('CE51') ? $data['CE51'] : '' }}" name="CE51" />
        <x-table.td type="input" formul="{this}>=({CF52})" value="{{ $data->has('CF51') ? $data['CF51'] : '' }}" name="CF51" />
    </tr>
    <tr>
        <x-table.td type="header" value="протезист" />
        <x-table.td value="46" center />
        <x-table.td type="input" formul="{CC52}+{CE52}" name="CA52" disabled />
        <x-table.td type="input" formul="{CD52}+{CF52}" name="CB52" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC52') ? $data['CC52'] : '' }}" name="CC52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD52') ? $data['CD52'] : '' }}" name="CD52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE52') ? $data['CE52'] : '' }}" name="CE52" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF52') ? $data['CF52'] : '' }}" name="CF52" />
    </tr>
</tbody>
