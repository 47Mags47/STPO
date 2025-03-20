<x-page class="modul">
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


    @hasSection ('header')
        <div class="header">
            @yield('header')
        </div>
    @endif

    @hasSection ('navigate')
        <div class="navigate">
            <div class="search-box">
                <input type="text">
            </div>
            <div class="list">
                @yield('navigate')
            </div>
        </div>
    @endif

    <div class="content">
        @yield('page-content')
    </div>

</x-page>

