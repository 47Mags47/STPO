<caption>{{ $sheet->header }}</caption>
<thead>
    <tr>
        <x-table.th rowspan=2 value="Наименование <br> показателей" header />
        <x-table.th rowspan=2 value="№ строки" />
        <x-table.th colspan=3 value="Организации, предоставляющие услуги:"  />
    </tr>
    <tr>
        <x-table.th value="инвалидам в возрасте 18 лет и старше, ед." />
        <x-table.th value="детям-инвалидам, ед." />
        <x-table.th value="одновременно инвалидам в возрасте 18 лет и старше и детям-инвалидам, ед." />
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
        <x-table.td type="header" value="Организации социального обслуживания - всего, из них:" />
        <x-table.td value="01" center />
        <x-table.td type="input" formul="{CA7}+{CA11}+{CA17}" name="CA6" disabled />
        <x-table.td type="input" formul="{CB7}+{CB11}+{CB17}" name="CB6" disabled />
        <x-table.td type="input" formul="{CC7}+{CC11}+{CC17}" name="CC6" disabled />
    </tr>
    <tr>
        <x-table.td type="header" value="организации, осуществляющие стационарное социальное обслуживание, из них имеющие структурные подразделения:" />
        <x-table.td value="02" center />
        <x-table.td type="input" formul="{CA8}+{CA9}+{CA10}" name="CA7" disabled />
        <x-table.td type="input" formul="{CB8}+{CB9}+{CB10}" name="CB7" disabled />
        <x-table.td type="input" formul="{CC8}+{CC9}+{CC10}" name="CC7" disabled />
    </tr>
    <tr>
        <x-table.td type="header" value="центр (отделение) реабилитации" />
        <x-table.td value="03" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" name="CA8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" name="CB8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" name="CC8" />
    </tr>
    <tr>
        <x-table.td type="header" value="отделение (подразделение) сопровождаемого проживания" />
        <x-table.td value="04" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA9') ? $data['CA9'] : '' }}" name="CA9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB9') ? $data['CB9'] : '' }}" name="CB9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC9') ? $data['CC9'] : '' }}" name="CC9" />
    </tr>
    <tr>
        <x-table.td type="header" value="отделение (подразделение) ранней помощи" />
        <x-table.td value="05" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA10') ? $data['CA10'] : '' }}" name="CA10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB10') ? $data['CB10'] : '' }}" name="CB10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC10') ? $data['CC10'] : '' }}" name="CC10" />
    </tr>
    <tr>
        <x-table.td type="header" value="организации, осуществляющие полустационарное социальное обслуживание, из них имеющие структурные подразделения:" />
        <x-table.td value="06" center />
        <x-table.td type="input" formul="{CA12}+{CA13}+{CA14}+{CA15}" name="CA11" disabled />
        <x-table.td type="input" formul="{CB12}+{CB13}+{CB14}+{CB15}" name="CB11" disabled />
        <x-table.td type="input" formul="{CC12}+{CC13}+{CC14}+{CC15}" name="CC11" disabled />
    </tr>
    <tr>
        <x-table.td type="header" value="центр (отделение) реабилитации" />
        <x-table.td value="07" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA12') ? $data['CA12'] : '' }}" name="CA12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB12') ? $data['CB12'] : '' }}" name="CB12" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC12') ? $data['CC12'] : '' }}" name="CC12" />
    </tr>
    <tr>
        <x-table.td type="header" value="отделение (подразделение) сопровождаемого проживания" />
        <x-table.td value="08" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA13') ? $data['CA13'] : '' }}" name="CA13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB13') ? $data['CB13'] : '' }}" name="CB13" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC13') ? $data['CC13'] : '' }}" name="CC13" />
    </tr>
    <tr>
        <x-table.td type="header" value="отделение (подразделение) ранней помощи" />
        <x-table.td value="09" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA14') ? $data['CA14'] : '' }}" name="CA14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB14') ? $data['CB14'] : '' }}" name="CB14" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC14') ? $data['CC14'] : '' }}" name="CC14" />
    </tr>
    <tr>
        <x-table.td type="header" value="выездные бригады, в том числе:" />
        <x-table.td value="10" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA15') ? $data['CA15'] : '' }}" name="CA15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB15') ? $data['CB15'] : '' }}" name="CB15" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC15') ? $data['CC15'] : '' }}" name="CC15" />
    </tr>
    <tr>
        <x-table.td type="header" value="медико-социальные" />
        <x-table.td value="11" center />
        <x-table.td type="input" formul="{this}<={CA15}" value="{{ $data->has('CA16') ? $data['CA16'] : '' }}" name="CA16" />
        <x-table.td type="input" formul="{this}<={CB15}" value="{{ $data->has('CB16') ? $data['CB16'] : '' }}" name="CB16" />
        <x-table.td type="input" formul="{this}<={CC15}" value="{{ $data->has('CC16') ? $data['CC16'] : '' }}" name="CC16" />
    </tr>
    <tr>
        <x-table.td type="header" value="организации осуществляющие социальное обслуживание на дому" />
        <x-table.td value="12" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA17') ? $data['CA17'] : '' }}" name="CA17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB17') ? $data['CB17'] : '' }}" name="CB17" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC17') ? $data['CC17'] : '' }}" name="CC17" />
    </tr>
</tbody>
