{{-- 
    ## Аттрибуты
        val         - Значение ячейки, при отстусвии заменяется $slot
        colspan     - Задает объединение ячейки по горизонтали
        rowspan     - Задает объединение ячейки по вертикали
    ## Свойства
        center      - Выравнивает содержимое ячейки по 2 осям
        h-center    - Выравнивает содержимое ячейки по горизонтальной оси
        v-center    - Выравнивает содержимое ячейки по вертикальной оси
    ## Компоненты
        slot        - содержимое ячейки
--}}

<td
    colspan="{{ isset($colspan) ? $colspan : 1 }}"
    rowspan="{{ isset($rowspan) ? $rowspan : 1 }}"
>
    <div @class(['center' => isset($center), 'h-center' => isset($hCenter), 'v-center' => isset($vCenter), 'pd' => isset($pd)])>
        @isset($val)
            <span>{!! $val !!}</span>
        @else
            {{ $slot }}
        @endisset
    </div>
</td>
