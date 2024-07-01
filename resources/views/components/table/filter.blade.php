<li data-pole="{{ $pole }}">
    <label class="prewiew" from="{{$pole}}">
        <span>{{ $title }}</span>
        <i class="fa fa-angle-down" aria-hidden="true"></i>
        <input type="checkbox" class="no-display check-open"  from="{{$pole}}">
    </label>
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
                    <input type="checkbox" name="filter[{{ str_replace($value . '_', '', $pole) }}][]"
                        id="{{ str_replace($value, '', $pole) . $item->$value }}" value="{{ $item->$value }}"
                        {{ (isset($userfilters) and isset($userfilters[$pole]) and in_array($item->$value, $userfilters[$pole])) ? 'checked' : '' }}
                        >
                    <span title="{{ $item->$name }}">{{ mb_substr($item->$name, 0, 30) }}</span>
                </label>
            @endforeach
        </div>
    </div>
</li>
