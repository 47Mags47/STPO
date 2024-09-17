<ul class="nav-list">
    <li><a href="" id="modul-link">Модули</a></li>
    <li><a href="">Форум</a></li>
    <li><a href="{{ route('dashboard') }}">Личный кабинет</a></li>
    <li><a href="{{ route('appeal') }}">Обращения</a></li>
</ul>
<ul class="modul-list">
    @php
        $modul_departments = App\Models\Glossary\Glossary_Main_ModulDepartment::get();
    @endphp

    @foreach ($modul_departments as $modul_department)
        <details>
            <summary>{{ $modul_department->name }}</summary>
            <ul>
                @foreach ($modul_department->moduls as $modul)
                    @if (auth()->user()->can('modul-access', $modul))
                        <li><a href="{{ route($modul->link) }}" class="left-to-right">{!! $modul->name !!}</a></li>
                    @else
                        <li data-disable="true">
                            <span>{!! $modul->name !!}</span>
                        </li>
                    @endif
                @endforeach
            </ul>
        </details>
    @endforeach
</ul>
