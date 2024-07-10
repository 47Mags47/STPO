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

        {{-- @case('new-input')
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
                    <input type="{{ isset($inpType) ? $inpType : 'text' }}" name="{{ $name }}"
                        @isset($ph)
                            placeholder="{{ $ph }}"
                        @endisset
                        autocomplete="off">
                </div>
            </td>
        @break --}}
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
                    <input type="{{ isset($inpType) ? $inpType : 'text' }}" value="{{ isset($value) ? $value : '' }}" name="data[{{ $name }}]"
                        autocomplete="off">
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
