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
        @if (Route::has($link))
            <a href="{{ route($link) }}">{{ $title }}</a>
        @else
            <a title="Ссылка не доступна" class="disabled">{{ $title }}</a>
        @endif
    </li>
@endif
