<div class="excel-box {{ $attributes['class'] ? $attributes['class'] : '' }}">
    @isset($meny)
        <div class="page-meny excel">
            {{ $meny }}
        </div>
    @endisset
    <form action="{{ $action }}" method="POST" class="mini-scroll" id="data-form">
        @csrf
        <table>
            {{ $sheet }}
        </table>
    </form>
    <div class="sheets">
        {{ $sheets }}
    </div>
</div>
