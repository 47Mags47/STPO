<td
    @class(['header' => isset($type) and $type == 'header',])
    colspan="{{ isset($colspan) ? $colspan : '' }}"
    rowspan="{{ isset($rowspan) ? $rowspan : '' }}">
    <div @class([
        'input' => isset($type) and ($type == 'input' or $type == 'input-d'),
        'select' => isset($type) and $type == 'select',
        'sbm' => isset($type) and $type == 'sbm',
        'center' => isset($center),
    ])>
        @isset($type)
            @switch($type)
                @case('header')
                    {!! isset($value) ? $value : '' !!}
                @break
                @case('input')
                    <input
                        type="{{ isset($inpType) ? $inpType : 'text' }}"
                        value="{{ isset($value) ? $value : '' }}"
                        name="data[{{ isset($name) ? $name : '' }}]"
                        @required(isset($req))
                        @disabled(isset($disabled))
                        @checked(isset($checked))
                        step="{{ isset($step) ? $step : 1 }}"
                    >
                @break
                @case('input-d')
                    <input
                        type="{{ isset($inpType) ? $inpType : 'text' }}"
                        value="X"
                        @disabled(true)
                    >
                @break
                @case('sbm')
                    <input
                        class="button blue-button"
                        type="submit"
                        value="{{ isset($title) ? $title : 'Отправить' }}"
                    >
                @break
                @case('link')
                    <a href="{{ $link }}" @class([
                        'button' => isset($blueButton) or isset($redButton) or isset($grayButton) ,
                        'blue-button' => isset($blueButton),
                        'red-button' => isset($redButton),
                        'gray-button' => isset($grayButton),
                        'default' => isset($default),
                    ])
                    @isset($newPage)
                        target="_blank"
                    @endisset>
                        {{ $title }}
                    </a>
                @break
                @case('select')
                    <x-form.select {{ $attributes }} data>
                        {{ $slot }}
                    </x-form.select>
                @break
            @endswitch
            @else
            {!! isset($value) ? $value : '' !!}
        @endisset
    </div>
</td>
