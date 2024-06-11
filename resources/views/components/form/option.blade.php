@if (mb_strlen($slot) > 60)
    <option value="{{ $val }}" {{ $attributes['data-pole'] ? 'data-pole=' . $attributes['data-pole'] : '' }}
        {{ $attributes['data-depend'] ? 'data-depend=' . $attributes['data-depend'] : '' }} title="{{ $slot }}">
        {!! mb_substr($slot, 0, 57) . '...' !!}
    </option>
@else
    <option value="{{ $val }}" {{ $attributes['data-pole'] ? 'data-pole=' . $attributes['data-pole'] : '' }}
        {{ $attributes['data-depend'] ? 'data-depend=' . $attributes['data-depend'] : '' }} title="{{ $slot }}">
        {{ $slot }}
    </option>
@endif
