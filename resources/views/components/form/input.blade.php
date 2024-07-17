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
