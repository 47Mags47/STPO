{{-- 
    ## Аттрибуты
        background  - Заданный цвет фона для строки (green|purple)
    ## Компоненты
        slot        - содержимое строки
--}}

<tr @class([
    'green' => isset($background) and $background == 'green',
    'purple' => isset($background) and $background == 'purple',
    'input' => isset($input)
])>
    {{ $slot }}
</tr>
