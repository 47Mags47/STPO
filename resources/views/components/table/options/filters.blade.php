{{-- 
    ## Свойства
        filters     - Массив фильтров
        pole        - Наименование поля
        reset-link  - Ссылка на сброс фильтров
--}}

<div class="filters-box">
    <form action="{{ $filterLink }}" method="POST" class="filter-form">
        @foreach ($filters as $pole => $filter)
            @csrf
            @if (!isset($filter['is_administration']) or isset($filter['is_administration']) and auth()->user()->can('is_administration'))
                <x-table.options.filter :$filter :$pole />
            @endif
        @endforeach
        <x-form.sbm title="Применить" />
        <x-custom.link link="{{ $resetLink }}" title="X" red-button />
    </form>
</div>
