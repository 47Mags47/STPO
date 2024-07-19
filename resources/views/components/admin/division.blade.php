<li @class([
    'disable' => isset($disable),
    'active' => isset($active) and $active,
    ])>
    <a href="{{ !isset($disable) ? $link : '#' }}">{!! $title !!}</a>
</li>
