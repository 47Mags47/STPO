<div class="form-container horizontal-split-form">
    <x-form.types.main :$attributes>
        <x-slot:content>
            <div class="left-box">
                {{ $left }}
            </div>
            <div class="right-box">
                {{ $right }}
            </div>
        </x-slot:content>

        @isset($buttons)
            <x-slot:buttons>
                {{ $buttons }}
            </x-slot:buttons>
        @endisset

        @isset($info)
            <x-slot:info>
                {{ $info }}
            </x-slot:info>
        @endisset

    </x-form.types.main>
</div>
