<div class="table-box {{ $attributes['class'] ? $attributes['class'] : '' }}">
    <div class="options">
        <div class="search">
            <x-table.search action="" />
        </div>
        <form action="{{ isset($filterAction) ? $filterAction : '' }}" method="POST">
            @csrf
            <ul class="filters">
                {{ $filters }}
                <input type="submit" value="Применить" class="accept-button button blue-button">
                <input type="reset" value="X" class="reset-button button red-button">
            </ul>
        </form>
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
    <table {{ isset($pd) ? "pd=" . $pd : '' }}>
        <colgroup>{{ $cols }}</colgroup>
        <thead>{{ $header }}</thead>
        <tbody>{{ $body }}</tbody>
    </table>
</div>
