<x-page class="scroller-page">
    @hasSection('styles')
        <x-slot:styles>
            @yield('styles')
        </x-slot:styles>
    @endif

    @hasSection('scripts')
        <x-slot:scripts>
            @yield('scripts')
        </x-slot:scripts>
    @endif

    <ul class="page-navigation">
        <ul>
            @yield('page-navigation')
        </ul>
    </ul>
    <div class="page-content">
        @yield('page-content')
    </div>

</x-page>
