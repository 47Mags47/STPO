<tbody>
    @foreach ($accesses as $id => $access)
        <tr>
            <td>{{ $id + 1 }}</td>
            <td>{{ $access->user->full_name }}</td>
            <td>{{ $access->permission->name}}</td>
            <td class="center">
                <a href="{{ route('veteran.access.delete', compact('access')) }}" class="button red-button delete-button"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
    @endforeach
</tbody>
