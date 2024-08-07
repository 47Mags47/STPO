<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        @vite('resources/sass/app.sass')
        @vite('resources/sass/page/error.sass')
    </head>
    <body class="antialiased">
        <div class="message">
            <span>@yield('code')</span>
            <div class="line"></div>
            <span>@yield('message')</span>
        </div>
    </body>
</html>
