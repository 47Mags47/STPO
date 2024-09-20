{{-- 
    ## Аттрибуты
        pole        - Наименование поля
        filter => [
            preview - Выводимое наименование
            checked - Список выбранных checkbox
            list    - Список полей
            name    - Значение checkbox
            value   - Заголовок checkbox
        ]
--}}

<div class="filter-box">
    <label class="preview horizontal" for="open_{{ $pole }}_filter">
        <span>{!! $filter['preview'] !!}</span>
        <i class="fa fa-angle-down" aria-hidden="true"></i>
        <input type="checkbox" id="open_{{ $pole }}_filter">
    </label>
    <div class="filter">
        <div class="filter-search">
            <input type="search" placeholder="{!! $filter['preview'] !!}">
        </div>
        <ul class="list mini-scroll">
            <li class="select_all">
                @if (isset($filter['checked']) and (count($filter['list']) == count($filter['checked'])))
                    <x-form.checkbox name="{{ $pole }}_select_all" label="Выбрать все" checked />
                @else
                    <x-form.checkbox name="{{ $pole }}_select_all" label="Выбрать все" />
                @endif
            </li>
            @foreach ($filter['list'] as $i => $item)
                @php
                    $name = $filter['name'];
                    $value = $filter['value'];
                @endphp
                <li>
                    @if (isset($filter['checked']) and in_array($item->$name, $filter['checked']))
                        <x-form.checkbox name="filters[{{ $pole }}][{{ $item->$name }}]"
                            label="{{ $item->$value }}" checked />
                    @else
                        <x-form.checkbox name="filters[{{ $pole }}][{{ $item->$name }}]"
                            label="{{ $item->$value }}" />
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>
