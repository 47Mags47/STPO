<td
    @class([
        'header' => isset($type) and $type == 'header',
        'high' => isset($type) and $type == 'area'
    ])
    colspan="{{ isset($colspan) ? $colspan : '' }}"
    rowspan="{{ isset($rowspan) ? $rowspan : '' }}">
    <div @class([
        'input' => isset($type) and ($type == 'input' or $type == 'input-d' or $type == 'area' or $type == 'bool-inp'),
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
                        @class([
                            'formul' => isset($formul)
                        ])
                        type="{{ isset($inpType) ? $inpType : 'text' }}"
                        value="{{ isset($value) ? $value : '' }}"
                        name="data[{{ isset($name) ? $name : '' }}]"
                        id="{{ isset($name) ? $name : '' }}"
                        @required(isset($req))
                        @disabled(isset($disabled))
                        @checked(isset($checked))
                        step="{{ isset($step) ? $step : 1 }}"
                        placeholder="{{ isset($placeholder) ? $placeholder : '' }}"
                        formul="{{ isset($formul) ? $formul : '' }}"
                        bool-val="{{ isset($boolVal) ? $boolVal : '' }}"
                    >
                @break
                @case('bool-inp')
                    <input 
                        class="bool"
                        type="number"
                        value="{{ isset($value) ? $value : '' }}"
                        name="data[{{ isset($name) ? $name : '' }}]"
                        id="{{ isset($name) ? $name : '' }}"
                        @checked(isset($checked)) 
                    >
                @break
                @case('area')
                    <textarea
                        name="data[{{ isset($name) ? $name : '' }}]"
                        @disabled(isset($disabled))
                        placeholder="{{ isset($placeholder) ? $placeholder : '' }}"
                        class="mini-scroll"
                    ></textarea>
                @break
                @case('input-file')
                    <label
                        for="file[{{ isset($name) ? $name : '' }}]"
                        class="upload-file-box"
                    >
                        <span class="button blue-button">{!! isset($title) ? $title : 'Загрузить' !!}</span>
                        <input
                            type="file"
                            name="file[{{ isset($name) ? $name : '' }}]"
                            id="file[{{ isset($name) ? $name : '' }}]"
                            @required(isset($req))
                            @disabled(isset($disabled))
                        >
                    </label>
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
                    <x-custom.link {{ $attributes }}/>
                @break
                @case('select')
                    <x-form.select {{ $attributes }} data>
                        {{ $slot }}
                    </x-form.select>
                @break
            @endswitch
        @else
            {!! isset($value) ? $value : $slot !!}
        @endisset
    </div>
</td>
