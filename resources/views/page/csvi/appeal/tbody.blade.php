<tr>
    <x-table.td type='input' placeholder="Кабинет" name="office" />
    <x-table.td type='input-d' placeholder="Кабинет" name="office" />

    @can('is_administration')
        <x-table.td type='input-d' />
    @endcan
    <x-table.td type='select' name="them_id">
        @foreach ($page_data['new_row_data']['thems'] as $them)
            <x-form.select-option
                title="{{ $them->nameType }}"
                value="{{ $them->id }}"
            />
        @endforeach
    </x-table.td>
    <x-table.td type='area' placeholder="Ничего не работает..." name="comment" />
    <x-table.td type='input-d' />
    <x-table.td type='input-d' />
    <x-table.td type='sbm' colspan="2"/>
</tr>
@foreach ($appeals as $appeal)
    <tr
        @class([
            'green' => $appeal->status_id == 3, 
            'yellow' => $appeal->status_id == 2,
        ])
    >
        <x-table.td value="{{ $appeal->id }}" center />
        <x-table.td value="{{ $appeal->created_at->format('d.m.Y H:i') }}" />
        @if (auth()->user()->can('is_administration'))
            <x-table.td >
                {{ $appeal->sender->nickname }} ({{ $appeal->sender->division->city->name }}) <br>
                {{ $appeal->sender->division->name }}
            </x-table.td>
        @endif
        <x-table.td value="{{ $appeal->them->category->name }} <br> {{ $appeal->them->name }}" />
        <x-table.td value="{{ $appeal->office ? '(каб. ' . $appeal->office . ') ' : '' }}{{ $appeal->comment }}" />
        <x-table.td value="{{ $appeal->status->name }}" />
        <x-table.td value="{{ $appeal->worker ? $appeal->worker->nickname : '' }}" />
        @can('appeal-chat-access', $appeal)
            <x-table.td
                type="link"
                link="{{ route('appeal.chat', ['appeal' => $appeal->id]) }}"
                title="Чат"
                blue-button
            />
            @if ($appeal->status_id == 1 or $appeal->status_id == 2 or $appeal->status_id == 4)
                <x-table.td
                    type="link"
                    link="{{ route('appeal.close', ['appeal' => $appeal->id]) }}"
                    title="Закрыть"
                    red-button
                />
            @else
                <x-table.td
                    type="link"
                    link="{{ route('appeal.restore', ['appeal' => $appeal->id]) }}"
                    title="возобновить"
                    blue-button
                />
            @endif
        @else
            @if (auth()->user()->can('is_administration') and ($appeal->status_id == 1 or $appeal->status_id == 4))
                <x-table.td
                    type="link"
                    link="{{ route('appeal.accept', ['appeal' => $appeal->id]) }}"
                    title="Принять"
                    blue-button
                />
            @else
                <x-table.td />
            @endif
            <td></td>
        @endcan
    </tr>
@endforeach
