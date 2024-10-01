{{-- 
    ## Свойства
        vertical    - Выравнивает блок по вертикали
    ## Компоненты
        item1       - Содержимое компонента 1
        item2       - Содержимое компонента 2
        item3       - Содержимое компонента 3
        item4       - Содержимое компонента 4
        item5       - Содержимое компонента 5
--}}

<div @class([
    'split-box',
    'vertical' => isset($vertical),
    'no-flex' => isset($noFlex),
    $attributes['class'],
])>
    @isset($item1)
        <div class="split-item">{{ $item1 }}</div>
    @endisset
    @isset($item2)
        <div class="split-item">{{ $item2 }}</div>
    @endisset
    @isset($item3)
        <div class="split-item">{{ $item3 }}</div>
    @endisset
    @isset($item4)
        <div class="split-item">{{ $item4 }}</div>
    @endisset
    @isset($item5)
        <div class="split-item">{{ $item5 }}</div>
    @endisset
</div>
