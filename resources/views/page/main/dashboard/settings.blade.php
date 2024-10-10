<x-split.box pd="15">
    <x-split.item>
        <x-form.box action="{{ route('settings.change-them') }}" method="POST" sbm="Применить" header="Цветовая тема">
            <x-form.select name="them_id">
                @php
                    $thems = App\Models\Glossary\Glossary_User_Them::all();
                @endphp
                @foreach ($thems as $them)
                    <x-form.select-option 
                        title="{{ $them->name }}" 
                        value="{{ $them->id }}" 
                        :select="auth()->user()->them->them_id ? auth()->user()->them->them_id : 1" />
                @endforeach
            </x-form.select>
        </x-form.box>
    </x-split.item>
    <x-split.item></x-split.item>
    <x-split.item></x-split.item>
    <x-split.item></x-split.item>
    <x-split.item></x-split.item>
    <x-split.item></x-split.item>
</x-split.box>