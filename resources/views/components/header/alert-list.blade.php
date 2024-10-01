<div class="alert-box">
    @php
        $alerts = auth()->user()->alerts;
        $no_read_count = $alerts
            ->filter(function ($alert) {
                return !$alert->visible;
            })
            ->count();
    @endphp

    <div class="preview">
        <i class="fa fa-bell" aria-hidden="true"></i>
        <x-custom.counter :count="$no_read_count" />
    </div>
    <ul class="alert-list no-scroll-line">
        @foreach ($alerts as $alert)
            <x-header.alert :$alert />
        @endforeach
    </ul>
</div>
