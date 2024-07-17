{{-- req-attr: title | value --}}
{{-- attr: dependVal --}}

<option
    value="{{ $value }}"
    @isset($dependVal)
        depend-val="{{ $dependVal }}"
    @endisset
    @if (mb_strlen($title) > 40)
        title="{!! $title !!}"
    @endif
>
    {!! mb_strlen($title) < 40 ? $title : mb_substr($title, 0, 40) . '...' !!}
</option>
