<option
    value="{{ $value }}"
    @if ($title !== null)
        title="{{ $title }}"
    @endif
    @selected(isset($selected) and $selected === true)
>
    {{ $text }}
</option>
