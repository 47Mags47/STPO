<div class="alerts" id="alert-bell">
    <i class="fa fa-bell" aria-hidden="true"></i>
    <div class="counter"></div>
    <ul class="alert-list mini-scroll">
        @php
            $alerts = auth()->user()->alerts;
        @endphp
        @foreach ($alerts as $alert)
            @include('components.header.alert', compact('alert'))
        @endforeach
    </ul>
</div>
