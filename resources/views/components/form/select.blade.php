{{-- attr: name | label | depend --}}
{{-- flag: required | disabled | null --}}

<label for="{{ isset($name) ? $name : '' }}">
    @isset($label)
        <span>{!! $label !!}</span>
    @endisset
    <select
        @php
            $select_name = '';
            if (isset($name)) {
                $select_name = $name;
                if (isset($data)) {
                    $select_name = 'data[' . $select_name . ']';
                }
            }
        @endphp
        name="{{ $select_name }}"
        id="{{ isset($name) ? $name : '' }}"
        @required(isset($req))
        @disabled(isset($disabled))
        @class(['mini-scroll', 'depend' => isset($depend)])
        @isset($depend)
            depend="{{ $depend }}"
        @endisset
    >
        <option value="0">--- Не выбрано ---</option>
        {{ $slot }}
    </select>
</label>
