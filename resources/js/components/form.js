export async function load() {
    //## Зависимые Select
    //##################################################
    $('select.depend').each(function () {
        let select = $(this)
        let parent = $(`#${$(this).attr('depend')}`)
        let otions = $(this).find('option:not([value="0"])')

        /* Бокируем выбор */
        select.prop('disabled', true)

        /* Изменение родителя */
        parent.on('change', function () {
            /* Скрываем нулевой */
            select.find('option[value="0"]').addClass('no-display')

            otions.each(function () {
                if ($(this).attr('depend-val') == parent.val()) {
                    $(this).removeClass('no-display')
                } else {
                    $(this).addClass('no-display')
                }
            })

            select.prop('disabled', false)
        })
    })

    //## file-list
    //##################################################
    $('form .file-list #file-list-add').on('change', function (event) {
        let box = $('form .file-list')
        let file_add_input = $(this)
        let example_box = $('form .file-list .example')
        let result_input = $('form .file-list #result-file-input')

        let dt = new DataTransfer()
        $.each(file_add_input[0].files, function (i, file) {
            if(file.type == 'image/jpeg' || file.type == 'image/png'){
                var file_preview = example_box.find('.img').clone()
                let link = URL.createObjectURL(file)
                file_preview.find('img').attr('src', link)
            }else{
                var file_preview = example_box.find('.file').clone()
            }

            box.prepend(file_preview)
            dt.items.add(file)
        });
        $.each(result_input[0].files, function (i, file) {
            dt.items.add(file)
        });

        file_add_input.files = new DataTransfer()
        result_input[0].files = dt.files
    })

    // let float_reg = /[^0-9\.]|^\.+(?!$)|^0+(?=[0-9]+)|\.(?=\.|.+\.)/g

    // $('input[type="number"]').on('input', function (event) {
    //     let val = $(this).val()
    // })

    // $('input.bool').each(function () { 
    //     $(this).on('input', function (event) { 
    //         if(!/[01]/.test($(this).val())){
    //             event.preventDefault()
    //             $(this).val(0)
    //         }
    //      })
    // })
}
