<!DOCTYPE html>
<html lang="{{ env('APP_LOCALE') }}" them='light'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - @yield('page-name')</title>

    @vite('resources/sass/imports/font.sass', 'build')
    @vite('resources/sass/imports/lib.sass', 'build')
    @vite('resources/sass/app.sass', 'build')
    
    @vite('resources/js/app.js')
</head>

<body>
    @yield('body')
</body>

</html>
