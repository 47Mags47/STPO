{{-- NAME  --}}
{{-- LABEL  --}}
{{-- CLASS  ?=  classic | req--}}
{{-- depend  ?=  --}}

<label for="{{ $name }}" class='{{ $attributes['class'] }}'>
    <span>{{ $label ? $label : '' }}</span>
    <select name="{{ $name }}" id="{{ $name }}" {{$attributes['depend'] ? 'depend=' . $attributes['depend'] : ''}}>
        <option value="0">--- Не выбрано ---</option>
        {{ $slot }}
    </select>
</label>
