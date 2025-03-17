<div @class([
    'message-box',
    'own' => $own !== null ? $own : user()->id == $message->sender_id,
    'system' => $message->is_system,
    'image' => $message->is_image,
])>

    @if ($message->is_system)
        <div class="text">
            <span>{{ $message->message }}</span>
        </div>
    @endif

    @if (!$message->is_system)
        <div class="sender-logo-box">
            <img src="{{ asset('/storage/' . ($message->sender->logo ?? 'core/image/user_logo.png')) }}" alt="user-logo">
        </div>
        <div class="sender-name-box">
            <span>{{ $message->sender->full_name }}</span>
        </div>
        <div class="content-box">
            {{-- HACK Прикрутить попап с открытым изображением --}}
            {{-- HACK Заменить ссылки на скачивание на общие ссылки --}}
            {{-- HACK Добавить иконки на разные типы файлов --}}
            {{-- HACK добавить предпросмотр на некоторые типы файлов (excel, word и т.д.) --}}

            <div class="content">
                @if ($message->is_file)
                    @if ($message->is_image)
                        <div class="message image-box">
                            <img src="{{ $fileUrl }}" alt="message-image">
                        </div>
                    @else
                        <a href="{{ $fileUrl }}" class="message file-box">
                            <i class="fa-solid fa-file"></i>
                            <span>{{ $message->message }}</span>
                        </a>
                    @endif
                @else
                    <span class="message text-box">{{ $message->message }}</span>
                @endif
            </div>
        </div>
        <div class="info-box">
            <span>{{ $message->created_at->format('d.m.Y H:i') }}</span>
        </div>
    @endif

</div>
