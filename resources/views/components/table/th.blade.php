<th @isset($colspan)
        colspan={{ $colspan }}
    @endisset
    @isset($rowspan)
        rowspan={{ $rowspan }}
    @endisset @class([
        'header' => isset($header),
        'sort' => isset($sortPole),
    ])>
    <div>
        @isset($sortPole)
            <a href="?sort_pole={{ $sortPole }}&sort_type={{ $sortType }}">{!! $value !!}</a>
            <i @class([
                'fa',
                'fa-caret-up' => $sortType == 'asc',
                'fa-caret-down' => $sortType == 'desc'
            ]) aria-hidden="true"></i>
        @else
            {!! $value !!}
        @endisset

    </div>
</th>
