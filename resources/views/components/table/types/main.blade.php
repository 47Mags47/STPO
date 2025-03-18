<div class="table-box">
    @isset($filters)
        <div class="filter-box">
            <form
                method="GET"
                action="{{ $dataUrl }}"
            >
                <div class="dinamic-box">
                    {{ $filters }}
                </div>

                <div class="static-box">
                    <div class="search-box">
                        <x-form.inputs.text name="filter[search]" type="search" />
                        <button class="button blue-button">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                    <div class="actions">
                        @isset($actions)
                            {{ $actions }}
                        @endisset
                    </div>
                    <div class="paginate"></div>
                    <div class="buttons">
                        <button class="button blue-button submit-button">Применить</button>
                        <button class="button red-button reset-button">X</button>
                    </div>
                </div>
            </form>
        </div>
    @endisset
    <table
        @if ($dataRoute !== null)
            data-href="{{ route($dataRoute) }}"
        @endif
    >
        <colgroup>
            @foreach ($colWidth as $width)
                <col
                    @if ($width !== null)
                        width="{{ $width }}"
                    @endif
                >
            @endforeach
        </colgroup>

        @isset($caption)
            <caption></caption>
        @endisset

        <thead>
            {{ $thead }}
        </thead>

        <tbody>
            {{ $tbody }}
        </tbody>

    </table>

    <div class="end-table-paginate-box"></div>
</div>
