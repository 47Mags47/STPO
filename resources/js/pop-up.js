export function load() {
    $('#pop-up').on('mouseup', function (event) {
        if(
            !$('#pop-up .load').is(Event.target) &&
            $('#pop-up .load').has(Event.target).length === 0 &&
            $('#pop-up').hasClass('open')
        ){
            $('#pop-up').removeClass('open')
        }
    })
}

export function openLoad() {
    $('#load-pop-up').addClass('open')
}
export function closeLoad() {
    $('#load-pop-up').removeClass('open')
}

export function openPopUp(html) {
    $('#pop-up').addClass('open')
    $('#pop-up .load').html(html)
}
export function closePopUp() {
    $('#pop-up').removeClass('open')
    $('#pop-up .load').html()
}
