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
        <x-table.td type="input" formul="({CC6}+{CE6}+{CG6})==({CA7}+{CA27}+{CA36}+{CA40}+{CA50})" bool-val="{CC6}+{CE6}+{CG6}" name="CA6" disabled />
        <x-table.td type="input" formul="({CD6}+{CF6}+{CH6})==({CB7}+{CB27}+{CB36}+{CB40}+{CB50})" bool-val="{CD6}+{CF6}+{CH6}" name="CB6" disabled  />
        <x-table.td type="input" formul="{CC7}+{CC27}+{CC36}+{CC40}+{CC50}" name="CC6" disabled/>
        <x-table.td type="input" formul="{CD7}+{CD27}+{CD36}+{CD40}+{CD50}" name="CD6" disabled/>
        <x-table.td type="input" formul="{CE7}+{CE27}+{CE36}+{CE40}+{CE50}" name="CE6" disabled/>
        <x-table.td type="input" formul="{CF7}+{CF27}+{CF36}+{CF40}+{CF50}" name="CF6" disabled/>
        <x-table.td type="input" formul="{CG7}+{CG27}+{CG36}+{CG40}+{CG50}" name="CG6" disabled/>
        <x-table.td type="input" formul="{CH7}+{CH27}+{CH36}+{CH40}+{CH50}" name="CH6" disabled/>
    </tr>
    <tr>
        <x-table.td type="header" value="Должности медицинских работников - всего, из них:" />
        <x-table.td value="02" center />
        <x-table.td type="input" formul="({CC7}+{CE7}+{CG7})==({CA8}+{CA16}+{CA19})" bool-val="{CC7}+{CE7}+{CG7}" name="CA7" disabled />
        <x-table.td type="input" formul="({CD7}+{CF7}+{CH7})==({CB8}+{CB16}+{CB19})" bool-val="{CD7}+{CF7}+{CH7}" name="CB7" disabled  />
        <x-table.td type="input" formul="{CC8}+{CC16}+{CC19}" name="CC7" disabled />
        <x-table.td type="input" formul="{CD8}+{CD16}+{CD19}" name="CD7" disabled />
        <x-table.td type="input" formul="{CE8}+{CE16}+{CE19}" name="CE7" disabled />
        <x-table.td type="input" formul="{CF8}+{CF16}+{CF19}" name="CF7" disabled />
        <x-table.td type="input" formul="{CG8}+{CG16}+{CG19}" name="CG7" disabled />
        <x-table.td type="input" formul="{CH8}+{CH16}+{CH19}" name="CH7" disabled />
    </tr>
    <tr>
        <x-table.td type="header" value="врачи - специалисты по профилю оказания медицинской помощи, всего, из них:" />
        <x-table.td value="03" center />
        <x-table.td type="input" formul="({CC8}+{CE8}+{CG8})>=({CA9}+{CA10}+{CA11}+{CA12}+{CA13}+{CA14}+{CA15})" bool-val="{CC8}+{CE8}+{CG8}" name="CA8" disabled />
        <x-table.td type="input" formul="({CD8}+{CF8}+{CH8})>=({CB9}+{CB10}+{CB11}+{CB12}+{CB13}+{CB14}+{CB15})" bool-val="{CD8}+{CF8}+{CH8}" name="CB8" disabled  />
        <x-table.td type="input" formul="{CC9}+{CC10}+{CC11}+{CC12}+{CC13}+{CC14}+{CC15}" name="CC8" />
        <x-table.td type="input" formul="{CD9}+{CD10}+{CD11}+{CD12}+{CD13}+{CD14}+{CD15}" name="CD8" />
        <x-table.td type="input" formul="{CE9}+{CE10}+{CE11}+{CE12}+{CE13}+{CE14}+{CE15}" name="CE8" />
        <x-table.td type="input" formul="{CF9}+{CF10}+{CF11}+{CF12}+{CF13}+{CF14}+{CF15}" name="CF8" />
        <x-table.td type="input" formul="{CG9}+{CG10}+{CG11}+{CG12}+{CG13}+{CG14}+{CG15}" name="CG8" />
        <x-table.td type="input" formul="{CH9}+{CH10}+{CH11}+{CH12}+{CH13}+{CH14}+{CH15}" name="CH8" />
    </tr>
    <tr>
        <x-table.td type="header" value="врач по медицинской реабилитации" />
        <x-table.td value="04" center />
        <x-table.td type="input" formul="{CC9}+{CE9}+{CG9}" name="CA9" disabled />
        <x-table.td type="input" formul="{CD9}+{CF9}+{CH9}" name="CB9" disabled  />
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
        <x-table.td type="input" formul="{CC10}+{CE10}+{CG10}" name="CA10" disabled />
        <x-table.td type="input" formul="{CD10}+{CF10}+{CH10}" name="CB10" disabled  />
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
        <x-table.td type="input" formul="{CC11}+{CE11}+{CG11}" name="CA11" disabled />
        <x-table.td type="input" formul="{CD11}+{CF11}+{CH11}" name="CB11" disabled  />
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
        <x-table.td type="input" formul="{CC12}+{CE12}+{CG12}" name="CA12" disabled />
        <x-table.td type="input" formul="{CD12}+{CF12}+{CH12}" name="CB12" disabled  />
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
        <x-table.td type="input" formul="{CC13}+{CE13}+{CG13}" name="CA13" disabled />
        <x-table.td type="input" formul="{CD13}+{CF13}+{CH13}" name="CB13" disabled  />
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
        <x-table.td type="input" formul="{CC14}+{CE14}+{CG14}" name="CA14" disabled />
        <x-table.td type="input" formul="{CD14}+{CF14}+{CH14}" name="CB14" disabled  />
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
        <x-table.td type="input" formul="{CC15}+{CE15}+{CG15}" name="CA15" disabled />
        <x-table.td type="input" formul="{CD15}+{CF15}+{CH15}" name="CB15" disabled  />
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
        <x-table.td type="input" formul="({CC16}+{CE16}+{CG16})>=({CA17}+{CA18})" bool-val="{CC16}+{CE16}+{CG16}" name="CA16" disabled />
        <x-table.td type="input" formul="({CD16}+{CF16}+{CH16})>=({CB17}+{CB18})" bool-val="{CD16}+{CF16}+{CH16}" name="CB16" disabled  />
        <x-table.td type="input" formul="{CC17}+{CC18}" name="CC16" />
        <x-table.td type="input" formul="{CD17}+{CD18}" name="CD16" />
        <x-table.td type="input" formul="{CE17}+{CE18}" name="CE16" />
        <x-table.td type="input" formul="{CF17}+{CF18}" name="CF16" />
        <x-table.td type="input" formul="{CG17}+{CG18}" name="CG16" />
        <x-table.td type="input" formul="{CH17}+{CH18}" name="CH16" />
    </tr>
    <tr>
        <x-table.td type="header" value="медицинский психолог" />
        <x-table.td value="12" center />
        <x-table.td type="input" formul="{CC17}+{CE17}+{CG17}" name="CA17" disabled />
        <x-table.td type="input" formul="{CD17}+{CF17}+{CH17}" name="CB17" disabled  />
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
        <x-table.td type="input" formul="{CC18}+{CE18}+{CG18}" name="CA18" disabled />
        <x-table.td type="input" formul="{CD18}+{CF18}+{CH18}" name="CB18" disabled  />
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
        <x-table.td type="input" formul="({CC19}+{CE19}+{CG19})>=({CA20}+{CA21}+{CA22}+{CA23}+{CA24}+{CA25}+{CA26})" bool-val="{CC19}+{CE19}+{CG19}" name="CA19" disabled />
        <x-table.td type="input" formul="({CD19}+{CF19}+{CH19})>=({CB20}+{CB21}+{CB22}+{CB23}+{CB24}+{CB25}+{CB26})" bool-val="{CD19}+{CF19}+{CH19}" name="CB19" disabled  />
        <x-table.td type="input" formul="{CC20}+{CC21}+{CC22}+{CC23}+{CC24}+{CC25}+{CC26}" name="CC19" />
        <x-table.td type="input" formul="{CD20}+{CD21}+{CD22}+{CD23}+{CD24}+{CD25}+{CD26}" name="CD19" />
        <x-table.td type="input" formul="{CE20}+{CE21}+{CE22}+{CE23}+{CE24}+{CE25}+{CE26}" name="CE19" />
        <x-table.td type="input" formul="{CF20}+{CF21}+{CF22}+{CF23}+{CF24}+{CF25}+{CF26}" name="CF19" />
        <x-table.td type="input" formul="{CG20}+{CG21}+{CG22}+{CG23}+{CG24}+{CG25}+{CG26}" name="CG19" />
        <x-table.td type="input" formul="{CH20}+{CH21}+{CH22}+{CH23}+{CH24}+{CH25}+{CH26}" name="CH19" />
    </tr>
    <tr>
        <x-table.td type="header" value="инструктор по лечебной физкультуре" />
        <x-table.td value="15" center />
        <x-table.td type="input" formul="{CC20}+{CE20}+{CG20}" name="CA20" disabled />
        <x-table.td type="input" formul="{CD20}+{CF20}+{CH20}" name="CB20" disabled  />
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
        <x-table.td type="input" formul="{CC21}+{CE21}+{CG21}" name="CA21" disabled />
        <x-table.td type="input" formul="{CD21}+{CF21}+{CH21}" name="CB21" disabled  />
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
        <x-table.td type="input" formul="{CC22}+{CE22}+{CG22}" name="CA22" disabled />
        <x-table.td type="input" formul="{CD22}+{CF22}+{CH22}" name="CB22" disabled  />
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
        <x-table.td type="input" formul="{CC23}+{CE23}+{CG23}" name="CA23" disabled />
        <x-table.td type="input" formul="{CD23}+{CF23}+{CH23}" name="CB23" disabled  />
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
        <x-table.td type="input" formul="{CC24}+{CE24}+{CG24}" name="CA24" disabled />
        <x-table.td type="input" formul="{CD24}+{CF24}+{CH24}" name="CB24" disabled  />
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
        <x-table.td type="input" formul="{CC25}+{CE25}+{CG25}" name="CA25" disabled />
        <x-table.td type="input" formul="{CD25}+{CF25}+{CH25}" name="CB25" disabled  />
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
        <x-table.td type="input" formul="{CC26}+{CE26}+{CG26}" name="CA26" disabled />
        <x-table.td type="input" formul="{CD26}+{CF26}+{CH26}" name="CB26" disabled  />
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
        <x-table.td type="input" formul="({CC27}+{CE27}+{CG27})>=({CA28}+{CA29}+{CA30}+{CA31}+{CA32}+{CA33}+{CA34}+{CA35})" bool-val="{CC27}+{CE27}+{CG27}" name="CA27" disabled />
        <x-table.td type="input" formul="({CD27}+{CF27}+{CH27})>=({CB28}+{CB29}+{CB30}+{CB31}+{CB32}+{CB33}+{CB34}+{CB35})" bool-val="{CD27}+{CF27}+{CH27}" name="CB27" disabled  />
        <x-table.td type="input" formul="{CC28}+{CC29}+{CC30}+{CC31}+{CC32}+{CC33}+{CC34}+{CC35}" name="CC27" />
        <x-table.td type="input" formul="{CD28}+{CD29}+{CD30}+{CD31}+{CD32}+{CD33}+{CD34}+{CD35}" name="CD27" />
        <x-table.td type="input" formul="{CE28}+{CE29}+{CE30}+{CE31}+{CE32}+{CE33}+{CE34}+{CE35}" name="CE27" />
        <x-table.td type="input" formul="{CF28}+{CF29}+{CF30}+{CF31}+{CF32}+{CF33}+{CF34}+{CF35}" name="CF27" />
        <x-table.td type="input" formul="{CG28}+{CG29}+{CG30}+{CG31}+{CG32}+{CG33}+{CG34}+{CG35}" name="CG27" />
        <x-table.td type="input" formul="{CH28}+{CH29}+{CH30}+{CH31}+{CH32}+{CH33}+{CH34}+{CH35}" name="CH27" />
    </tr>
    <tr>
        <x-table.td type="header" value="специалист по социальной работе" />
        <x-table.td value="23" center />
        <x-table.td type="input" formul="{CC28}+{CE28}+{CG28}" name="CA28" disabled />
        <x-table.td type="input" formul="{CD28}+{CF28}+{CH28}" name="CB28" disabled  />
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
        <x-table.td type="input" formul="{CC29}+{CE29}+{CG29}" name="CA29" disabled />
        <x-table.td type="input" formul="{CD29}+{CF29}+{CH29}" name="CB29" disabled  />
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
        <x-table.td type="input" formul="{CC30}+{CE30}+{CG30}" name="CA30" disabled />
        <x-table.td type="input" formul="{CD30}+{CF30}+{CH30}" name="CB30" disabled  />
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
        <x-table.td type="input" formul="{CC31}+{CE31}+{CG31}" name="CA31" disabled />
        <x-table.td type="input" formul="{CD31}+{CF31}+{CH31}" name="CB31" disabled  />
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
        <x-table.td type="input" formul="{CC32}+{CE32}+{CG32}" name="CA32" disabled />
        <x-table.td type="input" formul="{CD32}+{CF32}+{CH32}" name="CB32" disabled  />
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
        <x-table.td type="input" formul="{CC33}+{CE33}+{CG33}" name="CA33" disabled />
        <x-table.td type="input" formul="{CD33}+{CF33}+{CH33}" name="CB33" disabled  />
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
        <x-table.td type="input" formul="{CC34}+{CE34}+{CG34}" name="CA34" disabled />
        <x-table.td type="input" formul="{CD34}+{CF34}+{CH34}" name="CB34" disabled  />
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
        <x-table.td type="input" formul="{CC35}+{CE35}+{CG35}" name="CA35" disabled />
        <x-table.td type="input" formul="{CD35}+{CF35}+{CH35}" name="CB35" disabled  />
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
        <x-table.td type="input" formul="({CC36}+{CE36}+{CG36})>=({CA37}+{CA38}+{CA39})" bool-val="{CC36}+{CE36}+{CG36}" name="CA36" disabled />
        <x-table.td type="input" formul="({CD36}+{CF36}+{CH36})>=({CB37}+{CB38}+{CB39})" bool-val="{CD36}+{CF36}+{CH36}" name="CB36" disabled />
        <x-table.td type="input" formul="{CC37}+{CC38}+{CC39}" name="CC36" />
        <x-table.td type="input" formul="{CD37}+{CD38}+{CD39}" name="CD36" />
        <x-table.td type="input" formul="{CE37}+{CE38}+{CE39}" name="CE36" />
        <x-table.td type="input" formul="{CF37}+{CF38}+{CF39}" name="CF36" />
        <x-table.td type="input" formul="{CG37}+{CG38}+{CG39}" name="CG36" />
        <x-table.td type="input" formul="{CH37}+{CH38}+{CH39}" name="CH36" />
    </tr>
    <tr>
        <x-table.td type="header" value="инструктор по адаптивной физической культуре" />
        <x-table.td value="32" center />
        <x-table.td type="input" formul="{CC37}+{CE37}+{CG37}" name="CA37" disabled />
        <x-table.td type="input" formul="{CD37}+{CF37}+{CH37}" name="CB37" disabled  />
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
        <x-table.td type="input" formul="{CC38}+{CE38}+{CG38}" name="CA38" disabled />
        <x-table.td type="input" formul="{CD38}+{CF38}+{CH38}" name="CB38" disabled  />
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
        <x-table.td type="input" formul="{CC39}+{CE39}+{CG39}" name="CA39" disabled />
        <x-table.td type="input" formul="{CD39}+{CF39}+{CH39}" name="CB39" disabled  />
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
        <x-table.td type="input" formul="({CC40}+{CE40}+{CG40})>=({CA41}+{CA42}+{CA43}+{CA44}+{CA45}+{CA46}+{CA47}+{CA48}+{CA49})" bool-val="{CC40}+{CE40}+{CG40}" name="CA40" disabled />
        <x-table.td type="input" formul="({CD40}+{CF40}+{CH40})>=({CB41}+{CB42}+{CB43}+{CB44}+{CB45}+{CB46}+{CB47}+{CB48}+{CB49})" bool-val="{CD40}+{CF40}+{CH40}" name="CB40" disabled />
        <x-table.td type="input" formul="{CC41}+{CC42}+{CC43}+{CC44}+{CC45}+{CC46}+{CC47}+{CC48}+{CC49}" name="CC40" />
        <x-table.td type="input" formul="{CD41}+{CD42}+{CD43}+{CD44}+{CD45}+{CD46}+{CD47}+{CD48}+{CD49}" name="CD40" />
        <x-table.td type="input" formul="{CE41}+{CE42}+{CE43}+{CE44}+{CE45}+{CE46}+{CE47}+{CE48}+{CE49}" name="CE40" />
        <x-table.td type="input" formul="{CF41}+{CF42}+{CF43}+{CF44}+{CF45}+{CF46}+{CF47}+{CF48}+{CF49}" name="CF40" />
        <x-table.td type="input" formul="{CG41}+{CG42}+{CG43}+{CG44}+{CG45}+{CG46}+{CG47}+{CG48}+{CG49}" name="CG40" />
        <x-table.td type="input" formul="{CH41}+{CH42}+{CH43}+{CH44}+{CH45}+{CH46}+{CH47}+{CH48}+{CH49}" name="CH40" />
    </tr>
    <tr>
        <x-table.td type="header" value="педагог-психолог (психолог в сфере образования)" />
        <x-table.td value="36" center />
        <x-table.td type="input" formul="{CC41}+{CE41}+{CG41}" name="CA41" disabled />
        <x-table.td type="input" formul="{CD41}+{CF41}+{CH41}" name="CB41" disabled  />
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
        <x-table.td type="input" formul="{CC42}+{CE42}+{CG42}" name="CA42" disabled />
        <x-table.td type="input" formul="{CD42}+{CF42}+{CH42}" name="CB42" disabled  />
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
        <x-table.td type="input" formul="{CC43}+{CE43}+{CG43}" name="CA43" disabled />
        <x-table.td type="input" formul="{CD43}+{CF43}+{CH43}" name="CB43" disabled  />
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
        <x-table.td type="input" formul="{CC44}+{CE44}+{CG44}" name="CA44" disabled />
        <x-table.td type="input" formul="{CD44}+{CF44}+{CH44}" name="CB44" disabled  />
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
        <x-table.td type="input" formul="{CC45}+{CE45}+{CG45}" name="CA45" disabled />
        <x-table.td type="input" formul="{CD45}+{CF45}+{CH45}" name="CB45" disabled  />
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
        <x-table.td type="input" formul="{CC46}+{CE46}+{CG46}" name="CA46" disabled />
        <x-table.td type="input" formul="{CD46}+{CF46}+{CH46}" name="CB46" disabled  />
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
        <x-table.td type="input" formul="{CC47}+{CE47}+{CG47}" name="CA47" disabled />
        <x-table.td type="input" formul="{CD47}+{CF47}+{CH47}" name="CB47" disabled  />
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
        <x-table.td type="input" formul="{CC48}+{CE48}+{CG48}" name="CA48" disabled />
        <x-table.td type="input" formul="{CD48}+{CF48}+{CH48}" name="CB48" disabled  />
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
        <x-table.td type="input" formul="{CC49}+{CE49}+{CG49}" name="CA49" disabled />
        <x-table.td type="input" formul="{CD49}+{CF49}+{CH49}" name="CB49" disabled  />
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
        <x-table.td type="input" formul="({CC50}+{CE50}+{CG50})>=({CA51})" bool-val="{CC50}+{CE50}+{CG50}" name="CA50" disabled />
        <x-table.td type="input" formul="({CD50}+{CF50}+{CH50})>=({CB51})" bool-val="{CD50}+{CF50}+{CH50}" name="CB50" disabled  />
        <x-table.td type="input" formul="({CC51})" name="CC50" />
        <x-table.td type="input" formul="({CD51})" name="CD50" />
        <x-table.td type="input" formul="({CE51})" name="CE50" />
        <x-table.td type="input" formul="({CF51})" name="CF50" />
        <x-table.td type="input" formul="({CG51})" name="CG50" />
        <x-table.td type="input" formul="({CH51})" name="CH50" />
    </tr>
    <tr>
        <x-table.td type="header" value="протезист" />
        <x-table.td value="46" center />
        <x-table.td type="input" formul="{CC51}+{CE51}+{CG51}" name="CA51" disabled />
        <x-table.td type="input" formul="{CD51}+{CF51}+{CH51}" name="CB51" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC51') ? $data['CC51'] : '' }}" name="CC51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD51') ? $data['CD51'] : '' }}" name="CD51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CE51') ? $data['CE51'] : '' }}" name="CE51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CF51') ? $data['CF51'] : '' }}" name="CF51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CG51') ? $data['CG51'] : '' }}" name="CG51" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CH51') ? $data['CH51'] : '' }}" name="CH51" />
    </tr>
</tbody>
