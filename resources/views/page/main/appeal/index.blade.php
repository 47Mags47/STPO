@extends('layouts.page')
@section('page-name', 'Обращения')

@section('body')
    <x-table.box filterAction="" pd='5'>
        <x-slot:filters>
            <x-table.filter pole="sender_id" title="Отправитель" :items="$page_filters['senders']"  :userfilters="$user_filters" name="nickname" value="id" />
            <x-table.filter pole="worker_id" title="Исполнитель" :items="$page_filters['workers']"  :userfilters="$user_filters" name="nickname" value="id" />
            <x-table.filter pole="status_id" title="Статус"      :items="$page_filters['statuses']" :userfilters="$user_filters" name="name"     value="id" />
            <x-table.filter pole="them_id"   title="Тема"        :items="$page_filters['thems']"    :userfilters="$user_filters" name="name"     value="id" />
        </x-slot:filters>
        <x-slot:cols>
            <x-table.col w="75"/>
            <x-table.col w="100"/>
            @if (auth()->user()->can('is_administration'))
                <x-table.col w="200"/>
            @endif
            <x-table.col w="250"/>
            <x-table.col/>
            <x-table.col w="75"/>
            <x-table.col w="150"/>
            <x-table.col w="100"/>
        </x-slot:cols>
        <x-slot:header>
            <tr>
                <x-table.th value="номер"/>
                <x-table.th value="Дата"/>
                @if (auth()->user()->can('is_administration'))
                    <x-table.th value="Отправитель"/>
                @endif
                <x-table.th value="Тема"/>
                <x-table.th value="Комментарий"/>
                <x-table.th value="Статус"/>
                <x-table.th value="Исполнитель"/>
                <th></th>
            </tr>
        </x-slot:header>
        <x-slot:body>
            @foreach ($appeals as $appeal)
                <x-table.btr id="{{ $appeal->id }}" type="default">
                    <x-table.td value="{{ $appeal->id }}"/>
                    <x-table.td value="{{ $appeal->created_at->format('d.m.Y H:i') }}"/>
                    @if (auth()->user()->can('is_administration'))
                        <x-table.td value="{{$appeal->sender->nickname}}"/>
                    @endif
                    <x-table.td value="{{ $appeal->them->category->name }} <br> {{ $appeal->them->name }}"/>
                    <x-table.td value="{{ $appeal->comment }}"/>
                    <x-table.td value="{{ $appeal->status->name }}"/>
                    <x-table.td value="{{ $appeal->worker ? $appeal->worker->nickname : '' }}"/>
                    @can('appeal-job', $appeal)
                        <x-table.td type="link-button" value="{{ route('appeal.chat', ['appeal' => $appeal->id]) }}" title="Перейти"/>
                    @else
                        @if (auth()->user()->can('is_administration') and ($appeal->status_id == 1 or $appeal->status_id == 2) )
                            <x-table.td type="link-button" value="{{ route('appeal.chat', ['appeal' => $appeal->id]) }}" title="Принять"/>
                        @else
                        <x-table.td value="" title=""/>
                        @endif
                    @endcan
                </x-table.btr>
            @endforeach
        </x-slot:body>
    </x-table.box>
@endsection
