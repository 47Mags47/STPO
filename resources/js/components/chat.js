export async function load() {
    const textarea = $('.chat-box .options textarea[name="data[message]"]')
    const fileinput = $('.chat-box .options input[type="file"]')
    const dropZone = $('.drag-and-drop-box .zone')

    textarea.focus() //Фокус на ввод

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
}
