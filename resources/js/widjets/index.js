

import Form from './components/Form'
import Select from './components/Select'

window.Widgets = {
    classes: [
        Form,
        Select,
    ],
    objects: []
}

$(window).on('load', function () {
    $.each(window.Widgets.classes, function (i, className) {
        let obj = new className
        $(obj.selector).each(function (j, element) {
            window.Widgets.objects.push(new className(element))
        })
    })
    $(window).trigger('widget-load')
})

console.log(window.Widgets);

