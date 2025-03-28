<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <title>
        @isset($pageName)
            {{ $pageName }}
        @else
            {{ env('APP_NAME') }}
        @endisset
    </title>

    @vite('resources/sass/app.sass')
    @isset($styles)
        {{ $styles }}
    @endisset

    @vite('resources/js/app.js')
    @isset($scripts)
        {{ $scripts }}
    @endisset
</head>

<body>

    @include('includes/load-ico')
    @include('includes.header')

    <section
        class="page-content {{ $attributes['class'] }}"
    >
        {{ $slot }}
    </section>

</body>

</html>
