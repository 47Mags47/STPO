@switch($type)
    @case(1)
    @break

    @case(2)
    @break

    @default
        <tr>
            {{ $slot }}
        </tr>
@endswitch
