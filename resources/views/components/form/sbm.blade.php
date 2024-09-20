{{-- 
    ## Свойства
        for     - Привязывает кнопку к форме
        title   - Устанавливает текст кнопки
--}}

@isset($table)
    <div class="table-sbm-box">
@endisset

<input 
    type    = "submit" 
    value   = "{{ isset($title) ? $title : 'Отправить' }}" 
    class   = "button blue-button"
    
    {{ isset($for)  ? "for=$for"    : '' }} 
    {{ isset($form) ? "form=$form"  : '' }}
>

@isset($table)
    </div>
@endisset
