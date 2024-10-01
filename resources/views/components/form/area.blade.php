{{-- 
    ## Аттрибуты
        name            - Указывает имя поля
        label           - Добавляет заголовок к полю
        value           - Устанавливает значение поля
        ph              - Устанавливает placeholder поля
        cols            - Устанавливает ширину поля в символах
        rows            - Устанавливает высоту поля в символах
    ## Свойства
        req             - Делает поле обязательным
        disabled        - Делает поле не активным
        horizontal      - Выравнивает поле и заголовок по горизантали
--}}

@isset($label)
    <label for="{{ $name }}" @class(['horizontal' => isset($horizontal)])>
        <span>{{ $label }}</span>
@endisset
        <textarea 
            name    = "{{ $name }}"
            id      = "{{ $name }}"
            cols    = "{{ isset($cols) ? $cols : '15' }}" 
            rows    = "{{ isset($rows) ? $rows : '5' }}"
            class   = "no-scroll-line"

            {{ isset($ph)           ? "placeholder=$ph"               : '' }}

            @required(isset($req))
            @disabled(isset($disabled))
            @style([
                'resize: none' => !isset($resize),
                'resize: both' => isset($resize),
            ])
        >{{ isset($value) ? $value : old($name) }}</textarea>
@isset($label)
    </label>
@endisset