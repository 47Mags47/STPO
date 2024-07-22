export async function load() {
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

export async function openLoad() {
    $('.pop-up-box').addClass('open')
    $('.pop-up-box .load').addClass('open')
}
export async function closeLoad() {
    $('.pop-up-box').removeClass('open')
    $('.pop-up-box .load').removeClass('open')
}

export async function openPopUp(html) {
    $('#pop-up').addClass('open')
    $('#pop-up .load').html(html)
}
export async function closePopUp() {
    $('#pop-up').removeClass('open')
    $('#pop-up .load').html()
}
