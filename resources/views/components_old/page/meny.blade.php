<ul>
    @isset($burger)
        @if ($burger)
            <x-header.burger box=".division-list"/>
        @endif
    @endisset
    {{ $slot }}
</ul>
