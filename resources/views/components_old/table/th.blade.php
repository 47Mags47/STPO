<th
    {{isset($colspan) ? 'colspan=' . $colspan : ''}}
    {{isset($rowspan) ? 'rowspan=' . $rowspan : ''}}
    >
    <div>{!! $value !!}</div>
</th>
