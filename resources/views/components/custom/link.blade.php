<a href="{{ $attributes['disabled'] ? '#' : $link }}" @class([
    'button' => isset($attributes['blue-button']) or isset($attributes['red-button']) or isset($attributes['gray-button']),
    'blue-button' => $attributes['blue-button'],
    'red-button' => $attributes['red-button'],
    'gray-button' => $attributes['gray-button'],
    'default' => $attributes['default'],
    'white' => $attributes['white'],
    'disabled' => $attributes['disabled'],
    $attributes['class']
])
    @isset($newPage)
        target="_blank"
    @endisset
    >
    {{ $title }}
</a>
