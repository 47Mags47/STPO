$('.drop-zone').each(function () {
    const BOX = $(this)
    const ZONE = BOX.find('.drag-and-drop-zone')
    const INPUT = BOX.find('.drag-and-drop-input')

    $(this)
        .on('dragenter', function () {
            ZONE.addClass('open')
        })
        .on('dragleave', function (e) {
            if (!$(this)[0].contains(e.relatedTarget))
                ZONE.removeClass('open')
        })
        .on('dragover', function (e) {
            e.preventDefault()
        })
        .on('drop', function(e){
            e.preventDefault()

            INPUT[0].files = e.originalEvent.dataTransfer.files
            INPUT.trigger('change')
            ZONE.removeClass('open')
        })
})
