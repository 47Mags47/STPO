{{-- attr: name | label | depend --}}
{{-- flag: required | disabled | null --}}

<label for="{{ isset($name) ? $name : '' }}">
    @isset($label)
        <span>{!! $label !!}</span>
    @endisset
    <select
        name="{{ isset($name) ? $name : '' }}"
        id="{{ isset($name) ? $name : '' }}"
        @required(isset($required))
        @disabled(isset($disabled))
        @class(['depend' => isset($depend)])
        @isset($depend)
            depend="{{ $depend }}"
        @endisset
    >
        <option value="0">--- Не выбрано ---</option>
        {{ $slot }}
    </select>
</label>
