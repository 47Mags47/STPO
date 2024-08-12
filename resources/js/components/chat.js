export async function load() {
    $('.chat-box .options textarea[name="data[message]"]').focus() //Фокус на ввод

    $('.chat-box .options textarea[name="data[message]"]').on('keydown', function (event) { // Отсеживание нажатия Enter и shift+Enter
        if (event.keyCode == 13 && !event.shiftKey && $(this).val().trim() != '') {
            $('.chat-box .options form').trigger('submit')
        }
    })

    $('.chat-box .options textarea[name="data[message]"]').on('input', function () { // Удалять пустой перенос
        if ($(this).val().trim() == '') {
            $(this).val('')
        }
    })

    $('.chat-box .options input[type="file"]').on('change', function () {  // Отправка файла
        $('.chat-box .options form').trigger('submit')
    })
}
