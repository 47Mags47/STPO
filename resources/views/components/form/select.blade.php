{{-- 
    ## Аттрибуты
        label           - Добавляет заголовок к полю
        name            - Указывает имя поля
        depend          - Указывает id родительского поля
    ## Свойства
        horizontal      - Выравнивает поле и заголовок по горизантали
        disabled        - Делает поле не активным
    ## Компоненты
        slot            - Содержимое компонента
--}}

@isset($label)
    <label for="{{ $name }}" @class(['horizontal' => isset($horizontal)])>
        <span>{{ $label }}</span>
@endisset
        <select 
            name    = "{{ $name }}"
            id      = "{{ $name }}"
            {{ isset($depend) ? "depend=$depend" : '' }}
            @disabled(isset($disabled))
            @class(['mini-scroll', 'depend' => isset($depend)])
            
            {{ isset($form)         ? "form=$form"                    : '' }}
        >
            <option value="0">--- Не выбрано ---</option>
            {{ $slot }}
        </select>
@isset($label)
    </label>
@endisset
