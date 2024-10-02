{{-- 
    ## Свойства
        vertical    - Выравнивает блок по вертикали
        pd          - Устанавливает отступ внутри блока
    ## Компоненты
        slot       - Содержимое компонента
--}}

@php
    $pd = isset($pd) ? $pd . 'px' : '0px';
    $gap = isset($gap) ? $gap . 'px' : '0px';
@endphp

<div @class([
    'split-box',
    'vertical' => isset($vertical),
    'no-flex' => isset($noFlex),
    $attributes['class'],
])
    @style([
        "padding: $pd",
        "gap: $gap"
    ])
>
    {{ $slot }}
</div>
