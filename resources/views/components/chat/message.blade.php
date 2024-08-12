<li @class([
    'file' => $message->is_file,
    'system' => $message->is_system,
    'default' => !$message->is_file and !$message->is_system,
    'own' => $message->sender_id == auth()->user()->id,
])>
    @if (!$message->is_system)
        <div class="logo">
            <img src="{{ isset($user->logo) ? $user->logo : asset('media/default_logo.png') }}"
                alt="{!! $message->sender->nickname !!}">
        </div>
        <div class="text">
            @if ($message->is_image)
                <span>
                    <img src="{{ asset('/storage/appeal-chat/' . $message->appeal_id . '/' . $message->message) }}"
                        alt="">
                </span>
            @else
                <span>
                    @if ($message->is_file)
                        {{ mime_content_type(Storage::disk('appeal-chat')->path($message->appeal_id . '/' . $message->message)) }}
                        @switch(mime_content_type(Storage::disk('appeal-chat')->path($message->appeal_id . '/' .
                            $message->message)))
                            {{-- PDF --}}
                            @case('application/pdf')
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                            @break

                            {{-- Файлы с кодом --}}
                            @case('application/xml-dtd')
                                <i class="fa fa-file-code-o" aria-hidden="true"></i>
                            @break

                            @case('text/x-php')
                                <i class="fa fa-file-code-o" aria-hidden="true"></i>
                            @break

                            @case('text/x-java')
                                <i class="fa fa-file-code-o" aria-hidden="true"></i>
                            @break

                            @case('text/x-script.python')
                                <i class="fa fa-file-code-o" aria-hidden="true"></i>
                            @break

                            {{-- EXCEL --}}
                            @case('application/vnd.ms-excel')
                                <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                            @break

                            @case('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')
                                <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                            @break

                            {{-- WORD --}}
                            @case('application/msword')
                                <i class="fa fa-file-word-o" aria-hidden="true"></i>
                            @break

                            @case('application/vnd.openxmlformats-officedocument.wordprocessingml.document')
                                <i class="fa fa-file-word-o" aria-hidden="true"></i>
                            @break

                            {{-- Архивы --}}
                            @case('application/vnd.rar')
                                <i class="fa fa-archive" aria-hidden="true"></i>
                            @break

                            @case('application/x-rar')
                                <i class="fa fa-archive" aria-hidden="true"></i>
                            @break

                            @case('application/zip')
                                <i class="fa fa-archive" aria-hidden="true"></i>
                            @break

                            {{-- Презентация --}}
                            @case('application/vnd.ms-powerpoint')
                                <i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>
                            @break

                            @case('application/vnd.openxmlformats-officedocument.presentationml.presentation')
                                <i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>
                            @break

                            {{-- Текст --}}
                            @case('text/plain')
                                <i class="fa fa-file-text-o" aria-hidden="true"></i>
                            @break

                            @case('application/x-empty')
                                <i class="fa fa-file-text-o" aria-hidden="true"></i>
                            @break

                            {{-- ИНОЕ --}}

                            @default
                                <i class="fa fa-download" aria-hidden="true"></i>
                        @endswitch
                    @endif
                    @if ($message->is_file)
                        <x-custom.link link="" title="{!! $message->message !!}" white />
                    @else
                        {!! $message->message !!}
                    @endif

                </span>
            @endif
        </div>
        <div class="datetime">
            <span>{!! $message->created_at->format('d.m H:i') !!}</span>
        </div>
    @endif
</li>
