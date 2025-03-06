<div class="input-box text-input">
    @isset($label)
        <label
            @class([
                'form-label',
                'required' => $req
            ])
            for="{{ $name }}"
        >{{ $label }}</label>
    @endisset

    <input
        @class([
            'input-has-mask' => $mask !== null,
            'required' => $req
        ])

        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $id }}"

        @if ($ph !== null)
            placeholder="{{ $ph }}"
        @endif

        @if ($value !== null)
            value="{{ $value }}"
        @endif

        @if ($mask !== null)
            data-mask="{{ $mask }}"
        @endif

        @required($req)
        @disabled($disabled)
    >

    @if($title !== null)
        <div class="title" title="{{ $title }}">
            <i class="fa-solid fa-circle-question"></i>
        </div>
    @endif

</div>
