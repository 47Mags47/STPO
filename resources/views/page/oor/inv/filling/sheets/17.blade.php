<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th rowspan=2 value="Наименование <br> показателей" />
        <x-table.th rowspan=2 value="№ строки" />
        <x-table.th colspan=3 value="Организации, предоставляющие услуги:"  />
    </tr>
    <tr>
        <x-table.th value="инвалидам в возрасте 18 лет и старше, ед." />
        <x-table.th value="детям-инвалидам, ед." />
        <x-table.th value="одновременно инвалидам в возрасте 18 лет и старше и детям-инвалидам, ед." />
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
        <x-table.td type="header" value="Организации социального обслуживания - всего, из них:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('CA6') ? $data['CA6'] : '' }}" coord="CA6" />
        <x-table.td type="input" value="{{ $data->has('CB6') ? $data['CB6'] : '' }}" coord="CB6" />
        <x-table.td type="input" value="{{ $data->has('CC6') ? $data['CC6'] : '' }}" coord="CC6" />
    </tr>
    <tr>
        <x-table.td type="header" value="организации, осуществляющие стационарное социальное обслуживание, из них имеющие структурные подразделения:" />
        <x-table.td type="header" value="02" />
        <x-table.td type="input" value="{{ $data->has('CA7') ? $data['CA7'] : '' }}" coord="CA7" />
        <x-table.td type="input" value="{{ $data->has('CB7') ? $data['CB7'] : '' }}" coord="CB7" />
        <x-table.td type="input" value="{{ $data->has('CC7') ? $data['CC7'] : '' }}" coord="CC7" />
    </tr>
    <tr>
        <x-table.td type="header" value="центр (отделение) реабилитации" />
        <x-table.td type="header" value="03" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
    </tr>
    <tr>
        <x-table.td type="header" value="отделение (подразделение) сопровождаемого проживания" />
        <x-table.td type="header" value="04" />
        <x-table.td type="input" value="{{ $data->has('CA9') ? $data['CA9'] : '' }}" coord="CA9" />
        <x-table.td type="input" value="{{ $data->has('CB9') ? $data['CB9'] : '' }}" coord="CB9" />
        <x-table.td type="input" value="{{ $data->has('CC9') ? $data['CC9'] : '' }}" coord="CC9" />
    </tr>
    <tr>
        <x-table.td type="header" value="отделение (подразделение) ранней помощи" />
        <x-table.td type="header" value="05" />
        <x-table.td type="input" value="{{ $data->has('CA10') ? $data['CA10'] : '' }}" coord="CA10" />
        <x-table.td type="input" value="{{ $data->has('CB10') ? $data['CB10'] : '' }}" coord="CB10" />
        <x-table.td type="input" value="{{ $data->has('CC10') ? $data['CC10'] : '' }}" coord="CC10" />
    </tr>
    <tr>
        <x-table.td type="header" value="организации, осуществляющие полустационарное социальное обслуживание, из них имеющие структурные подразделения:" />
        <x-table.td type="header" value="06" />
        <x-table.td type="input" value="{{ $data->has('CA11') ? $data['CA11'] : '' }}" coord="CA11" />
        <x-table.td type="input" value="{{ $data->has('CB11') ? $data['CB11'] : '' }}" coord="CB11" />
        <x-table.td type="input" value="{{ $data->has('CC11') ? $data['CC11'] : '' }}" coord="CC11" />
    </tr>
    <tr>
        <x-table.td type="header" value="центр (отделение) реабилитации" />
        <x-table.td type="header" value="07" />
        <x-table.td type="input" value="{{ $data->has('CA12') ? $data['CA12'] : '' }}" coord="CA12" />
        <x-table.td type="input" value="{{ $data->has('CB12') ? $data['CB12'] : '' }}" coord="CB12" />
        <x-table.td type="input" value="{{ $data->has('CC12') ? $data['CC12'] : '' }}" coord="CC12" />
    </tr>
    <tr>
        <x-table.td type="header" value="отделение (подразделение) сопровождаемого проживания" />
        <x-table.td type="header" value="08" />
        <x-table.td type="input" value="{{ $data->has('CA13') ? $data['CA13'] : '' }}" coord="CA13" />
        <x-table.td type="input" value="{{ $data->has('CB13') ? $data['CB13'] : '' }}" coord="CB13" />
        <x-table.td type="input" value="{{ $data->has('CC13') ? $data['CC13'] : '' }}" coord="CC13" />
    </tr>
    <tr>
        <x-table.td type="header" value="отделение (подразделение) ранней помощи" />
        <x-table.td type="header" value="09" />
        <x-table.td type="input" value="{{ $data->has('CA14') ? $data['CA14'] : '' }}" coord="CA14" />
        <x-table.td type="input" value="{{ $data->has('CB14') ? $data['CB14'] : '' }}" coord="CB14" />
        <x-table.td type="input" value="{{ $data->has('CC14') ? $data['CC14'] : '' }}" coord="CC14" />
    </tr>
    <tr>
        <x-table.td type="header" value="выездные бригады, в том числе:" />
        <x-table.td type="header" value="10" />
        <x-table.td type="input" value="{{ $data->has('CA15') ? $data['CA15'] : '' }}" coord="CA15" />
        <x-table.td type="input" value="{{ $data->has('CB15') ? $data['CB15'] : '' }}" coord="CB15" />
        <x-table.td type="input" value="{{ $data->has('CC15') ? $data['CC15'] : '' }}" coord="CC15" />
    </tr>
    <tr>
        <x-table.td type="header" value="медико-социальные" />
        <x-table.td type="header" value="11" />
        <x-table.td type="input" value="{{ $data->has('CA16') ? $data['CA16'] : '' }}" coord="CA16" />
        <x-table.td type="input" value="{{ $data->has('CB16') ? $data['CB16'] : '' }}" coord="CB16" />
        <x-table.td type="input" value="{{ $data->has('CC16') ? $data['CC16'] : '' }}" coord="CC16" />
    </tr>
    <tr>
        <x-table.td type="header" value="организации осуществляющие социальное обслуживание на дому" />
        <x-table.td type="header" value="12" />
        <x-table.td type="input" value="{{ $data->has('CA17') ? $data['CA17'] : '' }}" coord="CA17" />
        <x-table.td type="input" value="{{ $data->has('CB17') ? $data['CB17'] : '' }}" coord="CB17" />
        <x-table.td type="input" value="{{ $data->has('CC17') ? $data['CC17'] : '' }}" coord="CC17" />
    </tr>
</tbody>
