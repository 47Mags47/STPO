/* HACK добавить сброс */
/* HACK добавить анимацию у стрелочки при открытии/закрытии */

$('.multi-select-widjet').each(function () {
    const BOX = $(this)
    const PREVIEW = BOX.find('.preview')
    const LIST = BOX.find('.list-box')
    const SELECT_ALL = LIST.find('.select-all-box input')

    function close() {
        LIST.removeClass('open')
    }

    function CheckedCount() {
        return LIST.find('li input[type="checkbox"]').filter(function () {
            return $(this).prop('checked')
        }).length
    }

    // Открытие блока
    PREVIEW.on('click', function () {
        LIST.toggleClass('open')
    })

    //Закрытие блока
    $(document).on('click', function (e) { if (BOX.has(e.target).length === 0) close() })

    // Поиск
    /* HACK починить поиск с дочерками */
    LIST.find('.search input').on('input', function () {
        let val = $(this).val()
        LIST.find('li').css('display', 'none')

        LIST.find('li').each(function () {
            if ($(this).find('span').html().toLocaleLowerCase().replaceAll(' ', '').indexOf(val) !== -1)
                $(this).css('display', 'list-item')
        })
    })
    LIST.find('.list li input').on('reset', function (e) {
        $(this).prop('checked', false)
        $(this).trigger('change')
    })

    // Выбор элемента
    /* HACK переписать кусок ниже */
    $(this).on('change', LIST.find('li input'), function () {
        let count = CheckedCount()
        let text = count > 0
            ? `Выбрано: ${count}`
            : '--- Не выбрано ---'
        PREVIEW.find('span').html(text)
    })

    /* HACK дописать выборку всего при выборе элементов */
    SELECT_ALL.on('change', function(){
        LIST.find('li input').prop('checked', $(this).prop('checked'))
    })
})
