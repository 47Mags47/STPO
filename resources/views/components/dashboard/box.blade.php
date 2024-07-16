<div class="dashboard-box" id="{{ $id }}">
    <div class="header">
        <a class="header scroll-link" href="#{{ $id }}">{!! $header != '' ? "#$header" : '' !!}</a>
    </div>
    {{ $slot }}
</div>
