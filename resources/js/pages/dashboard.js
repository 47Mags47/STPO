export function load() {
    console.log($('#user'));
    $('#user .dashboard-inp input:not([type="submit"])').each(function () {
        $(this).on('change', function () {
            let flag = false
            $('#user .dashboard-inp input:not([type="submit"])').each(function () {
                console.log($(this).val(), $(this).attr('placeholder'));
                if ($(this).val() != $(this).attr('placeholder')) {
                    flag = true
                }
            })
            if (flag) {
                $(this).parent().parent().find('input[type="submit"]').parent().addClass('open')
            } else {
                $(this).parent().parent().find('input[type="submit"]').parent().removeClass('open')
            }
        })
    })
}
