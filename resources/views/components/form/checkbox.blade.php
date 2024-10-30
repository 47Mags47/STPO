{{-- 
    ## Аттрибуты
        name            - Указывает имя поля
        label           - Добавляет заголовок к полю
    ## Свойства
        checked         - Устанавливает checked поля
--}}

<label for="{{ $name }}" class="checkbox-label">
    <input 
        type    = "checkbox" 
        name    = "{{ $name }}" 
        id      = "{{ $name }}"
        @checked(isset($checked))
    >
    <span>{!! $label !!}</span>
</label>