{{-- 
    ## Аттрибуты
        value           - Устанавливает значение поля
        title           - Устанавливает текст поля
        dependVal       - Указывает id для зависимых полей
        p-name          - Устанавливает имя select. При наличии устанавливает old значения выбора
    ## Свойства
        selected        - Устанавливает поле выыбранным
--}}

<option 
    value="{{ $value }}"
    title="{!! (mb_strlen($title) > 40 or isset($title)) ? $title : '' !!}"
    @isset($dependVal)
        depend-val="{{ $dependVal }}"
    @endisset
    @selected(isset($selected) or (isset($pName) and old($pName) == $value))
>
    @if (mb_strlen($title) > 40)
        {!! mb_substr($title, 0, 40) . '...' !!}
    @else
        {!! $title !!}
    @endif
</option>