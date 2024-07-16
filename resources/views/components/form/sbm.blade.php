{{-- ?= title --}}

<div class="sbm-box">
    <input
        type="submit"
        value="{{ isset($title) ? $title : 'Отправить' }}"
        class="button blue-button"
    >
</div>
