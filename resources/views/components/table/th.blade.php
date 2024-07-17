<th
    @isset($colspan)
        colspan={{ $colspan }}
    @endisset
    @isset($rowspan)
        rowspan={{ $rowspan }}
    @endisset
>
    <div>{!! $value !!}</div>
</th>
