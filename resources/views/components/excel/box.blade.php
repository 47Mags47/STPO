<div class="excel-box">
    @isset($meny)
        <div class="page-meny excel">
            <ul>{{ $meny }}</ul>
        </div>
    @endisset

    {{-- <x-table.box> --}}
        {{ $slot }}
    {{-- </x-table.box> --}}
    
    @isset($sheets)
        <div class="sheets">
            <ul class="mini-scroll">
                {{ $sheets }}
            </ul>
        </div>
    @endisset
</div>
