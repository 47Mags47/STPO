import FormulImport from './classes/FormulInput.js';

export async function load() {
    /* Фильтры */
    $('ul.filters li .check-open').on('change', function () { // Открыть
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
    $(document).on('mouseup', function (Event) { // Закрыть
        if (
            !$('ul.filters li').is(Event.target) &&
            $('ul.filters li').has(Event.target).length === 0 &&
            $('ul.filters li.open').hasClass('open')
        ) {
            $('ul.filters li.open').removeClass('open')
        }
    })

    $('.filters li .box .set_all input').on('change', function () { // Выбрать всё
        let parent = $(this).parent().parent()
        let checked = $(this).prop('checked')
        parent.find('label:not(.set_all) input').each(function () {
            $(this).prop('checked', checked)
        })
    })

    /* Формулы */
    $('.excel-box input.formul').each(function () {
        let formul = new FormulImport($(this))
    })
}
