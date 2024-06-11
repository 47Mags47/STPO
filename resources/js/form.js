export function load() {
    $.each($('label.depended select'), function (i, select) {
        let depend_parent = $(`#${$(select).attr('depend')}`)
        depend_parent.on('change', function () {
            let depend_val = $(this).val()
            $(select).find('option').each(function () {
                $(this).addClass('no-display')
                if ($(this).data('depend') == depend_val) {
                    $(this).removeClass('no-display')
                }
            })
        })
    });
}

