<x-split.box class="user">
    <x-slot:item-1>
        <p>Изменение личных данных</p>
        <x-dashboard.logo />
    </x-slot:item-1>
    <x-slot:item-2>
        <x-input.input name="" value="{{ auth()->user()->last_name }}" title="Фамилия" />
        <x-input.input name="" value="{{ auth()->user()->first_name }}" title="Имя" />
        <x-input.input name="" value="{{ auth()->user()->middle_name }}" title="Отчество" />
        <x-input.input name="" value="{{ auth()->user()->login }}" title="Логин" disabled />
        <x-input.input name="" value="{{ auth()->user()->phone }}" title="Телефон" />
        <x-input.input name="" value="{{ auth()->user()->dop_phone }}" title="Добавочный" />
    </x-slot:item-2>
    <x-slot:item-3>
        {{-- <x-custom.link blue-button link="" title="Сменить пароль" /> --}}
        <x-custom.link red-button link="{{ route('logout') }}" title="Выход" />
    </x-slot:item-3>
</x-split.box>
