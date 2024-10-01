{{-- 
    ## Аттрибуты
        val         - Значение ячейки, при отстусвии заменяется $slot
        colspan     - Задает объединение ячейки по горизонтали
        rowspan     - Задает объединение ячейки по вертикали
        sort => [   - Аттрибуты сортировки
            route   - Наименование ROUTE для страницы обработки сортировки
            pole    - Наименование поля сортировки
            type    - Направление сортировки (asc|desc)
            title   - Отображаемое название столбца
        ]
    ## Свойства
        empty       - Убирает содержимое ячейки
    ## Компоненты
        slot        - содержимое ячейки
--}}

<th colspan="{{ isset($colspan) ? $colspan : 1 }}" rowspan="{{ isset($rowspan) ? $rowspan : 1 }}">
    @isset($empty)
    @else
        @isset($sort)
            <div class="sort">
                <a href="{{ route($sort['route'], ['sort' => ['pole' => $sort['pole'], 'type' => $sort['type']]]) }}">
                    {{ $sort['title'] }}
                </a>
                <i class="fa fa-caret-up" aria-hidden="true"></i>
            </div>
        @else
            <div>
                <span>{{ isset($val) ? $val : $slot }}</span>
            </div>
        @endisset
    @endisset
</th>
