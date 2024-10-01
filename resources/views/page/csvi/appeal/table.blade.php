@foreach ($appeals as $appeal)
    @php
        $background = null;
        if ($appeal->status_id == 2) {
            $background = 'purple';
        }
        if ($appeal->status_id == 3) {
            $background = 'green';
        }
    @endphp
    <x-table.row :$background>
        <x-table.cell val="{{ $appeal->id }}" center />
        <x-table.cell v-center>
            {{ $appeal->created_at->format('d.m.Y') }} <br>
            {{ $appeal->created_at->format('H:i') }}
        </x-table.cell>
        @can('is_administration')
            <x-table.cell v-center>
                {{ $appeal->sender->nickname }}
                {{ isset($appeal->sender->phone) ? ' Тел: ' . $appeal->sender->phone : '' }}<br>
                ({{ $appeal->sender->division->city->name }})
                {{ $appeal->sender->division->name }}
            </x-table.cell>
        @endcan
        <x-table.cell v-center>
            {{ $appeal->them->category->name }}<br>
            {{ $appeal->them->name }}
        </x-table.cell>
        <x-table.cell val="{{ $appeal->comment }}" />
        <x-table.cell val="{{ $appeal->status->name }}" center />
        <x-table.cell val="{{ isset($appeal->worker) ? $appeal->worker->nickname : '' }}" v-center />
        @can('appeal-access', $appeal)
            <x-table.cell center>
                <x-custom.link link="{{ route('appeal.chat', compact('appeal')) }}" title="Чат" blue-button />
            </x-table.cell>
        @else
            <x-table.cell />
        @endcan
        @can('is_administration')
            @can('appeal-access', $appeal)
                @if ($appeal->status_id == 1 or $appeal->status_id == 4)
                    <x-table.cell center>
                        <x-custom.link link="{{ route('appeal.accept', compact('appeal')) }}" title="Принять" blue-button />
                    </x-table.cell>
                @endif
                @if ($appeal->status_id == 2)
                    <x-table.cell center>
                        <x-custom.link link="{{ route('appeal.close', compact('appeal')) }}" title="Закрыть" red-button />
                    </x-table.cell>
                @endif
                @if ($appeal->status_id == 3)
                    <x-table.cell center>
                        <x-custom.link link="{{ route('appeal.restore', compact('appeal')) }}" title="Возобновить" blue-button />
                    </x-table.cell>
                @endif
            @else
                @if ($appeal->status_id == 1 or $appeal->status_id == 4)
                    <x-table.cell center>
                        <x-custom.link link="{{ route('appeal.accept', compact('appeal')) }}" title="Принять" blue-button />
                    </x-table.cell>
                @else
                    <x-table.cell />
                @endif
            @endcan
        @else
            @if ($appeal->status_id == 3)
                <x-table.cell center>
                    <x-custom.link link="{{ route('appeal.restore', compact('appeal')) }}" title="Возобновить" blue-button />
                </x-table.cell>
            @else
                <x-table.cell center>
                    <x-custom.link link="{{ route('appeal.close', compact('appeal')) }}" title="Закрыть" red-button />
                </x-table.cell>
            @endif
        @endcan
    </x-table.row>
@endforeach
