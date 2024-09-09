<div @class([
    'form-box',
    'mini-scroll',
    'font-bold' => true,
    'center' => isset($center),
])>
    <form
        action      = "{{ isset($action) ? $action : '' }}"
        id          = "{{ isset($formId) ? $formId : '' }}"
        method      = "{{ isset($method) ? $method : 'GET' }}"
        enctype     = "{{ (isset($file) or isset($files)) ? "multipart/form-data" : "application/x-www-form-urlencoded" }}" 
        @class(['shadow' => isset($shadow)])
    >
        @isset($header)
            <p class="form-header">{!! $header !!}</p>
        @endisset
        @if(isset($errorDisplay))
            <x-messages.all />
        @endif
        @csrf
        @isset($method)
            @method($method)
        @endisset
        {{ $slot }}
        @isset($other)
            <div class="other-box">
                {{ $other }}
            </div>
        @endisset
    </form>
</div>