@if ($paginator->hasPages())
    <nav class="paginate default">
        <ul>
            <li>
                <a href="{{ $paginator->url(1) }}">
                    <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="{{ $paginator->previousPageUrl() }}">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </a>
            </li>
            @foreach ($elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage() - 2)
                            <li>
                                <a href="{{ $paginator->url($page) }}">{{ $page }}</a>
                            </li>
                        @endif
                        @if ($page == $paginator->currentPage() - 1)
                            <li>
                                <a href="{{ $paginator->url($page) }}">{{ $page }}</a>
                            </li>
                        @endif
                        @if ($page == $paginator->currentPage())
                            <li class="not-border">
                                <span> {{ $page }} </span>
                            </li>
                        @endif
                        @if ($page == $paginator->currentPage() + 1)
                            <li>
                                <a href="{{ $paginator->url($page) }}">{{ $page }}</a>
                            </li>
                        @endif
                        @if ($page == $paginator->currentPage() + 2)
                            <li>
                                <a href="{{ $paginator->url($page) }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            <li>
                <a href="{{ $paginator->nextPageUrl() }}">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="{{ $paginator->url($paginator->lastPage()) }}">
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </nav>
@endif
