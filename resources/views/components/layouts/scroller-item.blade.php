<div class="scroller-item-box" @isset($id)
        id="{{ $id }}"
    @endisset>
    <p class="box-header">
        {{ $header }}
    </p>
    {{ $slot }}
</div>
