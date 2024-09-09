<div 
    @class([
        'split-box',
        $attributes['class']
    ])
>
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
