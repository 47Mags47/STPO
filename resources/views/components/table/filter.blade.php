<li data-pole="{{ $pole }}">
    <div class="prewiew">
        <span>{{ $title }}</span>
        <i class="fa fa-angle-down" aria-hidden="true"></i>
    </div>
    <div class="box">
        <div class="filter-box-search">
            <input type="search" placeholder="{{ $title }}...">
        </div>
        <div class="filter-box-filters mini-scroll mini-scroll">
            <label for="{{ str_replace($value, '', $pole) }}all">
                <input type="checkbox" id="{{ str_replace($value, '', $pole) }}all" data-value="0">
                <span class="value">Выбрать всё</span>
            </label>
            @foreach ($items as $item)
                <label for="{{ str_replace($value, '', $pole) . $item->$value }}">
                    <input type="checkbox" name="{{ str_replace($value . '_', '', $pole) }}[]"
                        id="{{ str_replace($value, '', $pole) . $item->$value }}" value="{{ $item->$value }}">
                    <span title="{{ $item->$name }}">{{ mb_substr($item->$name, 0, 30) }}</span>
                </label>
            @endforeach
        </div>
    </div>
</li>
