<tr>
    <x-table.td type='select' colspan="{{auth()->user()->can('is_administration') ? 3 : 2}}" name="category_id">
        @foreach ($page_data['new_row_data']['categories'] as $category)
            <x-form.select-option
                title="{{ $category->name }}"
                value="{{ $category->id }}"
            />
        @endforeach
    </x-table.td>
    <x-table.td type='select' depend="category_id" name="them_id">
        @foreach ($page_data['new_row_data']['thems'] as $them)
            <x-form.select-option title="{{ $them->name }}" value="{{ $them->id }}" depend-val="{{ $them->category_id }}"/>
        @endforeach
    </x-table.td>
    <x-table.td type='area' placeholder="Ничего не работает..." name="comment" />
    <x-table.td type='sbm' colspan=3 />
</tr>
@foreach ($appeals as $appeal)
    <tr>
        <x-table.td value="{{ $appeal->id }}" center />
        <x-table.td value="{{ $appeal->created_at->format('d.m.Y H:i') }}" />
        @if (auth()->user()->can('is_administration'))
            <x-table.td value="{{ $appeal->sender->nickname }}" />
        @endif
        <x-table.td value="{{ $appeal->them->category->name }} <br> {{ $appeal->them->name }}" />
        <x-table.td value="{{ $appeal->comment }}" />
        <x-table.td value="{{ $appeal->status->name }}" />
        <x-table.td value="{{ $appeal->worker ? $appeal->worker->nickname : '' }}" />
        @can('appeal-job', $appeal)
            <x-table.td type="link-button" value="{{ route('appeal.chat', ['appeal' => $appeal->id]) }}"
                title="Перейти" />
        @else
            @if (auth()->user()->can('is_administration') and ($appeal->status_id == 1 or $appeal->status_id == 2))
                <x-table.td type="link-button" value="{{ route('appeal.chat', ['appeal' => $appeal->id]) }}"
                    title="Принять" />
            @else
                <x-table.td value="" title="" />
            @endif
        @endcan
    </tr>
@endforeach
