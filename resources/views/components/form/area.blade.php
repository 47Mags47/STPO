<label for="{{ isset($name) ? $name : '' }}">
    <textarea
        name="{{ isset($name) ? $name : '' }}"
        id="{{ isset($name) ? $name : '' }}"
        @isset($ph)
            placeholder="{!! isset($ph) ? $ph : '' !!}"
        @endisset
        @required(isset($req))
        @disabled(isset($disabled))
    ></textarea>
</label>
