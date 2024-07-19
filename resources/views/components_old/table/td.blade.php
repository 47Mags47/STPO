@if (isset($type))
    @switch($type)
        @case('link-button')
            <td>
                <div>
                    <a @class([
                        'button',
                        'blue-button' => !isset($red),
                        'red-button' => isset($red),
                    ]) href="{{ $value }}" class="button blue-button">{{ $title }}
                    </a>
                </div>
            </td>
        @break

        @case('input')
            <td @class([
                'dont-pd' => true,
            ])
                @isset($colspan)
                    colspan="{{ $colspan }}"
                @endisset
                @isset($rowspan)
                    rowspan="{{ $rowspan }}"
                @endisset>
                <div>
                    @isset($inpType)
                        @switch($inpType)
                            @case('select')
                                <select @class(['depended' => isset($depend)]) name="data[{{ $name }}]" id="{{ $name }}"
                                    @required(isset($req))
                                    @isset($depend)
                            depend="{{ $depend }}"
                            @endisset>
                                    @isset($req)
                                        <option value="0">--- Не выбрано ---</option>
                                    @endisset
                                    @foreach ($list as $item)
                                        @php
                                            $option_title = $item;
                                            foreach (explode('->', $ptitle) as $value) {
                                                $option_title = $option_title->$value;
                                            }
                                            $option_smal_title =
                                                mb_strlen($option_title) > 50
                                                    ? mb_substr($option_title, 0, 50) . '...'
                                                    : $option_title;
                                        @endphp
                                        <option value="{{ $item->$pval }}" title="{{ $option_title }}"
                                            @isset($dependVal)
                                    depend-val="{{ $item->$dependVal }}"
                                @endisset>
                                            {{ $option_smal_title }}</option>
                                    @endforeach
                                </select>
                            @break

                            @case(2)
                            @break

                            @default
                                <input type="{{ isset($inpType) ? $inpType : 'text' }}" value="{{ isset($value) ? $value : '' }}"
                                    name="data[{{ $name }}]" autocomplete="off">
                        @endswitch
                    @else
                        <input type="{{ isset($inpType) ? $inpType : 'text' }}" value="{{ isset($value) ? $value : '' }}"
                            name="data[{{ $name }}]" autocomplete="off">
                    @endisset
                </div>
            </td>
        @break

        @case('header')
            <td class="td-header">
                <span>{!! $value !!}</span>
            </td>
        @break

        @case('input-d')
            <td>
                <div>
                    <input type="text" value="X" disabled>
                </div>
            </td>
        @break

        @case('smb')
            <td>
                <div>
                    <input type="submit" value="{{ isset($title) ? $title : 'Отправить' }}" @class(['button', 'blue-button', $attributes['class']])>
                </div>
            </td>
        @break
    @endswitch
@else
    <td {{ isset($h) ? "h=$h" : '' }}>
        <span>{!! $value !!}</span>
    </td>
@endif
