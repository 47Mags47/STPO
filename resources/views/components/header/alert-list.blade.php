<div class="alerts" id="alert-bell">
    @php
        $alerts = auth()->user()->alerts;
        $no_read_count = $alerts->filter(function($alert){
            return !$alert->visible;
        })->count();
    @endphp
    
    <i class="fa fa-bell" aria-hidden="true"></i>
    <x-custom.counter :count="$no_read_count"/>
    <ul class="alert-list mini-scroll">
        @foreach ($alerts as $alert)
            @include('components.header.alert', compact('alert'))
        @endforeach
    </ul>
</div>
