<caption>{{ $sheet->header }}</caption>
<thead>
    <tr>
        <x-table.th value="Наименование <br> показателей" header />
        <x-table.th value="№ строки" />
        <x-table.th value="Всего пунктов проката ТСР, ед." />
        <x-table.th value="из них, филиалов пунктов проката ТСР*, ед." />
    </tr>
    <tr>
        <x-table.th value="1" header />
        <x-table.th value="2" />
        <x-table.th value="3" />
        <x-table.th value="4" />
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header" value="Количество пунктов в прокате ТСР" />
        <x-table.td value="01" center />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CA5') ? $data['CA5'] : '' }}" name="CA5" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB5') ? $data['CB5'] : '' }}" name="CB5" />

    </tr>

</tbody>
