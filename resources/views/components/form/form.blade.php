{{-- ACTION  --}}
{{-- METHOD  --}}
{{-- CLASS ?= CLASSIC --}}

<div class="form-box">
    <form action="{{ $action }}" method="{{ $method == 'GET' ? 'GET' : 'POST' }}"
        class="mini-scroll {{ $attributes['class'] != null ? $attributes['class'] : 'classic' }}"
        {{ $attributes['files'] != null ? 'enctype="multipart/form-data"' : '' }}>
        @if ($attributes['header'])
            <p class="form-header">{{ $attributes['header'] }}</p>
        @endif
        <x-page.message />
        @csrf
        @if ($method != 'GET')
            @method($method)
        @endif

        {{ $slot }}
    </form>
</div>
