import Widget from "../core/Widget";

/* HACK вынести в отдельный абстрактный класс */
export default class Form extends Widget {
    selector = '.widget.form-container form'
    childs = []
    data = {}
    action = $(this.element).attr('action')
    csrf = $(this.element).find('input[name="_token"]').val()
    method = $(this.element).find('input[name="_method"]').val() ?? $(this.element).attr('method')

    constructor(element) {
        super(element)

        $(window).on('widget-load', this.getChilds.bind(this))
        $(this.element).on('submit', this.submit.bind(this))
    }

    getChilds() {
        $.each(window.Widgets.objects, (i, widget) => {
            if($(this.element).has(widget.element) && this.element !== widget.element)
                this.childs.push(widget)
        })
    }

    serialize(){
        $.map(this.childs, (child) =>{
            $.each(child.serialize(), (name, value) =>{
                this.data[name] = value
            })
        })
    }

    /**
     @abstract
    */
    submit(e){}
}
