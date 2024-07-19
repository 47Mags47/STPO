export function load() {
    let float_reg = /[^0-9\.]|^\.+(?!$)|^0+(?=[0-9]+)|\.(?=\.|.+\.)/g

    $('input[type="number"]').on('input', function (event) {
        let val = $(this).val()
    })
}
