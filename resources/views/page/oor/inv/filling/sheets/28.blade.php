<caption>{{ $sheet_header }}</caption>
<thead>
    <tr>
        <x-table.th value="Наименование <br> показателей" />
        <x-table.th value="№ строки" />
        <x-table.th value="Оценка проведена (да - 1 /  нет - 0)" />
        <x-table.th value="Дата фактического проведения оценки" />
        <x-table.th value="Количество баллов*, ед" />
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header" value="Сведения о проведении оценки" />
        <x-table.td type="header" value="01" />
        <x-table.td type="input" value="{{ $data->has('CA5') ? $data['CA5'] : '' }}" coord="CA5" />
        <x-table.td type="input" value="{{ $data->has('CB5') ? $date : '' }}" coord="CB5" />
        <x-table.td type="input" value="{{ $data->has('CC5') ? $data['CC5'] : '' }}" coord="CC5" />
    </tr>
</tbody>
