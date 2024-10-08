<caption>{{ $sheet->header }}</caption>
<thead>
    <tr>
        <x-table.th rowspan=2 value="Наименование показателей" header />
        <x-table.th rowspan=2 value="№ строки" />
        <x-table.th colspan=3 value="Организации, предоставляющие услуги (мероприятия) в сфере культуры" />
    </tr>
    <tr>
        <x-table.th value="инвалидам в возрасте 18 лет и старше, ед." />
        <x-table.th value="детям-инвалидам, ед." />
        <x-table.th value="одновременно инвалидам  в возрасте 18 лет и старше и детям-инвалидам, ед." />
    </tr>
    <tr>
        <x-table.th value="1" header />
        <x-table.th value="2" />
        <x-table.th value="3" />
        <x-table.th value="4" />
        <x-table.th value="5" />
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header" value="Организации сферы культуры - всего, из них:" />
        <x-table.td value="01" center />
        <x-table.td type="input" formul="{CA7}+{CA8}+{CA9}+{CA10}+{CA11}" name="CA6" disabled />
        <x-table.td type="input" formul="{CB7}+{CB8}+{CB9}+{CB10}+{CB11}" name="CB6" disabled />
        <x-table.td type="input" formul="{CC7}+{CC8}+{CC9}+{CC10}+{CC11}" name="CC6" disabled />
    </tr>
    <tr>
        <x-table.td type="header" value="Клубное формирование" />
        <x-table.td value="02" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA7') ? $data['CA7'] : '' }}" name="CA7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB7') ? $data['CB7'] : '' }}" name="CB7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC7') ? $data['CC7'] : '' }}" name="CC7" />
    </tr>
    <tr>
        <x-table.td type="header" value="Музеи" />
        <x-table.td value="03" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" name="CA8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" name="CB8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" name="CC8" />
    </tr>
    <tr>
        <x-table.td type="header" value="Театры" />
        <x-table.td value="04" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA9') ? $data['CA9'] : '' }}" name="CA9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB9') ? $data['CB9'] : '' }}" name="CB9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC9') ? $data['CC9'] : '' }}" name="CC9" />
    </tr>
    <tr>
        <x-table.td type="header" value="Общественные библиотеки" />
        <x-table.td value="05" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA10') ? $data['CA10'] : '' }}" name="CA10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB10') ? $data['CB10'] : '' }}" name="CB10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC10') ? $data['CC10'] : '' }}" name="CC10" />
    </tr>
    <tr>
        <x-table.td type="header" value="Другие" />
        <x-table.td value="06" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA11') ? $data['CA11'] : '' }}" name="CA11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB11') ? $data['CB11'] : '' }}" name="CB11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC11') ? $data['CC11'] : '' }}" name="CC11" />
    </tr>
</tbody>
