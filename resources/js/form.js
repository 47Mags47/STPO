export function load() {
    $('label select.depend').each(function () {
        let select = $(this)
        let parent = $(`#${$(this).attr('depend')}`)
        let otions = $(this).find('option:not([value="0"])')

        /* Скрываем зависимые поля */
        otions.each(function () {
            $(this).addClass('no-display')
        })

        /* Изменение родителя */
        parent.on('change', function () {
            /* Скрываем нулевой */
            $(this).find('option[value="0"]').addClass('no-display')

            /* Скидываем дочерний */
            select.find('option[value="0"]').prop('selected', true)
            select.trigger('change')

            /* Открываем дочерние */
            otions.each(function () {
                $(this).addClass('no-display')
                if ($(this).attr('depend-val') == parent.val()) {
                    $(this).removeClass('no-display')
                }
            })
        })
    })
}

