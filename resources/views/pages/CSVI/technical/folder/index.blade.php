@extends('pages.CSVI.technical.layout')

@section('page-content')
    <div class="tree-box">
        <li>
            <a href="{{ route('technical.folder.create') }}" class="button blue-button">
                <i class="fa-solid fa-circle-plus"></i>
                создать
            </a>
        </li>
        <x-tree
            :items="$folders"
            child-parameter="childs"
            text="name"
            primary="id"

            create-route="technical.folder.create"
            create-route-parameter="parent"
        />
    </div>
@endsection
