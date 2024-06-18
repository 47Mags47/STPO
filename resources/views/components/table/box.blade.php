<div class="table-box {{ $attributes['class'] ? $attributes['class'] : '' }}">
    <div class="options">
        <div class="search">
            <x-table.search action="" />
        </div>
        <ul class="filters">
            {{ $filters }}
            <button class="accept-button button blue-button">Применить</button>
            <button class="reset-button button red-button">
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>
        </ul>
    </div>
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
    <table>
        <colgroup>{{ $cols }}</colgroup>
        <thead>{{ $header }}</thead>
        <tbody>{{ $body }}</tbody>
    </table>
</div>
