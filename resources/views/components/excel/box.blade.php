<div class="excel-box">
    @isset($meny)
        <div class="page-meny excel">
            {{ $meny }}
        </div>
    @endisset

    <x-table.box
        action="{{ isset($action) ? $action : '' }}"
        form="{{ isset($form) ? 'true' : 'false' }}"
        form-id="{{ isset($formId) ? $formId : '' }}"
        top-0
    >
        {{ $sheet }}
    </x-table.box>

    @isset($sheets)
        <div class="sheets">
            <ul class="mini-scroll">
                {{ $sheets }}
            </ul>
        </div>
    @endisset
</div>
