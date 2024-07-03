<div class="excel-box {{ $attributes['class'] ? $attributes['class'] : '' }}">
    <div class="page-meny excel">
        {{ $meny }}
    </div>
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
