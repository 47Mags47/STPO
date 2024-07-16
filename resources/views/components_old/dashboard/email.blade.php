<label for="email" class="classic dashboard dashboard-email">
    <span>Почта</span>
    <input type="email" name="email" id="email" placeholder="{{ isset($ph) ? $ph : '' }}">
    <div class="shield" status={!! $status !!}>
        <i class="fa fa-shield" aria-hidden="true"
            @if ($status == 'active') title="Почта подтверждена" @endif
            @if ($status == 'dont-active') title="Требуется подтвердить почту" @endif
            >
        </i>
    </div>
</label>
