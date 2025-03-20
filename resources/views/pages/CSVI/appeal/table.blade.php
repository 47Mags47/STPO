<tbody>
    @foreach ($appeals as $appeal)
        <tr id="appeal_{{ $appeal->id }}"
        @class([
            'green' => $appeal->status_code == 'accepted' or $appeal->status_code == 'restored',
            'purple' => $appeal->status_code == 'closed',
        ])
        >
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
            <td id="status">
                {{ $appeal->status->name }} <br>
                @switch($appeal->status_code)
                    @case('accepted')
                        {{ $appeal->accepted->full_name }}
                    @break

                    @case('closed')
                        {{-- {{ $appeal->closed->full_name }} --}}
                    @break

                    @case('restored')
                        {{ $appeal->restored->full_name }}
                    @break

                    @default
                @endswitch
            </td>
            <td class="center" id="go-to">
                @if ($appeal->hasWorker(user()) or $appeal->sender_id == user()->id)
                    <a href="{{ route('appeal.chat.index', compact('appeal')) }}" class="button blue-button">Перейти</a>
                @endif
            </td>
            {{-- HACK Создать новый компонент: кнопки ajax с различными методами --}}
            <td class="center" id="options">
                {{-- Принять --}}
                @can('accept-appeal', $appeal)
                    <a href="{{ route('appeal.accept', compact('appeal')) }}" class="button blue-button">Приянть</a>
                @endcan

                {{-- Закрыть --}}
                @can('close-appeal', $appeal)
                    <a href="{{ route('appeal.close', compact('appeal')) }}" class="button red-button">Закрыть</a>
                @endcan

                {{-- Возобновить --}}
                @can('restore-appeal', $appeal)
                    <a href="{{ route('appeal.restore', compact('appeal')) }}" class="button blue-button">Возобновить</a>
                @endcan
            </td>
        </tr>
    @endforeach
</tbody>