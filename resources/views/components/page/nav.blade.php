@if (isset($type))
    @switch($type)
        @case('form-submit')
            <li>
                <input type="submit" form="{{ $form }}" value="{{ $title }}">
            </li>
        @break
    @endswitch
@else
    <li>
        @if (isset($disabled))
            <a title="Функция не доступна" class="disabled">{{ $title }}</a>
        @else
            <a href="{{ $link }}" {{ isset($blank) ? 'target="_blank"' : '' }}>{{ $title }}</a>
        @endif
    </li>
@endif
