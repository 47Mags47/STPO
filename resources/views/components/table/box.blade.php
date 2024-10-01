{{-- 
    ## Аттрибуты
        options => [
            search-link     - Ссылка на страницу обработки поиска
            add-link        - Ссылка на страницу для создания новой записи
            filter-link     - Ссылка на страницу обработки фильтрации
            reset-link      - Ссылка на страницу обработки сброса
            filters         - Массив фильтров
        ]
    ## Свойства
        w100                - растягивает таблицу на всю ширину
        h-sticky            - Закрепляет заголовок
        excel               - Устанавливает excel стиль для таблицы
    ## Компоненты
        colgroup            - Группа столбцов
        head                - Заголовки таблицы
        body                - Тело таблицы
--}}

<div class="table-box mini-scroll">
    <div class="table-options">
        @isset($options)
            @isset($options['search-link'])
                <x-table.options.search :search-link="$options['search-link']" />
            @endisset
            @isset($options['add-link'])
                <x-table.options.add :link="$options['add-link']" />
            @endisset
            @isset($options['filters'])
                <x-table.options.filters :filters="$options['filters']" filter-link="{{ $options['filter-link'] }}"
                    reset-link="{{ $options['reset-link'] }}" />
            @endisset
        @endisset
    </div>
    @isset($paginate)
        <div class="paginate-box">
            {{ $paginate->links() }}
        </div>
    @endisset
    <table @class([
        'w100' => isset($w100),
        'header-sticked' => isset($hSticky),
        'excel-table' => isset($excel),
    ])>
        @isset($header)
            <caption>{{ $header }}</caption>
        @endisset
        @isset($colgroup)
            <colgroup>{{ $colgroup }}</colgroup>
        @endisset
        @isset($head)
            <thead @class(['sticky' => isset($hSticky)])>{{ $head }}</thead>
        @endisset
        @isset($body)
            <tbody>{{ $body }}</tbody>
        @endisset
    </table>
    @isset($form)
        {{ $form }}
    @endisset
</div>
