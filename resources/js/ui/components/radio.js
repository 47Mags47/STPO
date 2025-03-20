/* HACK добавить анимацию у стрелочки при открытии/закрытии */

$('.radio-widjet').each(function () {
    const BOX = $(this)
    const PREVIEW = BOX.find('.preview')
    const LIST = BOX.find('.list-box')

    function close() {
        LIST.removeClass('open')
    }

    // Открытие блока
    PREVIEW.on('click', function () {
        LIST.toggleClass('open')
    })

    //Закрытие блока
    $(document).on('click', function (e) { if (BOX.has(e.target).length === 0) close() })

    // Поиск
    LIST.find('.search input').on('input', function () {
        let val = $(this).val()

        LIST.find('li.group-box').css('display', 'none')
        LIST.find('li:not(.group-box)').css('display', 'none')

        LIST.find('li:not(.group-box)').each(function () {
            if ($(this).find('span').html().toLocaleLowerCase().replaceAll(' ', '').indexOf(val) !== -1){
                $(this).css('display', 'list-item')
                $(this).closest('li.group-box').css('display', 'block')
            }
        })
    })
    LIST.find('.list li input').on('reset', function (e) {
        $(this).prop('checked', false)
        $(this).trigger('change')
    })

    // Выбор элемента
    $(this).on('change', '.list-box li input', function () {
        PREVIEW.find('span').html($(this).parent().find('span').html())
    })
})
