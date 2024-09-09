{{-- parametrs: form(true|false) | paginate(true|false) | action | method --}}
{{-- flags: top-0 --}}
<div class="table-box mini-scroll">
    @if (isset($filters) or (isset($paginate)and $paginate))
        <div class="table-options">
            @isset($filters)
                <form action="{{ isset($searchLink) ? $searchLink : '' }}" method="GET" class="search">
                    @csrf
                    <input type="search" name="search">
                    <input type="submit" value="Найти" class="button blue-button">
                </form>
                <form action="{{ isset($filterLink) ? $filterLink : '' }}" method="GET" class="filters">
                    @csrf
                    <ul>{{ $filters }}</ul>
                    <x-form.sbm title="Применить"/>
                    @if (isset($reset) and $reset != '')
                        <a href="{{ $reset }}" class="button red-button">X</a>
                    @endif
                </form>
            @endisset
            @if (isset($paginate) and $paginate)
                <div class="paginate-box">
                    {{ $paginateLink }}
                </div>
            @endif
        </div>
    @endif
    @if(isset($form) and $form == 'true')
        <form
            action="{{ isset($action) ? $action : '' }}"
            method="{{ isset($method) ? $method : 'POST' }}"
            id="{{ isset($formId) ? $formId : '' }}"
            enctype="multipart/form-data"
        >
        @csrf
    @endif
        <table
            @isset($top0)
                top-0
            @endisset
            @isset($w100)
                w100
            @endisset
        >
            {{ $slot }}
        </table>
    @if(isset($form) and $form == 'true')
        </form>
    @endif
</div>
