{{-- 
    ## Аттрибуты
        page    - Наименование страницы для перехода
        title   - Выводимый текст
--}}

<li @class(['open' => isset($open)])>
    <span data-page="{{ $page }}">{{ $title }}</span>
</li>
