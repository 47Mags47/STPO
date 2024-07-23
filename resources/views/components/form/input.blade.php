{{-- ?= type | name | value | label | ph --}}
{{-- ? checked | required | disabled --}}

@isset($type)
    @if (in_array($type, ['password', 'text', 'date', 'datetime', 'datetime-local', 'email', 'number', 'search', 'tel', 'time', 'url']))
        <label for="{{ isset($name) ? $name : '' }}">
            @isset($label)
                <span>{!! $label !!}</span>
            @endisset
            <input
                type="{{ $type }}"
                name="{{ isset($name) ? $name : '' }}"
                id="{{ isset($name) ? $name : '' }}"
                @isset($value)
                    value="{{ isset($value) ? $value : '' }}"
                    @isset($ph)
                        placeholder="{!! isset($ph) ? $ph : '' !!}"
                    @else
                        placeholder="{!! $value !!}"
                    @endisset
                @endisset
                @required(isset($req))
                @disabled(isset($disabled))
            >
        </label>
    @endif
    @if ($type == 'checkbox')
        <label for="{{ isset($name) ? $name : '' }}"
            @class(['set_all' => isset($all)])
        >
            <input
                type="checkbox"
                name="{{ isset($name) ? $name : '' }}"
                id="{{ isset($name) ? $name : '' }}"
                @disabled(isset($disabled))
                @checked(isset($checked) or (isset($uChecked) and $uChecked == 'true'))
                class="{{$attributes['class']}}"
            >
            @isset($label)
                <span>{!! $label !!}</span>
            @endisset
        </label>
    @endif
@else
    <label for="{{ isset($name) ? $name : '' }}">
        @isset($label)
            <span>{!! $label !!}</span>
        @endisset
        <input
            type="text"
            name="{{ isset($name) ? $name : '' }}"
            id="{{ isset($name) ? $name : '' }}"
            @isset($value)
                    value="{{ isset($value) ? $value : '' }}"
                    @isset($ph)
                        placeholder="{!! isset($ph) ? $ph : '' !!}"
                    @else
                        placeholder="{!! $value !!}"
                    @endisset
                @endisset
            @required(isset($req))
            @disabled(isset($disabled))
        >
    </label>
@endisset
