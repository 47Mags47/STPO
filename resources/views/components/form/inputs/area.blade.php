<div class="input-box area-input">
    @isset($label)
        <label
            @class([
                'form-label',
                'required' => $req
            ])
            for="{{ $name }}"
        >{{ $label }}</label>
    @endisset

    <textarea
        @class([
            'input-has-mask' => $mask !== null,
            'required' => $req
        ])

        @style([
            "height:$height" => $height !== null
        ])

        name="{{ $name }}"
        id="{{ $id }}"

        @if ($ph !== null)
            placeholder="{{ $ph }}"
        @endif

        @if ($mask !== null)
            data-mask="{{ $mask }}"
        @endif

        @required($req)
        @disabled($disabled)
    >@if ($value !== null){{ $value }}@endif</textarea>

    @if($title !== null)
        <div class="title" title="{{ $title }}">
            <i class="fa-solid fa-circle-question"></i>
        </div>
    @endif

</div>
