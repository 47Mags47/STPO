@isset($type)
    @switch($type)
        @case('file-form')
            <x-form.input type="file-hidden" :label=$label :action=$action :name=$name/>
        @break
    @endswitch
@else
    <li><a href="{{ $link }}">{{ $text }}</a></li>
@endisset
