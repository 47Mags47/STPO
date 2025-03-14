<form
    action="{{ $action }}"
    enctype="{{ $enctype }}"
    method="{{ $method === 'GET' ? 'GET' : 'POST'}}"
    class="{{ $attributes['class'] }}"

    @if ($id !== null)
        id="{{ $id }}"
    @endif
>
    @if ($method !== 'GET')
        @csrf
        @method($method)
    @endif

    @if ($header !== null)
        <h3 class="form-header">{{ $header }}</h3>
    @endif

    <ul class="form-errors-box">
        @foreach ($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>

    <div class="form-content">
        @isset($content)
            {{ $content }}
        @endisset
    </div>

    <div class="form-buttons">
        @if ($sbm !== null)
            <input type="submit" value="{{ $sbm }}" class="button blue-button">
        @endif

        @isset($buttons)
            {{ $buttons }}
        @endisset
    </div>

    <div class="form-info">
        @isset($info)
            {{ $info }}
        @endisset
    </div>
</form>
