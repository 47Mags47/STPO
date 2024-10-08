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
                        @php
                            $meme_arr = [
                                'application/pdf' => 'pdf',
                                'text/xml' => 'code',
                                'application/xml-dtd' => 'code',
                                'text/x-php' => 'code',
                                'text/x-java' => 'code',
                                'text/x-script.python' => 'code',
                                'application/vnd.ms-excel' => 'excel',
                                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' => 'excel',
                                'application/msword' => 'word',
                                'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => 'word',
                                'application/vnd.rar' => 'archive',
                                'application/x-rar' => 'archive',
                                'application/zip' => 'archive',
                                'application/vnd.ms-powerpoint' => 'powerpoint',
                                'application/vnd.openxmlformats-officedocument.presentationml.presentation' =>
                                    'powerpoint',
                            ];
                            $caught = false;
                            try {
                                $meme = Storage::disk('appeal-chat')->mimeType($message->appeal_id . '/' . $message->message);
                                $type = isset($meme_arr[$meme]) ? $meme_arr[$meme] : null;
                            } catch (\Throwable $th) {
                                $caught = true;
                                $type = null;
                            }
                            
                        @endphp
                        <i @class([
                            'fa',
                            'fa-file-pdf-o' => $type == 'pdf',
                            'fa-file-code-o' => $type == 'code',
                            'fa-file-excel-o' => $type == 'excel',
                            'fa fa-file-word-o' => $type == 'word',
                            'fa-file-archive-o' => $type == 'archive',
                            'fa-file-powerpoint-o' => $type == 'powerpoint',
                            'fa-file-text-o' => $type == null,
                        ]) aria-hidden="true"></i>
                        @if ($caught)
                            <x-custom.link title="{{ mb_substr($message->message, 20) }}" disabled/>
                        @else
                            <x-custom.link link="{{ route('appeal.download', ['appeal' => $message->appeal_id, 'file_name' => $message->message, 'stamp' => now()->timestamp]) }}" title="{!! mb_substr($message->message, 20) !!}" white />
                        @endif
                    @else
                        <pre>{{ $message->message }}</pre>
                    @endif
                </span>
            @endif
        </div>
        <div class="datetime">
            <span>{!! $message->created_at->format('d.m H:i') !!}</span>
        </div>
    @else 
        <div class="system_message">
            <span>SYSTEM: {!! $message->message !!}</span>
        </div>
    @endif
</li>
