@isset($type)
    @if (in_array($type, ['text', 'number', 'password', 'date', 'email', 'phone']))
        <label for="{{ $name }}" class='dashboard-inp classic'>
            <span>{{ $label ? $label : '' }}</span>
            <input type="{{ $type }}" name="{{ isset($name) ? $name : '' }}" id="{{ isset($name) ? $name : '' }}"
                placeholder="{{ isset($ph) ? $ph : '' }}" value="{{ isset($value) ? $value : '' }}"
                @disabled(isset($disabled))>
        </label>
    @endif
    @if ($type == 'sbm')
        <label class="classic dashboard-inp submit">
            <input type="submit" value="Сохранить" class="button blue-button">
        </label>
    @endif
@else
    <label for="{{ $name }}" class='dashboard-inp classic'>
        <span>{{ $label ? $label : '' }}</span>
        <input type="text" name="{{ isset($name) ? $name : '' }}" id="{{ isset($name) ? $name : '' }}"
            placeholder="{{ isset($ph) ? $ph : '' }}" value="{{ isset($value) ? $value : '' }}"
            @disabled(isset($disabled))>
    </label>
@endisset
