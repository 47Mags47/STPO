@if (isset($paginator) and $paginator !== null and $paginator->lastPage() > 1)
    <ul class="paginate-box default-paginate">
        @if ($paginator->currentPage() > 3)
            <li>
                <a href="{{ $paginator->url(1) }}">
                    <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                </a>
            </li>
        @endif

        @if ($paginator->currentPage() > 2)
            <li>
                <a href="{{ $paginator->url($paginator->currentPage() - 2) }}">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </a>
            </li>
        @endif

        @if ($paginator->currentPage() > 1)
            <li>
                <a href="{{ $paginator->url($paginator->currentPage() - 1) }}">
                    {{ $paginator->currentPage() - 1 }}
                </a>
            </li>
        @endif

        <li class="active">
            <span>
                {{ $paginator->currentPage() }}
            </span>
        </li>

        @if ($paginator->currentPage() < $paginator->lastPage())
            <li>
                <a href="{{ $paginator->url($paginator->currentPage() + 1) }}">
                    {{ $paginator->currentPage() + 1 }}
                </a>
            </li>
        @endif

        @if ($paginator->currentPage() + 2 < $paginator->lastPage())
            <li>
                <a href="{{ $paginator->url($paginator->currentPage() + 2) }}">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
            </li>
        @endif

        @if ($paginator->currentPage() + 2 < $paginator->lastPage())
            <li>
                <a href="{{ $paginator->url($paginator->lastPage()) }}">
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </a>
            </li>
        @endif
    </ul>
@endif
