import PopUp from "../classes/PopUp"

export async function load() {
    if ($('.chat-box').length == 0) {
        return
    }

    //## Переменные
    //##################################################
    const textarea = $('.chat-box .options textarea')
    const fileinput = $('.chat-box .options input[type="file"]')
    const dropZone = $('.drag-and-drop-box .zone')

    //## загрузка
    //##################################################
    textarea.focus() //Фокус на ввод

    //## Действия при вводе
    //##################################################
    textarea.on('keydown', function (event) { // Отсеживание нажатия Enter и shift+Enter
        if (event.keyCode == 13 && !event.shiftKey && $(this).val().trim() != '') {
            $('.chat-box .options form').trigger('submit')
        }
    })
    textarea.on('input', function () { // Удалять пустой перенос
        if ($(this).val().trim() == '') {
            $(this).val('')
        }
    })
    fileinput.on('change', function () {  // Отправка файла
        $('.chat-box .options form').trigger('submit')
    })
    textarea.on('paste', function (event) {
        if (event.originalEvent.clipboardData.types[0] == 'Files') {
            event.preventDefault()
            fileinput[0].files = event.originalEvent.clipboardData.files
            fileinput.trigger('change')
        }
    })

    //## Drag and Drop
    //##################################################
    $('.chat-box .chat').on('dragenter', function () { // Открыть Drag and Drop
        $('.drag-and-drop-box').addClass('open')
    })

    dropZone
        .on('dragover', function (event) {
            event.preventDefault();
            event.stopPropagation();
        })
        .on('dragleave', function (event) { // Закрыть Drag and Drop
            event.preventDefault();
            event.stopPropagation();
            $('.drag-and-drop-box').removeClass('open')
        })
        .on('drop', function (event) { // Отправить файл из Drag and Drop
            event.preventDefault();
            event.stopPropagation();

            fileinput[0].files = event.originalEvent.dataTransfer.files
            $('.drag-and-drop-box').removeClass('open')
            $('.chat-box .options form').trigger('submit')
        })

    //## Клик по изображению
    //##################################################
    $('.chat-box .chat .text img').each(function () {
        let popup = new PopUp('image', $(this).prop('outerHTML'))
        $(this).on('click', function () {
            popup.open()
        })
    })

    // $(window).scroll(function () {
    //     console.log(1);

    //     var scroll = $(window).scrollTop();
    //     $("#js-hero img").css({
    //         width: (100 + scroll / 5) + "%"
    //     })
    // })
}
