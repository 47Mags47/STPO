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
        this.box.parent().css('z-index', 99)
    }
    close() {
        this.box.removeClass('open')
        this.box.parent().css('z-index', -1)
    }
}

