@extends('layouts.page')
@section('page-name', 'Обращения')

@section('body')
    <x-table.box 
        :paginate=true
        :form=true
        w100 
        top0 
        reset="{{ route('appeal.reset') }}" 
    >
        <x-slot:paginate-link>
            {{ $appeals->links() }}
        </x-slot:paginate-link>
         <x-slot:filters>
            @if (auth()->user()->can('is_administration'))
                <x-table.filter
                    :items="$page_data['table_filters']['senders']"
                    pole="sender_id"
                    value='id'
                    name='nickname'
                    title='Отправитель'
                    :user-arr=$user_filters
                />
            @endif
            <x-table.filter
                :items="$page_data['table_filters']['workers']"
                pole="worker_id"
                value='id'
                name='nickname'
                title='Исполнитель'
                :user-arr=$user_filters
            />
            <x-table.filter
                :items="$page_data['table_filters']['statuses']"
                pole="status_id"
                value='id'
                name='name'
                title='Статус'
                :user-arr=$user_filters
            />
            <x-table.filter
                :items="$page_data['table_filters']['thems']"
                pole="them_id"
                value='id'
                name='nameType'
                title='Тема'
                :user-arr=$user_filters
            />
        </x-slot:filters>
        <colgroup>
            <x-table.col w="75" />
            <x-table.col w="100" />
            @if (auth()->user()->can('is_administration'))
                <x-table.col w="300" />
            @endif
            <x-table.col w="250" />
            <x-table.col />
            <x-table.col w="75" />
            <x-table.col w="150" />
            <x-table.col w="100" />
            <x-table.col w="100" />
        </colgroup>
        <thead>
            <x-table.th value="номер" sort-pole="id" sort-type="{{ $user_sort['pole'] == 'id' ? $user_sort['type'] : 'asc' }}" />
            <x-table.th value="Дата" sort-pole="created_at" sort-type="{{ $user_sort['pole'] == 'created_at' ? $user_sort['type'] : 'asc' }}" />
            @if (auth()->user()->can('is_administration'))
                <x-table.th value="Отправитель" sort-pole="sender" sort-type="{{ $user_sort['pole'] == 'sender' ? $user_sort['type'] : 'asc' }}" />
            @endif
            <x-table.th value="Тема" sort-pole="them" sort-type="{{ $user_sort['pole'] == 'them' ? $user_sort['type'] : 'asc' }}" />
            <x-table.th value="Комментарий" />
            <x-table.th value="Статус" sort-pole="status" sort-type="{{ $user_sort['pole'] == 'status' ? $user_sort['type'] : 'asc' }}" />
            <x-table.th value="Исполнитель" sort-pole="worker" sort-type="{{ $user_sort['pole'] == 'worker' ? $user_sort['type'] : 'asc' }}" />
            <x-table.th value="" colspan="2"/>
        </thead>
        <tbody>
            @include('page.csvi.appeal.tbody')
        </tbody>
    </x-table.box>
@endsection
