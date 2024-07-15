<div class="dashboard-box" id="{{ $id }}">
    @isset($type)
        @switch($type)
            @case('form')
                <x-dashboard.header title="{{ isset($header) ? $header : '' }}" id="{{ isset($id) ? $id : '' }}" />
                <form action="" method="POST">
                    @csrf
                    @if (!isset($messages) or $messages)
                        <div class="message-box">
                            @if ($errors->any())
                                <ul class="form-message errors">
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
                    @endisset
                    {{ $slot }}
            </form>
        @break

        @case('info')
            <x-dashboard.header title="{{ isset($header) ? $header : '' }}" id="{{ isset($id) ? $id : '' }}" />
            {{ $slot }}
        @break

    @endswitch
@else
    {{ $slot }}
@endisset
</div>
