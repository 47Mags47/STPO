{{-- parametrs: form(true|false) | paginate(true|false) | action | method --}}
{{-- flags: top-0 --}}
<div class="table-box mini-scroll">
    @if (isset($paginate) and $paginate)
        <div class="paginate">
            {{ $paginateLink }}
        </div>
    @endif
    @if($form == 'true')
        <form
            action="{{ isset($action) ? $action : '' }}"
            method="{{ isset($method) ? $method : 'POST' }}"
            id={{ isset($formId) ? $formId : '' }}
        >
            @csrf
            <x-messages.all />
            <table
            @isset($top0)
                top-0
            @endisset
            >
                {{ $slot }}
            </table>
        </form>
    @else
        <table
        @isset($top0)
            top-0
        @endisset
        >
            {{ $slot }}
        </table>
    @endisset
</div>
