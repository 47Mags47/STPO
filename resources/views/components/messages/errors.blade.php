<div class="errors-box">
    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    @endif
</div>
