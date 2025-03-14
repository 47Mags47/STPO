const MESSAGE_BOX = $('.message-list-box')
const FORM = $('.new-message-form')

const ADD_FILE_BUTTON = FORM.find('#add-file-button')

const ADD_FILE_INPUT = ADD_FILE_BUTTON.find('input')
const MESSAGE_INPUT = FORM.find('#message')

const MAX_MESSAGE_LENGHT = 3000
const MAX_FILE_SIZE = import.meta.env.VITE_MAX_UPLOAD_FILE_SIZE * 1024

function formIsEmpty() {
    return MESSAGE_INPUT.val().trim() === ''
        && ADD_FILE_INPUT[0].files.length == 0
}

MESSAGE_INPUT
    .on('keydown', function (e) {
        if (e.which == 13 && !e.shiftKey) {
            e.preventDefault()
            FORM.trigger('submit')
        }
    })
    .on('paste', function (e) {
        let paste_is_file = e.originalEvent.clipboardData.getData('text') == ''

        if (paste_is_file) {
            e.preventDefault()

            // Проверяем размер файлов
            let reached_size_limit = false;
            $.each(e.originalEvent.clipboardData.files, function (i, item) {
                if (item.size > MAX_FILE_SIZE) {
                    reached_size_limit = true
                    return
                }
            })
            if (reached_size_limit) {
                alert('Один или несколько файлов превышают допустимый размер')
                return
            }

            // Загружаем файлы
            $.each(e.originalEvent.clipboardData.files, function (i, item) {
                let DataTransfer = (e.clipboardData || e.originalEvent.clipboardData)
                ADD_FILE_INPUT[0].files = DataTransfer.files
            })
            ADD_FILE_INPUT.trigger('change')

        } else {
            if ($(this).val().length > MAX_MESSAGE_LENGHT) {
                alert('Содержимое имеет слишком большую длину')
                e.preventDefault()
                return
            }
        }
    })

FORM
    .on('click', '#submit-button', function () {
        FORM.trigger('submit')
    })
    .on('change', '#add-file-button input', function () {
        FORM.trigger('submit')
    })
    .on('submit', function (e) {
        e.preventDefault()

        if (formIsEmpty())
            return

        let url = $(this).attr('action')
        let method = $(this).attr('method')
        let data = new FormData($(this)[0])

        openLoadIco()
        $.ajax({
            url: url,
            method: method,
            data: data,
            processData: false,
            contentType: false,
            headers: {
                'X-Socket-Id': Echo.socketId()
            },
            success: function (response) {
                MESSAGE_BOX.html($(response).html())
                MESSAGE_INPUT.val(null)
                ADD_FILE_INPUT.val(null)
            },
            complete: function (response) {
                closeLoadIco()
            }
        })
    })

Echo.private(`appeal.${$('#appeal-id').html()}.chat.chanel`)
    .listen('.new.message', (e) => {
        MESSAGE_BOX.prepend(e.message)
    })
