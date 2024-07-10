<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th rowspan=2 value="Наименование <br> показателей" />
        <x-table.th rowspan=2 value="№ строки" />
        <x-table.th colspan=3 value="Организации, предоставляющие услуги (мероприятия) в сфере культуры" />
    </tr>
    <tr>
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
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header" value="Организации сферы физической культуры и спорта - всего, из них:" />
        <x-table.td value="01" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA18') ? $data['CA18'] : '' }}" name="CA18" />
        <x-table.td type="input" value="{{ $data->has('CB18') ? $data['CB18'] : '' }}" name="CB18" />
        <x-table.td type="input" value="{{ $data->has('CC18') ? $data['CC18'] : '' }}" name="CC18" />
    </tr>
    <tr>
        <x-table.td type="header" value="Центры спортивной подготовки по спорту инвалидов" />
        <x-table.td value="02" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA19') ? $data['CA19'] : '' }}" name="CA19" />
        <x-table.td type="input" value="{{ $data->has('CB19') ? $data['CB19'] : '' }}" name="CB19" />
        <x-table.td type="input" value="{{ $data->has('CC19') ? $data['CC19'] : '' }}" name="CC19" />
    </tr>
    <tr>
        <x-table.td type="header" value="Физкультурно-оздоровительный клубы инвалидов" />
        <x-table.td value="03" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA20') ? $data['CA20'] : '' }}" name="CA20" />
        <x-table.td type="input" value="{{ $data->has('CB20') ? $data['CB20'] : '' }}" name="CB20" />
        <x-table.td type="input" value="{{ $data->has('CC20') ? $data['CC20'] : '' }}" name="CC20" />
    </tr>
    <tr>
        <x-table.td type="header" value="Детско-юношеские спортивно-адаптивные школы (ДЮСАШ)" />
        <x-table.td value="04" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA21') ? $data['CA21'] : '' }}" name="CA21" />
        <x-table.td type="input" value="{{ $data->has('CB21') ? $data['CB21'] : '' }}" name="CB21" />
        <x-table.td type="input" value="{{ $data->has('CC21') ? $data['CC21'] : '' }}" name="CC21" />
    </tr>
    <tr>
        <x-table.td type="header" value="Специализированные детско-юношеские спортивно-адаптивные школы (СДЮСАШ)" />
        <x-table.td value="05" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA22') ? $data['CA22'] : '' }}" name="CA22" />
        <x-table.td type="input" value="{{ $data->has('CB22') ? $data['CB22'] : '' }}" name="CB22" />
        <x-table.td type="input" value="{{ $data->has('CC22') ? $data['CC22'] : '' }}" name="CC22" />
    </tr>
    <tr>
        <x-table.td type="header" value="Училища олимпийского резерва" />
        <x-table.td value="06" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA23') ? $data['CA23'] : '' }}" name="CA23" />
        <x-table.td type="input" value="{{ $data->has('CB23') ? $data['CB23'] : '' }}" name="CB23" />
        <x-table.td type="input" value="{{ $data->has('CC23') ? $data['CC23'] : '' }}" name="CC23" />
    </tr>
    <tr>
        <x-table.td type="header" value="Центры спортивной подготовки" />
        <x-table.td value="07" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA24') ? $data['CA24'] : '' }}" name="CA24" />
        <x-table.td type="input" value="{{ $data->has('CB24') ? $data['CB24'] : '' }}" name="CB24" />
        <x-table.td type="input" value="{{ $data->has('CC24') ? $data['CC24'] : '' }}" name="CC24" />
    </tr>
    <tr>
        <x-table.td type="header" value="Школы высшего спортивного мастерства (ШВСМ), специализированные детско-юношеские спортивные школы олимпийского резерва (СДЮШОР), детско-юношеские спортивные школы (ДЮСШ), детские оздоровительно-образовательные центры (ДООЦ)" />
        <x-table.td value="08" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA25') ? $data['CA25'] : '' }}" name="CA25" />
        <x-table.td type="input" value="{{ $data->has('CB25') ? $data['CB25'] : '' }}" name="CB25" />
        <x-table.td type="input" value="{{ $data->has('CC25') ? $data['CC25'] : '' }}" name="CC25" />
    </tr>
    <tr>
        <x-table.td type="header" value="Центры физической культуры и спорта" />
        <x-table.td value="09" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA26') ? $data['CA26'] : '' }}" name="CA26" />
        <x-table.td type="input" value="{{ $data->has('CB26') ? $data['CB26'] : '' }}" name="CB26" />
        <x-table.td type="input" value="{{ $data->has('CC26') ? $data['CC26'] : '' }}" name="CC26" />
    </tr>
</tbody>
