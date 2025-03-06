<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>

    @vite('resources/sass/app.sass')
    @stack('styles')

    @vite('resources/js/app.js')
    @stack('scripts')
</head>
<body>

    <section class="page full">

        <div class="page-content">
            @yield('page-content')
        </div>

    </section>

</body>
</html>
