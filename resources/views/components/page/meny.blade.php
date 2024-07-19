<ul>
    @if(isset($burger) and $burger == 'true' )
        <x-custom.burger box=".division-list"/>
    @endisset
    {{ $slot }}
</ul>
