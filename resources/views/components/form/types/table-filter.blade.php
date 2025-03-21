<div class="form-container vertical-form">
    <x-form.types.main :$attributes>
        @isset($content)
            <x-slot:content>
                {{ $content }}
            </x-slot:content>
        @endisset

        @isset($buttons)
            <x-slot:buttons>
                {{ $buttons }}
            </x-slot:buttons>
        @endisset

    </x-form.types.main>
</div>
