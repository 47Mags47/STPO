<li @class([
    'file' => $message->is_file,
    'system' => $message->is_system,
    'default' => !$message->is_file and !$message->is_system,
    'right' => $message->sender_id == auth()->user()->id
])>
    @if ($message->is_file)
        @php
            $path = storage_path('app/public/appeal-chat/') . $message->appeal_id . '/' . $message->message;
            $meme = mime_content_type($path);
        @endphp

        <span class="text">
            @if ($meme == 'application/pdf')
                {{-- PDF --}}
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
            @elseif (in_array($meme, ['application/xml-dtd', 'text/x-php', 'text/x-java', 'text/x-script.python', '', '']))
                {{-- Файлы с кодом --}}
                <i class="fa fa-file-code-o" aria-hidden="true"></i>
            @elseif (in_array($meme, ['application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet']))
                {{-- EXCEL --}}
                <i class="fa fa-file-excel-o" aria-hidden="true"></i>
            @elseif (in_array($meme, ['application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document']))
                {{-- WORD --}}
                <i class="fa fa-file-word-o" aria-hidden="true"></i>
            @elseif (in_array($meme, [
                    'application/vnd.rar',
                    'application/x-rar',
                    'application/zip',
                    'application/vnd.openxmlformats-officedocument.presentationml.presentation',
                ]))
                {{-- Архивы --}}
                <i class="fa fa-archive" aria-hidden="true"></i>
            @elseif ($meme == 'text/plain')
                {{-- Текст --}}
                <i class="fa fa-file-text-o" aria-hidden="true"></i>
            @else
                {{-- Иное --}}
                <i class="fa fa-download" aria-hidden="true"></i>
            @endif
            <x-custom.link class="text" link="" title="{!! $message->message !!}" default/>
    @endif
    @if ($message->is_system)
        <span class="text">
            {!! $message->message !!}

    @endif
    @if (!$message->is_file and !$message->is_system)
        <span class="text">
            {!! $message->message !!}

    @endif
    </span>
    <span class="datetime">{!! $message->created_at->format('d.m H:i') !!}</span>
</li>
