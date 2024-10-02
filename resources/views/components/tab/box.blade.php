{{-- 
    ## Компоненты
    meny - Список ссылок
    body - Содержимое 
--}}

<div class="tab-box">
    <ul class="meny">
        {{ $meny }}
        <li class="others"></li>
    </ul>
    <div class="body">
        <div class="slide-box">
            {{ $body }}
        </div>
    </div>
</div>
