{{-- HACK переделать элемент на кастомный с блэк джеком и шлюхами --}}

<div class="widget form-widget select" data-name="{{ $name }}">
    <div class="preview-box">
        <div class="label-box">
            @if($label !== null)
                <label @class([
                    'form-label',
                    'required' => $req])
                >
                    {{ $label }}
                </label>
            @endif
        </div>
        <div class="input-box">
            <div class="input">
                <span class="preview-text">{{ $value ?? '-- Не выбрано --' }}</span>
            </div>
            <input type="hidden" name="{{ $name }}" class="value">
        </div>
    </div>
    <div class="list-box">
        <div class="search-box">
            <input type="text" class="search-input" placeholder="Найти...">
        </div>
        <ul class="list">
            @foreach ($items as $group => $item)
                <x-form.inputs.option :$group :$item />
            @endforeach
        </ul>
    </div>
</div>
