{{-- HACK переписать на details --}}

<ul class="tree-box">
    @foreach ($items as $item)
        <li>
            @if ($item->$childParameter()->count() > 0)
                <div class="item-info-box">
                    <i class="fa-solid fa-folder"></i>
                    <span class="item-name">{{ $item->$text }}</span>
                    <a href="{{ route($editRoute, [$editRouteParameter => $item->$primary]) }}">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                </div>
                @if (isset($createRoute))
                    <a href="{{ route($createRoute, [$createRouteParameter => $item->$primary]) }}" class="button blue-button">
                        <i class="fa-solid fa-circle-plus"></i>
                        создать
                    </a>
                @endif
                <x-tree
                    :items="$item->$childParameter"
                    :$childParameter
                    :$text
                    :$primary

                    :$createRoute
                    :$createRouteParameter

                    :$editRoute
                    :$editRouteParameter
                />
            @else
                <div class="item-info-box">
                    <i class="fa-solid fa-file"></i>
                    <span class="item-name">{{ $item->$text }}</span>
                    <a href="{{ route($editRoute, [$editRouteParameter => $item->$primary]) }}">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                </div>
                @if (isset($createRoute))
                    <a href="{{ route($createRoute, [$createRouteParameter => $item->$primary]) }}" class="button blue-button">
                        <i class="fa-solid fa-circle-plus"></i>
                        создать
                    </a>
                @endif
            @endif

        </li>
    @endforeach
</ul>
