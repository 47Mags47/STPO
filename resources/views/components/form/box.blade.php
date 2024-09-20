{{-- 
    ## Аттрибуты
        action  - Указывает адрес обработки формы
        id      - Добавляет заданный id
        method  - Изменяет метод формы
        header  - Устанавливает заголовок формы
    ## Свойства
        center          - Центрирует форму
        file            - Позволяет отправлять файлы через форму
        sbm             - Добавляет кнопку отправки
        error-display   - Добавляет Вывод сообщений и ошибок
    ## Компоненты
        slot    - Содержимое компонента
        other   - Дополнительные поля, после кнопки отправки 
--}}

<div @class(['form-box', 'center' => isset($center)])>
    <form
        {{ isset($action)   ? "action=$action"  : '' }}
        {{ isset($id)       ? "id=$id"          : '' }}
        method  = "{{ (isset($method) and $method) !== 'GET'    ? 'POST'                : 'GET'                                 }}" 
        enctype = "{{ isset($file)                              ? 'multipart/form-data' : 'application/x-www-form-urlencoded'   }}"
        @class(['shadow' => isset($shadow)])
    >
        @csrf
        @method(isset($method) ? $method : 'GET')

        {{-- Вывод заголовка --}}
        @isset($header)
            <p class="form-header">{!! $header !!}</p>
        @endisset

        {{-- Вывод сообщений --}}
        @isset($errorDisplay)
            <x-messages.errors/>
        @endisset

        {{-- Вывод содержимого --}}
        {{ $slot }}

        {{-- Вывод кнопки --}}
        @isset($sbm)
            @if ($sbm !== true and $sbm !== "")
                <x-form.sbm title="{{ $sbm }}" />
            @else
                <x-form.sbm />
            @endif
        @endisset

        {{-- Вывод доп информации --}}
        @isset($other)
            <div class="other-box">
                {{ $other }}
            </div>
        @endisset
    </form>
</div>