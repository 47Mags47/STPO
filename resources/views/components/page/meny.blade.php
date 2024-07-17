<ul>
    @isset($burger)
        {{-- <x-header.burger box=".division-list"/> --}}
    @endisset
    {{ $slot }}
</ul>
