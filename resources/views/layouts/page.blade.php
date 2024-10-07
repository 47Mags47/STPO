@php
    $them = App\Models\Main\Main_User_Them::firstOrCreate(
        [
            'user_id' => auth()->user()->id,
        ],
        [
            'them_id' => 1,
        ],
    )->them->name;
@endphp

<!DOCTYPE html>
<html lang="{{ env('APP_LOCALE') }}" them="{{ $them }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - @yield('page-name')</title>

    @vite('resources/sass/imports/font.sass', 'build')
    @vite('resources/sass/imports/lib.sass', 'build')
    @vite('resources/sass/app.sass', 'build')

    @vite('resources/js/app.js', 'build')

    @yield('include-vite')
</head>

<body class=@yield('vip')>
    @include('include.header')
    <x-popup.box />
    <div class="page-content mini-scroll">
        @yield('body')
    </div>
</body>

</html>
