<caption>{{ $sheet->header }}</caption>
<thead>
    <tr>
        <x-table.th value="Наименование <br> показателей" />
        <x-table.th value="№ строки" />
        <x-table.th value="Всего (сумма граф 4, 5 и 6), ед." />
        <x-table.th value="Организации среднего профессионального образования, ед." />
        <x-table.th value="Организации высшего образования, ед." />
        <x-table.th value="Организации дополнительного профессионального образования, ед." />
    </tr>
    <tr>
        <x-table.th value="1" />
        <x-table.th value="2" />
        <x-table.th value="3" />
        <x-table.th value="4" />
        <x-table.th value="5" />
        <x-table.th value="6" />
    </tr>
</thead>
<tbody>
    <tr>
        <x-table.td type="header" value="Всего организаций, из них:" />
        <x-table.td value="01" center />
        <x-table.td type="input" formul="({CB5}+{CC5}+{CD5})==({CA6}+{CA7}+{CA8}+{CA9}+{CA10}+{CA11})" bool-val="{CB5}+{CC5}+{CD5}" name="CA5" disabled />
        <x-table.td type="input" formul="{CB6}+{CB7}+{CB8}+{CB9}+{CB10}+{CB11}" name="CB5" disabled />
        <x-table.td type="input" formul="{CC6}+{CC7}+{CC8}+{CC9}+{CC10}+{CC11}" name="CC5" disabled />
        <x-table.td type="input" formul="{CD6}+{CD7}+{CD8}+{CD9}+{CD10}+{CD11}" name="CD5" disabled />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере социальной защиты населения" />
        <x-table.td value="02" center />
        <x-table.td type="input" formul="{CB6}+{CC6}+{CD6}" name="CA6" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB6') ? $data['CB6'] : '' }}" name="CB6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC6') ? $data['CC6'] : '' }}" name="CC6" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD6') ? $data['CD6'] : '' }}" name="CD6" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере здравоохранения" />
        <x-table.td value="03" center />
        <x-table.td type="input" formul="{CB7}+{CC7}+{CD7}" name="CA7" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB7') ? $data['CB7'] : '' }}" name="CB7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC7') ? $data['CC7'] : '' }}" name="CC7" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD7') ? $data['CD7'] : '' }}" name="CD7" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере образования" />
        <x-table.td value="04" center />
        <x-table.td type="input" formul="{CB8}+{CC8}+{CD8}" name="CA8" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB8') ? $data['CB8'] : '' }}" name="CB8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC8') ? $data['CC8'] : '' }}" name="CC8" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD8') ? $data['CD8'] : '' }}" name="CD8" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере занятости населения" />
        <x-table.td value="05" center />
        <x-table.td type="input" formul="{CB9}+{CC9}+{CD9}" name="CA9" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB9') ? $data['CB9'] : '' }}" name="CB9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC9') ? $data['CC9'] : '' }}" name="CC9" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD9') ? $data['CD9'] : '' }}" name="CD9" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере физической культуры и спорта" />
        <x-table.td value="06" center />
        <x-table.td type="input" formul="{CB10}+{CC10}+{CD10}" name="CA10" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB10') ? $data['CB10'] : '' }}" name="CB10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC10') ? $data['CC10'] : '' }}" name="CC10" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD10') ? $data['CD10'] : '' }}" name="CD10" />
    </tr>
    <tr>
        <x-table.td type="header" value="в сфере культуры" />
        <x-table.td value="07" center />
        <x-table.td type="input" formul="{CB11}+{CC11}+{CD11}" name="CA11" disabled />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CB11') ? $data['CB11'] : '' }}" name="CB11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CC11') ? $data['CC11'] : '' }}" name="CC11" />
        <x-table.td type="input" inp-type="number" value="{{ $data->has('CD11') ? $data['CD11'] : '' }}" name="CD11" />
    </tr>
</tbody>
