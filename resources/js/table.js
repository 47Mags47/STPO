export function load() {
    /* Фильтры */
    $('ul.filters li .check-open').on('change', function () {
        $('ul.filters li.open').each(function () {
            $(this).removeClass('open')
            $(this).find('.check-open').prop('checked', false)
        })

        if ($(this).prop('checked')) {
            $(this).parent().parent().addClass('open')
        } else {
            $(this).parent().parent().removeClass('open')
        }
    })
    $(document).on('mouseup', function (Event) {
        if (
            !$('ul.filters li').is(Event.target) &&
            $('ul.filters li').has(Event.target).length === 0 &&
            $('ul.filters li.open').hasClass('open')
        ) {
            $('ul.filters li.open').removeClass('open')
        }
    })

    /* зависимость select */
    // Запретить выбор при наличии зависимости
    $('.content .table-box select.depended').each(function () {
        let select = $(this)
        select.prop('disabled', true)
        $(`#${select.attr('depend')}`).on('change', function () {
            if($(this).val() != 0){
                select.prop('disabled', false)
            }else{
                select.val(0)
                select.prop('disabled', true)
                select.trigger('change')
            }
        })
    })

    // Оставить только варианты зависимости
    $('.content .table-box select.depended').each(function (i, select) {
        let parent = $(`#${$(this).attr('depend')}`)
        parent.on('change', function () {
            let depend_val = $(this).val()
            $(select).find('option').each(function () {
                $(this).addClass('no-display')
                if ($(this).attr('depend-val') == depend_val) {
                    $(this).removeClass('no-display')
                }
            })
         })
    })
}
