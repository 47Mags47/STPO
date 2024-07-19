<th
    @isset($colspan)
        colspan={{ $colspan }}
    @endisset
    @isset($rowspan)
        rowspan={{ $rowspan }}
    @endisset
    @class(['header' => isset($header)])
>
    <div>{!! $value !!}</div>
</th>
