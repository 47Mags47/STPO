<thead>
    <tr>
        <x-table.th value="Наименование <br> показателей" rowspan=3 />
        <x-table.th value="№ строки" rowspan=3 />
        <x-table.th value="Всего, чел." rowspan=3 />
        <x-table.th value="в том числе" colspan=10 />
    </tr>
    <tr>
        <x-table.th value="Женщины" colspan=2 />
        <x-table.th value="Мужчины" colspan=2 />
        <x-table.th value="в возрасте от 0 до 3 лет" colspan=2 />
        <x-table.th value="в возрасте от 4 до 7 лет" colspan=2 />
        <x-table.th value="в возрасте от 8 до 17 лет" colspan=2 />
    </tr>
    <tr>
        <x-table.th value="всего" />
        <x-table.th value="от 18 до 59 лет" />
        <x-table.th value="всего" />
        <x-table.th value="от 18 до 64 лет" />
        <x-table.th value="мальчики" />
        <x-table.th value="девочки" />
        <x-table.th value="мальчики" />
        <x-table.th value="девочки" />
        <x-table.th value="мальчики" />
        <x-table.th value="девочки" />
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
        <x-table.th value="9" />
        <x-table.th value="10" />
        <x-table.th value="11" />
        <x-table.th value="12" />
        <x-table.th value="13" />
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header" value="Общая численность населения субъекта Российской Федерации, в том числе:" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('CA7') ? $data['CA7'] : '' }}" coord="CA7" />
        <x-table.td type="input" value="{{ $data->has('CB7') ? $data['CB7'] : '' }}" coord="CB7" />
        <x-table.td type="input" value="{{ $data->has('CC7') ? $data['CC7'] : '' }}" coord="CC7" />
        <x-table.td type="input" value="{{ $data->has('CA7') ? $data['CA7'] : '' }}" coord="CA7" />
        <x-table.td type="input" value="{{ $data->has('CA7') ? $data['CA7'] : '' }}" coord="CA7" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
    </tr>
    <tr>
        <x-table.td type="header" value="Численность взрослого населения в возрасте 18 лет и старше" />
        <x-table.td type="header" value="02" />
        <x-table.td type="input" value="{{ $data->has('CA8') ? $data['CA8'] : '' }}" coord="CA8" />
        <x-table.td type="input" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" coord="CB8" />
        <x-table.td type="input" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" coord="CC8" />
        <x-table.td type="input" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" coord="CD8" />
        <x-table.td type="input" value="{{ $data->has('CE8') ? $data['CE8'] : '' }}" coord="CE8" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
    </tr>
    <tr>
        <x-table.td type="header" value="Численность детского населения" />
        <x-table.td type="header" value="03" />
        <x-table.td type="input" value="{{ $data->has('CA9') ? $data['CA9'] : '' }}" coord="CA9" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
        <x-table.td type="input" value="{{ $data->has('CF9') ? $data['CF9'] : '' }}" coord="CF9" />
        <x-table.td type="input" value="{{ $data->has('CG9') ? $data['CG9'] : '' }}" coord="CG9" />
        <x-table.td type="input" value="{{ $data->has('CH9') ? $data['CH9'] : '' }}" coord="CH9" />
        <x-table.td type="input" value="{{ $data->has('CI9') ? $data['CI9'] : '' }}" coord="CI9" />
        <x-table.td type="input" value="{{ $data->has('CJ9') ? $data['CJ9'] : '' }}" coord="CJ9" />
        <x-table.td type="input" value="{{ $data->has('CK9') ? $data['CK9'] : '' }}" coord="CK9" />

    </tr>
</tbody>
