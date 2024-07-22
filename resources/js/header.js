export async function load() {
    /* Окно оповещений */
    //Открыть окно
    $('#alert-bell i').on('click', function () {
        $('#alert-bell .alert-list').addClass('open')

        $('#alert-bell .alert-list').animate({
            scrollTop: $('#alert-bell .alert-list').prop("scrollHeight")
        }, 0);
    })
    //Закрыть окно
    $(document).on('mouseup', function (Event) {
        if (
            !$('#alert-bell .alert-list').is(Event.target) &&
            $('#alert-bell').has(Event.target).length === 0 &&
            $('#alert-bell .alert-list').hasClass('open')
        ) {
            $('#alert-bell .alert-list').removeClass('open')
        }
    })

    $(window).on('scroll', function () {
        $('#alert-bell .alert-list').removeClass('open')
    })

    /* Меню модулей */
    //Открыть окно
    $('#modul-link').on('click', function (Event) {
        Event.preventDefault()
        if (!$('.modul-list').hasClass('open')) {
            $('.modul-list').addClass('open')
        }
    })
    //Закрыть окно
    $(document).on('mouseup', function (Event) {
        if (
            !$('.modul-list').is(Event.target) &&
            $('.modul-list').has(Event.target).length === 0 &&
            $('.modul-list').hasClass('open')
        ) {
            $('.modul-list').removeClass('open')
        }
    })
    // Заблокировать модули
    $('.modul-list li[data-disable=true] a').each(function () {
        $(this).on('click', function (Event) {
            Event.preventDefault()
            alert('У вас нет доступа к данному модулю\nОбратитесь к своему администратору или программисту')
        })
    })

    //burger
    $('#burger-check').on('change', function () {
        let box = $($('.burger-box').attr('box'))
        if($(this).prop('checked')){
            box.addClass('open')
        }else{
            box.removeClass('open')
        }
    })
}

