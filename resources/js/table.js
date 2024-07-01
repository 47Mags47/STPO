export function load() {
    /* Фильтры */
    $('ul.filters li .check-open').on('change', function () {
        $('ul.filters li.open').each(function () {
            $(this).removeClass('open')
            $(this).find('.check-open').prop('checked', false)
        })

        if($(this).prop('checked')){
            $(this).parent().parent().addClass('open')
        }else{
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
}
