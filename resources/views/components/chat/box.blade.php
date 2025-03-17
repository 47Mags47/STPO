<div class="message-list-box">
    @foreach ($messages as $message)
        <x-chat.message :$message :$fileRoute :$fileRouteParams/>
    @endforeach
</div>