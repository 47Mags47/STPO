{{-- ?= title --}}

<div class="sbm-box">
    @isset($sendButton)
    <label
        for="{{ isset($name) ? $name : '' }}"
        @class([
            'sbm-ico' => true,
            'button',
            'blue-button'
        ])
    >
        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
        <input
            type="submit"
            id="{{ isset($name) ? $name : '' }}"
        />
    </label>
    @else
        <input
            type="submit"
            value="{{ isset($title) ? $title : 'Отправить' }}"
            @class([
                'button',
                'blue-button',
                'close' => isset($close)
            ])
        >
    @endisset
</div>
