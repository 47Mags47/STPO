{{-- 
    ## Аттрибуты
        name            - Указывает имя поля
        label           - Добавляет заголовок к полю
        type            - Устанавливает тип поля
        value           - Устанавливает значение поля
        ph              - Устанавливает placeholder поля
        autocomplete    - Устанавливает автозаполнение поля
    ## Свойства
        req             - Делает поле обязательным
        disabled        - Делает поле не активным
        horizontal      - Выравнивает поле и заголовок по горизантали
--}}

@isset($label)
    <label for="{{ $name }}" @class(['horizontal' => isset($horizontal)])>
        <span>{{ $label }}</span>
@endisset
        <input 
            type    = "{{ isset($type) ? $type : 'text' }}" 
            name    = "{{ isset($name) ? $name : '' }}" 
            id      = "{{ isset($name) ? $name : '' }}"
            @isset($value)
                value="{{ $value }}"
            @endisset
            
            {{-- {{ isset($value)        ? "value=$value"                  : '' }} --}}
            {{ isset($ph)           ? "placeholder=$ph"               : '' }}
            {{ isset($autocomplete) ? "autocomplete=$autocomplete"    : '' }}
            {{ isset($form)         ? "form=$form"                    : '' }}
            {{ isset($formul)       ? "data-formul='$formul'"         : '' }}

            @required(isset($req))
            @disabled(isset($disabled))
        >
@isset($label)
    </label>
@endisset
