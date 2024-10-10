export default class PopUp {
    parent = $('.popup-box');
    html = '';
    box = $();

    constructor(type, data = {}, custom_html = null) {
        let type_html = {
            'load': '<i class="fa fa-spinner fa-pulse fa-4x" aria-hidden="true"></i>',
            'image': `
                <div class="image-box"><div class="image-border-box mini-scroll">${data}</div></div>
                <div class="close-box"> <i class="fa fa-times close-button" aria-hidden="true"></i> </div>
                <div class="zoom-options">
                    <i class="fa fa-plus plus" aria-hidden="true"></i>
                    <input type="range" min="0" max="100" step="1" value="0">
                    <i class="fa fa-minus minus" aria-hidden="true"></i>
                </div>
                
            `
        }
        this.html = `<div class="popup"><div class="${type}">${type_html[type]}</div></div>`
        this.box = $(this.html)

        this.parent.append(this.box)
        this.box.find('.close-button').on('click', this.close)

        if (type == 'image') {
            let plus_btn = this.box.find('.zoom-options .plus')
            let minus_btn = this.box.find('.zoom-options .minus')
            let input_range = this.box.find('.zoom-options input')
            let image = this.box.find('.image-box img')

            plus_btn.on('click', () => {
                let val = (parseInt(input_range.val()) >= parseInt(input_range.attr('max')))
                    ? input_range.attr('max')
                    : parseInt(input_range.val()) + 1

                input_range.val(val)
                input_range.trigger('input')
            })
            minus_btn.on('click', () => {
                let val = (parseInt(input_range.val()) <= parseInt(input_range.attr('min')))
                    ? input_range.attr('min')
                    : parseInt(input_range.val()) - 1
                input_range.val(val)
                input_range.trigger('input')
            })
            input_range.on('input', () => {
                let val = input_range.val()
                image.css('transform', `scale(${val * 0.05 + 1})`)
            })
        }
    }

    open() {
        this.box.addClass('open')
        this.box.parent().css('z-index', 99)
    }
    close() {
        let box = $('.popup.open')
        box.removeClass('open')
        box.parent().css('z-index', -1)
    }
}

