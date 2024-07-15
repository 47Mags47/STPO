{{-- TYPE   = TEXT | NUMBER | PASSWORD | DATE | EMAIL | SBM RESET --}}
{{-- NAME  --}}
{{-- LABEL  --}}
{{-- CLASS  ?= CLASSIC --}}

@if (in_array($type, ['text', 'number', 'password', 'date', 'email', 'phone']))
    <label for="{{ $name }}" class='{{ $attributes['class'] }}'>
        <span>{{ $label ? $label : '' }}</span>
        <input
            type="{{ $type }}"
            name="{{ $name }}"
            id="{{ $name }}"
            placeholder="{{ isset($ph) ? $ph : '' }}"
            value="{{ isset($value) ? $value : '' }}"
            @required(str_contains($attributes['class'], 'req'))
            @disabled(isset($disabled))
            >
    </label>
@endif

@if ($type == 'sbm')
    <label class='submit {{ $attributes['class'] }}'>
        <input type="submit" value="{{ $label }}" class="button blue-button">
    </label>
@endif

@if ($type == 'reset')
    <label class='submit {{ $attributes['class'] }}'>
        <input type="label" value="{{ $label }}" class="button red-button">
    </label>
@endif
