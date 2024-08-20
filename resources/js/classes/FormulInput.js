export default class FormulImport {
    input;
    formul;
    bool_formul;

    constructor(object) {
        this.input = object
        this.formul = object.attr('formul')
        this.bool_formul = object.attr('bool-val')
        let thisObject = this

        if (~this.formul.indexOf('{this}')) {
            this.input.on('change', function () {
                thisObject.update()
            })
        }

        this.getDepended(this.formul).forEach(elem => {
            elem.on('change', function () {
                thisObject.update()
            })
        })
        if (this.bool_formul != '') {
            this.getDepended(this.bool_formul).forEach(elem => {
                elem.on('change', function () {
                    thisObject.update()
                })
            })
        }

        this.update()
    }

    getDepended(formul) {
        let preg = /{[A-Z]*[0-9]*}/g
        let ids = formul.match(preg)
        let depended = []
        ids.forEach(id => {
            let elem = $('#' + id.replace(/[\{\}]/g, ''))
            depended.push(elem)
        });
        return depended
    }

    calc(formul) {
        // if (formul.indexOf(this.input.attr('id'))>= 0) {
        //     console.log(1);
        // }
        this.getDepended(formul).forEach(elem => {
            let id = elem.attr('id')
            let val = (elem.val() == '') ? 0 : parseInt(elem.val())

            formul = formul.replace(`{${id}}`, val)
        })
        formul = formul.replace('{this}', (this.input.val() == '') ? 0 : parseInt(this.input.val()))
        return eval(formul)
    }

    setTitle(message) {
        this.input.attr('title', message)
    }

    update() {
        if (
            ~this.formul.indexOf('<')
            || ~this.formul.indexOf('<=')
            || ~this.formul.indexOf('==')
            || ~this.formul.indexOf('>=')
            || ~this.formul.indexOf('>')
        ) {
            let bool = this.calc(this.formul)
            this.input.attr('bool', bool)

            if (this.bool_formul) {
                this.input.val(this.calc(this.bool_formul))
            }
            if (bool) {
                this.setTitle('')
            } else {
                this.setTitle(`Поле не соответствует формуле: ${this.formul}`)
            }
        } else {
            this.input.val(this.calc(this.formul))
        }

        if (!~this.formul.indexOf('{this}')) {
            this.input.trigger('change')
        }
    }
}