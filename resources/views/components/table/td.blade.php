<td @class(['header' => isset($type) and $type == 'header',])>
    <div @class([
        'input' => isset($type) and $type == 'input',
        'center' => isset($center),
    ])>
        @isset($type)
            @switch($type)
                @case('input')
                    <input
                        type="{{ isset($inpType) ? $inpType : 'text' }}"
                        value="{{ isset($value) ? $value : '' }}"
                        name="data[{{ isset($name) ? $name : '' }}]"
                        @required(isset($req))
                        @disabled(isset($disabled))
                        @checked(isset($checked))
                    >
                @break
            @endswitch
        @endisset
        {{ isset($value) ? $value : '' }}
    </div>
</td>
