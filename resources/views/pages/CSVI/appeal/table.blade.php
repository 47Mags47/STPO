<tbody>
    @foreach ($appeals as $appeal)
        <tr>
            {{-- HACK Перевести ячейки в компонент --}}
            {{-- HACK Добавить ограничение длины строки --}}

            <td class="center">{{ $appeal->id }}</td>
            <td>{{ $appeal->created_at->format('d.m.Y H:i') }}</td>
            <td>
                {{ $appeal->sender->division->name }}<br>
                {{ $appeal->sender->full_name }}
            </td>
            <td>
                {{ $appeal->them->category->name }}<br>
                {{ $appeal->them->name }}
            </td>
            <td>
                {{ $appeal->comment }}
            </td>
            <td>
                {{ $appeal->status->name }} <br>
                @switch($appeal->status_code)
                    @case('accepted')
                        {{ $appeal->accepted->full_name }}
                    @break

                    @case('closed')
                        {{ $appeal->closed->full_name }}
                    @break

                    @case('restored')
                        {{ $appeal->restored->full_name }}
                    @break

                    @default
                @endswitch
            </td>
            <td class="center">
                @if ($appeal->hasWorker(user()) or $appeal->sender_id == user()->id)
                    <a href="" class="button blue-button">Перейти</a>
                @endif
            </td>
            <td class="center">
                {{-- Принять --}}
                @can('accept-appeal', $appeal)
                    <a href="" class="button blue-button">Приянть</a>
                @endcan

                {{-- Закрыть --}}
                @can('close-appeal', $appeal)
                    <a href="" class="button red-button">Закрыть</a>
                @endcan

                {{-- Возобновить --}}
                @can('restore-appeal', $appeal)
                    <a href="" class="button blue-button">Возобновить</a>
                @endcan
            </td>
        </tr>
    @endforeach
</tbody>
