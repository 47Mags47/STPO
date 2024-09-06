@if (auth()->check())
    <div class="user">
        <a href="{{ route('dashboard') }}" class="user-name">
            <img src="{{ asset( auth()->user()->logo ? auth()->user()->logo : 'media/default_logo.png' ) }}" alt="">
            <span>{{ auth()->user()->nickname }}</span>
        </a>
        <x-header.alert-list />
    </div>
@else
    <div class="sign">
        <a href="{{ route('login') }}">Вход</a>
        <a href="{{ route('register') }}">Регистрация</a>
    </div>
@endif
