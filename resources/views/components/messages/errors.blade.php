@isset($all)
    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    @endif
@else
    <div class="message-box">
        @if ($errors->any())
            <ul class="errors">
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endisset
