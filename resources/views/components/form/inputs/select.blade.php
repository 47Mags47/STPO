{{-- HACK переделать элемент на кастомный с блэк джеком и шлюхами --}}

<div class="input-box select">

    @isset($label)
        <label
            @class([
                'form-label',
                'required' => $req
            ])
            for="{{ $name }}"
        >{{ $label }}</label>
    @endisset
    <select
        @class([
            'required' => $req
        ])

        name="{{ $name }}"
        id="{{ $id }}"

        @required($req)
        @disabled($disabled)
    >

        @if ($nullable)
            <option selected value>--- Не выбрано ---</option>
        @endif


        @if ($childParam === null)
            @foreach ($items as $item)
                <x-form.inputs.option :value="$item->$optValue" :text="$item->$optText" :selected="$item->$optValue == $select" />
            @endforeach
        @else
            @foreach ($items as $parent)
                <optgroup label="{{ $parent->$optText }}">
                    @foreach ($parent->$childParam as $child)
                        <x-form.inputs.option :value="$child->$childValue" :text="$child->$childText" :selected="$child->$childValue == $select" />
                    @endforeach
                </optgroup>
            @endforeach
        @endif

    </select>
</div>
