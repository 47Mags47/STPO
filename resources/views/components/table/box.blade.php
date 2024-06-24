<div class="table-box {{ $attributes['class'] ? $attributes['class'] : '' }}">
    @isset($options)
        @if ($options)
            <div class="options">
                <div class="search">
                    <x-table.search action="" />
                </div>
                <ul class="filters">
                    @isset($filters)
                        {{ $filters }}
                    @endisset
                    <button class="accept-button button blue-button">Применить</button>
                    <button class="reset-button button red-button">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </ul>
            </div>
        @endif
    @endisset

    @isset($message)
        @if ($message)
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
        @endif
    @endisset

    @if (mb_strpos($attributes['class'], 'table-page') !== false)
        <form {{ isset($action) ? "action=$action" : '' }} id="{{ $formid }}" method="POST">
            @csrf
        @endisset
        <table>
            <colgroup>
                @isset($cols)
                    {{ $cols }}
                @endisset
            </colgroup>
            <thead>
                @isset($header)
                    {{ $header }}
                @endisset
            </thead>
            <tbody>
                @isset($body)
                    {{ $body }}
                @endisset
            </tbody>
        </table>
        @isset($attributes['class']['table-page'])
        </form>
    @endif
</div>
