<div class="admin-page-box">
    @isset($meny)
        <div class="page-meny">
            <x-page.meny>
                {{ $meny }}
            </x-page.meny>
        </div>
    @endisset

    <div class="division-list mini-scroll open">
        {{ $divisionList }}
    </div>
    <div class="content">
        {{ $content }}
    </div>
</div>
