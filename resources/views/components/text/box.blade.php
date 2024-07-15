@isset($type)
    @switch($type)
        @case('info')
            <ul class="text-box text-ul">
                {{ $slot }}
            </ul>
        @break
    @endswitch
@else
    <div class="text-box">
        {{ $slot }}
    </div>
@endisset
