export async function load() {
    $('.filters ul .preview input').on('change', function () {
        if($(this).prop('checked')){
            $(this).parent().parent().find('.box').addClass('open')
        }else{
            $(this).parent().parent().find('.box').removeClass('open')
        }
    })

    $(document).on('mouseup', function (Event) {
        if (
            !$('.filters ul .box.open').is(Event.target) &&
            $('.filters ul .box.open').has(Event.target).length === 0
        ) {
            $('.filters ul .box.open').parent().find('.preview input').trigger('click')
        }
    })
}
