{{-- ACTION  --}}
{{-- METHOD  --}}
{{-- CLASS ?= CLASSIC --}}

<div class="form-box">
    <form action="{{ $action }}" method="{{ $method == 'GET' ? 'GET' : 'POST' }}"
        class="mini-scroll {{ $attributes['class'] != null ? $attributes['class'] : 'classic' }}">
        @if ($attributes['header'])
            <p class="form-header">{{ $attributes['header'] }}</p>
        @endif
        <div class="message-box">
            @if ($errors->any())
                <ul class="errors">
                    @foreach ($errors->all() as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
            @if (session('message'))
                <ul class="message">
                    <li>{{ session('message') }}</li>
                </ul>
            @endif
        </div>
        @csrf
        @if ($method != 'GET')
            @method($method)
        @endif

        {{ $slot }}
    </form>
</div>
