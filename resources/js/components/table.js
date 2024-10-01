export async function load() {
    //## Фильтры таблиц
    //##################################################
    /* Открыть */
    $('.table-box .filters-box .preview input').on('change', function () {
        if ($(this).prop('checked')) {
            $(this).parent().parent().find('.filter').addClass('open')
        } else {
            $(this).parent().parent().find('.filter').removeClass('open')
        }
    })
    /* Закрыть */
    $(document).on('mouseup', function (Event) {
        if (
            !$('.table-box .filters-box .filter.open').is(Event.target) &&
            $('.table-box .filters-box .filter.open').has(Event.target).length === 0
        ) {
            $('.table-box .filters-box .filter.open').parent().find('.preview input').trigger('click')
        }
    })
    //## Выделить все в фильтрах
    //##################################################
    /* Выделить все */
    $('.table-box .filters-box .filter-box .list .select_all input').each(function () {
        $(this).on('change', function () {
            let box = $(this).parent().parent().parent()
            let val = $(this).prop('checked')
            box.find('input').each(function () {
                $(this).prop('checked', val)
            })
        })
    })
    /* изменение при выделении всех */
    $('.table-box .filters-box .filter-box .list li:not(.select_all) input').each(function () {
        $(this).on('change', function () {
            let list = $(this).parent().parent().parent().find('li:not(.select_all) input')
            let flag = true
            list.each(function () {
                if(!$(this).prop('checked')){
                    flag = false
                }
            })
            $('.table-box .filters-box .filter-box .list li.select_all input').prop('checked', flag)
        })
    })
}
