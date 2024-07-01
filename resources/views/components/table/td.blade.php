@if (isset($type))
    @switch($type)
        @case('link-button')
            <td>
                <div>
                    <a href="{{ $value }}" class="button blue-button">{{ $title }}</a>
                </div>
            </td>
        @break
    @endswitch
@else
    <td>
        <span>{!! $value !!}</span>
    </td>
@endif
