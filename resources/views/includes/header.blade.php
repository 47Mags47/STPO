<header>
    <div class="header-top-box">
        <div class="site-logo">
            <a href="">
                <strong>С</strong>ервис
                <strong>Т</strong>ехнической
                <strong>П</strong>оддержки
                и
                <strong>О</strong>тчетности
            </a>
        </div>
        <div class="user-info">
            @if (auth()->user())
                <div class="image-box">
                    <img src="{{ asset('storage/' . ($user->logo ?? 'core/image/user_logo.png')) }}" alt="logo">
                </div>
                <a href="{{ route('dashboard') }}" class="user-name">{{ auth()->user()->full_name }}</a>

                @php
                    $count = user()->alerts()->where('visible', false)->count();
                @endphp
                <div class="alert-button" data-count="{{ $count }}">
                    @if ($count > 0)
                        <div class="counter-box">
                            <span>{{ $count > 9 ? '9+' : $count }}</span>
                        </div>
                    @endif
                    <i class="fa-solid fa-bell"></i>
                </div>
                <ul class="alert-list">
                    {{-- HACK добавить подгрузку при скролле --}}
                    @foreach (user()->alerts()->paginate(15) as $alert)
                        <x-alert :$alert />
                    @endforeach
                </ul>
            @else
                <a href="{{ route('login') }}">Войти</a>
            @endif
        </div>
    </div>
    <div class="header-bottom-box">
        <nav class="other-link-box">
            <ul>
                <li><a href="{{ route('appeal.index') }}">Обращения</a></li>
                <li><a href="">Форум</a></li>
            </ul>
        </nav>
        <nav class="module-menu-box">
            <div class="preview">
                <i class="fa-solid fa-bars"></i>
            </div>
            {{-- HACK Переработать анимацию раскрытия пунктов меню --}}
            <div class="list">
                @php
                    $departments = App\Models\Main\Department::get();
                    $user_permissions = auth()->user()->rolePermissions();
                @endphp
                @foreach ($departments as $department)
                    @if ($department->moduls()->whereIn('require_permission_code', auth()->user()->rolePermissions()->pluck('code'))->count() > 0)
                        <details>
                            <summary>{{ $department->name }}</summary>
                            <ul>
                                @foreach ($department->moduls as $modul)
                                    <li>
                                        @if (Route::has($modul->route))
                                            <a href="{{ route($modul->route) }}">{{ $modul->name }}</a>
                                        @else
                                            <span>{{ $modul->name }}</span>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </details>
                    @endif
                @endforeach
            </div>
        </nav>
    </div>
</header>
