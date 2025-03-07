<li @class([
    'active' => isset($active) ? $active : false
])>

    <a href="{{ isset($anhor) ? '#' . $anhor : $href }}">
        @isset($ico)
            @php
                $icoStyle = isset($icoStyle) ? $icoStyle : 'fa-solid';
                $ico = $ico !== 1 ? $ico : 'fa-gear';
            @endphp
            <i class="{{ $icoStyle }} {{ $ico }}"></i>
        @endisset
        <span>{{ $text }}</span>
    </a>

</li>
