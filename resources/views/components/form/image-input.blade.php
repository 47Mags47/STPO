<label for="{{ isset($name) ? $name : '' }}" class="image-input-box">
    <div class="preview">
        <div class="ico">
            <i class="fa fa-3x fa-camera"></i>
        </div>
        
        <img src="{{ isset($value) ? $value : '' }}">
    </div>
    <div class="hidden">
        <input 
            type    = "file" 
            name    = "{{ isset($name) ? $name : '' }}" 
            id      = "{{ isset($name) ? $name : '' }}"
            @isset($form)
                form = "{{ $form }}"
            @endisset
        >
    </div>
</label>