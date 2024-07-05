<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th rowspan=2 value="Наименование <br> показателей" />
        <x-table.th rowspan=2 value="№ строки" />
        <x-table.th rowspan=2 value="Всего, ед." />
        <x-table.th colspan=2
            value="Количество человек, прошедших комплексное психолого-медико-педагогическое обследование на ПМПК" />
    </tr>
    <tr>
        <x-table.th value="Всего, чел." />
        <x-table.th
            value="из них, получивших заключение ПМПК о создании специальных условий получения образования, чел." />
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
        <x-table.td type="header" value="Количество ПМПК" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('DO6') ? $data['DO6'] : '' }}" coord="DO6" />
        <x-table.td type="input-d" />
        <x-table.td type="input-d" />
    </tr>
    <tr>
        <x-table.td type="header"
            value="Численность инвалидов в возрасте 18 лет и старше и детей-инвалидов - всего, в том числе:" />
        <x-table.td type="header" value="02" />
        <x-table.td type="input-d" />
        <x-table.td type="input" value="{{ $data->has('DP7') ? $data['DP7'] : '' }}" coord="DP5" />
        <x-table.td type="input" value="{{ $data->has('DQ7') ? $data['DQ7'] : '' }}" coord="DP5" />
    </tr>
    <tr>
        <x-table.td type="header" value="инвалидов в возрасте 18 лет и старше" />
        <x-table.td type="header" value="03" />
        <x-table.td type="input-d" />
        <x-table.td type="input" value="{{ $data->has('DP8') ? $data['DP8'] : '' }}" coord="DP8" />
        <x-table.td type="input" value="{{ $data->has('DP8') ? $data['DP8'] : '' }}" coord="DP8" />
    </tr>
    <tr>
        <x-table.td type="header" value="детей-инвалидов" />
        <x-table.td type="header" value="04" />
        <x-table.td type="input-d" />
        <x-table.td type="input" value="{{ $data->has('DP9') ? $data['DP9'] : '' }}" coord="DP9" />
        <x-table.td type="input" value="{{ $data->has('DP9') ? $data['DP9'] : '' }}" coord="DP9" />
    </tr>
</tbody>
