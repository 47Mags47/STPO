@php
    $type = isset($type) ? $type : 'default';
    if (isset($name)) {
        $value = old($name, isset($value) ? $value : '');
    }
@endphp
@switch($type)
    @case('default')
        <label for="{{ isset($name) ? $name : '' }}">
            @isset($title)
                <span>{!! $title !!}</span>
            @endisset
            <input
                id="{{ isset($name) ? $name : '' }}"
                name="{{ isset($name) ? $name : '' }}"
                type="{{ isset($inpType) ? $inpType : 'text' }}"
                placeholder="{{ isset($placeholder) ? $placeholder : '' }}"
                value="{{ $value }}"
                @disabled(isset($disabled))
            >
        </label>
    @break
@endswitch
