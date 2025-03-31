window.getWidget = function (element) {
    return window.Widgets.objects.filter(function (item) {
        return element === item.element
    })[0]
}
