<tbody>
    @foreach ($technicals as $technical)
        <tr>
            <td>{{ $technical->folder ? $technical->folder->name : '' }}</td>
            <td>{{ $technical->type->name }}</td>
            <td>{{ $technical->mark->name }}</td>
            <td>{{ $technical->model }}</td>
            <td>{{ $technical->serial_number }}</td>
            <td>{{ $technical->inventory_number }}</td>
            <td class="center">{{ $technical->exp_date->format('d.m.Y') }}</td>
            <td>
                @php
                    $exp_date = $technical->exp_date;
                    $now = now();
                    $diff = $now->diff($exp_date);

                    $exp_string = "$diff->year Л. $diff->month М. $diff->day Д.";
                @endphp
                {{ $exp_string }}
            </td>
            <td class="center">
                <a href="{{ route('technical.deleted.edit', compact('technical')) }}" class="button blue-button">Восстановить</a>
            </td>
        </tr>
    @endforeach
</tbody>
