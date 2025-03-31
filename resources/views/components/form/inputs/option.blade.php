@if (is_array($item))
    <li class="group">
        <span class="group-name">{{ $group }}</span>
        <ul>
            @foreach ($item as $group => $child)
                <x-form.inputs.option :$group :item="$child" />
            @endforeach
        </ul>
    </li>
@elseif(is_string($item))
    <li
        data-value="{{ $item }}"
        class="selectable"
        @if ($title !== null)
            title="{{ $title }}"
        @endif
    ><span>{{ $group }}</span></li>
@endif
