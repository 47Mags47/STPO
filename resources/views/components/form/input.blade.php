{{-- TYPE   = TEXT | NUMBER | PASSWORD | DATE | EMAIL | SBM RESET --}}
{{-- NAME  --}}
{{-- LABEL  --}}
{{-- CLASS  ?= CLASSIC --}}

@if (in_array($type, ['text', 'number', 'password', 'date', 'email']))
    <label for="{{ $name }}" class='{{ $attributes['class'] }}'>
        <span>{{ $label ? $label : '' }}</span>
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
            {{ str_contains($attributes['class'], 'req') ? 'required' : '' }}>
    </label>
@endif

@if ($type == 'sbm')
    <label class="submit">
        <input type="submit" value="{{ $label }}" class="button blue-button">
    </label>
@endif

@if ($type == 'reset')
    <label class="submit">
        <input type="label" value="{{ $label }}" class="button red-button">
    </label>
@endif

@if ($type == 'file-hidden')
    <form action="{{ $action }}" method="POST" class="file-form" enctype="multipart/form-data">
        @csrf
        <label for="{{ $name }}">
            <span>{{ $label ? $label : '' }}</span>
            <input type="file" name="{{ $name }}" id="{{ $name }}">
        </label>
    </form>
@endif
