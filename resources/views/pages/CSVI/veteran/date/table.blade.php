<tbody>
    @foreach ($dates as $id => $date)
        <tr>
            <td>{{ $id + 1 }}</td>
            <td>{{ $date->date->format('d.m.Y') }}</td>
            <td>{{ $date->is_actual ? 'Да' : 'Нет' }}</td>
            <td class="center">
                @if (!$date->is_actual)
                    <a href="{{ route('veteran.date.set-actual', compact('date')) }}"
                        class="button blue-button">Активировать</a>
                @endif
            </td>
            <td class="center">
                <a href="{{ route('veteran.date.delete', compact('date')) }}" class="button red-button delete-button">Удалить</a>
            </td>
        </tr>
    @endforeach
</tbody>
