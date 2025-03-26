<tbody>
    @foreach ($raports as $id => $raport)
        <tr>
            <td>{{ $id + 1 }}</td>
            <td>{{ $raport->division->name }}</td>
            <td>{{ $raport->sender->full_name }}</td>
            <td class="center">{{ $raport->all ?? 0 }}</td>
            <td class="center">{{ $raport->el ?? 0 }}</td>
            <td class="center">{{ $raport->mfc ?? 0 }}</td>
            <td></td>
            <td></td>
        </tr>
    @endforeach
</tbody>
