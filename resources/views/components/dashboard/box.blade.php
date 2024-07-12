<div class="dashboard-box">
    @isset($type)
        @switch($type)
            @case('form')
                <x-dashboard.header title="{{ isset($header) ? $header : '' }}" id="{{ isset($id) ? $id : '' }}" />
                <form action="" method="POST">
                    @csrf
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
                    {{ $slot }}
                </form>
            @break

        @endswitch
    @else
        {{ $slot }}
    @endisset
</div>
