/* HACK разбить функции на модули и оповещения */

const HEADER = $('header')
const MODUL_BUTTON = HEADER.find('.module-menu-box .preview')
const MODUL_LIST_BOX = HEADER.find('.module-menu-box .list')

const ALERT_BUTTON = HEADER.find('.alert-button')
const ALERT_LIST = HEADER.find('.alert-list')

MODUL_BUTTON.on('click', function () {
    MODUL_LIST_BOX.toggleClass('open')
})

ALERT_BUTTON.on('click', function () {
    ALERT_LIST.toggleClass('open')

    if (ALERT_LIST.hasClass('open')) {
        let url = `http://${new URL(location.href).host}/read-alert`
        $.ajax({
            url: url,
            method: 'GET',
            success: function () {
                ALERT_BUTTON.find('.counter-box').remove()
            },
        })
    } else {
        ALERT_LIST.find('li.new').removeClass('new')
    }
})

$('.page').on('click', function () {
    MODUL_LIST_BOX.removeClass('open')

    ALERT_LIST.removeClass('open')
    ALERT_LIST.find('li.new').removeClass('new')
})

$(document).on('click', function (e) {
    if (HEADER.has(e.target).length === 0)
        MODUL_LIST_BOX.removeClass('open')

    if (HEADER.has(e.target).length === 0) {
        ALERT_LIST.removeClass('open')
        ALERT_LIST.find('li.new').removeClass('new')
    }
})

$.ajax({
    method: 'GET',
    url: `http://${new URL(location.href).host}/get-id`,
    success: function (data) {
        window.user_id = data.user_id

        Echo.private(`user.${window.user_id}.alerts`)
            .listen('.new.alert', (e) => {
                ALERT_LIST.prepend(e.view)

                let count = ALERT_BUTTON.data('count') + 1

                ALERT_BUTTON.data('count', count)

                if (ALERT_BUTTON.find('.counter-box').length == 0)
                    ALERT_BUTTON.prepend(`<div class="counter-box"><span>1</span></div>`)
                else
                    ALERT_BUTTON.find('.counter-box span').html(count > 9 ? '9+' : count)
            })
    }
})

