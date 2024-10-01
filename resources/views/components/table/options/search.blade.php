{{-- 
    ## Свойства
        search-link     - Ссылка для обработки поиска
--}}

<div class="search-box">
    <x-form.box action="{{ $searchLink }}" sbm="Поиск">
        <x-form.input type="search" name="search" />
    </x-form.box>
</div>
