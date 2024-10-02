<x-split.box pd=15>
    <x-split.item>
        <x-split.box vertical no-flex gap="10">
            <x-text.box-header value="Информация" />
            <x-split.item><x-text.label label="Город:"
                    value="{{ auth()->user()->division->city->name }}" /></x-split.item>
            <x-split.item><x-text.label label="Наименование:"
                    value="{{ auth()->user()->division->name }}" /></x-split.item>
        </x-split.box>
    </x-split.item>
    <x-split.item>
        <x-text.box-header value="Администраторы" />
        <x-split.box>
            @foreach (auth()->user()->division->adminers as $admin)
                <x-split.item>
                    <x-split.box>
                        <x-split.item>
                            <x-text.label label="ФИО:" value="{{ $admin->nickname }}" />
                            <x-text.label label="Телефон:" value="{{ $admin->phone ? $admin->phone : '-------' }}" />
                        </x-split.item>
                        <x-split.item>
                            <x-text.label label="Почта:" value="{{ $admin->email ? $admin->email : '-------' }}" />
                            <x-text.label label="Добавочный:"
                                value="{{ $admin->dop_phone !== null ? $admin->dop_phone : '-------' }}" />
                        </x-split.item>
                    </x-split.box>
                </x-split.item>
            @endforeach
        </x-split.box>
    </x-split.item>
    <x-split.item>
        <x-text.box-header value="Программисты" />
        <x-split.box vertical>
            @foreach (auth()->user()->division->programmers as $programmer)
                <x-split.item>
                    <x-split.box>
                        <x-split.item>
                            <x-text.label label="ФИО:" value="{{ $programmer->nickname }}" />
                            <x-text.label label="Телефон:"
                                value="{{ $programmer->phone ? $programmer->phone : '-------' }}" />
                        </x-split.item>
                        <x-split.item>
                            <x-text.label label="Почта:"
                                value="{{ $programmer->email ? $programmer->email : '-------' }}" />
                            <x-text.label label="Добавочный:"
                                value="{{ $programmer->dop_phone !== null ? $programmer->dop_phone : '-------' }}" />
                        </x-split.item>
                    </x-split.box>
                </x-split.item>
            @endforeach
        </x-split.box>
    </x-split.item>
    <x-split.item></x-split.item>
</x-split.box>


{{-- <x-split.box>

    <x-slot:item-2>
        <x-text.box-header value="Администраторы" />
        @foreach (auth()->user()->division->adminers as $admin)
            <x-split.box>
                <x-slot:item-1>
                    <x-split.box no-flex>
                        <x-slot:item-1>
                            <x-text.label label="ФИО:" value="{{ $admin->nickname }}" />
                            <x-text.label label="Телефон:" value="{{ $admin->phone ? $admin->phone : '-------' }}" />
                        </x-slot:item-1>
                        <x-slot:item-2>
                            <x-text.label label="Почта:" value="{{ $admin->email ? $admin->email : '-------' }}" />
                            <x-text.label label="Добавочный:"
                                value="{{ $admin->dop_phone !== null ? $admin->dop_phone : '-------' }}" />
                        </x-slot:item-2>
                    </x-split.box>
                </x-slot:item-1>
            </x-split.box>
        @endforeach
    </x-slot:item-2>
    <x-slot:item-3>
        <x-text.box-header value="Программисты" />
        @foreach (auth()->user()->division->programmers as $programmer)
            <x-split.box no-flex gap="10">
                <x-slot:item-1>
                    <x-split.box no-flex>
                        <x-slot:item-1>
                            <x-text.label label="ФИО:" value="{{ $programmer->nickname }}" />
                            <x-text.label label="Телефон:"
                                value="{{ $programmer->phone ? $programmer->phone : '-------' }}" />
                        </x-slot:item-1>
                        <x-slot:item-2>
                            <x-text.label label="Почта:"
                                value="{{ $programmer->email ? $programmer->email : '-------' }}" />
                            <x-text.label label="Добавочный:"
                                value="{{ $programmer->dop_phone !== null ? $programmer->dop_phone : '-------' }}" />
                        </x-slot:item-2>
                    </x-split.box>
                </x-slot:item-1>
            </x-split.box>
            <x-split.box>
                <x-slot:item-1>
                    <x-text.label label="ФИО:" value="{{ $programmer->nickname }}" />
                </x-slot:item-1>
                <x-slot:item-2>
                    <x-text.label label="Почта:"
                        value="{{ $programmer->email ? $programmer->email : '--- Не указан ----' }}" />
                </x-slot:item-2>
            </x-split.box>
            <x-split.box>
                <x-slot:item-1>
                    <x-text.label label="Телефон:"
                        value="{{ $programmer->phone ? $programmer->phone : '--- Не указан ----' }}" />
                </x-slot:item-1>
                <x-slot:item-2>
                    <x-text.label label="Добавочный:"
                        value="{{ $programmer->dop_phone ? $programmer->dop_phone : '--- Не указан ----' }}" />
                </x-slot:item-2>
            </x-split.box>
        @endforeach
        @foreach (auth()->user()->division->programmers as $programmer)
            <x-text.label label="ФИО:" value="{{ $programmer->nickname }}" />
            <x-text.label label="Телефон:"
                value="{{ $programmer->phone ? $programmer->phone : '--- Не указан ----' }}" />
            <x-text.label label="Добавочный:"
                value="{{ $programmer->dop_phone ? $programmer->dop_phone : '--- Не указан ----' }}" />
            <x-text.label label="Почта:" value="{{ $programmer->email ? $programmer->email : '--- Не указан ----' }}" />
            <br>
        @endforeach
    </x-slot:item-3>
    <x-slot:item-4></x-slot:item-4>
</x-split.box> --}}
