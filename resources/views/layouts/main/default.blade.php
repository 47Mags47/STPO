<x-page>
    @hasSection ('class')
        <x-slot:class>@yield('class')</x-slot:class>
    @endif

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

    @yield('page-content')
</x-page>

