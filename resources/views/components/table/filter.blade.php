<li>
    <label class="preview" form="check_{{ $pole }}">
        <span>{!! isset($title) ? $title : 'Заголовок' !!}</span>
        <i class="fa fa-angle-down" aria-hidden="true"></i>
        <input type="checkbox" id="check_{{ $pole }}">
    </label>
    <div class="box">
        <div class="search">
            <input type="search" placeholder="{!! isset($title) ? $title : 'Заголовок' !!}">
        </div>
        <div class="list mini-scroll">
            <x-form.input type="checkbox" name="filter[{{ $pole }}][0]" label="Выбрать всё" all/>
            @foreach ($items as $item)
                <x-form.input
                    type="checkbox"
                    name="filter[{{ $pole }}][{{ $item->$value }}]"
                    label="{{ $item->$name }}"
                />
            @endforeach
        </div>
    </div>
</li>
{{-- {{ $pole . '_' . $item->$value .'][' . $item->$pole . ']' }} --}}
