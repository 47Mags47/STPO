{{-- ACTION  --}}
{{-- METHOD  --}}
{{-- ? formId | method | header --}}

@isset($type)

@else
    <div @class([
        'form-box',
        'mini-scroll',
        'font-bold' => true,
        'center' => isset($center),
    ])>
        <form
            action="{{ isset($action) ? $action : '' }}"
            id="{{ isset($formId) ? $formId : '' }}"
            method="{{ isset($method) ? $method : 'POST' }}"
            @class(['shadow' => isset($shadow)])
        >
            @isset($header)
                <p class="form-header">{{ $header }}</p>
            @endisset

            @if(!isset($errorDisplay) or (isset($errorDisplay) and $errorDisplay))
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
@endisset

