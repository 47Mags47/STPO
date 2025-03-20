<th @class([
    'sortable' => isset($sort),
    'set-sort' => isset($sortActive),
])
    @isset($sort)
        data-sort="{{ $sort }}"
        data-sort-asc="{{ $asc }}"
    @endisset>
    <div class="th">
        <span class="text">
            {{ $text ?? $slot }}
        </span>

        @if (isset($sort))
            @if ($asc === 'asc')
                <i class="fa-solid fa-chevron-up"></i>
            @endif
            @if ($asc === 'desc')
                <i class="fa-solid fa-chevron-down"></i>
            @endif
        @endif
    </div>

</th>
