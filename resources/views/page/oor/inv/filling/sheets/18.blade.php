<caption>{{ $sheet->header }}</caption>
<thead>
    <tr>
        <x-table.th rowspan=2 value="Наименование <br> показателей" header />
        <x-table.th rowspan=2 value="№ строки" />
        <x-table.th colspan=3 value="Организации, предоставляющие услуги в сфере образования:" />
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
        <x-table.td type="header" value="Общее образование - всего организаций, из них:" />
        <x-table.td value="01" center />
        <x-table.td type="input" formul="{CA26}" name="CA24" disabled />
        <x-table.td type="input" formul="{CB25}+{CC26}" name="CB24" disabled />
        <x-table.td type="input" formul="{CC26}" name="CC24" disabled />
    </tr>
    <tr>
        <x-table.td type="header" value="дошкольные образовательные организации" />
        <x-table.td value="02" center />
        <x-table.td type="input-d" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB25') ? $data['CB25'] : '' }}" name="CB25" />
        <x-table.td type="input-d" />
    </tr>
    <tr>
        <x-table.td type="header" value="общеобразовательные организации" />
        <x-table.td value="03" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA26') ? $data['CA26'] : '' }}" name="CA26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB26') ? $data['CB26'] : '' }}" name="CB26" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC26') ? $data['CC26'] : '' }}" name="CC26" />
    </tr>
    <tr>
        <x-table.td type="header" value="Профессиональное образование - всего организаций, из них:" />
        <x-table.td value="04" center />
        <x-table.td type="input" formul="{CA28}+{CA29}" name="CA27" disabled />
        <x-table.td type="input" formul="{CB28}+{CB29}" name="CB27" disabled />
        <x-table.td type="input" formul="{CC28}+{CC29}" name="CC27" disabled />
    </tr>
    <tr>
        <x-table.td type="header" value="профессиональные образовательные организации" />
        <x-table.td value="05" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA28') ? $data['CA28'] : '' }}" name="CA28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB28') ? $data['CB28'] : '' }}" name="CB28" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC28') ? $data['CC28'] : '' }}" name="CC28" />
    </tr>
    <tr>
        <x-table.td type="header" value="образовательные организации высшего образования" />
        <x-table.td value="06" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA29') ? $data['CA29'] : '' }}" name="CA29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB29') ? $data['CB29'] : '' }}" name="CB29" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC29') ? $data['CC29'] : '' }}" name="CC29" />
    </tr>
    <tr>
        <x-table.td type="header" value="Дополнительное образование - всего организаций, из них:" />
        <x-table.td value="07" center />
        <x-table.td type="input" formul="{CA31}+{CA32}" name="CA30" disabled />
        <x-table.td type="input" formul="{CB31}+{CB32}" name="CB30" disabled />
        <x-table.td type="input" formul="{CC31}+{CC32}" name="CC30" disabled />
    </tr>
    <tr>
        <x-table.td type="header" value="организации дополнительного образования" />
        <x-table.td value="08" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA31') ? $data['CA31'] : '' }}" name="CA31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB31') ? $data['CB31'] : '' }}" name="CB31" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC31') ? $data['CC31'] : '' }}" name="CC31" />
    </tr>
    <tr>
        <x-table.td type="header" value="организации дополнительного профессионального образования" />
        <x-table.td value="09" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA32') ? $data['CA32'] : '' }}" name="CA32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB32') ? $data['CB32'] : '' }}" name="CB32" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC32') ? $data['CC32'] : '' }}" name="CC32" />
    </tr>
    <tr>
        <x-table.td type="header" value="ППМС-центры - всего" />
        <x-table.td value="10" center />
        <x-table.td type="input-d" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB33') ? $data['CB33'] : '' }}" name="CB33" />
        <x-table.td type="input-d" />
    </tr>
</tbody>
