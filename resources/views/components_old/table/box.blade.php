<div class="table-box {{ $attributes['class'] ? $attributes['class'] : '' }}">
    @isset($options)
        @if ($options)
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
        @endif
    @endisset

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
    <form action="{{ isset($action) ? $action : '' }}" method="{{ isset($method) ? $mthod : 'POST' }}">
        @csrf
        <table {{ isset($pd) ? 'pd=' . $pd : '' }}>
            @isset($cols)
                <colgroup>{{ $cols }}</colgroup>
            @endisset
            <thead>{{ $header }}</thead>
            <tbody>{{ $body }}</tbody>
        </table>
    </form>
</div>
