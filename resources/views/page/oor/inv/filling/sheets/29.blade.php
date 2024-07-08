<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th value="Наименование показателей" />
        <x-table.th value="№ строки" />
        <x-table.th value="Да - 1/Нет - 0 (для строк 01 и 03)" />
    </tr>
    <tr>
        <x-table.th value="1" />
        <x-table.th value="2" />
        <x-table.th value="3" />
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header" value="Наличие в субъекте Российской Федерации утвержденной программы/подпрограммы по формированию системы комплексной реабилитации и абилитации инвалидов" />
        <x-table.td value="01" h='center' />
        <x-table.td type="input" value="{{ $data->has('EJ5') ? $data['EJ5'] : '' }}" coord="EJ5" />
    </tr>
    <tr>
        <x-table.td type="header" value="Наименование, дата утверждения и номер нормативного правового акта, утверждающего соответствующую программу/подпрограмму" />
        <x-table.td value="02" h='center' />
        <x-table.td type="input" value="{{ $data->has('EJ6') ? $data['EJ6'] : '' }}" coord="EJ6" />
    </tr>
    <tr>
        <x-table.td type="header" value="Наличие в субъекте Российской Федерации утвержденного плана мероприятий по формированию и развитию системы комплексной реабилитации и абилитации инвалидов" />
        <x-table.td value="03" h='center' />
        <x-table.td type="input" value="{{ $data->has('EJ7') ? $data['EJ7'] : '' }}" coord="EJ7" />
    </tr>
    <tr>
        <x-table.td type="header" value="Наименование, дата утверждения и номер нормативного правового акта, утверждающего соответствующий план по формированию и развитию системы комплексной реабилитации и абилитации инвалидов" />
        <x-table.td value="04" h='center' />
        <x-table.td type="input" value="{{ $data->has('EJ8') ? $data['EJ8'] : '' }}" coord="EJ8" />
    </tr>
</tbody>
