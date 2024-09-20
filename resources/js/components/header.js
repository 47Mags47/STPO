export async function load() {
    console.log(window.location.origin);

    //## Окно оповещений
    //##################################################
    /* Открыть окно */
    $('header .alert-box .preview').on('click', function () {
        $('header .alert-box .alert-list').addClass('open')

        $('header .alert-box .alert-list').animate({
            scrollTop: $('header .alert-box .alert-list').prop("scrollHeight")
        }, 0);

        axios
            .post(window.location.origin + '/alert-read')
            .then(function () {
                $('header .alert-box .preview .counter').removeClass('active')
                $('header .alert-box .preview .counter').html('')
            })
    })
    /* Закрыть окно */
    $(document).on('mouseup', function (Event) {
        if (
            !$('header .alert-box .preview').is(Event.target) &&
            $('header .alert-box .alert-list').has(Event.target).length === 0 &&
            $('header .alert-box .alert-list').hasClass('open')
        ) {
            $('header .alert-box .alert-list').removeClass('open')
            $('header .alert-box .alert-list .new').each(function () {
                $(this).removeClass('new')
            })
        }
    })

    $(window).on('scroll', function () {
        $('header .alert-box .alert-list').removeClass('open')
    })

    //## Меню модулей
    //##################################################
    /* Открыть окно */
    $('#modul-link').on('click', function (Event) {
        Event.preventDefault()
        if (!$('.modul-list').hasClass('open')) {
            $('.modul-list').addClass('open')
        }
    })
    /* Закрыть окно */
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
    $('.modul-list li[data-disable=true] span').each(function () {
        $(this).on('click', function (Event) {
            Event.preventDefault()
            alert('У вас нет доступа к данному модулю\nОбратитесь к своему администратору или программисту')
        })
    })

    //## burger
    //##################################################
    $('#burger-check').on('change', function () {
        let box = $($('.burger-box').attr('box'))
        if ($(this).prop('checked')) {
            box.addClass('open')
        } else {
            box.removeClass('open')
        }
    })
}

