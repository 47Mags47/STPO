@if ($complited)
    <li completed='true' opened='{{ $opened }}'>
        <a href="{{ $link }}">{!! $title !!}</a>
    </li>
@else
    <li completed='false' opened='{{ $opened }}'>
        <span>{!! $title !!}</span>
    </li>
@endif
