@if (isset($type))
    @switch($type)
        @case('link-button')
            <td>
                <div>
                    <a href="{{ $value }}" class="button blue-button">{{ $title }}</a>
                </div>
            </td>
        @break

        @case('input')
            <td>
                <div>
                    <input type="text" value="{{ $value }}" name="data[{{ $coord }}]" autocomplete="off">
                </div>
            </td>
        @break

        @case('header')
            <td class="td-header">
                <span>{!! $value !!}</span>
            </td>
        @break

        @case('input-d')
            <td>
                <div>
                    <input type="text" value="X" disabled>
                </div>
            </td>
        @break
    @endswitch
@else
    <td>
        <span>{!! $value !!}</span>
    </td>
@endif
