@if ($complited)
    <li completed='true'>
        <a href="{{ $link }}">{{ $title }}</a>
    </li>
@else
    <li completed='false'>
        <span>{{ $title }}</span>
    </li>
@endif
