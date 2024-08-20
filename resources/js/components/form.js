export async function load() {
    let float_reg = /[^0-9\.]|^\.+(?!$)|^0+(?=[0-9]+)|\.(?=\.|.+\.)/g

    $('input[type="number"]').on('input', function (event) {
        let val = $(this).val()
    })

    $('input.bool').each(function () { 
        $(this).on('input', function (event) { 
            if(!/[01]/.test($(this).val())){
                event.preventDefault()
                $(this).val(0)
            }
         })
    })
}
