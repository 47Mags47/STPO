@php
    $dot_name = str_replace('[', '.', $name);
    $dot_name = str_replace(']', '', $dot_name);

    $checked = isset($checked) ? $checked : null;
    $checked = $checked ?? old($name);
    $checked = $checked ?? old($dot_name);
    $checked = $checked ?? request()->input($name);
    $checked = $checked ?? request()->input($dot_name);
@endphp

<div class="input-box custom-widjet radio-widjet">
    @isset($label)
        <label @class(['form-label', 'required' => isset($req)]) for="{{ $name }}">{{ $label }}</label>
    @endisset
    <div class="preview form-widjet-preview">
        <span>
            @if ($checked == null)
                --- Не выбрано ---
            @else
                @if (isset($childParameter))
                    @php
                        $all_childs = collect($items)->map(function ($item) use ($childParameter){
                            return $item->$childParameter;
                        })->collapse();

                        $select_child = $all_childs->filter(function($item) use ($value, $checked){
                            return $item->$value == $checked;
                        })->first();

                        $select_child_text = $select_child !== null
                            ? $select_child->$childText
                            : '--- Не выбрано ---';
                    @endphp
                    {{ $select_child_text }}
                @else
                    {{ collect($items)->where($value, $checked)->first()->$childText }}
                @endif
            @endif
        </span>
        <i class="fa-solid fa-chevron-down"></i>
    </div>
    <div class="list-box">
        <div class="search">
            <input type="text" placeholder="Найти...">
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
                                        <input type="radio" name="{{ $name }}" value="{{ $child->$value }}"
                                            id="{{ $name }}[{{ $child->$value }}]"
                                            @checked($child->$value == $checked)>
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
                            <input type="radio" name="{{ $name }}" value="{{ $item->$value }}"
                                id="{{ $name }}[{{ $item->$value }}]" @checked($child->$value == $checked)>
                            <span>{{ $item->$text }}</span>
                        </label>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
