<x-split.box pd="15">
    <x-split.item />
    <x-split.item>
        <x-form.image-input name="logo"
            value="{{ auth()->user()->logo ? auth()->user()->logo : asset('/storage/media/default_logo.png') }}"
            form="user-form" />
    </x-split.item>
    <x-split.item>
        <x-form.box action="" id="user-form" file>
            <x-form.input label="Фамилия" name="last_name" value="{{ auth()->user()->last_name }}" />
            <x-form.input label="Имя" name="first_name" value="{{ auth()->user()->first_name }}" />
            <x-form.input label="Отчество" name="middle_name" value="{{ auth()->user()->middle_name }}" />
            <x-form.input label="Почта" name="email"
                value="{{ auth()->user()->email ? auth()->user()->email : 'Не указана' }}" disabled />
            <x-form.input label="Телефон" name="phone" value="{{ auth()->user()->phone }}" />
            <x-form.input label="Добавочный" name="dop_phone" value="{{ auth()->user()->dop_phone }}" />
            <x-form.sbm title="Применить" />
        </x-form.box>
    </x-split.item>
    <x-split.item>
        <x-split.box vertical gap="10" no-flex>
            <x-split.item><x-custom.link link="" title="Сменить почту" blue-button /></x-split.item>
            <x-split.item><x-custom.link link="{{ route('logout') }}" title="Выход" red-button /></x-split.item>
        </x-split.box>
    </x-split.item>
</x-split.box>