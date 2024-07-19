<div @class(['admin-page-box', 'double' => !isset($divisionList), 'triple' => isset($divisionList)])>
    @isset($meny)
        <div class="page-meny">
            <x-page.meny :burger=$burger>
                {{ $meny }}
            </x-page.meny>
        </div>
    @endisset

    @isset($divisionList)
        <div class="division-list mini-scroll open">
            {{ $divisionList }}
        </div>
    @endisset

    <div class="content">
        {{ $content }}
    </div>
</div>
