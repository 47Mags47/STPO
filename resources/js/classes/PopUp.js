export default class PopUp {
    parent = $('.popup-box');
    html = '';
    box = $();

    constructor(type, data = {}, custom_html = null) {
        let type_html = {
            'load': '<i class="fa fa-spinner fa-pulse fa-4x" aria-hidden="true"></i>',
            'image': data
        }
        this.html = `<div class="popup"><div class="${type}">${type_html[type]}</div></div>`

        this.box = $(this.html)
        this.parent.append(this.box)

        let object = this
        object.box.on('click', function (event) {          
            if (event.target == $(this)[0]) {
                object.close()
            }
        })
    }

    open(data = {}) {
        this.box.addClass('open')
    }
    close() {
        this.box.removeClass('open')
    }
}

// export async function load() {
//     $('#pop-up').on('mouseup', function (event) {
//         if(
//             !$('#pop-up .load').is(Event.target) &&
//             $('#pop-up .load').has(Event.target).length === 0 &&
//             $('#pop-up').hasClass('open')
//         ){
//             $('#pop-up').removeClass('open')
//         }
//     })
// }

// export async function openLoad() {
//     $('.pop-up-box').addClass('open')
//     $('.pop-up-box .load').addClass('open')
// }
// export async function closeLoad() {
//     $('.pop-up-box').removeClass('open')
//     $('.pop-up-box .load').removeClass('open')
// }

// export async function openPopUp(html) {
//     $('#pop-up').addClass('open')
//     $('#pop-up .load').html(html)
// }
// export async function closePopUp() {
//     $('#pop-up').removeClass('open')
//     $('#pop-up .load').html()
// }

