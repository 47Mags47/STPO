<ul class="nav-list">
    <li><a href="" id="modul-link">Модули</a></li>
    <li><a href="">Форум</a></li>
    <li><a href="{{ route('dashboard') }}">Личный кабинет</a></li>
    <li><a href="">Обращения</a></li>
</ul>
<ul class="modul-list">
    @php
        $modul_departments = App\Models\Glossary\Glossary_ModulDepartment::get();
    @endphp

    @foreach ($modul_departments as $modul_department)
        <details>
            <summary>{{ $modul_department->name }}</summary>
            <ul>
                @foreach ($modul_department->moduls as $modul)
                    @if (auth()->user()->can('is_admin'))
                        @if (Route::has($modul->link))
                            <li><a href="{{ route($modul->link) }}">{{ $modul->name }}</a></li>
                        @else
                            <li title="Не существует ссылки на модуль"><a>{{ $modul->name }}</a></li>
                        @endif
                    @else
                        @if (auth()->user()->can('user_has_modul', $modul))
                            <li><a href="{{ route($modul->link) }}">{{ $modul->name }}</a></li>
                        @else
                            <li data-disable="true"><a>{{ $modul->name }}</a></li>
                        @endif
                    @endif
                @endforeach
            </ul>
        </details>
    @endforeach
</ul>
