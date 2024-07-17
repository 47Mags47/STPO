export function load() {

    $('#user-form input:not([type="submit"], [type="hidden"])').each(function () {
        $(this).on('change', function () {
            let flag = false
            $('#user-form input:not([type="submit"], [type="hidden"])').each(function () {
                if ($(this).val() != $(this).attr('placeholder')) {
                    flag = true
                }
            })
            if (flag) {
                $('#user-form .sbm-box input').removeClass('close')
            } else {
                $('#user-form .sbm-box input').addClass('close')
            }
        })
    })
}
