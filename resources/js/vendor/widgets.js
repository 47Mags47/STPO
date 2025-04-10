import Form from "./../widjets/components/Form"
import Select from "./../widjets/components/Select"

window.Widgets = {
    objects: [],
    classes: {
        '.custom-widget.select': Select,
        '.custom-widget.form' : Form,
    }
}

$.each(window.Widgets.classes, function (selector) {
    $(selector).each(function () {
        window.Widgets.objects.push(new window.Widgets.classes[selector]($(this)))
    })
})
