{{-- 
    ## Аттрибуты
        name            - Указывает имя поля
    ## Свойства
        multiple        - Позволяет загружать несколько файлов
--}}

<label for="{{ $name }}" class="button blue-button file-button">
    <i class="fa fa-paperclip" aria-hidden="true"></i>
    <input 
        type="file" 
        name="{{ $name }}" 
        id="{{ $name }}"
        @isset($multiple)
            multiple
        @endisset
    >
</label>