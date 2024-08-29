@php
        use Illuminate\Support\Carbon;
        $date = Carbon::parse($raport->date->date)->format('d.m.Y');
        $header = "Учет заявлений по присвоению званий \"Ветеран труда\"<br>по состоянию на $date";
    @endphp
    <x-form.form action="{{ route('veteran-truda.store') }}" method="POST" shadow center header="{!! $header !!}">
        <x-form.input 
            type="number" 
            name="all" 
            value="{{ $raport->all != null ? $raport->all : '' }}"
            :disabled="$raport->all != null"
            label="Всего заявлений принято, шт" 
        />
        <x-form.input 
            type="number"
            name="el"
            value="{{ $raport->el != null ? $raport->el : '' }}"
            :disabled="$raport->el != null"
            label="Заявлений в электронном виде, шт" 
        />
        <x-form.input 
            type="number"
            name="mfc"
            value="{{ $raport->mfc != null ? $raport->mfc : '' }}"
            :disabled="$raport->mfc != null"
            label="Заявлений через МФЦ, шт" 
        />
        @if ($raport->all == null and $raport->el == null and $raport->mfc == null)
            <x-form.sbm />
        @endif
    </x-form.form>