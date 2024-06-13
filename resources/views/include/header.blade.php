<header>
    <div class="top">
        <x-header.logo />
        <div class="right-box">
            @if (auth()->check())
                <a href="{{ route('dashboard') }}" class="user">
                    <x-user.logo />
                    <span>{{ auth()->user()->nickname }}</span>
                </a>
                <x-header.alert-list />
            @else
                <div class="sign">
                    <a href="{{ route('login') }}">Вход</a>
                    <a href="{{ route('register') }}">регистрация</a>
                </div>
            @endif
        </div>
    </div>
</header>
