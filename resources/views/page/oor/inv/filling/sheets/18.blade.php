<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th rowspan=2 value="Наименование <br> показателей" />
        <x-table.th rowspan=2 value="№ строки" />
        <x-table.th colspan=3 value="Организации, предоставляющие услуги в сфере образования:" />
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
        <x-table.td type="header" value="Общее образование - всего организаций, из них:" />
        <x-table.td value="01" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA24') ? $data['CA24'] : '' }}" coord="CA24" />
        <x-table.td type="input" value="{{ $data->has('CB24') ? $data['CB24'] : '' }}" coord="CB24" />
        <x-table.td type="input" value="{{ $data->has('CC24') ? $data['CC24'] : '' }}" coord="CC24" />
    </tr>
    <tr>
        <x-table.td type="header" value="дошкольные образовательные организации" />
        <x-table.td value="02" h='center' />
        <x-table.td type="input-d" />
        <x-table.td type="input" value="{{ $data->has('CB25') ? $data['CB25'] : '' }}" coord="CB25" />
        <x-table.td type="input-d" />
    </tr>
    <tr>
        <x-table.td type="header" value="общеобразовательные организации" />
        <x-table.td value="03" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA26') ? $data['CA26'] : '' }}" coord="CA26" />
        <x-table.td type="input" value="{{ $data->has('CB26') ? $data['CB26'] : '' }}" coord="CB26" />
        <x-table.td type="input" value="{{ $data->has('CC26') ? $data['CC26'] : '' }}" coord="CC26" />
    </tr>
    <tr>
        <x-table.td type="header" value="общеобразовательные организации" />
        <x-table.td value="04" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA27') ? $data['CA27'] : '' }}" coord="CA27" />
        <x-table.td type="input" value="{{ $data->has('CB27') ? $data['CB27'] : '' }}" coord="CB27" />
        <x-table.td type="input" value="{{ $data->has('CC27') ? $data['CC27'] : '' }}" coord="CC27" />
    </tr>
    <tr>
        <x-table.td type="header" value="профессиональные образовательные организации" />
        <x-table.td value="05" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA28') ? $data['CA28'] : '' }}" coord="CA28" />
        <x-table.td type="input" value="{{ $data->has('CB28') ? $data['CB28'] : '' }}" coord="CB28" />
        <x-table.td type="input" value="{{ $data->has('CC28') ? $data['CC28'] : '' }}" coord="CC28" />
    </tr>
    <tr>
        <x-table.td type="header" value="образовательные организации высшего образования" />
        <x-table.td value="06" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA29') ? $data['CA29'] : '' }}" coord="CA29" />
        <x-table.td type="input" value="{{ $data->has('CB29') ? $data['CB29'] : '' }}" coord="CB29" />
        <x-table.td type="input" value="{{ $data->has('CC29') ? $data['CC29'] : '' }}" coord="CC29" />
    </tr>
    <tr>
        <x-table.td type="header" value="Дополнительное образование - всего организаций, из них:" />
        <x-table.td value="07" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA30') ? $data['CA30'] : '' }}" coord="CA30" />
        <x-table.td type="input" value="{{ $data->has('CB30') ? $data['CB30'] : '' }}" coord="CB30" />
        <x-table.td type="input" value="{{ $data->has('CC30') ? $data['CC30'] : '' }}" coord="CC30" />
    </tr>
    <tr>
        <x-table.td type="header" value="организации дополнительного образования" />
        <x-table.td value="08" h='center' />
        <x-table.td type="input" value="{{ $data->has('CA31') ? $data['CA31'] : '' }}" coord="CA31" />
        <x-table.td type="input" value="{{ $data->has('CB31') ? $data['CB31'] : '' }}" coord="CB31" />
        <x-table.td type="input" value="{{ $data->has('CC31') ? $data['CC31'] : '' }}" coord="CC31" />
    </tr>
    <tr>
        <x-table.td type="header" value="организации дополнительного профессионального образования" />
        <x-table.td value="09" h='center' />
        <x-table.td type="input-d" />
        <x-table.td type="input" value="{{ $data->has('CB32') ? $data['CB31'] : '' }}" coord="CB32" />
        <x-table.td type="input" value="{{ $data->has('CC32') ? $data['CC31'] : '' }}" coord="CC32" />
    </tr>
    <tr>
        <x-table.td type="header" value="ППМС-центры - всего" />
        <x-table.td value="10" h='center' />
        <x-table.td type="input-d" />
        <x-table.td type="input" value="{{ $data->has('CB31') ? $data['CB31'] : '' }}" coord="CB31" />
        <x-table.td type="input-d" />
    </tr>
</tbody>
