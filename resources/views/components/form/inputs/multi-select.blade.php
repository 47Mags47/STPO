@php
    $dot_name = str_replace('[', '.', $name);
    $dot_name = str_replace(']', '', $dot_name);

    $checked = isset($checked) ? $checked : null;
    $checked = $checked ?? old($name);
    $checked = $checked ?? old($dot_name);
    $checked = $checked ?? request()->input($name);
    $checked = $checked ?? request()->input($dot_name);
@endphp

<div class="input-box custom-widjet multi-select-widjet">
    @isset($label)
        <label
            @class([
                'form-label',
                'required' => isset($req)
            ])
            for="{{ $name }}"
        >{{ $label }}</label>
    @endisset
    <div class="preview form-widjet-preview">
        <span>
            @if (count($checked ?? []) > 0)
                Выбрано: {{ count($checked) }}
            @else
                --- Не выбрано ---
            @endif
        </span>
        <i class="fa-solid fa-chevron-down"></i>
    </div>
    <div class="list-box">
        <div class="search">
            <input type="text" placeholder="Найти...">
        </div>
        <div class="select-all-box">
            <label>
                <input type="checkbox">
                <span>Выбрать все</span>
            </label>
        </div>

        @if (isset($childParameter))
            <ul class="list has-group">
                @foreach ($items as $item)
                    <li class="group-box">
                        <span class="group-name">{{ $item->$text }}</span>
                        <ul>
                            @foreach ($item->$childParameter as $child)
                                <li class="selectable">
                                    <label for="{{ $name }}[{{ $child->$value }}]">
                                        <input
                                            type="checkbox"
                                            name="{{ $name }}[]"
                                            value="{{ $child->$value }}"
                                            id="{{ $name }}[{{ $child->$value }}]"
                                            @checked(in_array($child->$value, $checked ?? []))
                                        >
                                        <span>{{ $child->$childText }}</span>
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        @else
            <ul class="list">
                @foreach ($items as $item)
                    <li class="selectable">
                        <label for="{{ $name }}[{{ $item->$value }}]">
                            <input
                                type="checkbox"
                                name="{{ $name }}[]"
                                value="{{ $item->$value }}"
                                id="{{ $name }}[{{ $item->$value }}]"
                                @checked(in_array($item->$value, $checked ?? []))
                            >
                            <span>{{ $item->$text }}</span>
                        </label>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
